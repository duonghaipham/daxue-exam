<div class="nav">
  <div class="nav-container wrapper">
    <div class="toggle">
      <a href="{{ route('home') }}"><img src="{{ url("svg/pencil.svg") }}" alt="Logo" class="logo" /></a>
      <button id="btn-menu"><i class="fas">&#xf0c9;</i></button>
    </div>
    <div class="nav-right">
      <a class="nav-item" href="#">Luyện thi</a>
      <a class="nav-item" href="#">Thành viên</a>
      <a class="nav-item" href="#"><i class="fas fa-bell"></i></a>
      <div class="nav-btn-item">
        @auth
          <a id="btn-personal">{{ \Illuminate\Support\Facades\Auth::user()->name }}</a>
          <div class="personal-list">
            <a class="personal-item" href="#">Thống kê</a>
            <a class="personal-item" href="{{ route('user.index') }}">Quản lý cá nhân</a>
            <a class="personal-item" href="{{ route('change_password.edit') }}">Đổi mật khẩu</a>
            <a class="personal-item" href="{{ route('logout.index') }}">Đăng xuất</a>
          </div>
        @endauth
        @guest
          <a id="btn-personal"><i class="fas fa-user"></i></a>
          <div class="personal-list">
            <a class="personal-item" href="{{ route('login.index') }}">Đăng nhập</a>
            <a class="personal-item" href="{{ route('register.index') }}">Đăng ký</a>
          </div>
        @endguest
      </div>
    </div>
  </div>
</div>
