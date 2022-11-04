let submenubutton = document.querySelector('.header-submenu-button');
let submenubuttonlocker = document.querySelector('.header-submenu-button-locker');
let submenu = document.querySelector('.header-submenu');
let profile = document.querySelector('.submenu-profile');
let settings = document.querySelector('.submenu-settings');
let exit = document.querySelector('.submenu-exit');
submenubutton.onclick = function () {
    submenubutton.classList.add('active')
    submenu.focus()
}
submenubuttonlocker.onclick = function () {
    submenubutton.classList.add('active')
    submenubuttonlocker.classList.remove('active')
    submenubuttonlocker.classList.add('opacity-0')
}
submenu.onfocus = function () {
    submenu.classList.toggle('active')
    submenubuttonlocker.classList.add('active')
    submenubuttonlocker.classList.remove('opacity-0')
}
submenu.onblur = function () {
    submenubutton.classList.remove('active')
    submenu.classList.remove('active')
    submenubuttonlocker.classList.remove('active')
    submenubuttonlocker.classList.add('opacity-0')
}