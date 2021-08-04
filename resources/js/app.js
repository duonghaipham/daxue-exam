require('./bootstrap');

// Click on personal button
document.getElementById('btn-personal').addEventListener('click', (e) => {
  document.getElementById('personal-list').classList.toggle('w3-show');
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

// Click on exam button
const listBtnAccordions = document.getElementsByClassName('btn-accordion');
for (const btnAccordion of listBtnAccordions) {
  btnAccordion.addEventListener('click', (event) => {
    btnAccordion.classList.toggle('active');
    const panel = btnAccordion.nextElementSibling;
    if (panel.style.maxHeight)
      panel.style.maxHeight = null;
    else
      panel.style.maxHeight = panel.scrollHeight + 'px';
  });
}

// Click on info button
const listBtnItemInfos = document.getElementsByClassName('btn-item-info');
for (const itemInfo of listBtnItemInfos) {
  itemInfo.addEventListener('click', event => {
    const detail = itemInfo.parentElement.nextElementSibling;
    if (detail.style.maxHeight) {
      detail.style.maxHeight = null;
      // detail.style.marginTop = '0px';
    }
    else {
      const scrollHeight = detail.scrollHeight;
      const panel = detail.parentElement.parentElement;
      // detail.style.marginTop = '10px';
      detail.style.maxHeight = scrollHeight + 'px';
      panel.style.maxHeight = parseInt(panel.style.maxHeight) + scrollHeight + 'px';
    }
  });
}
