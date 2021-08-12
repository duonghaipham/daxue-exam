<h1 class="full-name">{{ $name }}</h1>
<div class="tab">
  <a href="{{ route('user.index') }}" class="tab-item" id="overview">Tổng quan</a>
  <a href="#" class="tab-item" id="statistics">Thống kê</a>
  <a href="{{ route('user.edit') }}" class="tab-item" id="update">Cập nhật</a>
</div>
