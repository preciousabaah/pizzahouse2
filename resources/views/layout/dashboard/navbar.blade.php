@if(session('status'))
<div class="alert alert-success">
  {{ session('status') }}
</div>
@endif
@if(session('status'))
<div class="alert alert-danger">
  {{ session('status') }}
</div>
@endif



<!-- Navbar -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnH2N1xZ+...==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="true">
  <div class="container-fluid py-1 px-3">
    <nav aria-label="breadcrumb">
      <h6 class="font-weight-bolder mb-0">Tables</h6>
    </nav>
    <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
      <div class="ms-md-auto pe-md-3 d-flex align-items-center">

        <ul class="navbar-nav  justify-content-end">

          <div class="dropdown">
            <a class="btn btn-light dropdown-toggle d-flex align-items-center" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
              <i class="fa fa-user" aria-hidden="true" style="font-size: 30px" ;></i>
              {{ auth()->user()->name  ?? 'No category'}}
            </a>

            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
              <li>
                <a class="dropdown-item" href="/profile">Profile</a>
              </li>
              <li>
                <a class="dropdown-item" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                  Logout
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  @csrf
                </form>
              </li>
            </ul>


          </div>


        </ul>
      </div>
    </div>
  </div>
</nav>















