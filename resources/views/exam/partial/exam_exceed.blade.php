<div class="exceed">
  <div class="exceed-container">
    <h2 class="header"><i class="fas fa-exclamation"></i></h2>
    <div class="main">
      <p class="info">{{ session()->get('exception') }}</p>
      <a href="{{ route('exam.index', $id) }}">Về trang bài thi</a>
    </div>
  </div>
</div>
