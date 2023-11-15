@extends('layout')
@section('title', 'Profile Page')
<!--extends from <body> @yeild('content') of layout.blade.php-->
@section('content')
    <!--To prevent trying access profile page without login-->
    @auth
        <div class="container">
            <div class="mt-5">
                <h1>PROFILE PAGE</h1>
            </div>
        </div>        
    @endauth
    
@endsection