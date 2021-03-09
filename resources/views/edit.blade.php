@extends('layout')

@section('content')

<div class="col-sm-6"> 
<h1> Edit Restuarants </h1>


<form method='post' action='/edit'>
@csrf
  <div class="form-group">

    <label>ID</label>
    <input type="text" class="form-control" name="id" value="{{$data->id}}" placeholder="Enter ID">
  </div>

  <div class="form-group">
    <label>NAME</label>
    <input type="text" class="form-control"  name="name" value="{{$data->name}}" placeholder="Enter name">
  </div>

  <div class="form-group">
    <label>EMAIL</label>
    <input type="text" class="form-control"  name="email" value="{{$data->email}}" placeholder="Enter email">
  </div>

  <div class="form-group">
    <label>ADDRESS</label>
    <input type="text" class="form-control"  name="address" value="{{$data->address}}" placeholder="Enter address">
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>



</div>

@stop