@extends('layout')

@section('content')

<div> 
<h1>HELLO {{Session::get('user')}} </h1>
<h2> These are your details .</h2>

<p>Your username : {{Session::get('user')}} </p>
<p>Your Email ID : {{Session::get('Euser')}} </p>
<p>Your Contact Details : {{Session::get('Cuser')}} </p>

</div>



@stop