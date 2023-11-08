@extends('layout')
@section('title', 'Home Page')
@section('content')
<!--To prevent trying access home page without login-->
    @auth
        
    @endauth
@endsection