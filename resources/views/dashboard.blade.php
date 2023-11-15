@extends('layout')
@section('title', 'Home Page')
@section('content')
<!--Login and go to Dashboard-->
    <!--To prevent trying access home page without login-->
    @auth
        <div class="container">
            <div class="mt-5">
                <h1>Dashboard page</h1>
            </div>
        </div>        
    @endauth
@endsection