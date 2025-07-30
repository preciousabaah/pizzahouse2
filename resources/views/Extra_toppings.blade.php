@extends('layout.master')

@section('content')

<style>
    
  
 .pizza-card img {
        width: 100%;
        max-width: 200px;
        height: auto;
    }

    .pizza-card {
        text-align: center;
        padding: 20px;
    }

    .pizza-card h5 {
        font-weight: 600;
        margin-top: 10px;
    }

    .pizza-price {
        font-weight: bold;
        margin-top: 10px;
    }

    .select-btn {
        background-color: #ffe9d6;
        border: none;
        padding: 8px 20px;
        border-radius: 25px;
        color: #000;
        font-weight: 500;
    }





</style>

<section>
  <div class="my-5 mt-5">
  <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4 mt-5">
 <!-- Cheeseburger Pizza -->
   <div class="col mt-5">
      <div class="pizza-card mt-5">
        <img src="/img/chicken_8.png" alt="Cheeseburger Pizza">
        <h5>Cheeseburger Pizza</h5>
        <p>Beef, tomatoes, onions, cheddar, mozzarella, mayonnaise & ketchup, tomato sauce</p>
        <p class="pizza-price">from ₦3,000</p>
        <a href="/create" class="select-btn">Order now</a>
      </div>
    </div>

 <!-- Meaty BBQ -->
   <div class="col mt-5">
      <div class="pizza-card mt-5">
        <img src="/img/chicken_12.png" alt="Meaty BBQ">
        <h5>Meaty BBQ</h5>
        <p>Beef, pepperoni, sausages, mozzarella, BBQ sauce, tomato sauce</p>
        <p class="pizza-price">from ₦2,500</p>
        <a href="/create" class="select-btn">Order now</a>
      </div>
    </div>

 <!-- Pepperoni -->
  <div class="col mt-5">
      <div class="pizza-card mt-5">
        <img src="/img/chicken_28.png" alt="Pepperoni">
        <h5>Pepperoni</h5>
        <p>Pepperoni, mozzarella, tomato sauce</p>
        <p class="pizza-price">from ₦3,200</p>
        <a href="/create" class="select-btn">Order now</a>
      </div>
    </div>

 <!-- Meaty Overload -->
 <div class="col mt-5">
      <div class="pizza-card mt-5">
        <img class="mt-5" src="/img/chicken_img.png" alt="Meaty Overload">
        <h5>Meaty Overload</h5>
        <p>Pepperoni, spicy meatballs, chicken, sausages, mozzarella, tomato sauce</p>
        <p class="pizza-price">from ₦5,000</p>
        <a href="/create" class="select-btn">Order now</a>
      </div>
    </div>

  </div>
</div> 
</section>




<section>
<div class="my-5 mt-5">
  <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4">

 <!-- Cheeseburger Pizza -->
   <div class="col">
      <div class="pizza-card">
        <img src="/img/pepper_1.png" alt="Cheeseburger Pizza">
        <h5>Cheeseburger Pizza</h5>
        <p>Beef, tomatoes, onions, cheddar, mozzarella, mayonnaise & ketchup, tomato sauce</p>
        <p class="pizza-price">from ₦6,000</p>
        <a href="/create" class="select-btn">Order now</a>
      </div>
    </div>

 <!-- Meaty BBQ -->
   <div class="col mt-5">
      <div class="pizza-card mt-3">
        <img src="/img/pepper_2.png" alt="Meaty BBQ">
        <h5>Meaty BBQ</h5>
        <p>Beef, pepperoni, sausages, mozzarella, BBQ sauce, tomato sauce</p>
        <p class="pizza-price">from ₦3,500</p>
        <a href="/create" class="select-btn">Order now</a>
      </div>
    </div>

 <!-- Pepperoni -->
  <div class="col">
      <div class="pizza-card">
        <img src="/img/pepper_3.png" alt="Pepperoni">
        <h5>Pepperoni</h5>
        <p>Pepperoni, mozzarella, tomato sauce</p>
        <p class="pizza-price">from ₦7,200</p>
        <a href="/create" class="select-btn">Order now</a>
      </div>
    </div>

 <!-- Meaty Overload -->
 <div class="col">
      <div class="pizza-card">
        <img src="/img/pepper_4.png" alt="Meaty Overload">
        <h5>Meaty Overload</h5>
        <p>Pepperoni, spicy meatballs, chicken, sausages, mozzarella, tomato sauce</p>
        <p class="pizza-price">from ₦25,00</p>
        <a href="/create" class="select-btn">Order now</a>
      </div>
    </div>

  </div>
</div> 
</section>




<section>
<div class="my-5 mt-5">
  <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4">

 <!-- Cheeseburger Pizza -->
   <div class="col">
      <div class="pizza-card">
        <img src="/img/garlic_1.png" alt="Cheeseburger Pizza">
        <h5>Cheeseburger Pizza</h5>
        <p>Beef, tomatoes, onions, cheddar, mozzarella, mayonnaise & ketchup, tomato sauce</p>
        <p class="pizza-price">from ₦45,00</p>
        <a href="/create" class="select-btn">Order now</a>
      </div>
    </div>

 <!-- Meaty BBQ -->
   <div class="col">
      <div class="pizza-card">
        <img src="/img/garlic_2.png" alt="Meaty BBQ">
        <h5>Meaty BBQ</h5>
        <p>Beef, pepperoni, sausages, mozzarella, BBQ sauce, tomato sauce</p>
        <p class="pizza-price">from ₦85,00</p>
        <a href="/create" class="select-btn">Order now</a>
      </div>
    </div>

 <!-- Pepperoni -->
  <div class="col">
      <div class="pizza-card">
        <img src="/img/garlic_3.png" alt="Pepperoni">
        <h5>Pepperoni</h5>
        <p>Pepperoni, mozzarella, tomato sauce</p>
        <p class="pizza-price">from ₦3,200</p>
        <a href="/create" class="select-btn">Order now</a>
      </div>
    </div>

 <!-- Meaty Overload -->
 <div class="col">
      <div class="pizza-card">
        <img src="/img/garlic_4.png" alt="Meaty Overload">
        <h5>Meaty Overload</h5>
        <p>Pepperoni, spicy meatballs, chicken, sausages, mozzarella, tomato sauce</p>
        <p class="pizza-price">from ₦4,000</p>
        <a href="/create" class="select-btn">Order now</a>
      </div>
    </div>

  </div>
</div> 
</section>



<section>
<div class="my-5 mt-5">
  <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4">

 <!-- Cheeseburger Pizza -->
   <div class="col">
      <div class="pizza-card">
        <img src="/img/Olives_1.png" alt="Cheeseburger Pizza">
        <h5>Cheeseburger Pizza</h5>
        <p>Beef, tomatoes, onions, cheddar, mozzarella, mayonnaise & ketchup, tomato sauce</p>
        <p class="pizza-price">from ₦2,000</p>
        <a href="/create" class="select-btn">Order now</a>
      </div>
    </div>

 <!-- Meaty BBQ -->
   <div class="col">
      <div class="pizza-card">
        <img src="/img/Olives_2.png" alt="Meaty BBQ">
        <h5>Meaty BBQ</h5>
        <p>Beef, pepperoni, sausages, mozzarella, BBQ sauce, tomato sauce</p>
        <p class="pizza-price">from ₦3,500</p>
        <a href="/create" class="select-btn">Order now</a>
      </div>
    </div>

 <!-- Pepperoni -->
  <div class="col">
      <div class="pizza-card">
        <img src="/img/Olives_3.png" alt="Pepperoni">
        <h5>Pepperoni</h5>
        <p>Pepperoni, mozzarella, tomato sauce</p>
        <p class="pizza-price">from ₦4,200</p>
        <a href="/create" class="select-btn">Order now</a>
      </div>
    </div>

 <!-- Meaty Overload -->
 <div class="col">
      <div class="pizza-card">
        <img src="/img/Olives_4.png" alt="Meaty Overload">
        <h5>Meaty Overload</h5>
        <p>Pepperoni, spicy meatballs, chicken, sausages, mozzarella, tomato sauce</p>
        <p class="pizza-price">from ₦5,000</p>
        <a href="/create" class="select-btn">Order now</a>
      </div>
    </div>

  </div>
</div> 
</section>





<section>
<div class="my-5 mt-5">
  <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4">

 <!-- Cheeseburger Pizza -->
   <div class="col">
      <div class="pizza-card">
        <img src="/img/Onions_1.png" alt="Cheeseburger Pizza">
        <h5>Cheeseburger Pizza</h5>
        <p>Beef, tomatoes, onions, cheddar, mozzarella, mayonnaise & ketchup, tomato sauce</p>
        <p class="pizza-price">from ₦2,000</p>
        <a href="/create" class="select-btn">Order now</a>
      </div>
    </div>

 <!-- Meaty BBQ -->
   <div class="col">
      <div class="pizza-card">
        <img src="/img/Onions_2.png" alt="Meaty BBQ">
        <h5>Meaty BBQ</h5>
        <p>Beef, pepperoni, sausages, mozzarella, BBQ sauce, tomato sauce</p>
        <p class="pizza-price">from ₦3,500</p>
        <a href="/create" class="select-btn">Order now</a>
      </div>
    </div>

 <!-- Pepperoni -->
  <div class="col">
      <div class="pizza-card">
        <img src="/img/Onions_3.png" alt="Pepperoni">
        <h5>Pepperoni</h5>
        <p>Pepperoni, mozzarella, tomato sauce</p>
        <p class="pizza-price">from ₦4,200</p>
        <a href="/create" class="select-btn">Order now</a>
      </div>
    </div>

 <!-- Meaty Overload -->
 <div class="col">
      <div class="pizza-card">
        <img src="/img/Onions_4.png" alt="Meaty Overload">
        <h5>Meaty Overload</h5>
        <p>Pepperoni, spicy meatballs, chicken, sausages, mozzarella, tomato sauce</p>
        <p class="pizza-price">from ₦5,000</p>
        <a href="/create" class="select-btn">Order now</a>
      </div>
    </div>

  </div>
</div> 
</section>







@endsection