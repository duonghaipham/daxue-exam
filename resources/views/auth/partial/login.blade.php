<div class="login">
  <form class="login-container auth" method="post" action="/authenticate">
    @csrf
    <h2 class="header">Đăng nhập</h2>
    <div class="typing-section">
      <div class="item">
        <label for="username">Tên đăng nhập</label>
        <div class="input">
          <i class="fas fa-user"></i>
          <input type="text" name="username" id="username"/>
        </div>
      </div>
      <div class="item">
        <label for="password">Mật khẩu</label>
        <div class="input">
          <i class="fas fa-lock"></i>
          <input type="password" name="password" id="password"/>
        </div>
      </div>
      <button type="submit" class="btn-submit">Đăng nhập</button>
    </div>
  </form>
</div>
