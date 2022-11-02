import commonApi from '../infs/apiService.js';
import apiMethods from '../../config/apiMethods';

export default {
    getBlogsByCategoryId(categoryId) {
        return commonApi(`api/blogs/${categoryId}`, apiMethods.get)
    }
}
