<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container">
      <div id="logo" class="me-5">
        <img src="{{ Vite::asset('resources/images/dc-logo.png') }}">
      </div>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link {{ Route::currentRouteName() == 'homepage' ? 'active' : '' }}" href="{{ route('homepage')}}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Route::currentRouteName() == 'products' ? 'active' : '' }}" href="{{ route('products')}}">Products</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Route::currentRouteName() == 'about' ? 'active' : '' }}"  href="{{ route('about')}}">About Us</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>