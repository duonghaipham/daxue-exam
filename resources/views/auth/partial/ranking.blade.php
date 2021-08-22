<div class="ranking">
  <div class="ranking-container">
    <h1>{{ __('layout.layout.member') }}</h1>
    <table class="ranking-table">
      <tr class="ranking-head">
        <th>{{ __('layout.user.rank') }}</th>
        <th>{{ __('layout.register.name') }}</th>
        <th>{{ __('layout.user.city_or_province') }}</th>
        <th>{{ __('layout.user.attempt') }}</th>
      </tr>
      @foreach($members as $key => $value)
        <tr class="ranking-value">
          <td>{{ $key + 1 }}</td>
          <td>{{ $value->name }}</td>
          <td>{{ $value->city }}</td>
          <td>{{ $value->exams->count() }}</td>
        </tr>
      @endforeach
    </table>
  </div>
</div>
