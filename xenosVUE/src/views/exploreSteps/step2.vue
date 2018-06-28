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
      zones: [],
      current: null,
      choice: null
    }
  },
  created: function () {
    this.choice = this.planet
    if (!this.choice) {
      fetch(this.$baseUrl + '/api/planets', {method: 'GET'})
      .then(response => response.json())
      .then(data => {
        console.log(data);
        this.choice = data['hydra:member'].filter((item) => {
          return (item.name === this.$route.params.planet)
        })[0]
        console.log(this.choice);
        
      })
      .then(() => {
        this.fetchZones()
      })
    }
    this.fetchZones()
  },
  methods: {
    onSelect: function (id) {
      this.current = id
    },
    fetchZones: function () {
      fetch(this.$baseUrl + '/api/zones', {
        method: 'GET'
      })
      .then(response => response.json())
      .then(data => {
        this.zones = data['hydra:member'].filter((item) => {
          return (item.planet === this.choice['@id'])
        })
      })
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
