<form method="post" class="form-update" action="{{ route('user.update') }}">
  @csrf
  <ul class="update-info">
    <li class="update-info-item">
      <label for="full-name">Họ tên</label>
      <input type="text" name="full_name" class="typing" id="full-name" value="{{ $name }}">
    </li>
    <li class="update-info-item">
      <label for="gender">Giới tính</label>
      <select name="gender" class="typing" id="gender">
        <option value="male" {{ ($gender == 'Nam') ? 'selected' : '' }}>Nam</option>
        <option value="female" {{ ($gender == 'Nữ') ? 'selected' : '' }}>Nữ</option>
      </select>
    </li>
    <li class="update-info-item">
      <label for="birthday">Ngày sinh</label>
      <input type="date" name="date_of_birth" class="typing" id="birthday" value="{{ $dateOfBirth }}">
    </li>
  </ul>
  <ul class="update-info">
    <li class="update-info-item">
      <label for="school">Trường</label>
      <input type="text" name="school" class="typing" id="school" value="{{ $school }}">
    </li>
    <li class="update-info-item">
      <label for="class">Lớp</label>
      <input type="text" name="class" class="typing" id="class" value="{{ $class }}">
    </li>
    <li class="update-info-item">
      <label for="province">Tỉnh/thành phố</label>
      <input type="text" name="city" class="typing" id="province" value="{{ $city }}">
    </li>
    <li class="update-info-item">
      <label for="email">Thư điện tử</label>
      <input type="email" name="email" class="typing" id="email" value="{{ $email }}">
    </li>
    <li class="update-info-item">
      <label for="phone">Điện thoại</label>
      <input type="text" name="phone" class="typing" id="phone" value="{{ $phone }}">
    </li>
  </ul>
  <button type="submit" class="btn-update">Cập nhật</button>
</form>
