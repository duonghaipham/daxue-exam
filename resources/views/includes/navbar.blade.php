<div class="nav">
  <div class="nav-container wrapper">
    <div class="toggle">
      <a href="{{ route('home') }}"><img src="{{ url("svg/pencil.svg") }}" alt="Logo" class="logo" /></a>
      <button id="btn-menu"><i class="fas">&#xf0c9;</i></button>
    </div>
    <div class="nav-right">
      <a class="nav-item" href="#">{{ __('layout.layout.practice') }}</a>
      <a class="nav-item" href="#">{{ __('layout.layout.member') }}</a>
      <a class="nav-item" href="#"><i class="fas fa-bell"></i></a>
      <div class="nav-btn-item">
        @auth
          <a id="btn-personal">{{ auth()->user()->name }}</a>
          <div class="personal-list">
            <a class="personal-item" href="{{ route('user.index') }}">{{ __('layout.layout.personal_management') }}</a>
            <a class="personal-item" href="{{ route('change_password.edit') }}">{{ __('layout.layout.change_password') }}</a>
            <a class="personal-item" href="{{ route('logout.index') }}">{{ __('layout.layout.logout') }}</a>
          </div>
        @endauth
        @guest
          <a id="btn-personal"><i class="fas fa-user"></i></a>
          <div class="personal-list">
            <a class="personal-item" href="{{ route('login.index') }}">{{ __('layout.layout.login') }}</a>
            <a class="personal-item" href="{{ route('register.index') }}">{{ __('layout.layout.register') }}</a>
          </div>
        @endguest
      </div>
    </div>
  </div>
</div>
