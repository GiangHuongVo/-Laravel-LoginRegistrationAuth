<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">   
    <a class="navbar-brand" href="#">
      <x-logo test="" customStyle=""/>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{route('home')}}">Home</a>
        </li>
        <!--When user logins, just show the logout-->
        @auth
          <li class="nav-item">
            <a class="nav-link" href="{{route('logout')}}">Logout</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('profile')}}">Profile</a>
          </li>
        @else<!--When user doesnt login, show the login and registration-->
          <li class="nav-item">
            <a class="nav-link" href="{{route('login')}}">Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('registration')}}">Registration</a>
          </li>
        @endauth
       
      </ul>
      <span class="navbar-text">
      @auth
        Hello&nbsp;
        {{auth()->user()->name}}
      @endauth
      </span>
    </div>
  </div>
</nav>