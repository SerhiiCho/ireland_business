import axios from 'axios'

export default class {
    /**
     * @param {object} form 
     * @return {void}
     */
    constructor(form) {
        this.form = form
        this.name = form.querySelector('#ieb-input-name').value
        this.gender = form.querySelector('#ieb-input-gender').value
    }

    /**
     * Listen for a submit form event
     * 
     * @return {void}
     */
    listen() {
        this.form.addEventListener('submit', e => {
            e.preventDefault()
            this.makeRequest()
        })
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
        console.log(data)
    }
}