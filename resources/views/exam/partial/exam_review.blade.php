@extends('exam.layout.master')

@section('result_table')
  @parent
  <table class="result">
    <tr class="row">
      <td class="label">{{ __('layout.exam.started_at') }}</td>
      <td class="value">{{ date('H:i:s j/n/Y', strtotime($work->started_at)) }}</td>
    </tr>
    <tr class="row">
      <td class="label">{{ __('layout.exam.status') }}</td>
      <td class="value">{{ __('layout.exam.completed') }}</td>
    </tr>
    <tr class="row">
      <td class="label">{{ __('layout.exam.ended_at') }}</td>
      <td class="value">{{ $work->created_at->format('H:i:s j/n/Y') }}</td>
    </tr>
    <tr class="row">
      <td class="label">{{ __('layout.exam.time_limit') }}</td>
      <td class="value">
        {{ trans_choice('layout.exam.minute', intdiv($work->second, 60), ['minute' => intdiv($work->second, 60)]) }}
        {{ trans_choice('layout.exam.second', $work->second % 60, ['second' => $work->second % 60]) }}
      </td>
    </tr>
    <tr class="row">
      <td class="label">{{ __('layout.exam.out_of') }}</td>
      <td class="value">{{ $work->out_of }}/{{ $exam->questions->count() }}</td>
    </tr>
  </table>
@stop

@section('content')
  @parent
  @foreach($exam->questions as $key_question => $value_question)
    <li class="question-item">
      <div class="question-mark">
        <h3>{{ __('layout.exam.question') }} <span class="number">{{ $key_question + 1 }}</span></h3>
        @if($results[$key_question]->answer_id == $value_question->answer_id)
          <i class="fas fa-check" style="color: #3da933"></i>
        @else
          <i class="fas fa-times" style="color: #dc0f14"></i>
        @endif
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
                  id="option-{{ $key_question + 1 }}-{{ $key_answer + 1 }}"
                  {{ ($results[$key_question]->answer_id == ($key_answer + 1)) ? 'checked' : '' }}
                  disabled />
                <label for="option-{{ $key_question + 1 }}-{{ $key_answer + 1 }}">
                  <span class="option-char">{{ chr($key_answer + 65) }}.</span>
                  <span class="option-text">{{ $value_answer->content }}</span>
                </label>
              </li>
            @endforeach
          </ul>
        </div>
        <p class="answer">{{ __('layout.exam.answer') }}<span class="answer-text">{{ $value_question->answer->content }}</span></p>
      </div>
    </li>
  @endforeach
@stop
