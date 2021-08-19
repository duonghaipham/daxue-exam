<form method="post" class="form-update" action="{{ route('user.update') }}">
  @csrf
  <ul class="update-info">
    <li class="update-info-item">
      <label for="full-name">{{ __('layout.register.name') }}</label>
      <input type="text" name="full_name" class="typing" id="full-name" value="{{ $name }}">
    </li>
    <li class="update-info-item">
      <label for="gender">{{ __('layout.user.gender') }}</label>
      <select name="gender" class="typing" id="gender">
        <option value="male" {{ ($gender == 'male') ? 'selected' : '' }}>{{ __('layout.user.male') }}</option>
        <option value="female" {{ ($gender == 'female') ? 'selected' : '' }}>{{ __('layout.user.female') }}</option>
      </select>
    </li>
    <li class="update-info-item">
      <label for="birthday">{{ __('layout.user.date_of_birth') }}</label>
      <input type="date" name="date_of_birth" class="typing" id="birthday" value="{{ $dateOfBirth }}">
    </li>
  </ul>
  <ul class="update-info">
    <li class="update-info-item">
      <label for="school">{{ __('layout.user.school') }}</label>
      <input type="text" name="school" class="typing" id="school" value="{{ $school }}">
    </li>
    <li class="update-info-item">
      <label for="class">{{ __('layout.user.class') }}</label>
      <input type="text" name="class" class="typing" id="class" value="{{ $class }}">
    </li>
    <li class="update-info-item">
      <label for="province">{{ __('layout.user.city_or_province') }}</label>
      <input type="text" name="city" class="typing" id="province" value="{{ $city }}">
    </li>
    <li class="update-info-item">
      <label for="email">{{ __('layout.user.email') }}</label>
      <input type="email" name="email" class="typing" id="email" value="{{ $email }}">
    </li>
    <li class="update-info-item">
      <label for="phone">{{ __('layout.user.phone_number') }}</label>
      <input type="text" name="phone" class="typing" id="phone" value="{{ $phone }}">
    </li>
  </ul>
  <button type="submit" class="btn-update">{{ __('layout.user.update') }}</button>
</form>
