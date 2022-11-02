import { HTTP_CODE } from '../../config/constants';
import Vue from 'vue'

export default function handleError(error) {
    switch(error.status) {
        case HTTP_CODE.BAD_REQUEST:
        case HTTP_CODE.UNAUTHORIZED:
        case HTTP_CODE.FORBIDDEN:
        case HTTP_CODE.NOT_FOUND:
        case HTTP_CODE.SERVER_ERROR:
            return Vue.$log.error(error.data.message);
        case HTTP_CODE.UNPROCESSABLE_ENTITY:
            return Vue.$log.warn(error.data.message);
    }
}
