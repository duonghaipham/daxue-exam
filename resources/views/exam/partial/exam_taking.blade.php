<div class="exam-taking">
  <div class="exam-taking-container">
    @include('exam.partial.breadcrumb')
    <table class="result">
      <tr class="row">
        <td class="label">Bắt đầu thi</td>
        <td class="value">{{ $exam->created_at }}</td>
      </tr>
      <tr class="row">
        <td class="label">Trạng thái</td>
        <td class="value">Hoàn thành</td>
      </tr>
      <tr class="row">
        <td class="label">Kết thúc khi</td>
        <td class="value">{{ $exam->closed_at }}</td>
      </tr>
      <tr class="row">
        <td class="label">Thời gian</td>
        <td class="value">{{ intdiv($work->pivot->second, 60) }} phút {{ $work->pivot->second % 60 }} giây</td>
      </tr>
      <tr class="row">
        <td class="label">Số câu đúng</td>
        <td class="value">/{{ $exam->questions->count() }}</td>
      </tr>
    </table>
    <form method="post" class="taking">
      @csrf
      <div class="timer">
        <div class="timer-count">
          <input name="timer" id="timer-value" value="50:00" readonly />
          <i id="btn-eye" class="fas fa-eye"></i>
        </div>
        <div id="timer-progress">
          <div id="timer-bar"></div>
        </div>
      </div>
      <ul class="main">
        @foreach($exam->questions as $key_question => $value_question)
        <li class="question-item">
          <div class="question-mark">
            <h3>Câu <span class="number">{{ $key_question + 1 }}</span></h3>
            <i class="fas fa-check" style="color: #3da933"></i>
  {{--          <i class="fas fa-times" style="color: #dc0f14"></i>--}}
          </div>
          <div class="content">
            <div class="question">
              <p class="question-text">{{ $value_question->content }}</p>
              <ul class="options">
                @foreach($value_question->answers as $key_answer => $value_answer)
                <li class="option">
                  <input type="radio" name="question_{{ $key_question + 1 }}" id="option-{{ $key_question + 1 }}-{{ $key_answer + 1 }}"/>
                  <label for="option-{{ $key_question + 1 }}-{{ $key_answer + 1 }}">
                    <span class="option-char">{{ chr($key_answer + 65) }}.</span>
                    <span class="option-text">{{ $value_answer->content }}</span>
                  </label>
                </li>
                @endforeach
              </ul>
            </div>
            <p class="answer">Đáp án đúng là:<span class="answer-text">{{ $value_question->answer->content }}</span></p>
          </div>
        </li>
        @endforeach
      </ul>
      <button type="submit" class="btn-submit-exam">Nộp bài</button>
    </form>
  </div>
</div>
