 @extends('layout.dashboard.dashboard-layout')

 @section('content')






 <!--<div class="row justify-content-center mt-5">
     <div class="col-sm-12 col-md-4 col-lg-4  ">
         <div class="card">

             <div class="card-body">
                 @if (session('status'))
                 <div class="alert alert-success" role="alert">
                     {{ session('status') }}
                 </div>
                 @endif

                 {{ __('You are logged in!') }}
                 <div class="d-flex">
                     <a href="{{ url('pending') }}" class="home_card">
                         <div class="btn btn-outline-primary"> Pending Orders<strong class="badge rounded-pill bg-danger h6"> {{ $pendingCount ?? 0  }}</strong></div>
                     </a>
                 </div>
             </div>
         </div>
     </div>-->
     <!--  <a href="" class="btn btn-outline-primary position-relative">
                         View Pending Orders
                         <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                             {{ $pendingCount }}
                         </span>
                     </a>-->

     <!--<div class="col-sm-12 col-md-4 col-lg-4 ">
         <div class="card">
             <a href="{{ url('in_preparation') }}" class="home_card">
                 <div class="btn btn-outline-primary">Inpreparation <strong class="badge rounded-pill bg-warning h6"> {{ $inPreparationCount ?? 0 }}</strong></div>
             </a>

         </div>
     </div>
 

 <div class="col-sm-12 col-md-4 col-lg-4 ">
     <div class="card">
         <a href="{{ url('completed') }}" class="home_card">
             <div class="btn btn-outline-primary">Completed<strong class="badge rounded-pill bg-success h6">{{ $completedCount ?? 0 }}</strong></div>
         </a>
     </div>
 </div>

 </div>

 
 <div class="row justify-content-center mt-5">
     <div class="col-md-4">
         <div class="card w-100">
             <div class="d-flex">
                 <a href="{{ url('/create') }}" class="home_card">
                     <div class="card-icon">🛒</div>
                     <div class="">Order a Pizza</div>
                 </a>

                 <a href="{{ url('/pizzas') }}" class="home_card">
                     <div class="card-icon">📋</div>
                     <div class="">View All Pizza Orders</div>
                 </a>
             </div>
         </div>
     </div>
 </div>
 </div>
-->











<!--<div class="row">
  <div class="col-12 col-lg-12">
    <div class="row g-3">
      // Row 1: 3 cards 
      <div class="col-12 col-md-4">
        <div class="card shadow text-center h-100">
          <div class="card-body d-flex flex-column justify-content-center">
            <h6 class="fw-bold">Pending Orders</h6>
            <span class="badge text-dark rounded-pill my-2">
             <strong>{{ $pendingCount ?? 0 }}</strong> 
            </span>
            <a href="/pizzas#Pending" class="btn btn-outline-danger mt-auto">View</a>
          </div>
        </div>
      </div>

      <div class="col-12 col-md-4">
        <div class="card shadow text-center h-100">
          <div class="card-body d-flex flex-column justify-content-center">
            <h6 class="fw-bold">In Preparation</h6>
            <span class="badge text-dark rounded-pill my-2">
              <strong>{{ $inPreparationCount ?? 0 }}</strong>
            </span>
            <a href="/pizzas#In_preparation" class="btn btn-outline-warning mt-auto">View</a>
          </div>
        </div>
      </div>

      <div class="col-12 col-md-4">
        <div class="card shadow text-center h-100">
          <div class="card-body d-flex flex-column justify-content-center">
            <h6 class="fw-bold">Completed</h6>
            <span class="badge text-dark rounded-pill my-2">
              <strong>{{ $completedCount ?? 0 }}</strong>
            </span>
            <a href="/pizzas#completed" class="btn btn-outline-success mt-auto">View</a>
          </div>
        </div>
      </div>

      //Row 2: 2 wider cards 
      <div class="col-12 col-md-6">
        <div class="card shadow text-center h-100">
          <div class="card-body d-flex flex-column justify-content-center">
            <h6 class="fw-bold">Total Orders</h6>
            <span class="badge text-dark rounded-pill my-2">
             <strong>{{ $completedCount ?? 0 }}</strong> 
            </span>
            <a href="/pizzas#all" class="btn btn-outline-secondary mt-auto">View</a>
          </div>
        </div>
      </div>

      <div class="col-12 col-md-6">
        <div class="card shadow text-center h-100">
          <div class="card-body d-flex flex-column justify-content-center">
            <h6 class="fw-bold">Create New Order</h6>
            <span class="badge text-dark rounded-pill my-2"><strong><i class="fa fa-plus-circle" aria-hidden="true"></i></span>
            <a href="{{ url('/create') }}" class="btn btn-outline-primary mt-auto">Create</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>-->







<style>
    .card {
    opacity: 0;
    transform: scale(0.95);
    animation: fadeInCard 0.5s ease forwards;
}

@keyframes fadeInCard {
    to {
        opacity: 1;
        transform: scale(1);
    }
}

</style>






<h3>Dashboard</h3>

<div class="row">
  <div class="col-12 col-lg-12">
    <div class="row g-3">
      <!--  Row 1: 3 cards -->
      <div class="col-12 col-md-4">
        <div class="card shadow text-center h-100">
          <div class="card-body d-flex flex-column justify-content-center">
            <h6 class="fw-bold">Pending Orders</h6>
            <span class="badge text-dark rounded-pill my-2">
             <strong>{{ $pendingCount ?? 0 }}</strong> 
            </span>
            <a href="/pizzas#Pending" class="btn btn-outline-danger mt-auto">View</a>
          </div>
        </div>
      </div>

      <div class="col-12 col-md-4">
        <div class="card shadow text-center h-100">
          <div class="card-body d-flex flex-column justify-content-center">
            <h6 class="fw-bold">In Preparation</h6>
            <span class="badge text-dark rounded-pill my-2">
              <strong>{{ $inPreparationCount ?? 0 }}</strong>
            </span>
            <a href="/pizzas#In_preparation" class="btn btn-outline-warning mt-auto">View</a>
          </div>
        </div>
      </div>

      <div class="col-12 col-md-4">
        <div class="card shadow text-center h-100">
          <div class="card-body d-flex flex-column justify-content-center">
            <h6 class="fw-bold">Completed</h6>
            <span class="badge text-dark rounded-pill my-2">
              <strong>{{ $completedCount ?? 0 }}</strong>
            </span>
            <a href="/pizzas#completed" class="btn btn-outline-success mt-auto">View</a>
          </div>
        </div>
      </div>


      <!-- Row 2: 2 wider cards -->
      <div class="col-12 col-md-6">
        <div class="card shadow text-center h-100">
          <div class="card-body d-flex flex-column justify-content-center">
            <h6 class="fw-bold">Total Orders</h6>
            <span class="badge text-dark rounded-pill my-2">
             <strong>{{ $completedCount ?? 0 }}</strong> 
            </span>
            <a href="/pizzas#all" class="btn btn-outline-secondary mt-auto">View</a>
          </div>
        </div>
      </div>

      <div class="col-12 col-md-6">
        <div class="card shadow text-center h-100">
          <div class="card-body d-flex flex-column justify-content-center">
            <h6 class="fw-bold">Create New Order</h6>
            <span class="badge text-dark rounded-pill my-2"><strong><i class="fa fa-plus-circle" aria-hidden="true"></i></span>
            <a href="{{ url('/create') }}" class="btn btn-outline-primary mt-auto">Create</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

 @endsection