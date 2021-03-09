@extends('layout')

@section('content')

<div class="col-sm-6"> 
<h1> Add new Restuarants </h1>


<form method='post' action=''>
@csrf
  <div class="form-group">
    <label>ID</label>
    <input type="text" class="form-control" name="id" placeholder="Enter ID">
  </div>

  <div class="form-group">
    <label>NAME</label>
    <input type="text" class="form-control"  name="name" placeholder="Enter name">
  </div>

  <div class="form-group">
    <label>EMAIL</label>
    <input type="email" class="form-control"  name="email" placeholder="Enter email">
  </div>

  <div class="form-group">
    <label>ADDRESS</label>
    <input type="text" class="form-control"  name="address" placeholder="Enter address">
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>



</div>

@stop