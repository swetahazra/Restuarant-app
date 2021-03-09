<html>
<head>
<title> Restuarant App </title>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<header> 

<nav class="navbar navbar-expand-lg navbar-light bg-warning">
  <!-- <a class="navbar-brand" href="/">Restro</a> -->
  <h1> RESTRO</h1>
  <img src="/images/logo.jpeg" class="rounded-circle" alt="mypic">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      
      @if(Session::get('user'))
      <a class="nav-item nav-link" href="/">Home <span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link" href="/list">List</a>
      <a class="nav-item nav-link" href="/add">Add</a>
      <a class="nav-item nav-link" href="/profile">Profiles</a>
      <a class="nav-item nav-link" href="/Cuser">Welcome, {{Session::get('user')}}</a>
      
      <a class="nav-item nav-link " href="/logout">Logout</a>
    
      @else
      <a class="nav-item nav-link" href="/login">Login</a>
      <a class="nav-item nav-link" href="/register">Register</a>
      @endif


    </div>
  </div>
</nav>

</header>

<div class="container">
@yield('content')
</div>

<footer id="sticky-footer" class="py-4 bg-dark text-white-50">
    <div class="container text-center">
      <small>Copyright &copy; SWETA HAZRA</small>
    </div>
  </footer>


</body>
</html>