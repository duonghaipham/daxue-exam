<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font awesome 5 icon -->
  <script src="https://kit.fontawesome.com/d3981548c2.js" crossorigin="anonymous"></script>
  <!-- W3.CSS -->
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css" />
  <link rel="stylesheet" href={{ mix('css/app.css') }} />
  <title>Luyện thi xã hội</title>
</head>
<body>
  <div class="nav">
    <div class="nav-container">
      <a href="#"><img src="#" alt="Logo" /></a>
      <div class="nav-right">
        <a class="nav-item" href="#">Luyện thi</a>
        <a class="nav-item" href="#">Thành viên</a>
        <a class="nav-item" href="#"><i class="fas fa-bell"></i></a>
        <div class="w3-dropdown-click nav-btn-item">
          <button id="btn-personal"><i class="fas fa-user"></i></button>
          <div class="w3-dropdown-content w3-bar-block w3-animate-zoom" id="personal-list">
            <a class="w3-bar-item personal-item" href="#">Thống kê</a>
            <a class="w3-bar-item personal-item" href="#">Quản lý cá nhân</a>
            <a class="w3-bar-item personal-item" href="#">Đổi mật khẩu</a>
            <a class="w3-bar-item personal-item" href="#">Đăng xuất</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src={{ mix('js/app.js') }} type="text/javascript"></script>
</body>
</html>
