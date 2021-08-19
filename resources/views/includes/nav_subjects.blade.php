<div class="subjects">
  <ul class="subjects-container">
    @foreach($subjects as $subject)
      <li class="subject">
        <a href="{{ route('subject.index', $subject->id) }}">{{ __('layout.home.subject.' . $subject->name) }}</a>
        <p>{{ __('layout.home.test') }}: <a href="{{ route('subject.index', $subject->id) }}#test">{{ $subject->amount_tests }}</a></p>
        <p>{{ __('layout.home.revision') }}: <a href="{{ route('subject.index', $subject->id) }}#revision">{{ $subject->amount_revisions }}</a></p>
      </li>
    @endforeach
  </ul>
</div>
