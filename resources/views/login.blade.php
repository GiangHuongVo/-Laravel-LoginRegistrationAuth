<!--extends from <title> of layout.blade.php by default-->
@extends('layout')
<!--Custom <title> of layout.blade.php -> will display on page-->
@section('title', 'Login Page')
<!--extends from <body> @yeild('content') of layout.blade.php-->
@section('content')

<!--Design Login Form-->
    <div class="container">
        <div class="mt-5">
            @if($errors->any())
                <div class="col-12">
                    @foreach($errors->all() as $error)
                        <div class="alert alert-danger">{{$error}}</div>
                    @endforeach
                </div>
            @endif
            @if(session()->has('error'))
                <div class="alert alert-danger">{{session('error')}}</div>
            @endif

            @if(session()->has('success'))
                <div class="alert alert-success">{{session('success')}}</div>
            @endif

        </div>
        <form action="{{route('login.post')}}" method="POST" class="ms-auto me-auto mt-3" style="width:500px">
        <!--Remember Add security token-->
        @csrf
        <div class="mb-3">
                <label class="form-label">Email address</label>
                <!--<input type="email" class="form-control" name="email"> -->
                @include('include.forms.email')              
            </div>

            <div class="mb-3">
                <label  class="form-label">Password</label>
                <!--<input type="password" class="form-control" name="password">-->
                @include('include.forms.password')
            </div>
            
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

@endsection