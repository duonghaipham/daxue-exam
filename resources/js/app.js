require('./bootstrap');

// Click on personal button
document.getElementById('btn-personal').addEventListener('click', (e) => {
  const personalList = document.getElementsByClassName('personal-list')[0];
  if (personalList.style.maxHeight)
    personalList.style.maxHeight = null;
  else
    personalList.style.maxHeight = personalList.scrollHeight + 'px';
});

// Click outside the personal dropdown
window.addEventListener('click', event => {
  if (!event.target.matches('#btn-personal') &&
      !event.target.matches('.fa-user')) {
    const dropdown = document.getElementsByClassName('personal-list')[0];
    if (dropdown.style.maxHeight != null)
      dropdown.style.maxHeight = null;
  }
});

// Click on menu button
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

// Highlight the current language
const language = document.documentElement.lang;
document.getElementById(language + '-lang').classList.add('active-lang');
