@extends('exam.layout.master')

@section('timer')
  @parent
  <div class="timer">
    <div class="timer-count">
      <input name="timer" id="timer-value" value="{{ $exam->minute_limit }}:00" readonly />
      <i id="btn-eye" class="fas fa-eye"></i>
    </div>
    <div id="timer-progress">
      <div id="timer-bar"></div>
    </div>
  </div>
@stop

@section('content')
  @foreach($exam->questions as $key_question => $value_question)
    <li class="question-item">
      <div class="question-mark">
        <h3>Câu <span class="number">{{ $key_question + 1 }}</span></h3>
      </div>
      <div class="content">
        <div class="question">
          <p class="question-text">{{ $value_question->content }}</p>
          <ul class="options">
            @foreach($value_question->answers as $key_answer => $value_answer)
              <li class="option">
                <input
                  type="radio"
                  name="question_{{ $key_question + 1 }}"
                  id="option-{{ $key_question + 1 }}-{{ $key_answer + 1 }}" />
                <label for="option-{{ $key_question + 1 }}-{{ $key_answer + 1 }}">
                  <span class="option-char">{{ chr($key_answer + 65) }}.</span>
                  <span class="option-text">{{ $value_answer->content }}</span>
                </label>
              </li>
            @endforeach
          </ul>
        </div>
      </div>
    </li>
  @endforeach
@stop

@section('btn_submit')
  @parent
  <button type="submit" class="btn-submit-exam">Nộp bài</button>
@stop
