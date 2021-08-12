<div class="register">
  <form class="register-container auth" method="post" action="{{ route('register.store') }}">
    @csrf
    <h2 class="header">Đăng ký</h2>
    <div class="typing-section">
      <div class="item">
        <label for="username">Tên đăng nhập</label>
        <div class="input">
          <i class="fas fa-user"></i>
          <input type="text" name="username" id="username"/>
        </div>
      </div>
      <div class="item">
        <label for="full-name">Họ tên</label>
        <div class="input">
          <i class="fas fa-minus"></i>
          <input type="text" name="full_name" id="full-name"/>
        </div>
      </div>
      <div class="item">
        <label for="password">Mật khẩu</label>
        <div class="input">
          <i class="fas fa-lock"></i>
          <input type="password" name="password" id="password"/>
        </div>
      </div>
      <div class="item">
        <label for="confirmed-password">Xác nhận mật khẩu</label>
        <div class="input">
          <i class="fas fa-lock"></i>
          <input type="password" name="confirmed_password" id="confirmed-password"/>
        </div>
      </div>
      <button type="submit" class="btn-submit">Đăng nhập</button>
    </div>
  </form>
</div>
