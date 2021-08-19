<div class="pw-changing">
  <form class="pw-changing-container auth" method="post" action="{{ route('change_password.update') }}">
    @csrf
    <h2 class="header">{{ __('layout.layout.change_password') }}</h2>
    <div class="typing-section">
      <div class="item">
        <label for="current-password">{{ __('layout.change_password.current_password') }}</label>
        <div class="input">
          <i class="fas fa-lock"></i>
          <input type="password" name="current_password" id="current-password"/>
        </div>
        @error('current_password')
          <p class="error">{{ $message }}</p>
        @enderror
      </div>
      <div class="item">
        <label for="new-password">{{ __('layout.change_password.new_password') }}</label>
        <div class="input">
          <i class="fas fa-lock"></i>
          <input type="password" name="new_password" id="new-password"/>
        </div>
        @error('new_password')
          <p class="error">{{ $message }}</p>
        @enderror
      </div>
      <div class="item">
        <label for="confirmed-password">{{ __('layout.register.confirmed_password') }}</label>
        <div class="input">
          <i class="fas fa-lock"></i>
          <input type="password" name="confirmed_password" id="confirmed-password"/>
        </div>
        @error('confirmed_password')
          <p class="error">{{ $message }}</p>
        @enderror
      </div>
      @if(session()->has('status'))
        <p class="success">{{ session()->get('status') }}</p>
      @endif
      <button type="submit" class="btn-submit">{{ __('layout.layout.change_password') }}</button>
    </div>
  </form>
</div>
