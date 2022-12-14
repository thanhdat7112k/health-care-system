const ACCESS_TOKEN = 'ACCESS_TOKEN'

export default {
    getAccessToken() {
        return JSON.parse(localStorage.getItem(ACCESS_TOKEN)) || '';
    },
    setAccessToken(token) {
        localStorage.setItem(ACCESS_TOKEN, JSON.stringify(token))
    },
    deleteAccessToken() {
        localStorage.removeItem(ACCESS_TOKEN);
    }
}
