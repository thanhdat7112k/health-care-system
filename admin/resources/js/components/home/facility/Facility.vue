<template>
    <div class="bs-bg-yellow py-6">
        <div class="container is-max-desktop">
            <HomeTitle :title="title" :description="description" :text-color="'black'" :description-color="'black'"/>
            <div class="columns is-mobile is-variable is-2-mobile is-3-tablet is-8-desktop is-multiline mt-5 px-4">
                <div class="column is-12-mobile is-4-tablet is-block mb-4"
                     v-for="(facility, index) in facilities" :key="index">
                    <FacilityItem v-bind="facility"/>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import FacilityItem from "./FacilityItem";
import HomeTitle from "../home-components/Title";

export default {
    name: "Facility",
    components: {
        HomeTitle,
        FacilityItem,
    },
    data() {
      return {
          title: 'Facility',
          description: '施設一覧',
          facilities: [
              {
                  img: '/images/facilities/tokyo.png',
                  prefecture: 'Tokyo',
                  salonNumber: 35,
              },
              {
                  img: '/images/facilities/hiroshima.png',
                  prefecture: 'Hiroshima',
                  salonNumber: 21,
              },
              {
                  img: '/images/facilities/kyoto.png',
                  prefecture: 'Kyoto',
                  salonNumber: 19,
              },
          ]
      }
    },
}
</script>
