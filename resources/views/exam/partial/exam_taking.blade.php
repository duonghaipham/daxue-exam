<div class="exam-taking">
  <div class="exam-taking-container">
    @include('exam.partial.breadcrumb')
    <table class="result">
      <tr class="row">
        <td class="label">Bắt đầu thi</td>
        <td class="value">09/08/2021 18:49</td>
      </tr>
      <tr class="row">
        <td class="label">Trạng thái</td>
        <td class="value">Hoàn thành</td>
      </tr>
      <tr class="row">
        <td class="label">Kết thúc khi</td>
        <td class="value">10/08/2021 18:49</td>
      </tr>
      <tr class="row">
        <td class="label">Thời gian</td>
        <td class="value">27 phút 10 giây</td>
      </tr>
      <tr class="row">
        <td class="label">Số câu đúng</td>
        <td class="value">32/40</td>
      </tr>
    </table>
    <form method="post" class="taking">
      @csrf
      <ul class="main">
        <li class="question-item">
          <div class="question-mark">
            <h3>Câu <span class="number">1</span></h3>
            <i class="fas fa-check" style="color: #3da933"></i>
  {{--          <i class="fas fa-times" style="color: #dc0f14"></i>--}}
          </div>
          <div class="content">
            <div class="question">
              <p class="question-text">Giặc Ân là giặc nào?</p>
              <ul class="options">
                <li class="option">
                  <input type="radio" name="question_1" id="option-1"/>
                  <label for="option-1">
                    <span class="option-char">a.</span>
                    <span class="option-text">Nhà Hạ</span>
                  </label>
                </li>
                <li class="option">
                  <input type="radio" name="question_1" id="option-2"/>
                  <label for="option-2">
                    <span class="option-char">b.</span>
                    <span class="option-text">Nhà Thương</span>
                  </label>
                </li>
                <li class="option">
                  <input type="radio" name="question_1" id="option-3"/>
                  <label for="option-3">
                    <span class="option-char">c.</span>
                    <span class="option-text">Nhà Chu</span>
                  </label>
                </li>
                <li class="option">
                  <input type="radio" name="question_1" id="option-4"/>
                  <label for="option-4">
                    <span class="option-char">d.</span>
                    <span class="option-text">Nhà Tần</span>
                  </label>
                </li>
              </ul>
            </div>
            <p class="answer">Đáp án đúng là:<span class="answer-text">Nhà Thương</span></p>
          </div>
        </li>
      </ul>
      <button type="submit" class="btn-submit-exam">Nộp bài</button>
    </form>
  </div>
</div>
