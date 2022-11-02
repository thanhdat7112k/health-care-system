import Account from '../../pages/Account.vue';
import AccountInfo from '../../components/account/AccountInfo.vue';
import ReservationOpen from '../../components/reservation/ReservationOpen.vue';

const router = [
    {
        path: '/account',
        name: 'account',
        component: Account,
        meta: {auth: true},
        children: [
            { path: 'info', component: AccountInfo, name: 'accountInfo', meta: {auth: true} }
          ]
    },
    {
        path: '/reservation',
        name: 'reservation',
        component: Account,
        meta: {auth: true},
        children: [
            { path: 'open', component: ReservationOpen, name: 'reservationOpen', meta: {auth: true} }
        ]
    }
];

export default router;
