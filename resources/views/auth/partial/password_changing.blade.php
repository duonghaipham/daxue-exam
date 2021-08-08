<div class="pw-changing">
  <form class="pw-changing-container auth" method="post">
    @csrf
    <h2 class="header">Đổi mật khẩu</h2>
    <div class="typing-section">
      <div class="item">
        <label for="current-password">Mật khẩu hiện tại</label>
        <div class="input">
          <i class="fas fa-lock"></i>
          <input type="password" name="current_password" id="current-password"/>
        </div>
      </div>
      <div class="item">
        <label for="new-password">Mật khẩu mới</label>
        <div class="input">
          <i class="fas fa-lock"></i>
          <input type="password" name="new_password" id="new-password"/>
        </div>
      </div>
      <div class="item">
        <label for="confirmed-password">Xác nhận mật khẩu</label>
        <div class="input">
          <i class="fas fa-lock"></i>
          <input type="password" name="confirmed_password" id="confirmed-password"/>
        </div>
      </div>
      <button type="submit" class="btn-submit">Đổi mật khẩu</button>
    </div>
  </form>
</div>
