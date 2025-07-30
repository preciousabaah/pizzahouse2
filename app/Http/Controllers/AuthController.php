<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\Pizza;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;
use App\Mail\OrderStatusMail;
use App\Notifications\OrderPlacedNotification;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Validation\ValidationException;


class AuthController extends Controller
{



    public function passwordEmail(Request $request)
    {
        $request->validate(['email' => ['required', 'email']]);

        $status = Password::sendResetLink(
            $request->only('email')
        );

        if ($status === Password::RESET_LINK_SENT) {
            return back()->with('status', 'We have emailed your password reset link!');
        } else {
            return back()->withErrors(['email' => 'We could not send a password reset link to that email.']);
        }
    }


    /*public function passwordEmail(Request $request) {
    $request->validate(['email' => ['required', 'email']]);
 
    $status = Password::sendResetLink(
        $request->only('email')
    );
 
    return $status === Password::RESET_LINK_SENT
        ? back()->with(['status' => __($status)])
        : back()->withErrors(['email' => __($status)]);

}
*/


    public function passwordReset(string $token)
    {
        return view('auth.reset_password', ['token' => $token]);
    }


    public function passwordUpdate(Request $request)
    {
        $request->validate([
            'token' => 'required',
            'email' => ['required', 'email'],
            'password' => 'required|min:8|confirmed',
        ]);

        $status = Password::reset(
            $request->only('email', 'password', 'password_confirmation', 'token'),
            function (User $user, string $password) {
                $user->forceFill([
                    'password' => Hash::make($password)
                ])->setRememberToken(Str::random(60));

                $user->save();

                event(new PasswordReset($user));
            }
        );

        return $status === Password::PASSWORD_RESET
            ? redirect()->route('login')->with('status', __($status))
            : back()->withErrors(['email' => [__($status)]]);
    }









    public function showRegister()
    {
        return view("auth.register");
    }

    public function showLogin()
    {

        return view("auth.login");
    }


    public function forgot_password()
    {
        return view('auth.forgot_password');
    }



    public function register(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'checkbox' => 'accepted',
        ]);



        $validated['password'] = bcrypt($validated['password']);

        $user = User::create($validated);

        Auth::login($user);
        return redirect()->route('home');
    }


    public function Login(Request $request)
    {

        $validated = $request->validate([
            'email' => 'required|email',
            'password' => 'required|string',
        ]);

        if (Auth::attempt($validated)) {
            $request->session()->regenerate();

            return redirect()->route('home');
        }

        throw ValidationException::withMessages([
            'credentials' => 'sorry, incorrect credentials'
        ]);
    }


    public function Logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('show.login');
    }


    public function index()
    {


    $pendingCount = Pizza::where('status_id', 1)->count();
    $inPreparationCount = Pizza::where('status_id', 2)->count();
    $completedCount = Pizza::where('status_id', 3)->count();

    return view('home', compact(
        'pendingCount',
        'inPreparationCount',
        'completedCount'
    ));

    }



    public function create()
    {

        return view("create");
    }

    public function Extra_toppings()
    {

        return view("Extra_toppings");
    }


    public function pizzas()
    {

        $pizzas = Pizza::all();
        //$pizzas = Pizza::OrderBy('name',)->get();
        //$pizzas = Pizza::where('type', 'hawaiian')->get();
        //$pizzas = Pizza::latest()->get();

        return view('pizzas', [
            'pizzas' => $pizzas,
        ]);
    }



    public function show($id)
    {

        $pizza = Pizza::findOrfail($id);

        return view('show', ['pizza' => $pizza]);
    }


    public function store(Request $request)
    {


        $request->validate([
            'name' => 'required',
            'type' => 'required',
            'base' => 'required',
            'phone' => 'required',
            'email' => 'required|email',
            'toppings' => 'required|array',
        ]);


        $pizza = new Pizza();
        $pizza->name = request('name');
        $pizza->type = request('type');
        $pizza->base = request('base');
        $pizza->phone = request('phone');
        $pizza->email = request('email');
        $pizza->toppings = request('toppings');
        $pizza->order_id = 'PZ-' . strtoupper(Str::random(6));

        $pizza->save();


        $pizza->notify(new OrderPlacedNotification($pizza));

        // Check if user is logged in 
        if (Auth::check()) {
            // User is logged in, redirect to index
            return redirect('/pizzas')->with('mssg',  'Staff: Pizza order placed successfully!');
        }

        // User not logged in (guest), redirect to welcomepage
        return redirect('/')->with('mssg', 'Thanks for your order! Your Order ID is: ' . $pizza->order_id);
    }


    public function search(Request $request)
    {
        $orderId = $request->input('order_id');

        $pizza = Pizza::where('order_id', $orderId)->first();

        if (!$pizza) {
            return redirect('/')->with('error', 'Order not found.');
        }

        return view('welcome', ['pizza' => $pizza]);
    }



    public function destroy($id)
    {
        $pizza = Pizza::findOrfail($id);
        $pizza->delete();
        return redirect('/pizzas');
    }




    public function update(Request $request, $id)
    {
        $pizza = Pizza::findOrFail($id);

        $pizza->name = $request->input('name');
        $pizza->type = $request->input('type');
        $pizza->base = $request->input('base');
        $pizza->phone = $request->input('phone');
        $pizza->email = $request->input('email');
        $pizza->toppings = array_map('trim', explode(',', $request->input('toppings')));


        $pizza->save();

        return redirect('/pizzas/' . $pizza->id)->with('message', 'Order updated!');
    }


    /*public function update_status($id){
    $pizza = Pizza::findOrFail($id);
    $status = $pizza->status_id;
    $pizza->status_id = $status+1;

    $pizza->save();

    
    return redirect ('/pizzas/');
}
*/




    public function update_status($id)
    {
        $pizza = Pizza::findOrFail($id);

        if ($pizza->status_id < 3) {
            $oldStatus = $pizza->status_id;
            $pizza->status_id += 1;
            $pizza->save();

            $statusNames = [
                1 => 'Pending',
                2 => 'In Preparation',
                3 => 'Completed',
            ];

            // $pizza->notify(new PizzaStatusUpdatedNotification($pizza, $oldStatus));
            Mail::to($pizza->email)->send(new OrderStatusMail($pizza->name,  $statusNames[$pizza->status_id], $statusNames[$oldStatus]));
            return redirect('/pizzas/')->with('mesg', 'Pizza status updated to ' . $statusNames[$pizza->status_id]);
        }
    }




    public function order_search(Request $Request)
    {
        $pizza = Pizza::where('name', 'like', "%$Request->order_search%")->get();
        return view('pizzas', ['pizzas' => $pizza, 'order_search' => $Request->order_search]);
    }




   
    public function profile()
    {
 
        $users = User::all();
        return view("auth.profile", compact('users'));
    }



public function update_password(Request $request)
{
    /** @var User $user */
    $user = auth()->user();

    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|unique:users,email,' . $user->id,
        'password' => 'nullable|string|min:8|confirmed',
    ]);

    $user->name = $request->name;
    $user->email = $request->email;

    if ($request->password) {
        
        $user->password = $request->password;
    }

    $user->save();

    return back()->with('success', 'Profile updated successfully!');
}


}
