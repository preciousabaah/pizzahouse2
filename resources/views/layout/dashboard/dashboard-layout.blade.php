<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <title>
    Pizzahouse
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700,800" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href="https://demos.creative-tim.com/soft-ui-dashboard/assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="https://demos.creative-tim.com/soft-ui-dashboard/assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <!-- CSS Files -->
  <link id="pagestyle" href="css/dashboard.css?v=1.1.0" rel="stylesheet" />
  <!-- Nepcha Analytics (nepcha.com) -->
  <!-- Nepcha is a easy-to-use web analytics. No cookies and fully compliant with GDPR, CCPA and PECR. -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

  <link href="{{asset('css/main.css')}}" rel="stylesheet">
  <link href="{{asset('css/dashboard.css')}}" rel="stylesheet">


  <script src="{{ asset('assets/js/soft-ui-dashboard.js') }}"></script>
  <script src="{{ asset('assets/js/soft-ui-dashboard.min.js') }}"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>


<body class="g-sidenav-show bg-gray-100">
  @include('layout.dashboard.sidebar')
  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    @include('layout.dashboard.navbar')



    <div class="container py-4">
      @yield('content')
    </div>
  </main>





















  <script>
    //grabs the hash tag from the url
    var hash = window.location.hash;
    console.log(hash);
    //checks whether or not the hash tag is set
    if (hash != "") {
      //removes all active classes from tabs
      $('#pizzaTab li button').each(function() {
        $(this).removeClass('active');
      });
      $('#pizzaTabContent div').each(function() {
        $(this).removeClass('active');
      });
      //this will add the active class on the hashtagged value
      var link = "";
      $('#pizzaTab li button').each(function() {
        link = $(this).data('bsTarget');
        if (link == hash) {
          $(this).addClass('active');
        }
      });
      $('#pizzaTabContent div').each(function() {
        link = $(this).attr('id');
        if ('#' + link == hash) {
          $(this).addClass('active show');
        }
      });
    }
  </script>
  



</body>





</html>