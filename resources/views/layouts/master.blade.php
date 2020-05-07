<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="UTF-8">
  <title>Ezlaundry</title>

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

   <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">

  <!-- Styles -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="\css\profile.css">

  <!-- Script and related things-->
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script>
      $(document).ready(function(){
        $(".siderbar_menu li").click(function(){
          $(".siderbar_menu li").removeClass("active");
          $(this).addClass("active");
        });

        $(".hamburger").click(function(){
          $(".wrapper").addClass("active");
        });

        $(".close, .bg_shadow").click(function(){
          $(".wrapper").removeClass("active");
        });
      });
    </script>
  <!-- Script and related things-->
</head>
<body>
  <div class="wrapper">
    <div class="sidebar">
      <div class="bg_shadow"></div>
      <div class="site_nav">
          <div class="close">
            <i class="fas fa-times"></i>
          </div>
          
          <div class="profile_info">
              <div class="profile_img">
                <img src="\img\dummy.jpg" alt="profile_img">
              </div>
              <div class="profile_data">
                  <p class="name">John Doe</p>
              </div>
          </div>
        
          <ul class="siderbar_menu">
            <li class="active">
              <a href="{{ url('home') }}">
                <div class="icon"><i class="fas fa-user"></i></div>
                <div class="title">Profile</div>
              </a> 
            </li>  
            <li>
              <a href="#">
                <div class="icon"><i class="fas fa-award"></i></div>
                <div class="title">Reward</div>
              </a>
            </li>  
            <li>
              <a href="{{ url('pelanggan') }}">
                <div class="icon"><i class="fas fa-cart-plus"></i></div>
                <div class="title">Buat Pesanan</div>
              </a>
            </li>  
            <li>
              <a href="#">
                <div class="icon"><i class="fas fa-receipt"></i></div>
                <div class="title">Riwayat Pesanan</div>
              </a>            
            </li>  
            <li>
              <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <div class="icon"><i class="fas fa-sign-out-alt"></i></div>
                <div class="title">Logout</div>
              </a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
              </form>
            </li>  
          </ul>
          <div class="copyright">
            <span>© 2020 All Rights Reserved</span>
          </div>
      </div>
    </div>

    <div class="main_container">
      <div class="navbar">
        <div class="hamburger">
          <i class="fas fa-bars"></i>
        </div>
        <div class="logo">
          <a href="#">Ezlaundry</a>
        </div>
      </div>
      <div class="content">
        @yield('content')
      </div>
    </div>

  </div>
</body>
</html>