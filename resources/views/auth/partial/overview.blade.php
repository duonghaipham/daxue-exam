<div class="profile-picture-container">
  <img src="{{ url("img/dump.jpg") }}" alt="My profile picture" class="profile-picture" />
</div>
<ul class="profile-info">
  <li class="profile-info-item">
    <div class="label">{{ __('layout.user.id') }}</div>
    <div class="value">{{ $id }}</div>
  </li>
  <li class="profile-info-item">
    <div class="label">{{ __('layout.login.username') }}</div>
    <div class="value">{{ $username }}</div>
  </li>
  <li class="profile-info-item">
    <div class="label">{{ __('layout.user.date_of_birth') }}</div>
    <div class="value">{{ date('d/m/Y', strtotime($dateOfBirth)) }}</div>
  </li>
  <li class="profile-info-item">
    <div class="label">{{ __('layout.user.gender') }}</div>
    <div class="value">@isset($gender){{ __('layout.user.' . $gender) }}@endisset</div>
  </li>
</ul>
<ul class="profile-info">
  <li class="profile-info-item">
    <div class="label">{{ __('layout.user.school') }}</div>
    <div class="value">{{ $school }}</div>
  </li>
  <li class="profile-info-item">
    <div class="label">{{ __('layout.user.class') }}</div>
    <div class="value">{{ $class }}</div>
  </li>
  <li class="profile-info-item">
    <div class="label">{{ __('layout.user.city_or_province') }}</div>
    <div class="value">{{ $city }}</div>
  </li>
  <li class="profile-info-item">
    <div class="label">{{ __('layout.user.email') }}</div>
    <div class="value">
      <a href="mailto:haiduongzzz123@gmail.com">{{ $email }}</a>
    </div>
  </li>
  <li class="profile-info-item">
    <div class="label">{{ __('layout.user.phone_number') }}</div>
    <div class="value">{{ $phone }}</div>
  </li>
</ul>
