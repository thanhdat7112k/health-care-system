import Actions from "../../pages/Actions";
import Login from "../../pages/Login";
import Register from "../../pages/Register";

const router = [
    {
        path: '/actions',
        name: 'actions',
        component: Actions,
    },
    {
        path: '/login',
        name: 'login',
        component: Login,
    },
    {
        path: '/register',
        name: 'register',
        component: Register,
    }
];

export default router;
