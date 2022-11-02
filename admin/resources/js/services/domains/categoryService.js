import commonApi from '../infs/apiService.js';
import apiMethods from '../../config/apiMethods';

export default {
    getComboCategories() {
        return commonApi('/api/recommendations/combo', apiMethods.get)
    },
    getNormalCategories() {
        return commonApi('/api/recommendations/normal', apiMethods.get)
    }
}
