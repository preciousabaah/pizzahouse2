<style>
  .search-box button {
    padding: 10px 15px;
    background-color: #ff6600;
    color: white;
    border: none;
    border-top-right-radius: 5px;
    border-bottom-right-radius: 5px;
    cursor: pointer;
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



  .full-height {
    height: 100vh;
  }

  .flex-conter {
    -webkit-box-align: center;
    align-items: center;
    display: -webkit-box;
    display: flex;
    -webkit-box-pack: center;
    justify-content: center;
  }

  .position-ref {
    position: relative;
  }


  .top-right {
    position: absolute;
    right: 10px;
    top: 18px;
  }


  .content {
    text-align: center;

  }

  .link {
    color: #636b6f;
    padding: 0 25px;
    font-size: 13px;
    font-weight: 600;
    letter-spacing: 0.1rem;
    text-decoration: none;
    text-transform: uppercase;

  }


  .m-b-md {
    margin-bottom: 30px;
  }

  footer {
    background: #eee;
    padding: 20px;
    text-align: center;
  }


  .title {
    font-size: 50px;
    text-transform: uppercase;
    padding: 12px 0;
    color: #5e2195;
  }

  .title_2 {
    border-bottom: 2px solid;
    display: inline;
  }


  .wrapper {
    max-width: 1140px;
    padding: 10px;
    margin: 20px auto;
  }

  .pizzahouse-img {
    height: 300px;
    width: 40%;
  }

  .pizza-item {
    margin: 10px 0;
    padding: 12px;
    background: #f4f4f4;
  }

  img {
    width: 60px;
    display: inline-block;
  }

  .status_btn {
    width: 120px;
  }
</style>


@extends('layout.dashboard.dashboard-layout')

@section('content')



<div class="container">
  @if(session('mssg'))
  <div class="alert alert-success">
    {{ session('mssg') }}
  </div>
  @endif




  <div class="container">
    @if(session()->has('mesg'))
    <div class="alert alert-success">
      {{ session('mesg') }}
    </div>
    @endif

    @if(session()->has('error'))
    <div class="alert alert-danger">
      {{ session('error') }}
    </div>
    @endif
  </div>



  <div class="container">
  <div class="row mb-3">
    <!-- Left Column: Title -->
    <div class="col-12 col-md-6 mb-3 mb-md-0">
      <h2 class="text_color">Pizza Orders</h2>
    </div>

    <!-- Right Column: Search Form -->
    <div class="col-12 col-md-6">
      <form action="order_search" method="GET" class="">
        <div class="search-box">
          <input type="text" name="order_search" placeholder="Enter name to find order" value={{@$order_search}}>
          <button>🔎 Search</button>
        </div>
      </form>
    </div>
  </div>
</div>


  <!-- Bootstrap Nav Tabs -->
  <div class="container">
    <div class="orders_contener">

      <ul class="nav nav-tabs mb-4" id="pizzaTab" role="tablist">
        <li class="nav-item" role="presentation">
          <button class="nav-link active text-dark" id="all-tab" data-bs-toggle="tab" data-bs-target="#all" type="button" role="tab"><strong>All Orders</strong></button>
        </li>

        <li class="nav-item" role="presentation">
          <button class="nav-link text-dark" id="Pending-tab" data-bs-toggle="tab" data-bs-target="#Pending" type="button" role="tab"><strong>Pending</strong></button>
        </li>

        <li class="nav-item" role="presentation">
          <button class="nav-link text-dark" id="In_preparation-tab" data-bs-toggle="tab" data-bs-target="#In_preparation" type="button" role="tab"><strong>In preparation</strong></button>
        </li>

        <li class="nav-item" role="presentation">
          <button class="nav-link text-dark" id="completed-tab" data-bs-toggle="tab" data-bs-target="#completed" type="button" role="tab"><strong>Completed</strong></button>
        </li>
      </ul>

      <!-- Tab Contents -->
      <div class="tab-content wrapper pizza-index " id="pizzaTabContent">

        <!-- All Orders Tab -->
        <div class="tab-pane fade show active" id="all" role="tabpanel">


          @foreach($pizzas as $pizza)
          <p><strong>Order ID: </strong> {{ $pizza->order_id }}</p>
          <div class=" pizza-item d-flex justify-content-between mb-3 p-3 border  rounded me-3">
            <div class="d-flex">
              <img src="/img/pizza_1.png" alt="pizza icon">
              <h4 class="d-inline ms-2 mt-3"><a href="/pizzas/{{ $pizza->id }}">{{ $pizza->name }}</a></h4>
            </div>
            <div class="btn_1">
              @if($pizza->status_id ==1)
              <a href="/pizzas/update_status/{{ $pizza->id }}" class="badge bg-danger p-2 text-decoration-none btn status_btn mt-3">Pending</a>
              @elseif($pizza->status_id ==2)
              <a href="/pizzas/update_status/{{ $pizza->id }}" class="badge bg-warning  p-2 text-decoration-none btn mt-3 ">In preparation</a>
              @else ($pizzas->status_id ==3)
              <a href="#" class="badge bg-success p-2 text-decoration-none btn status_btn mt-3" disabled>Completed</a>
              @endif
            </div>
            <button type="button" class="btn btn-primary h-20 w-20 " data-bs-toggle="modal" data-bs-target="#editPizzaModal{{ $pizza->id }}">
              Edit Order
            </button>
          </div>

          <!-- Edit Modal for this specific pizza -->
          <div class="modal fade" id="editPizzaModal{{ $pizza->id }}" tabindex="-1" aria-labelledby="editPizzaModalLabel{{ $pizza->id }}" aria-hidden="true">
            <div class="modal-dialog">
              <form action="/pizzas/{{ $pizza->id }}" method="POST" class="modal-content">
                @csrf
                @method('PUT')
                <div class="modal-header">
                  <h5 class="modal-title " id="editPizzaModalLabel{{ $pizza->id }}">Edit Order</h5>
                  <button type="button" class="btn-close h-50" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <div class="mb-2">
                    <label class="form-label">Customer Name</label>
                    <input type="text" name="name" class="form-control" value="{{ $pizza->name }}" required>
                  </div>
                  <div class="mb-2">
                    <label class="form-label">Type</label>
                    <select name="type" value="{{ $pizza->type }}" required>
                      <option value="Cheeseburger">Cheeseburger</option>
                      <option value="margarita">Margarita</option>
                      <option value="hawaiian">Hawaiian</option>
                      <option value="veg supreme">Veg supreme</option>
                      <option value="chicken and BBQ sauce">Chicken and BBQ sauce</option>
                    </select>
                  </div>


                  <div class="mb-2">
                    <label class="form-label">Base</label>
                    <select name="base" value="{{ $pizza->base }}" required>
                      <option value="Thick">Thick</option>
                      <option value="Cheesy Crust">Cheesy Crust</option>
                      <option value="Garlic Crust">Garlic Crust</option>
                      <option value="Thin & Crispy">Thin & Crispy</option>
                      <option value="Hand-tossed crust">Hand-tossed crust</option>
                    </select>
                  </div>

                  <div class="mb-2">
                    <label class="form-label">Toppings</label>
                    <input type="text" name="toppings" class="form-control" value="{{ implode(',', $pizza->toppings ?? []) }}">
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="submit" class="btn btn-success">Save Changes</button>
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                </div>
              </form>
            </div>
          </div>
          @endforeach
        </div>


        <!-- Pending Orders Tab -->
        <div class="tab-pane fade" id="Pending" role="tabpanel">
          @foreach($pizzas->where('status_id', 1) as $pizza)
          <p><strong>Order ID:</strong> {{ $pizza->order_id }}</p>
          <div class="pizza-item d-flex justify-content-between mb-3 p-3 border rounded">
            <div>
              <img src="/img/pizza_1.png" alt="pizza icon">
              <h4 class="d-inline ms-2"><a href="/pizzas/{{ $pizza->id }}">{{ $pizza->name }}</a></h4>
            </div>
            <div>
              <a href="/pizzas/update_status/{{ $pizza->id }}" class="badge bg-danger  p-2 text-decoration-none btn mt-3">Pending</a>
            </div>
          </div>
          @endforeach
        </div>


        <!--In preparation Orders Tab -->
        <div class="tab-pane fade" id="In_preparation" role="tabpanel">
          @foreach($pizzas->where('status_id', 2) as $pizza)
          <p><strong>Order ID:</strong> {{ $pizza->order_id }}</p>
          <div class="pizza-item d-flex justify-content-between mb-3 p-3 border rounded">
            <div>
              <img src="/img/pizza_1.png" alt="pizza icon">
              <h4 class="d-inline ms-2"><a href="/pizzas/{{ $pizza->id }}">{{ $pizza->name }}</a></h4>
            </div>
            <div>
              <a href="/pizzas/update_status/{{ $pizza->id }}" class="badge bg-warning  p-2 text-decoration-none btn mt-3">In preparation</a>
            </div>
          </div>
          @endforeach
        </div>


        <!-- Completed Orders Tab -->
        <div class="tab-pane fade" id="completed" role="tabpanel">
          @foreach($pizzas->where('status_id', 3) as $pizza)
          <p><strong>Order ID:</strong> {{ $pizza->order_id }}</p>
          <div class="pizza-item d-flex justify-content-between mb-3 p-3 border rounded">
            <div>
              <img src="/img/pizza_1.png" alt="pizza icon">
              <h4 class="d-inline ms-2"><a href="/pizzas/{{ $pizza->id }}">{{ $pizza->name }}</a></h4>
            </div>
            <div>
              <a href="#" class="badge bg-success p-2 text-decoration-none btn status_btn mt-3 " onclick="return false;">Completed</a>
            </div>
          </div>
          @endforeach
        </div>

      </div>

    </div>
  </div>

 <script>

document.addEventListener('DOMContentLoaded', function() {
  // Your code here
  console.log('Document is ready!');
});
 </script>
  @endsection