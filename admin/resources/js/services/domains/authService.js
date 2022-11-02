import commonApi from '../infs/apiService.js';
import apiMethods from '../../config/apiMethods';
import secretKey from "../../config/secret";

export default {
    login(formData) {
        return commonApi('/oauth/token', apiMethods.post, {...secretKey,...formData});
    },
    register(formData) {
        return commonApi('/api/register',apiMethods.post, formData);
    },
    getAccountInfo() {
        return commonApi('/api/user',apiMethods.get);
    },
    updateAccountInfo(formData) {
        return commonApi('/api/account/update-info',apiMethods.post, formData);
    }
}
