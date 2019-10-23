@extends('admin.layout.base')
@section('title', 'Admin Home')

@section('content')
  
  <h1>Hello {{$user->username}}</h1>
 
@endsection
