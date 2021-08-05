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
    if (detail.style.maxHeight)
      detail.style.maxHeight = null;
    else {
      const scrollHeight = detail.scrollHeight;
      const panel = detail.parentElement.parentElement;
      detail.style.maxHeight = scrollHeight + 'px';
      panel.style.maxHeight = parseInt(panel.style.maxHeight) + scrollHeight + 'px';
    }
  });
}

// Click on filter button
document.getElementById('btn-filter').addEventListener('click', event => {
  event.currentTarget.nextElementSibling.classList.toggle('show');
});

// Click on making filter button
document.getElementById('btn-filter-ok').addEventListener('click', () => {
  const nameQuery = document.getElementById('name').value.toUpperCase();
  const yearQuery = document.getElementById('year').value;
  const creatorQuery = document.getElementById('creator').value.toUpperCase();
  const listPanelItems = document.getElementsByClassName('panel-item');

  for (const panelItem of listPanelItems) {
    const name = panelItem.getElementsByClassName('name-topic')[0].innerHTML.toUpperCase();
    const year = panelItem.getElementsByClassName('year-published')[0].innerHTML.toUpperCase();
    const creator = panelItem.getElementsByClassName('creator')[0].innerHTML.toUpperCase();

    if ((name.includes(nameQuery) && nameQuery) ||
        (year.includes(yearQuery) && yearQuery) ||
        (creator.includes(creatorQuery) && creatorQuery))
      panelItem.style.display = 'block';
    else
      panelItem.style.display = 'none';

    // if there is not any input, then restore/show the filtered item
    if (!nameQuery && !yearQuery && !creatorQuery)
      panelItem.style.display = 'block';

    // hide the filter box after clicking ok button
    document.getElementsByClassName('filter-overlay')[0].classList.toggle('show');
  }
});

// Click outside the filter overlay/click on the overlay screen (< 1000px)
window.addEventListener('click', event => {
  const target = event.target;
  const filterOverlay = document.getElementsByClassName('filter-overlay')[0];
  if (!target.matches('#btn-filter') &&
      (!filterOverlay.contains(target) || filterOverlay === target))  // first expression is for >1000px screen
    if (filterOverlay.classList.contains('show'))
      filterOverlay.classList.remove('show');
});
