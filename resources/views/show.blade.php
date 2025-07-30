

<style>
    /*pizza details page*/


.pizza-details{
 background-color: rgba(255, 228, 196, 0.153);
   
    padding: 20px;
}

p{
    margin: 20px 0;
    font-weight: bold;
}

button{
    background: #ff6600;
    padding: 8px 20px;
    color: #fff;
    border: 0;
    margin-top: 20px;
}


 .back{
    display: block;
    text-align: center;
    margin-top: 30px;
    color: #5e2195;
    margin-bottom: 20px;
}

</style>

@extends('layout.dashboard.dashboard-layout')

@section('content')



<div class="wrapper pizza-details">
    <h1>Order for {{$pizza->name }}</h1>
    <p class="type"> Type - {{ $pizza->type }}</p>
    <p class="base">Base - {{ $pizza->base }}</p>
     <p class="phone">Phone - {{ $pizza->phone }}</p>
      <p class="email">Email - {{ $pizza->email }}</p>
    <p class="toppings">Extra toppings:</p>
    <ul>
      @foreach($pizza->toppings as $topping)
     <li>{{$topping }}</li>   
     @endforeach
    </ul>
    <p><strong>Status:</strong>
               @if($pizza->status_id == 1)
               Pending
               @elseif($pizza->status_id == 2)
               In Preparation
               @else
               Completed
               @endif
             </p>
    <form action="/pizzas/{{ $pizza->id }}" method="POST">
        @csrf
        @method('DELETE')
        <button>Delete Order</button>
    </form>
</div>
<a href="/pizzas" class="back"><- Back to all pizzas</a>
@endsection