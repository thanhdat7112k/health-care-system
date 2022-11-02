export default function errorMessage(error, name) {
    return error[name] ? [...error[name]].shift() : '';
}