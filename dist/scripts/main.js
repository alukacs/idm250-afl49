document.addEventListener('DOMContentLoaded', function () {
    const toggle = document.querySelector('.menu-toggle');
    const menuContainer = document.querySelector('.menu-main-menu-container');

    toggle.addEventListener('click', function () {
      menuContainer.classList.toggle('menu-open');
        });

    console.log ('clicked');
});
