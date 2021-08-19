<div class="cta">
  <img src="{{ url('img/bg.jpg') }}" alt="Background" />
  <div class="overlay">
    <div class="overlay-container">
      <h1>{{ __('layout.home.welcome') }}</h1>
      <div class="group-btn">
        <a href="{{ route('register.index') }}" class="cta-btn btn-join">{{ __('layout.home.join') }}</a>
        <a href="#" class="cta-btn btn-view">{{ __('layout.home.quick_view') }}</a>
      </div>
    </div>
  </div>
</div>
