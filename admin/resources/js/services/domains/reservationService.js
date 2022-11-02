import commonApi from '../infs/apiService.js';
import apiMethods from '../../config/apiMethods';

export default {
    getReservationOpen() {
        return commonApi('/api/schedules?status=2', apiMethods.get)
    }
}