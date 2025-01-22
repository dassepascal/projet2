import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();


// Burger menus
document.addEventListener('DOMContentLoaded', function() {
    // open
    const burger = document.querySelectorAll('.navbar-burger');
    const menu = document.querySelectorAll('.navbar-menu');

    if (burger.length && menu.length) {
        for (var i = 0; i < burger.length; i++) {
            burger[i].addEventListener('click', function() {
                for (var j = 0; j < menu.length; j++) {
                    menu[j].classList.toggle('hidden');
                }
            });
        }
    }

    // close
    const close = document.querySelectorAll('.navbar-close');
    const backdrop = document.querySelectorAll('.navbar-backdrop');

    if (close.length) {
        for (var i = 0; i < close.length; i++) {
            close[i].addEventListener('click', function() {
                for (var j = 0; j < menu.length; j++) {
                    menu[j].classList.toggle('hidden');
                }
            });
        }
    }

    if (backdrop.length) {
        for (var i = 0; i < backdrop.length; i++) {
            backdrop[i].addEventListener('click', function() {
                for (var j = 0; j < menu.length; j++) {
                    menu[j].classList.toggle('hidden');
                }
            });
        }
    }
});

const dropdownMenuButton = document.getElementById('dropdownMenuButton');
    const dropdownMenu = document.getElementById('dropdownMenu');

    dropdownMenuButton.addEventListener('click', () => {
        dropdownMenu.classList.toggle('hidden');
    });

    function toggleMenuVisibility() {
        const menuNavbarMain = document.getElementById('menu-navbar-main');
        const menuNavbarAdmin = document.getElementById('menu-navbar-admin');
    
        if (window.innerWidth < 1024) {
            if (menuNavbarMain) menuNavbarMain.style.display = 'none';
            if (menuNavbarAdmin) menuNavbarAdmin.style.display = 'none';
        } else {
            if (menuNavbarMain) menuNavbarMain.style.display = 'flex';
            if (menuNavbarAdmin) menuNavbarAdmin.style.display = 'flex';
        }
    }
    
    document.addEventListener('DOMContentLoaded', toggleMenuVisibility);
    window.addEventListener('resize', toggleMenuVisibility);