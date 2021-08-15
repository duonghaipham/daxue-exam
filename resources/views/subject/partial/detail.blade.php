<div class="decoration">
  <img src="{{ url('img/subject-' . $subject->id . '.jpg') }}" alt="Mathematics" />
  <div class="overlay">
    <blockquote>
      <p class="content">"{{ $quote->content }}"</p>
      <p class="author">- {{ $quote->author }}</p>
    </blockquote>
  </div>
</div>
<div class="subject-content">
  <div class="subjects-container">
    <div class="subject-head">
      <h1>{{ $subject->name }}</h1>
      <div class="filter">
        <i class="fas fa-filter" id="btn-filter"></i>
        <div class="filter-overlay">
          <div class="filter-content">
            <h4 class="filter-head">Lọc/tìm kiếm</h4>
            <div class="filter-typing">
              <label for="name">Tên</label>
              <input type="text" autocomplete="off" placeholder="Đề thi lịch sử" id="name" />
              <label for="year">Năm ra</label>
              <input type="text" placeholder="2021" id="year" />
              <label for="creator">Người đăng</label>
              <input type="text" placeholder="tyler" id="creator" />
            </div>
            <button id="btn-filter-ok">OK</button>
          </div>
        </div>
      </div>
    </div>
    <div class="accordion" id="test">
      <button class="btn-accordion">Đề thi<i class="fas"></i></button>
      <ul class="panel">
        @foreach($tests as $test)
        <li class="panel-item">
          <div class="panel-head">
            <i class="icon far fa-file-alt"></i>
            <a href="/exam/view" class="name-topic">{{ $test->name }}</a>
            <i class="btn-item-info far fa-question-circle"></i>
          </div>
          <ul class="panel-detail">
            <li class="item-detail">Năm phát hành:<span class="year-published">{{ $test->year_published }}</span></li>
            <li class="item-detail">Người đăng:<span class="creator">{{ $test->creator }}</span></li>
            <li class="item-detail">Ngày đăng:<span class="date-posted">{{ $test->created_at }}</span></li>
            <li class="item-detail">Đã làm bài:<span class="done-number">{{ $test->total }}</span></li>
          </ul>
        </li>
        @endforeach
      </ul>
    </div>
    <div class="accordion" id="revision">
      <button class="btn-accordion">Ôn tập<i class="fas"></i></button>
      <ul class="panel">
        @foreach($revisions as $revision)
          <li class="panel-item">
            <div class="panel-head">
              <i class="icon far fa-file-alt"></i>
              <a href="/exam/view" class="name-topic">{{ $revision->name }}</a>
              <i class="btn-item-info far fa-question-circle"></i>
            </div>
            <ul class="panel-detail">
              <li class="item-detail">Năm phát hành:<span class="year-published">{{ $revision->year_published }}</span></li>
              <li class="item-detail">Người đăng:<span class="creator">{{ $revision->creator }}</span></li>
              <li class="item-detail">Ngày đăng:<span class="date-posted">{{ $revision->created_at }}</span></li>
              <li class="item-detail">Đã làm bài:<span class="done-number">{{ $revision->total }}</span></li>
            </ul>
          </li>
        @endforeach
      </ul>
    </div>
  </div>
</div>
