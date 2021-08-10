const primitiveTime = document.getElementById('timer-value').value.split(':');
let minute = parseInt(primitiveTime[0]);
let second = parseInt(primitiveTime[1]);
const baseSecond = 60 * minute + second;  // for calculating percentage later

// if the number has only on digit, push '0' before it
const fixTwoDigits = number => number.toString().length === 1 ? '0' + number : number;

const startTimer = () => {
  if (minute === 0 && second === 0) {
    clearInterval(interval);
    document.getElementsByClassName('btn-submit-exam')[0].click();
  }
  else {
    second -= 1;
    if (second < 0) {
      minute -= 1;
      second = 59;
    }

    // calculate the remained percentage for progress bar;
    const percentage = (60 * minute + second) / baseSecond * 100;
    document.getElementById('timer-bar').style.width = percentage + '%';
    document.getElementById('timer-value').value = fixTwoDigits(minute) + ':' + fixTwoDigits(second);
  }
}

const interval = setInterval(startTimer, 1000);

// Click on eye button (show and hide timer)
document.getElementById('btn-eye').addEventListener('click', event => {
  const eye = event.target;
  if (eye.classList.contains('fa-eye')) {
    eye.classList.remove('fa-eye');
    eye.classList.add('fa-eye-slash');
    document.getElementById('timer-value').style.display = 'none';
    document.getElementsByClassName('timer-count')[0].style.justifyContent = 'flex-end';
  }
  else {
    eye.classList.remove('fa-eye-slash');
    eye.classList.add('fa-eye');
    document.getElementById('timer-value').style.display = 'block';
    document.getElementsByClassName('timer-count')[0].style.justifyContent = 'space-between';
  }
})
