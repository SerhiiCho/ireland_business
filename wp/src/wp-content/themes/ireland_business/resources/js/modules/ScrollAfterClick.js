export default class {
    /**
     * @param {object} btnFields Fields where all trigger buttons are
     * @return {void}
     */
    constructor(btnFields) {
        this.btnFields = btnFields
    }

    /**
     * Calculate the speed of the scroll and scroll to the
     * given target element
     * 
     * @param {object} targetElem 
     * @return {void}
     */
    scrollTo(targetElem) {
        let jump = parseInt(targetElem.getBoundingClientRect().top * .2)
        let lastJump = targetElem.lastjump

        document.body.scrollTop += jump
        document.documentElement.scrollTop += jump

        if (!lastJump || lastJump > Math.abs(jump)) {
            targetElem.lastjump = Math.abs(jump)
            setTimeout(() => this.scrollTo(targetElem), '50')
        } else {
            targetElem.lastjump = null
        }
    }

    /**
     * Check if clicked element has data attribute that we need
     * 
     * @param {object} eventTarget Cliked element
     * @return {void}
     */
    checkEventTarget(eventTarget) {
        const dataAttr = eventTarget.getAttribute('data-scroll-to')
        dataAttr ? this.scrollTo(document.getElementById(dataAttr)) : ''
    }

    /**
     * Listen for a click event in DOM, and after click call method
     * that checks whether the clicked element is the navmenu button
     * 
     * @return {void}
     */
    listen() {
        this.btnFields.forEach(field =>
            field.addEventListener('click', e =>
                this.checkEventTarget(e.target)
            )
        )
    }
}