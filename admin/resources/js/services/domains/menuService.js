import commonApi from '../infs/apiService.js';
import apiMethods from '../../config/apiMethods';

export default {
    getMenusByCategoryId(categoryId) {
        return commonApi(`api/menus/${categoryId}`, apiMethods.get)
    }
}
