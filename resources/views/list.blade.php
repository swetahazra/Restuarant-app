@extends('layout')

@section('content')

<div> 
<h1> List of Restuarants </h1>

@if(Session::get('status'))

<div class="alert alert-success" role="alert">
  <strong>SUCCESSFUL!!! </strong>{{Session::get('status')}}
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>

@endif

<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Restuarant Name</th>
      <th scope="col">Email</th>
      <th scope="col">Address</th>
      <th scope="col">Operations</th>
    </tr>
  </thead>
  <tbody>
  @foreach($data as $item)
    <tr>
      <th scope="row">{{$item->id}}</th>
      <td>{{$item->name}}</td>
      <td>{{$item->email}}</td>
      <td>{{$item->address}}</td>
      <td><a href="delete/{{$item->id}}"><i class="fa fa-trash"></i></a></td>
      <td><a href="edit/{{$item->id}}"><i class="fa fa-pencil"></i></a></td>
    </tr>
    @endforeach
  </tbody>
</table>


<p></p>

</div>

@stop