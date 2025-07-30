@extends('layout.master')

@section('content')


<!--<style>
/* create pizza form*/

.create-pizza{
   background:  rgba(255, 228, 196, 0.153);
    padding: 40px; 
}


label, select{
    display: block;
}


button{
    background: #ff6600;
    padding: 8px 20px;
    color: #fff;
    border: 0;
    margin-top: 20px;
}
 

input[type=checkbox]{
    margin: 10px;
}


</style>




</style>

<div class=" my-5 mt-5 create-pizza mt-0">
    <div class="row mt-5">
        <h1 class="mb-5 mt-5 text-center text_color">Let PizzaHouse Cook for You</h1>
        <form action="/pizzas" method="POST">
            @csrf
            <div class="row mb-3">
                <div class="col-md-6 mb-3">
                    <label for="name" class="form-label"><strong>Your name:</strong></label>
                    <input type="text" class="form-control" id="name" name="name">
                </div>
                <div class="col-md-6 md-3">
                    <label for="phone" class="form-label"><strong>Phone number:</strong></label>
                    <input type="text" class="form-control" id="phone" name="phone">
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-6 mb-3">
                    <label for="email" class="form-label"><strong>Email address:</strong></label>
                    <input type="text" class="form-control" id="email" name="email">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="type" class="form-label"><strong>Choose pizza type:</strong></label>
                    <select name="type" id="type" class="form-select">
                        <option value="Cheeseburger">Cheeseburger</option>
                        <option value="margarita">Margarita</option>
                        <option value="hawaiian">Hawaiian</option>
                        <option value="veg supreme">Veg supreme</option>
                        <option value="chicken and BBQ sauce">Chicken and BBQ sauce</option>
                    </select>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-6 mb-3">
                    <label for="base" class="form-label"><strong>Choose base type:</strong></label>
                    <select name="base" id="base" class="form-select">
                        <option value="Thick">Thick</option>
                        <option value="Cheesy Crust">Cheesy Crust</option>
                        <option value="Garlic Crust">Garlic Crust</option>
                        <option value="Thin & Crispy">Thin & Crispy</option>
                        <option value="Hand-tossed crust">Hand-tossed crust</option>
                    </select>
                </div>
                <div class="col-md-6 mb-3">
                    <label class="form-label"><strong>Extra toppings:</strong></label>
                    <div class="d-flex flex-wrap">
                        <div class="form-check me-3">
                            <input type="checkbox" class="form-check-input" name="toppings[]" value="chicken">
                            <label class="form-check-label">Chicken</label>
                        </div>
                        <div class="form-check me-3">
                            <input type="checkbox" class="form-check-input" name="toppings[]" value="peppers">
                            <label class="form-check-label">Peppers</label>
                        </div>
                        <div class="form-check me-3">
                            <input type="checkbox" class="form-check-input" name="toppings[]" value="garlic">
                            <label class="form-check-label">Garlic</label>
                        </div>
                        <div class="form-check me-3">
                            <input type="checkbox" class="form-check-input" name="toppings[]" value="olives">
                            <label class="form-check-label">Olives</label>
                        </div>
                        <div class="form-check me-3">
                            <input type="checkbox" class="form-check-input" name="toppings[]" value="onions">
                            <label class="form-check-label">Onions</label>
                        </div>
                    </div>
                </div>
            </div>
            <button type="submit" value="Order Pizza">Order Pizza</button>
        </form>
    </div>

    @if($errors->any())
    <div class="w-4/8 m-auto text-center">
        @foreach($errors->all() as $error)
        <li class="text-color list-non">
            {{ $error }}
        </li>
        @endforeach
    </div>
    @endif

</div>


-->















<style>
/* Container Styling */
.create-pizza {
    background: radial-gradient(circle at top left,rgb(230, 222, 207) 0%, #fff5e1 100%);
    border-radius: 20px;
    box-shadow: 0 15px 35px rgba(0, 0, 0, 0.1);
    padding: 50px;
    max-width: 950px;
    margin: 50px auto;
    position: relative;
    overflow: hidden;
    animation: fadeIn 1s ease forwards;
}

/* Floating Pizza Decorations */
.create-pizza::before,
.create-pizza::after {
    content: "🍕";
    font-size: 3rem;
    position: absolute;
    opacity: 0.1;
    animation: float 6s infinite ease-in-out;
}
.create-pizza::before {
    top: 10px;
    left: 20px;
}
.create-pizza::after {
    bottom: 10px;
    right: 20px;
    animation-delay: 3s;
}

/* Title Styling */
h1.text_color {
    font-family: "Poppins", sans-serif;
    font-size: 2.5rem;
    color: #d35400;
    font-weight: 700;
    text-shadow: 2px 2px #ffb347;
    animation: slideDown 1s ease-out forwards;
}

/* Form Inputs */
label {
    font-weight: 600;
    margin-bottom: 6px;
    color: #2c3e50;
    font-size: 1rem;
    transition: all 0.3s ease;
}

input[type="text"],
select {
    border-radius: 15px;
    border: 1px solid #ddd;
    padding: 12px 15px;
    font-size: 1rem;
    transition: all 0.3s ease-in-out;
    background-color: #fff;
    box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.05);
}

input[type="text"]:focus,
select:focus {
    border-color: #ff6600;
    box-shadow: 0 0 10px rgba(255, 102, 0, 0.3);
    transform: scale(1.02);
    outline: none;
}

.form-check-label {
    font-weight: 500;
    color: #555;
    transition: color 0.3s ease;
}

.form-check-input:checked + .form-check-label {
    color: #ff6600;
    font-weight: 600;
}

/* Submit Button */
button[type="submit"] {
    background: linear-gradient(90deg, #ff6600, #e67e22);
    padding: 14px 35px;
    font-size: 1.2rem;
    border: none;
    border-radius: 50px;
    color: #fff;
    font-weight: 700;
    cursor: pointer;
    box-shadow: 0 8px 20px rgba(255, 102, 0, 0.4);
    transition: all 0.3s ease-in-out;
    margin-top: 20px;
}

button[type="submit"]:hover {
    background: linear-gradient(90deg, #e67e22, #ff6600);
    transform: scale(1.05);
    box-shadow: 0 10px 25px rgba(255, 102, 0, 0.5);
}

button[type="submit"]:active {
    transform: scale(0.98);
}

/* Animations */
@keyframes fadeIn {
    from {
        opacity: 0;
        transform: translateY(20px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

@keyframes slideDown {
    from {
        opacity: 0;
        transform: translateY(-50px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

@keyframes float {
    0%, 100% {
        transform: translateY(0px) rotate(0deg);
    }
    50% {
        transform: translateY(-10px) rotate(10deg);
    }
}
</style>




<div class="my-5 create-pizza">
    <div class="row">
        <h1 class="mb-4 text-center text_color">🍕 Let PizzaHouse Cook for You</h1>
        <form action="/pizzas" method="POST">
            @csrf
            <div class="row mb-4">
                <div class="col-md-6 mb-3">
                    <label for="name" class="form-label">Your Name:</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="e.g. John Doe">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="phone" class="form-label">Phone Number:</label>
                    <input type="text" class="form-control" id="phone" name="phone" placeholder="e.g. 08012345678">
                </div>
            </div>

            <div class="row mb-4">
                <div class="col-md-6 mb-3">
                    <label for="email" class="form-label">Email Address:</label>
                    <input type="text" class="form-control" id="email" name="email" placeholder="e.g. john@example.com">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="type" class="form-label">Choose Pizza Type:</label>
                    <select name="type" id="type" class="form-select">
                        <option value="Cheeseburger">Cheeseburger</option>
                        <option value="Margarita">Margarita</option>
                        <option value="Hawaiian">Hawaiian</option>
                        <option value="Veg Supreme">Veg Supreme</option>
                        <option value="Chicken and BBQ Sauce">Chicken and BBQ Sauce</option>
                    </select>
                </div>
            </div>

            <div class="row mb-4">
                <div class="col-md-6 mb-3">
                    <label for="base" class="form-label">Choose Base Type:</label>
                    <select name="base" id="base" class="form-select">
                        <option value="Thick">Thick</option>
                        <option value="Cheesy Crust">Cheesy Crust</option>
                        <option value="Garlic Crust">Garlic Crust</option>
                        <option value="Thin & Crispy">Thin & Crispy</option>
                        <option value="Hand-tossed Crust">Hand-tossed Crust</option>
                    </select>
                </div>
                <div class="col-md-6 mb-3">
                    <label class="form-label">Extra Toppings:</label>
                    <div class="d-flex flex-wrap">
                        <div class="form-check me-3 mb-2">
                            <input type="checkbox" class="form-check-input" name="toppings[]" value="Chicken">
                            <label class="form-check-label">Chicken</label>
                        </div>
                        <div class="form-check me-3 mb-2">
                            <input type="checkbox" class="form-check-input" name="toppings[]" value="Peppers">
                            <label class="form-check-label">Peppers</label>
                        </div>
                        <div class="form-check me-3 mb-2">
                            <input type="checkbox" class="form-check-input" name="toppings[]" value="Garlic">
                            <label class="form-check-label">Garlic</label>
                        </div>
                        <div class="form-check me-3 mb-2">
                            <input type="checkbox" class="form-check-input" name="toppings[]" value="Olives">
                            <label class="form-check-label">Olives</label>
                        </div>
                        <div class="form-check me-3 mb-2">
                            <input type="checkbox" class="form-check-input" name="toppings[]" value="Onions">
                            <label class="form-check-label">Onions</label>
                        </div>
                    </div>
                </div>
            </div>

            <div class="text-center">
                <button type="submit">🍕 Order Pizza</button>
            </div>
        </form>

        @if($errors->any())
        <div class="mt-3">
            <ul class="list-unstyled text-danger">
                @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
    </div>
</div>

@endsection