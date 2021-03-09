@extends('layout')

@section('content')

<div> 
<h1>LOGIN PAGE </h1>

<form method='post' action='login'>
@csrf

<div class="col-sm-8">

<div class="form-group">
    <label>EMAIL</label>
    <input type="email" class="form-control"  name="email" placeholder="Enter email">
  </div>

  <div class="form-group">
    <label>PASSWORD</label>
    <input type="password" class="form-control"  name="password" placeholder="Enter password">
  </div>

  
  
  <button type="submit" class="btn btn-primary">Submit</button>
  </div>

</div>
  
</form>


</div>

@stop