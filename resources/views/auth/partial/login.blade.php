<div class="login">
  <form class="login-container auth" method="post" action="{{ route('login.authenticate') }}">
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
      @if($errors->any())
        <ul class="list-errors">
          @foreach($errors->all() as $error)
            <li class="error">{{ $error }}</li>
          @endforeach
        </ul>
      @endif
      @if(\Illuminate\Support\Facades\Session::has('status'))
        <p class="success">{{ \Illuminate\Support\Facades\Session::get('status') }}</p>
      @endif
      <button type="submit" class="btn-submit">Đăng nhập</button>
    </div>
  </form>
</div>
