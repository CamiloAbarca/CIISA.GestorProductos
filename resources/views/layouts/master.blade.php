<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link href="css/app.css" rel="stylesheet">
  </head>
  <body>
    @section('header')
    <nav class="navbar bg-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('volverPrincipal') }}">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTEImNXdfl5GsKwsN-LboK1-r2fSXxsMXhuwT2zj-3UdOJ59WVHAm5uirrcJ0YL6FEQwXw&usqp=CAU"
        alt="" width="30" height="30" class="d-inline-block align-text-top">
        Gestor de Productos
        </a>
        <button type="button" class="btn btn-dark">Login</button>
      </div>
    </nav>
    @show
    
    @yield('content')

    @section('footer')
    <div class="container">
  <footer class="py-3 my-4">
    <ul class="nav justify-content-center border-bottom pb-3 mb-3">
      <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Link 1</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Link 2</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Link 3</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Link 4</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Link 5</a></li>
    </ul>
    <p class="text-center text-muted">© 2022 Company, Inc</p>
  </footer>
</div>
    @show
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>