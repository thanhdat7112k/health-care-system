<template>
    <div class="">
        <table>
            <thead>
                <tr class="header">
                    <th v-for="category in ['Schedule', 'Duration', 'Price', 'Total']" :key="category">{{ category }}</th>
                </tr>
            </thead>
            <tbody v-for="(schedule, index) in schedules" :key="index">
                <tr v-for="(item, index) in schedule.menus" :key="index" >
                    <td class="itemName"><img :src="item.img" alt=""> <span>{{ item.menuName }}</span></td>
                    <td>{{ item.duration }}<span class="bs-text-pink">hour</span></td>
                    <td>{{ formattedPrices(item.price) }}</td>
                    <td>{{ formattedPrices(item.price) }}</td>
                </tr>
                <tr class="action">
                    <td colspan="4">
                        <span class="mt-3 ml-4 status">Status: Open</span>
                        <a class="button is-danger mx-3 " href="">Cancel</a>
                        <span class="mt-3 price">Total: {{ formattedPrices(schedule.price) }}</span>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</template>

<script>
import { formatPrice } from '../../helpers/index'
import { mapActions, mapState } from "vuex";

export default {
    data() {
        return {}
    },
    methods: {
        ...mapActions({
            getReservationOpen: 'reservation/getReservationOpens',
        }),
        formattedPrices(price){
            return formatPrice(price)
        }
    },
    computed: {
        ...mapState({
            schedules: state => state.reservation.scheduleOpen
        }),
    },
    mounted() {
        this.getReservationOpen();
    },
}
</script>

<style scoped>
table {
  border-bottom: collapse;
  width: 100%;
}
thead::after {
    content: '';
    display: table-row;
    width: 100%;
    height: 10px;
}
img {
    width: 200px;
}
th {
    padding: 17px;
}
.header {
    border: none;
    box-shadow: 1px 1px 3px #AAA;
}
table tbody {
    border: none;
    box-shadow: 0px 0px 3px #AAA
}
td {
    padding: 20px;
    vertical-align: middle;
}
tr {
    border-bottom: 0.5px solid #cfcfcf;
}
.itemName {
    position: relative;
}
.itemName span {
    position: absolute;
    left: 225px;
    bottom: 79px;
}
.status {
    float: left;
}
.price, .button {
    float: right;
}
</style>
