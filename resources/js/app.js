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
