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





     nav a {
    margin: 0 15px;
    text-decoration: none;
    color: #ff6600;
    font-weight: 500;
  }

  .main-content {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 60px 40px;
  }

  .text-content {
    max-width: 45%;
  }

  .text-content h1 {
    font-size: 60px;
    color: #ff6600;
  }



  .text_color {
    color: #ff6600;
  }

  .text-content p {
    font-size: 18px;
    margin-bottom: 5px;
  }

  .search-box {
    display: flex;
    margin-bottom: 20px;
  }

  .search-box input {
    padding: 10px;
    font-size: 16px;
    border: 1px solid #ccc;
    border-top-left-radius: 5px;
    border-bottom-left-radius: 5px;
    outline: none;
  }

  .search-box button {
    padding: 10px 15px;
    background-color: #ff6600;
    color: white;
    border: none;
    border-top-right-radius: 5px;
    border-bottom-right-radius: 5px;
    cursor: pointer;
  }

  .order-btn {
    padding: 12px 20px;
    background-color: #ff6600;
    color: white;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 16px;
    text-decoration: none;
  }


  .image-section img {
    max-width: 800px;
    width: 100%;
    height: 400px;
    border-radius: 15px;
  }

  
  @media (max-width: 768px) {
    .main-content {
      flex-direction: column;
      align-items: flex-start;
    }

    .image-section {
      margin-top: 30px;
    }

    .text-content {
      max-width: 100%;
    }
  }


    .text-color{
      color: red;
    }


    /* .features {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
    gap: 50px;

    text-align: center;
  }

  .feature-card {
    background: white;
    border-radius: 15px;
    padding: 30px 20px;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
  }

  .feature-card img {
    max-width: 100%;
    border-radius: 10px;
    margin-bottom: 20px;
  }

  .feature-card h3 {
    color: #ff6600;
    margin-bottom: 10px;
  }

 .btn{
  margin-left: 5px;
 }
*/


 

/*.pizza-card {
  border: 1px solid #e5e5e5;
  border-radius: 15px;
  padding: 20px;
  box-shadow: 0 4px 12px rgba(0, 0, 0, 0.06);
  background-color: #fff;
  text-align: center;
  transition: transform 0.2s ease;
}

.pizza-card:hover {
  transform: translateY(-5px);
}

.pizza-card img {
  width: 100%;
  max-width: 180px;
  height: auto;
  margin: 0 auto 15px;
  display: block;
}

.pizza-card h5 {
  font-weight: 600;
  margin-bottom: 10px;
}

.pizza-card p {
  font-size: 0.95rem;
  color: #666;
}

.pizza-price {
  font-weight: bold;
  margin-top: 10px;
  font-size: 1rem;
}

.select-btn {
  background-color: #ffe9d6;
  border: none;
  padding: 8px 20px;
  border-radius: 25px;
  color: #000;
  font-weight: 500;
  margin-top: 10px;
}*/
  

</style>

 <section>
 <div class="main-content">
    <div class="text-content">
        <h1 class="mt-5 mt-sm-0">PizzaHouse</h1>
        <p>People Disappoint, But Pizza Never Does.</p>

         @if(session('mssg'))
         <div class="alert alert-success mt-3">{{ session('mssg') }}</div>
         @endif

         @if(session('error'))
         <div class="alert alert-danger mt-3">{{ session('error') }}</div>
         @endif

        <!-- Order Search Form -->
        <form action="{{ route('search.order') }}" method="GET" class="my-5">
            <div class="search-box">
                <input type="text" name="order_id" placeholder="Enter your Order ID" required>
                <button type="submit">🔎 Search</button>
            </div>
        </form>




        @isset($pizza)
         @if($pizza)
         <p><strong>Order ID: </strong> {{ $pizza->order_id }}</p>
         <div class="card mb-3">
           <div class="card-body">
             <h5 class="card-title">Order ID: {{ $pizza->order_id }}</h5>
             <p><strong>Name:</strong> {{ $pizza->name }}</p>
             <p><strong>Type:</strong> {{ $pizza->type }}</p>
             <p><strong>Base:</strong> {{ $pizza->base }}</p>
             <p><strong>Phone:</strong> {{ $pizza->phone }}</p>
             <p><strong>Email:</strong> {{ $pizza->email }}</p>
             <p><strong>Toppings:</strong> {{ is_array($pizza->toppings) ? implode(', ', $pizza->toppings) : $pizza->toppings }}</p>
             <p><strong>Status:</strong>
               @if($pizza->status_id == 1)
               Pending
               @elseif($pizza->status_id == 2)
               In Preparation
               @else
               Completed
               @endif
             </p>
           </div>
         </div>
         @endif
         @endisset



        <a href="/create" class="order-btn mt-5">Order a pizza</a>
    </div>

    <div class="image-section">
        <img src="/img/pizzahouse.png" alt="Pizza house" />
    </div>
</div>
</section>



 <section>
  <div class="my-5 mt-0">
  <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4">
 <!-- Cheeseburger Pizza -->
   <div class="col">
      <div class="pizza-card">
        <img src="/img/pizza_1.png" alt="Cheeseburger Pizza">
        <h5>Cheeseburger Pizza</h5>
        <p>Beef, tomatoes, onions, cheddar, mozzarella, mayonnaise & ketchup, tomato sauce</p>
        <p class="pizza-price">from ₦3,000</p>
        <a href="/create" class="select-btn">Order now</a>
      </div>
    </div>

 <!-- Meaty BBQ -->
   <div class="col">
      <div class="pizza-card">
        <img src="/img/Meaty_BBQ.png" alt="Meaty BBQ">
        <h5>Meaty BBQ</h5>
        <p>Beef, pepperoni, sausages, mozzarella, BBQ sauce, tomato sauce</p>
        <p class="pizza-price">from ₦2,500</p>
        <a href="/create" class="select-btn">Order now</a>
      </div>
    </div>

 <!-- Pepperoni -->
  <div class="col">
      <div class="pizza-card">
        <img src="/img/pizza_2.png" alt="Pepperoni">
        <h5>Pepperoni</h5>
        <p>Pepperoni, mozzarella, tomato sauce</p>
        <p class="pizza-price">from ₦3,200</p>
        <a href="/create" class="select-btn">Order now</a>
      </div>
    </div>

 <!-- Meaty Overload -->
 <div class="col">
      <div class="pizza-card">
        <img src="/img/pizza_img1.avif" alt="Meaty Overload">
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
        <img src="/img/pizza_4.png" alt="Cheeseburger Pizza">
        <h5>Cheeseburger Pizza</h5>
        <p>Beef, tomatoes, onions, cheddar, mozzarella, mayonnaise & ketchup, tomato sauce</p>
        <p class="pizza-price">from ₦6,000</p>
        <a href="/create" class="select-btn">Order now</a>
      </div>
    </div>

 <!-- Meaty BBQ -->
   <div class="col">
      <div class="pizza-card">
        <img src="/img/pizza_5.png" alt="Meaty BBQ">
        <h5>Meaty BBQ</h5>
        <p>Beef, pepperoni, sausages, mozzarella, BBQ sauce, tomato sauce</p>
        <p class="pizza-price">from ₦3,500</p>
        <a href="/create" class="select-btn">Order now</a>
      </div>
    </div>

 <!-- Pepperoni -->
  <div class="col">
      <div class="pizza-card">
        <img src="/img/pizza_6.png" alt="Pepperoni">
        <h5>Pepperoni</h5>
        <p>Pepperoni, mozzarella, tomato sauce</p>
        <p class="pizza-price">from ₦7,200</p>
        <a href="/create" class="select-btn">Order now</a>
      </div>
    </div>

 <!-- Meaty Overload -->
 <div class="col">
      <div class="pizza-card">
        <img src="/img/pizza_7.png" alt="Meaty Overload">
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
        <img src="/img/pizza_8.png" alt="Cheeseburger Pizza">
        <h5>Cheeseburger Pizza</h5>
        <p>Beef, tomatoes, onions, cheddar, mozzarella, mayonnaise & ketchup, tomato sauce</p>
        <p class="pizza-price">from ₦45,00</p>
        <a href="/create" class="select-btn">Order now</a>
      </div>
    </div>

 <!-- Meaty BBQ -->
   <div class="col">
      <div class="pizza-card">
        <img src="/img/pizza_9.png" alt="Meaty BBQ">
        <h5>Meaty BBQ</h5>
        <p>Beef, pepperoni, sausages, mozzarella, BBQ sauce, tomato sauce</p>
        <p class="pizza-price">from ₦85,00</p>
        <a href="/create" class="select-btn">Order now</a>
      </div>
    </div>

 <!-- Pepperoni -->
  <div class="col">
      <div class="pizza-card">
        <img src="/img/pizza_10.png" alt="Pepperoni">
        <h5>Pepperoni</h5>
        <p>Pepperoni, mozzarella, tomato sauce</p>
        <p class="pizza-price">from ₦3,200</p>
        <a href="/create" class="select-btn">Order now</a>
      </div>
    </div>

 <!-- Meaty Overload -->
 <div class="col">
      <div class="pizza-card">
        <img src="/img/pizza_11.png" alt="Meaty Overload">
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
        <img src="/img/pizza_img4.avif" alt="Cheeseburger Pizza">
        <h5>Cheeseburger Pizza</h5>
        <p>Beef, tomatoes, onions, cheddar, mozzarella, mayonnaise & ketchup, tomato sauce</p>
        <p class="pizza-price">from ₦2,000</p>
        <a href="/create" class="select-btn">Order now</a>
      </div>
    </div>

 <!-- Meaty BBQ -->
   <div class="col">
      <div class="pizza-card">
        <img src="/img/pizza_13.png" alt="Meaty BBQ">
        <h5>Meaty BBQ</h5>
        <p>Beef, pepperoni, sausages, mozzarella, BBQ sauce, tomato sauce</p>
        <p class="pizza-price">from ₦3,500</p>
        <a href="/create" class="select-btn">Order now</a>
      </div>
    </div>

 <!-- Pepperoni -->
  <div class="col">
      <div class="pizza-card">
        <img src="/img/pizza_img5.avif" alt="Pepperoni">
        <h5>Pepperoni</h5>
        <p>Pepperoni, mozzarella, tomato sauce</p>
        <p class="pizza-price">from ₦4,200</p>
        <a href="/create" class="select-btn">Order now</a>
      </div>
    </div>

 <!-- Meaty Overload -->
 <div class="col">
      <div class="pizza-card">
        <img src="/img/pizza_15.png" alt="Meaty Overload">
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