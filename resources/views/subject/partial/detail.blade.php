<div class="decoration">
  <img src="{{ url('img/subject-' . $subject->id . '.jpg') }}" alt="Subject background" />
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
      <h1>{{ __('layout.home.subject.' . $subject->name) }}</h1>
      <div class="filter">
        <i class="fas fa-filter" id="btn-filter"></i>
        <div class="filter-overlay">
          <div class="filter-content">
            <h4 class="filter-head">{{ __('layout.subject.search_or_filter') }}</h4>
            <div class="filter-typing">
              <label for="name">{{ __('layout.subject.exam_name') }}</label>
              <input type="text" autocomplete="off" placeholder="Đề thi lịch sử" id="name" />
              <label for="year">{{ __('layout.subject.year_published') }}</label>
              <input type="text" placeholder="2021" id="year" />
              <label for="creator">{{ __('layout.subject.creator') }}</label>
              <input type="text" placeholder="tyler" id="creator" />
            </div>
            <button id="btn-filter-ok">OK</button>
          </div>
        </div>
      </div>
    </div>
    <div class="accordion" id="test">
      <button class="btn-accordion">{{ __('layout.subject.test') }}<i class="fas"></i></button>
      <ul class="panel">
        @foreach($tests as $test)
        <li class="panel-item">
          <div class="panel-head">
            <i class="icon far fa-file-alt"></i>
            <a href="{{ route('exam.index', $test->id) }}" class="name-topic">{{ $test->name }}</a>
            <i class="btn-item-info far fa-question-circle"></i>
          </div>
          <ul class="panel-detail">
            <li class="item-detail">{{ __('layout.subject.year_published') }}:<span class="year-published">{{ $test->year_published }}</span></li>
            <li class="item-detail">{{ __('layout.subject.creator') }}:<span class="creator">{{ $test->user->name }}</span></li>
            <li class="item-detail">{{ __('layout.subject.created_at') }}:<span class="date-posted">{{ $test->created_at->format('H:i j/n/Y') }}</span></li>
            <li class="item-detail">{{ __('layout.subject.number_attempts') }}:<span class="done-number">{{ $test->users->count() }}</span></li>
          </ul>
        </li>
        @endforeach
      </ul>
    </div>
    <div class="accordion" id="revision">
      <button class="btn-accordion">{{ __('layout.home.revision') }}<i class="fas"></i></button>
      <ul class="panel">
        @foreach($revisions as $revision)
          <li class="panel-item">
            <div class="panel-head">
              <i class="icon far fa-file-alt"></i>
              <a href="{{ route('exam.index', $revision->id) }}" class="name-topic">{{ $revision->name }}</a>
              <i class="btn-item-info far fa-question-circle"></i>
            </div>
            <ul class="panel-detail">
              <li class="item-detail">{{ __('layout.subject.year_published') }}:<span class="year-published">{{ $revision->year_published }}</span></li>
              <li class="item-detail">{{ __('layout.subject.creator') }}:<span class="creator">{{ $revision->user->name }}</span></li>
              <li class="item-detail">{{ __('layout.subject.created_at') }}:<span class="date-posted">{{ $revision->created_at }}</span></li>
              <li class="item-detail">{{ __('layout.subject.number_attempts') }}:<span class="done-number">{{ $revision->users->count() }}</span></li>
            </ul>
          </li>
        @endforeach
      </ul>
    </div>
  </div>
</div>
