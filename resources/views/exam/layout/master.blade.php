<div class="exam-taking">
  <div class="exam-taking-container">
    @include('exam.partial.breadcrumb')
    @section('result_table')
    @show
    <form method="post" class="taking">
      @csrf
      @section('timer')
      @show
      <ul class="main">
        @section('content')
        @show
      </ul>
      @section('btn_submit')
      @show
    </form>
  </div>
</div>
