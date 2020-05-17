<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="UTF-8">
  <title>Ezlaundry</title>
  <!-- Web Icon -->
		<link rel="icon" type="image/png" sizes="32x32" href="\icon\favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="16x16" href="\icon\favicon-16x16.png">
		<link rel="manifest" href="\site.webmanifest">
		<meta name="msapplication-TileColor" content="#da532c">
		<meta name="theme-color" content="#ffffff">
		<link rel="apple-touch-icon" sizes="180x180" href="\icon\apple-touch-icon.png">
		<link rel="shortcut icon" type="image/x-icon" href="\icon\favicon.ico" />
	<!-- Web Icon -->
  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
  <!-- Styles -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="\css\profile.css">
</head>
<body>
  <div class="wrapper">
    <div class="sidebar">
      <div class="bg_shadow"></div>
      <div class="site_nav">
          <div class="close">
            <i class="fas fa-times"></i>
          </div>
          <!-- Side Navbar -->
          <div class="profile_info">
              <div class="profile_img">
                <img src="\img\dummy.jpg" alt="profile_img">
              </div>
              <div class="profile_data">
                  <p class="name">{{ Auth::user()->Nama_Lengkap }}</p>
              </div>
          </div>
          <ul class="siderbar_menu">
            <li>
              <a href="{{ url('home') }}">
                <div class="icon"><i class="fas fa-user"></i></div>
                <div class="title">Profile</div>
              </a> 
            </li>  
            <li>
              <a href="{{ url('reward') }}">
                <div class="icon"><i class="fas fa-award"></i></div>
                <div class="title">Reward</div>
              </a>
            </li>  
            <li>
              <a href="{{ url('order') }}">
                <div class="icon"><i class="fas fa-cart-plus"></i></div>
                <div class="title">Buat Pesanan</div>
              </a>
            </li>  
            <li class="active">
              <a href="{{ url('riwayat/masuk') }}">
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
    
    <!-- Top Nav to Home -->
    <div class="main_container">
      <nav>
        <div class="hamburger">
          <i class="fas fa-bars"></i>
        </div>
        <div class="logo">
          <a href="{{ url('/') }}">Ezlaundry</a>
        </div>
      </nav>
      <!-- Page Content -->
      <div class="content">
        @yield('content')
      </div>
    </div>

  </div>
  <!-- Script and related things-->
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src="\js\bootstrap-input-spinner.js"></script>

    <script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js"></script>
    <script>
      $(document).ready(function(){
        $(function(){
          $('.siderbar_menu a').filter(function(){return this.href==location.href}).parent().addClass('active').siblings().removeClass('active')
        });

        $(".hamburger").click(function(){
          $(".wrapper").addClass("active");
        });

        $(".close, .bg_shadow").click(function(){
          $(".wrapper").removeClass("active");
        });

        var table = $('#datatable').DataTable(); 

        table.on('click', '.delete', function() {
          $tr = $(this).closest('tr');
          if(($tr).hasClass('child')) {
            $tr = $tr.prev('.parent');
          }

          var data = table.row($tr).data();
          console.log(data);

          $('#deleteForm').attr('action', '/riwayat/'+data[0]);
          $('#deleteModal').modal('show');
        });

      });

      $("input[type='number']").inputSpinner();


      // Delete Pesanan
    </script>
  <!-- Script and related things-->
</body>
</html>