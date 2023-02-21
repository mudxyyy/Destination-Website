<style>
    body{
        background: cadetblue;
    }
    .nav-link{
        border: 3px solid rgb(13, 90, 13);
    }

    .nav-link:hover{
        background-color: green;
    }

</style>


<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand fs-4 fw-bold" href="{{ route('home') }}">DESTINATION LIST</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto me-2">
          @guest
          <li class="nav-item">
            <a class="nav-link fs-5 text-white rounded" aria-current="page" href="{{ route('login') }}">Login</a>
          </li>
          @endguest
          @auth
              <a href="{{ route('admin') }}" class="nav-link rounded fs-5 me-2 text-white">Admin</a>
              <a href="{{ route('logout') }}" class="nav-link rounded fs-5 text-white">Logout</a>
          @endauth
      </div>
    </div>
  </nav>
