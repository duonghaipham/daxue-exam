const url = document.URL;
let activeTab;

if (url.includes('update'))
  activeTab = document.getElementById('update');
else if (url.includes('statistic'))
  activeTab = document.getElementById('statistics');
else
  activeTab = document.getElementById('overview');

activeTab.classList.add('active');
