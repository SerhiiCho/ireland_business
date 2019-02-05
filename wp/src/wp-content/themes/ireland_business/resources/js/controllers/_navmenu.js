import addClassAfterClick from "../functions/_addClassAfterClick"

;(function ShowNavmenuAfterButtonClickOnMobileScreen() {
    const btn = document.querySelector('.ieb-nav-wrap2__mobile__ham-wrap')
    const ham = document.querySelector('.ieb-nav-wrap2__mobile__ham-wrap__btn')
    const navmenu = document.querySelector('.ieb-nav-wrap2__menu')

    if (btn && navmenu) {
        addClassAfterClick(btn, navmenu, 'ieb-show')
        addClassAfterClick(btn, ham, 'ieb-ham-active')
    }
})()