const primitiveTime = document.getElementById('timer-value').innerText.split(':');
let minute = parseInt(primitiveTime[0]);
let second = parseInt(primitiveTime[1]);
let minuteTaken = 0;
let secondTaken = 0;
const baseSecond = 60 * minute + second;  // for calculating percentage later

// if the number has only one digit, push '0' before it
const fixTwoDigits = number => number.toString().length === 1 ? '0' + number : number;

const startTimer = () => {
  if (minute === 0 && second === 0) {
    clearInterval(interval);
    document.getElementById('form-exam').submit();
  }
  else {
    second -= 1;
    if (second < 0) {
      minute -= 1;
      second = 59;
    }

    secondTaken += 1;
    if (secondTaken === 60) {
      minuteTaken += 1;
      secondTaken = 0;
    }

    // calculate the remained percentage for progress bar;
    const percentage = (60 * minute + second) / baseSecond * 100;
    document.getElementById('timer-bar').style.width = percentage + '%';
    document.getElementById('timer-value').innerText = fixTwoDigits(minute) + ':' + fixTwoDigits(second);
    document.getElementById('timer-taken').value = minuteTaken + ':' + secondTaken;
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
});

// flag marks submitting action
let formSubmitting = false;

// if the action is submitting, then switch on the flag
document.getElementsByClassName('taking')[0].addEventListener('submit', () => {
  formSubmitting = true;
});

// Warn before unload the exam taking
window.addEventListener("beforeunload", event => {
  if (formSubmitting)
    return undefined;

  event.returnValue = '';
  return '';
});
