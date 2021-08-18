<div class="exam-taking">
  <div class="exam-taking-container">
    @include('exam.partial.breadcrumb')
    @section('result_table')
    @show
    <form
      class="taking"
      @section('form_attributes')
      @show >
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
