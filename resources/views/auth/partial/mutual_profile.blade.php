<h1 class="full-name">{{ $name }}</h1>
<div class="tab">
  <a href="{{ route('user.index') }}" class="tab-item" id="overview">{{ __('layout.user.overview') }}</a>
  <a href="#" class="tab-item" id="statistics">{{ __('layout.user.statistics') }}</a>
  <a href="{{ route('user.edit') }}" class="tab-item" id="update">{{ __('layout.user.update') }}</a>
</div>
