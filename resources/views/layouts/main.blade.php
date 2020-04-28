<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="\css\nav.css">
  <title>@yield('title')</title>
</head>
<body>
  <header>
    <nav>
      <a class="navbar-brand" href="{{ url('/') }}">
        <img src="\img\nav-logo.png">
        <span>ezlaundry</span>
      </a>

      <ul>
        <li><a href="{{ url('/') }}">Home</a></li>
        <li><a href="{{ url('/service') }}">Service</a></li>
        <li><a href="{{ url('/reward') }}">Reward</a></li> 
        <li><a class="btn  btn-outline-light btn-sm" href="{{ url('/signin') }}" role="button">Login/Register</a></li>
        </ul>

      <div class="menu-toggle">
         <input type="checkbox" name="" id="">
         <span></span>
         <span></span>
         <span></span>
      </div>
    </nav>
  </header>

  <main>
    @yield('container')
  </main>

  <footer>
    
  </footer>
  <script src="\js\script.js"></script>
</body>
</html>