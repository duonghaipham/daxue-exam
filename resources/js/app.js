require('./bootstrap');

// Click on personal button
document.getElementById('btn-personal').addEventListener('click', (e) => {
  const personalList = document.getElementById('personal-list');
  if (personalList.classList.contains('w3-show'))
    personalList.classList.remove('w3-show');
  else
    personalList.classList.add('w3-show');
});

// Click outside the personal dropdown
window.addEventListener('click', event => {
  if (!event.target.matches('#btn-personal') &&
      !event.target.matches('.fa-user')) {
    const dropdown = document.getElementById('personal-list');
    if (dropdown.classList.contains('w3-show'))
      dropdown.classList.remove('w3-show');
  }
});

document.getElementById('btn-menu').addEventListener('click', event => {
  const navRight = document.getElementsByClassName('nav-right')[0];
  const icon = event.currentTarget.firstElementChild;

  if (navRight.classList.contains('show')) {
    navRight.classList.remove('show');
    icon.innerHTML = '&#xf0c9;'
  }
  else {
    navRight.classList.add('show');
    icon.innerHTML = '&#xf00d;';
  }
});
