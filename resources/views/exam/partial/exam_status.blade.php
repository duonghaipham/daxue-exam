<div class="exam-status">
  <div class="exam-status-container">
    @include('exam.partial.breadcrumb')
    <div class="manipulation frame">
      <h1>{{ $exam->name }}</h1>
      <ul class="info list">
        <li class="item"><span class="label">Đề mở vào:</span> <span>{{ $exam->created_at->format('H:i j/n/Y') }}</span></li>
        <li class="item"><span class="label">Đề đóng vào:</span> <span>{{ date('H:i j/n/Y', strtotime($exam->closed_at)) }}</span></li>
        <li class="item"><span class="label">Người đăng:</span> <span>{{ $exam->user->name }}</span></li>
      </ul>
      <p class="description">{{ $exam->description }}</p>
      <ul class="essential-info list">
        <li class="item"><span class="label">Số lần làm bài:</span> <span>{{ $exam->attempt_limit }}</span></li>
        <li class="item"><span class="label">Thời gian:</span> <span>{{ $exam->minute_limit }} phút</span></li>
        <li class="item"><span class="label">Số câu:</span> <span>{{ $exam->questions->count() }}</span></li>
      </ul>
      @if($exam->users->count() != 0)
      <table class="table-state">
        <tr>
          <th>Trạng thái</th>
          <th>Thời gian</th>
          <th>Kết quả</th>
        </tr>
        @foreach($exam->users as $work)
          <tr>
            <td>
              <p class="state">Hoàn thành</p>
              <p class="submitted">Nộp lúc {{ $work->created_at->format('H:i j/n/Y') }}</p>
            </td>
            <td>
              {{ intdiv($work->pivot->second, 60) }} phút
              {{ $work->pivot->second % 60 }} giây
            </td>
            <td>
              <a href="{{ route('exam.review', ['id' => $exam->id, 'attempt' => $work->pivot->attempt]) }}">{{ $work->pivot->out_of }}</a>/{{ $exam->questions->count() }}
            </td>
          </tr>
        @endforeach
      </table>
      @endif
      <a href="{{ route('exam.take', $exam->id) }}" class="btn-retry">{{ $exam->users->count() == 0 ? 'Bắt đầu làm' : 'Làm lại' }}</a>
    </div>
  </div>
</div>
