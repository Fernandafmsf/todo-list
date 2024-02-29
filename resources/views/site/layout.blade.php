<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>@yield('title')</title>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

</head>
<body>
<nav class="navbar navbar-light bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="{{route('site.home')}}">To-do List</a>

    <div class="d-flex input-group w-auto">
      @auth
      <div class="dropdown">
        <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Hello, {{auth()->user()->name}} !
        </button>
      <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
        <a class="dropdown-item" href="#">Dashboard</a>
        <a class="dropdown-item" href="#">Log Out</a>
      </div>
    </div>
      @else
      
      <a href="{{route('login')}}" class="btn btn-link px-3 me-2">Login</a>
      <a href="{{route('user.create')}}" class="btn btn-primary me-3">Sign up for free</a>

      @endauth
    </div>

  </div>
</nav>
  
  @yield('conteudo')

  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>


  <script>
    import { Dropdown, Ripple, initMDB } from "mdb-ui-kit";

    initMDB({ Dropdown, Ripple });
  </script>
  

</body>
</html>