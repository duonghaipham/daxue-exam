<div class="exam-status">
  <div class="exam-status-container">
    @include('exam.partial.breadcrumb')
    <div class="manipulation frame">
      <h1>{{ $exam->name }}</h1>
      <ul class="info list">
        <li class="item"><span class="label">{{ __('layout.exam.opened_at') }}:</span> <span>{{ $exam->created_at->format('H:i j/n/Y') }}</span></li>
        <li class="item"><span class="label">{{ __('layout.exam.closed_at') }}:</span> <span>{{ date('H:i j/n/Y', strtotime($exam->closed_at)) }}</span></li>
        <li class="item"><span class="label">{{ __('layout.subject.creator') }}:</span> <span>{{ $exam->user->name }}</span></li>
      </ul>
      <p class="description">{{ $exam->description }}</p>
      <ul class="essential-info list">
        <li class="item"><span class="label">{{ __('layout.exam.attempt_limit') }}:</span> <span>{{ $exam->attempt_limit }}</span></li>
        <li class="item"><span class="label">{{ __('layout.exam.time_limit') }}:</span> <span>{{ trans_choice('layout.exam.minute', $exam->minute_limit, ['minute' => $exam->minute_limit]) }}</span></li>
        <li class="item"><span class="label">{{ __('layout.exam.number_questions') }}:</span> <span>{{ $exam->questions->count() }}</span></li>
      </ul>
      @if($works->count() != 0)
        <table class="table-state">
          <tr>
            <th>{{ __('layout.exam.status') }}</th>
            <th>{{ __('layout.exam.time_limit') }}</th>
            <th>{{ __('layout.exam.result') }}</th>
          </tr>
          @foreach($works as $work)
            <tr>
              <td>
                <p class="state">{{ __('layout.exam.completed') }}</p>
                <p class="submitted">{{ __('layout.exam.submitted_at', ['timestamp' => $work->created_at->format('H:i:s j/n/Y')]) }}</p>
              </td>
              <td>
                {{ trans_choice('layout.exam.minute', intdiv($work->second, 60), ['minute' => intdiv($work->second, 60)]) }}
                {{ trans_choice('layout.exam.second', $work->second % 60, ['second' => $work->second % 60]) }}
              </td>
              <td>
                <a href="{{ route('exam.review', ['id' => $exam->id, 'attempt' => $work->attempt]) }}">{{ $work->out_of }}</a>/{{ $exam->questions->count() }}
              </td>
            </tr>
          @endforeach
        </table>
      @endif
      @if($works->count() < $exam->attempt_limit && \Carbon\Carbon::now()->lessThan(\Carbon\Carbon::createFromTimeString($exam->closed_at)))
        <a href="{{ route('exam.take', $exam->id) }}" class="btn-retry">{{ $works->count() == 0 ? __('layout.exam.start') : __('layout.exam.retry') }}</a>
      @endif
    </div>
  </div>
</div>
