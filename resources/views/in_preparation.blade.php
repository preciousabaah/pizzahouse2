
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

@section('content')






 <div class="container">
    <h2>In Preparation Orders</h2>
    @forelse($pizzas as $pizza)
        <div class="pizza-item d-flex justify-content-between mb-3 p-3 border rounded">
            <div>
                <img src="/img/pizza_1.png" alt="pizza icon">
                <h4 class="d-inline ms-2"><a href="/pizzas/{{ $pizza->id }}">{{ $pizza->name }}</a></h4>
            </div>
            <div>
                <a href="/pizzas/update_status/{{ $pizza->id }}" class="badge bg-warning p-2 text-decoration-none btn mt-3">in Preparation</a>
            </div>
        </div>
    @empty
        <p>No In Preparation orders found.</p>
    @endforelse
</div>
@endsection
