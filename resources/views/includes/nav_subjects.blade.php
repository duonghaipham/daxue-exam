<div class="subjects">
  <ul class="subjects-container">
    @foreach($subjects as $subject)
      <li class="subject">
        <a href="{{ route('subject.index', $subject->id) }}">{{ $subject->name }}</a>
        <p>Luyện đề: <a href="{{ route('subject.index', $subject->id) }}#test">{{ $subject->amount_tests }}</a></p>
        <p>Ôn tập: <a href="{{ route('subject.index', $subject->id) }}#revision">{{ $subject->amount_revisions }}</a></p>
      </li>
    @endforeach
  </ul>
</div>
