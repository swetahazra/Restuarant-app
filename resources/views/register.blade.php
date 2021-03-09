@extends('layout')

@section('content')

<div> 
<h1>REGISTRATION PAGE </h1>

<form method='post' action='register' enctype="multipart/form-data" >
@csrf
<div class="col-sm-6">
  <div class="form-group">
    <label>NAME</label>
    <input type="text" class="form-control" name="name" placeholder="Enter name">
  </div>

  <div class="form-group">
    <label>EMAIL</label>
    <input type="email" class="form-control"  name="email" placeholder="Enter email">
  </div>

  <div class="form-group">
    <label>PASSWORD</label>
    <input type="password" class="form-control"  name="password" placeholder="Enter password">
  </div>

  <div class="form-group">
    <label>CONTACT</label>
    <input type="text" class="form-control"  name="contact" placeholder="Enter contact">
  </div>
  <!-- <div class="card-body">
  <label>Upload your image : </label>
    <input type="file" name="user_img"/>
  </div>  -->
  
  <button type="submit" class="btn btn-primary">Submit</button>
  </div>
 
</form>

</div>

@stop