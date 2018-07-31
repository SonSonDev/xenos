<template>
  <div class="step2">

    <!-- <button
    v-for="zone in zones" :key="zone.id">
    {{ zone }}
    </button> -->
    <E2select
      :zones="zones"
      :planet="choice"
      @select="onSelect"
    />
    <E2main
      @nextStep="$emit('selectedZone', zones[current])"
      v-if="current !== null"
      :zone="zones[current]"
      :planet="choice"
    />


  </div>
</template>

<script>
import E2main from "@/components/Explore/E2main.vue"
import E2select from "@/components/Explore/E2select.vue"

export default {
  name: 'explore',
  components: { E2main, E2select },
  props: ['planet'],
  data: function() {
    return {
      zones: {
        Mars: [{"@id":"/api/zones/1","@type":"Zone","id":1,"planet":"/api/planets/1","name":"Vastitas Borealis","description":"Vastitas Borealis is the largest lowland region of Mars. It is in the northerly latitudes of the planet.","price":200,"bookings":["/api/bookings/14"]},{"@id":"/api/zones/2","@type":"Zone","id":2,"planet":"/api/planets/1","name":"Tharsis","description":"Tharsis is a vast volcanic plateau centered near the equator in the western hemisphere of Mars.","price":300,"bookings":["/api/bookings/6","/api/bookings/8"]},{"@id":"/api/zones/3","@type":"Zone","id":3,"planet":"/api/planets/1","name":"Hellas Planitia","description":"Hellas Planitia is a plain located  in the southern hemisphere of the planet Mars.","price":250,"bookings":["/api/bookings/10","/api/bookings/13"]}],
        Europa: [{"@id":"/api/zones/10","@type":"Zone","id":10,"planet":"/api/planets/4","name":"Ridged plains","description":"The ridged plains are vast icy plains.","price":3900,"bookings":["/api/bookings/7"]},{"@id":"/api/zones/11","@type":"Zone","id":11,"planet":"/api/planets/4","name":"Knobby Chaos","description":"The Knobby Chaos region has a steep and chaotic terrain.","price":4600,"bookings":["/api/bookings/5"]},{"@id":"/api/zones/12","@type":"Zone","id":12,"planet":"/api/planets/4","name":"High Albedo Bands","description":"High Albedo Bands is the name of a relief line on the South of Europa.","price":4000,"bookings":["/api/bookings/12"]}],
        Mercury: [{"@id":"/api/zones/7","@type":"Zone","id":7,"planet":"/api/planets/3","name":"Borealis","description":"Borealis is a quadrangle on Mercury surrounding the north pole down to 65° latitude.","price":750,"bookings":[]},{"@id":"/api/zones/8","@type":"Zone","id":8,"planet":"/api/planets/3","name":"Victoria","description":"The Victoria quadrangle is a region on Mercury from 0 to 90° longitude and 20 to 70 ° latitude.","price":700,"bookings":["/api/bookings/9"]},{"@id":"/api/zones/9","@type":"Zone","id":9,"planet":"/api/planets/3","name":"Shakespeare","description":"The Shakespeare quadrangle is a region of Mercury running from 90 to 180° longitude and 20 to 70° latitude.","price":700,"bookings":[]}],
        Venus: [{"@id":"/api/zones/4","@type":"Zone","id":4,"planet":"/api/planets/2","name":"Ishtar Terra","description":"Ishtar Terra is one of two main highland regions on the planet Venus.","price":800,"bookings":[]},{"@id":"/api/zones/5","@type":"Zone","id":5,"planet":"/api/planets/2","name":"Aphrodite Terra","description":"Aphrodite Terra is a highland region on Venus, near the equator.","price":850,"bookings":[]},{"@id":"/api/zones/6","@type":"Zone","id":6,"planet":"/api/planets/2","name":"Alpha Regio","description":"Alpha Regio is a region of the planet Venus extending for about 1500 km centered at 22°S, 5°E.","price":800,"bookings":["/api/bookings/11"]}]
      },
      current: null,
      choice: null
    }
  },
  created: function () {
    this.choice = this.planet
    // if (!this.choice) {
      // fetch(this.$baseUrl + '/api/planets', {method: 'GET'})
      // .then(response => response.json())
      // .then(data => {
      //   this.choice = data['hydra:member'].filter((item) => {
      //     return (item.name === this.$route.params.planet)
      //   })[0]
      // })
      // .then(() => {
      //   this.fetchZones()
      // })
    // }
    this.fetchZones()
  },
  methods: {
    onSelect: function (id) {
      this.current = id
    },
    fetchZones: function () {
      // fetch(this.$baseUrl + '/api/zones', {
      //   method: 'GET'
      // })
      // .then(response => response.json())
      // .then(data => {
      //   this.zones = data['hydra:member'].filter((item) => {
      //     return (item.planet === this.choice['@id'])
      //   })
      // })
      this.zones = this.zones[this.choice.name]
    }
  }
}


</script>

<style lang="scss" scoped>
.step2 {
  width: 100%;
  display: flex;
  flex-direction: column;
  justify-content: space-between;
  height: 100%;
  padding-top: 20px;
  padding-bottom: 70px;
  @media (min-width: 768px) {
    flex-direction: row-reverse;
    padding-top: 80px;
  }
}
</style>
