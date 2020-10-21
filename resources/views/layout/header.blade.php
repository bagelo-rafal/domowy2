<div class="horizontal-menu">
  <nav class="navbar top-navbar">
    <div class="container">
      <div class="navbar-content">
        <a href="#" class="navbar-brand">
          <img style="max-width: 210px;margin: auto;display: block;" src="/assets/images/logo-dp.png">
        </a>
        <ul class="navbar-nav">
          <li class="nav-item dropdown nav-profile">
            <a class="nav-link dropdown-toggle" href="#" id="profileDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <img src="{{ url('https://via.placeholder.com/30x30') }}" alt="profile">
            </a>
            <div class="dropdown-menu" aria-labelledby="profileDropdown">
              <div class="dropdown-header d-flex flex-column align-items-center">
                <div class="figure mb-3">
                  <img src="{{ url('https://via.placeholder.com/80x80') }}" alt="">
                </div>
                <div class="info text-center">
                  <p class="name font-weight-bold mb-0">Jan Kowalski</p>
                  <p class="email text-muted mb-3">admin@domowypediatra.pl</p>
                </div>
              </div>
              <div class="dropdown-body">
                <ul class="profile-nav p-0 pt-3">
                  <li class="nav-item">
                    <a href="javascript:;" class="nav-link">
                      <i data-feather="edit"></i>
                      <span>Ustawienia</span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="javascript:;" class="nav-link">
                      <i data-feather="log-out"></i>
                      <span>Wyloguj się</span>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="horizontal-menu-toggle">
          <i data-feather="menu"></i>
        </button>
      </div>
    </div>
  </nav>
  <nav class="bottom-navbar">
    <div class="container">
      <ul class="nav page-navigation">
        <li class="nav-item {{ active_class(['/']) }}">
          <a class="nav-link" href="{{ url('/') }}">
            <i class="link-icon" data-feather="box"></i>
            <span class="menu-title">Panel</span>
          </a>
        </li>
        <li class="nav-item ">
          <a href="#" class="nav-link">
            <i class="link-icon" data-feather="shopping-cart"></i>
            <span class="menu-title">Faktury</span>
          </a>
        </li>
        <li class="nav-item ">
          <a href="#" class="nav-link">
            <i class="link-icon" data-feather="alert-circle"></i>
            <span class="menu-title">Szybka pomoc</span>
            <i class="link-arrow"></i>
          </a>
          <div class="submenu">
            <ul class="submenu-item">
              <li class="nav-item"><a class="nav-link" href="{{ url('/quickhelp') }}">Poczekalnia</a></li>
              <li class="nav-item"><a class="nav-link" href="{{ url('/quickhelp/active') }}">Aktywne rozmowy</a></li>
              <li class="nav-item"><a class="nav-link" href="{{ url('/quickhelp/history') }}">Historia rozmów</a></li>
            </ul>
          </div>
        </li>
        <li class="nav-item ">
          <a href="#" class="nav-link">
            <i class="link-icon" data-feather="calendar"></i>
            <span class="menu-title">Terminarz</span>
            <i class="link-arrow"></i>
          </a>
          <div class="submenu">
            <ul class="submenu-item">
              <li class="nav-item"><a class="nav-link" href="{{ url('/calendar/my') }}">Mój terminarz</a></li>
              <li class="nav-item"><a class="nav-link" href="{{ url('/calendar/add') }}">Dodaj terminarz</a></li>
            </ul>
          </div>
        </li>
        <li class="nav-item ">
          <a href="#" class="nav-link">
            <i class="link-icon" data-feather="user"></i>
            <span class="menu-title">Personel</span>
            <i class="link-arrow"></i>
          </a>
          <div class="submenu">
            <ul class="submenu-item">
              <li class="nav-item"><a class="nav-link" href="{{ url('/staff') }}">Zobacz wszystkich</a></li>
              <li class="nav-item"><a class="nav-link" href="{{ url('/staff/create') }}">Dodaj</a></li>
            </ul>
          </div>
        </li>
      </ul>
    </div>
  </nav>
</div>
