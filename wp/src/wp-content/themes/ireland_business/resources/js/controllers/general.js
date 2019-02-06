import LazyLoader from '../modules/LazyLoader'
import ScrollAfterClick from "../modules/ScrollAfterClick";

;(function RunClassThatLazyLoadsImagesInPlaceholderElements() {
    const holders = document.querySelectorAll('.ieb-lazy-load')
    holders.length > 0 ? new LazyLoader(holders).start() : ''
})()

;(function ListenForMenuClickEventAndScrollToNeededPosition() {
    const btnFields = document.querySelectorAll('.ieb-btn-fields')
    btnFields ? new ScrollAfterClick(btnFields).listen() : ''
})()