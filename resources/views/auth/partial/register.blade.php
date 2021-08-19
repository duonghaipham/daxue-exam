<div class="register">
  <form class="register-container auth" method="post" action="{{ route('register.store') }}">
    @csrf
    <h2 class="header">{{ __('layout.layout.register') }}</h2>
    <div class="typing-section">
      <div class="item">
        <label for="username">{{ __('layout.login.username') }}</label>
        <div class="input">
          <i class="fas fa-user"></i>
          <input type="text" name="username" id="username" required/>
        </div>
      </div>
      <div class="item">
        <label for="full-name">{{ __('layout.register.name') }}</label>
        <div class="input">
          <i class="fas fa-minus"></i>
          <input type="text" name="full_name" id="full-name" required/>
        </div>
      </div>
      <div class="item">
        <label for="password">{{ __('layout.login.password') }}</label>
        <div class="input">
          <i class="fas fa-lock"></i>
          <input type="password" name="password" id="password" required/>
        </div>
      </div>
      <div class="item">
        <label for="confirmed-password">{{ __('layout.register.confirmed_password') }}</label>
        <div class="input">
          <i class="fas fa-lock"></i>
          <input type="password" name="confirmed_password" id="confirmed-password" required/>
        </div>
      </div>
      @if($errors->any())
        <ul class="list-errors">
          @foreach($errors->all() as $error)
            <li class="error">{{ $error }}</li>
          @endforeach
        </ul>
      @endif
      <button type="submit" class="btn-submit">{{ __('layout.layout.register') }}</button>
    </div>
  </form>
</div>
