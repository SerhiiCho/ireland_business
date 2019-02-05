import LazyLoader from '../modules/_LazyLoader'

;(function RunClassThatLazyLoadsImagesInPlaceholderElements() {
    const holders = document.querySelectorAll('.ieb-lazy-load')

    holders.length > 0 ? new LazyLoader(holders).start() : ''
})()