import LazyLoader from '../modules/LazyLoader'
import scrollTo from "../modules/scrollTo";

;(function RunClassThatLazyLoadsImagesInPlaceholderElements() {
    const holders = document.querySelectorAll('.ieb-lazy-load')

    holders.length > 0 ? new LazyLoader(holders).start() : ''
})()

;(function () {
    setTimeout(() => {
        ScrollTo(document.getElementById('ieb-test'))
    }, 2000);
})()