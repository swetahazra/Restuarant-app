@extends('layout')

@section('content')

<div> 
<h1> REGISTERED PROFILES </h1>
<table class="table">
  <thead>
    <tr>
    
      <th scope="col">ID</th>
      <th scope="col">User Name</th>
      <th scope="col">Email</th>
      <th scope="col">contact</th>
      
    </tr>
  </thead>
  <tbody>
  @foreach($data as $item)
    <tr>
      <th scope="row">{{$item->id}}</th>
      <td>{{$item->name}}</td>
      <td>{{$item->email}}</td>
      <td>{{$item->contact}}</td>
    </tr>
    @endforeach
  </tbody>
</table>

</div>

@stop