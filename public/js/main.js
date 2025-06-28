// JavaScript for toggling sidebar thisnis the total code of the navigation bar
const sidebar = document.getElementById('sidebar');
const openSidebar = document.getElementById('openSidebar');
const closeSidebar = document.getElementById('closeSidebar');

openSidebar.addEventListener('click', () => {
    sidebar.classList.add('active');
});

closeSidebar.addEventListener('click', () => {
    sidebar.classList.remove('active');
});

 // Show welcome screen for 3 seconds
 window.addEventListener('load', () => {
    setTimeout(() => {
        document.getElementById('welcome-screen').style.display = 'none';
        document.getElementById('main-content').style.display = 'block';
    }, 3000); // 3 seconds
});

