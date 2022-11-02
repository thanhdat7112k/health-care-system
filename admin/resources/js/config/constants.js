export const HTTP_CODE = {
    BAD_REQUEST: 400,
    UNAUTHORIZED: 401,
    FORBIDDEN: 403,
    NOT_FOUND: 404,
    UNPROCESSABLE_ENTITY: 422,
    SERVER_ERROR: 500,
}

export const VUE_LOGGER_CONFIG = {
    isEnabled: true,
    logLevel : process.env.MIX_LOG_LEVEL ? process.env.MIX_LOG_LEVEL : 'debug',
    stringifyArguments : false,
    showLogLevel : true,
    showMethodName : false,
    separator: '|',
    showConsoleColors: true
};

export const INFO_ACCOUNT = [
    {
        nameFun: 'User',
        namePath: 'accountInfo',
    },
    {
        nameFun: 'Address',
        namePath: 'address',
    },
    {
        nameFun: 'Password',
        namePath: 'password',
    },
];

export const RESERVATION = [
    {
        nameFun: 'Open',
        namePath: 'reservationOpen'
    },
    {
        nameFun: 'Done',
        namePath: ''
    },
    {
        nameFun: 'Cancel',
        namePath: ''
    },
];
