import axios from 'axios'

export default class {
    /**
     * @param {object} form 
     * @return {void}
     */
    constructor(form) {
        this.form = form
    }

    /**
     * Listen for a submit form event
     * 
     * @return {void}
     */
    listen() {
        this.form.addEventListener('submit', e => this.handleEvent(e))
    }

    /**
     * Sets properties and makes request to the server
     * 
     * @param {object} event Event object
     * @return {void}
     */
    handleEvent(event) {
        event.preventDefault()
        this.name = this.form.elements.name.value
        this.gender = this.form.elements.gender.value
        this.submitBtn = this.form.elements.submit
        this.makeRequest()
        this.showLoadingSpinner()
    }

    /**
     * Make request to the server
     * 
     * @return {void}
     */
    makeRequest() {
        axios.post(ieb_globals.ajax_url, this.createParams())
            .then(res => this.receiveResponse(res.data))
            .catch(err => console.error(err))
    }

    /**
     * @return {void}
     */
    showLoadingSpinner() {
        this.submitBtn.disabled = true
    }

    /**
     * @return {void}
     */
    hideLoadingSpinner() {
        this.submitBtn.disabled = false
    }

    /**
     * Creates parameters for the axios AJAX request
     * 
     * @return {URLSearchParams}
     */
    createParams() {
        const params = new URLSearchParams()
        params.append('action', 'ieb_handle_contact_form')
        params.append('_ajax_nonce', ieb_globals.nonce)
        params.append('name', this.name)
        params.append('gender', this.gender)
        return params
    }

    /**
     * @param {number} data
     * @return {void}
     */
    receiveResponse(data) {
        if (data === 0) {
            this.hideLoadingSpinner()
        }
    }
}