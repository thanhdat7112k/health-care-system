import commonApi from '../infs/apiService.js';
import apiMethods from '../../config/apiMethods';

export default {
    getCategoryBlogs() {
        return commonApi('/api/category-blogs', apiMethods.get)
    }
}
