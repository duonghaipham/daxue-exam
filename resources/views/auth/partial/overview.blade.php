<div class="profile-picture-container">
  <img src="{{ url("img/dump.jpg") }}" alt="My profile picture" class="profile-picture" />
</div>
<ul class="profile-info">
  <li class="profile-info-item">
    <div class="label">Mã thành viên</div>
    <div class="value">{{ $id }}</div>
  </li>
  <li class="profile-info-item">
    <div class="label">Tên đăng nhập</div>
    <div class="value">{{ $username }}</div>
  </li>
  <li class="profile-info-item">
    <div class="label">Ngày sinh</div>
    <div class="value">{{ $dateOfBirth }}</div>
  </li>
  <li class="profile-info-item">
    <div class="label">Giới tính</div>
    <div class="value">{{ $gender }}</div>
  </li>
</ul>
<ul class="profile-info">
  <li class="profile-info-item">
    <div class="label">Trường</div>
    <div class="value">{{ $school }}</div>
  </li>
  <li class="profile-info-item">
    <div class="label">Lớp</div>
    <div class="value">{{ $school }}</div>
  </li>
  <li class="profile-info-item">
    <div class="label">Tỉnh/thành phố</div>
    <div class="value">{{ $city }}</div>
  </li>
  <li class="profile-info-item">
    <div class="label">Thư điện tử</div>
    <div class="value">
      <a href="mailto:haiduongzzz123@gmail.com">{{ $email }}</a>
    </div>
  </li>
  <li class="profile-info-item">
    <div class="label">Số điện thoại</div>
    <div class="value">{{ $phone }}</div>
  </li>
</ul>
