<div class="login">
  <form class="login-container auth" method="post" action="{{ route('login.authenticate') }}">
    @csrf
    <h2 class="header">{{ __('layout.layout.login') }}</h2>
    <div class="typing-section">
      <div class="item">
        <label for="username">{{ __('layout.login.username') }}</label>
        <div class="input">
          <i class="fas fa-user"></i>
          <input type="text" name="username" id="username"/>
        </div>
      </div>
      <div class="item">
        <label for="password">{{ __('layout.login.password') }}</label>
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
      @if(session()->has('status'))
        <p class="success">{{ session()->get('status') }}</p>
      @endif
      <button type="submit" class="btn-submit">{{ __('layout.layout.login') }}</button>
    </div>
  </form>
</div>
