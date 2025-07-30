




<link href="/css/main.css" rel="stylesheet">
  <link href="/css/dashbord.css" rel="stylesheet">

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="..." crossorigin="anonymous"></script>


  <style>
    .btn_1 {
    background-color: #ff6600;
    color: white;
    
  }
</style>



<div class="container">

    @if(session('status'))
    <div class="alert alert-success mt-3">{{ session('status') }}</div>
    @endif

    @if(session('status'))
    <div class="alert alert-danger mt-3">{{ session('error') }}</div>
    @endif

</div>


<div class="container">

    <div class="mt-5">
        <div class="row mt-5 ">
            
            <div class="col-xl-4 col-lg-5 col-md-7 mx-auto mt-5">
                
                <div class="card-body ">
                    <h4 class="title mt-5 mb-2">Request a password reset email</h4>
                    <form role="form text-left" action="{{ route('password.request') }}" method="POST">
                        @csrf

                        <div class="">
                            <input type="email" name="email" class="form-control" placeholder="Email" aria-label="Email" aria-describedby="email-addon" required value="{{ old("email") }}">
                        </div>

                        <button type="submit" class="btn btn_1 mt-2 mb-0">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>


</div>







