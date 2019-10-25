<header id="header"@if(Route::current()->getName() != 'home') class="header-fixed"@endif>
  <div class="container">

    <div id="logo" class="pull-left">
      <h1>
        <a href="{{ route('home.index') }}#intro">
          <span><i class="fa fa-map-marker" aria-hidden="true"></i></span>
          {{ env('APP_NAME', 'The Event') }}
        </a>
      </h1>
    </div>

    <nav id="nav-menu-container">
      <ul class="nav-menu">
        <li class="menu-active"><a href="{{ Route::current()->getName() != 'home.index' ? route('home.index') : '' }}#intro">Home</a></li>
        <li><a href="{{ Route::current()->getName() != 'home.index' ? route('home.index') : '' }}#about">About</a></li>
        <li><a href="{{ Route::current()->getName() != 'home.index' ? route('home.index') : '' }}#speakers">Speakers</a></li>
        <li><a href="{{ Route::current()->getName() != 'home.index' ? route('home.index') : '' }}#schedule">Schedule</a></li>
        <li><a href="{{ Route::current()->getName() != 'home.index' ? route('home.index') : '' }}#venue">Venue</a></li>
        <li><a href="{{ Route::current()->getName() != 'home.index' ? route('home.index') : '' }}#hotels">Hotels</a></li>
        <li><a href="{{ Route::current()->getName() != 'home.index' ? route('home.index') : '' }}#gallery">Gallery</a></li>
        <li><a href="{{ Route::current()->getName() != 'home.index' ? route('home.index') : '' }}#supporters">Sponsors</a></li>
        <li><a href="{{ Route::current()->getName() != 'home.index' ? route('home.index') : '' }}#contact">Contact</a></li>
        <li class="buy-tickets"><a href="{{ Route::current()->getName() != 'home.index' ? route('home.index') : '' }}#buy-tickets">Buy Tickets</a></li>
      </ul>
    </nav>
  </div>
</header>
