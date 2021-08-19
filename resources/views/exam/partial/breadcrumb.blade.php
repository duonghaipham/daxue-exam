<div class="status">
  <h1>{{ __('layout.home.subject.' . $exam->subject->name) }}</h1>
  <ul class="breadcrumb">
    <li class="breadcrumb-item">{{ __('layout.exam.subject') }}</li>
    <li class="breadcrumb-item"><a href="{{ route('subject.index', $exam->subject->id) }}">{{ __('layout.home.subject.' . $exam->subject->name) }}</a></li>
    <li class="breadcrumb-item">{{ __('layout.home.' . $exam->type) }}</li>
    <li class="breadcrumb-item"><a href="{{ route('exam.index', $exam->id) }}">{{ $exam->name }}</a></li>
  </ul>
</div>
