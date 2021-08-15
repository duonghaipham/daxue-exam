<div class="subjects">
  <ul class="subjects-container">
    @foreach($subjects as $subject)
      <li class="subject">
        <a href="/subject/{{ $subject->id }}">{{ $subject->name }}</a>
        <p>Luyện đề: <a href="#">3</a></p>
        <p>Ôn tập: <a href="#">4</a></p>
      </li>
    @endforeach
  </ul>
</div>
