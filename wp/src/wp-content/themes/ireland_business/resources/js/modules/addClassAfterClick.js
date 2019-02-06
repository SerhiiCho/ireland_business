/**
 * Adds class name to the class list of the target element, and remove it
 * after another click
 * 
 * @param {object} btn button that will trigger adding class to element
 * @param {object} targetElement element that is going to have class name
 * @param {string} className class name that is gonna be added to element
 * @param {callback} callback
 * @return {void}
 */
export default (btn, targetElement, className, callback) => {
    let hasClass = false

    btn.addEventListener('click', () => {
        // If callback is not null
        if (Object.prototype.toString.call(callback) == "[object Function]") {
            callback()
        }

        if (hasClass) {
            targetElement.classList.remove(className)
            hasClass = false
        } else {
            targetElement.classList.add(className)
            hasClass = true
        }
    })
}