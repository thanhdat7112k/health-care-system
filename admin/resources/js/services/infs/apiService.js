import axios from 'axios';
import apiMethods from '../../config/apiMethods';
import storage from "../../storage/storage";

axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
axios.defaults.headers.common['Accept'] = 'application/json';

/*
    formData: It is an instance of FormData()
*/
export default (url, method, formData = {}, multipart = false) => {
    const headers = {};
    const accessToken = storage.getAccessToken();

    if (accessToken) {
        headers['Authorization'] = 'Bearer ' + accessToken;
    }
    if (multipart) {
        headers['Content-Type'] = 'multipart/form-data';
    }
    if (method === apiMethods.put) {
        formData.append('_method', 'PUT')
        method = apiMethods.post;
    }

    return axios({
        baseURL: window.location.origin,
        url: url,
        method: method,
        data: formData,
        headers: headers,
    })
}
