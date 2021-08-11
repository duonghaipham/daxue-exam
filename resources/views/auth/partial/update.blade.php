<form method="post" class="form-update">
  @csrf
  <ul class="update-info">
    <li class="update-info-item">
      <label for="full-name">Họ tên</label>
      <input type="text" class="typing" id="full-name" value="Phạm Hải Dương">
    </li>
    <li class="update-info-item">
      <label for="gender">Giới tính</label>
      <select name="gender" class="typing" id="gender">
        <option value="male" selected>Nam</option>
        <option value="female">Nữ</option>
      </select>
    </li>
    <li class="update-info-item">
      <label for="birthday">Ngày sinh</label>
      <input type="date" class="typing" id="birthday" value="2000-08-07">
    </li>
  </ul>
  <ul class="update-info">
    <li class="update-info-item">
      <label for="school">Trường</label>
      <input type="text" class="typing" id="school" value="THPT Lấp Vò 3">
    </li>
    <li class="update-info-item">
      <label for="class">Lớp</label>
      <input type="text" class="typing" id="class" value="12A1">
    </li>
    <li class="update-info-item">
      <label for="province">Tỉnh/thành phố</label>
      <input type="text" class="typing" id="province" value="Đồng Tháp">
    </li>
    <li class="update-info-item">
      <label for="email">Thư điện tử</label>
      <input type="email" class="typing" id="email" value="haiduongzzz123@gmail.com">
    </li>
    <li class="update-info-item">
      <label for="phone">Điện thoại</label>
      <input type="text" class="typing" id="phone" value="0907665xxx">
    </li>
  </ul>
  <button type="submit" class="btn-update">Cập nhật</button>
</form>
