<template>
  <div class="truc" v-if="planets.length">
    <E1main 
    @nextStep="$emit('selectedPlanet', planets[current])"
    :planet="planets[current]"/>

    <E1slider
      :planets="planets"
      :current="current"
      :turn="turn"
      @nextPlanet="nextPlanet"
      @prevPlanet="prevPlanet"
    />

  </div>
  <div v-else class="else"></div>
</template>

<script>
import E1main from "@/components/Explore/E1main.vue"
import E1slider from "@/components/Explore/E1slider.vue"

export default {
  components: { E1main, E1slider },
  data: function() {
    return {
      planets: [],
      current: 0,
      turn: 0,
    }
  },
  name: 'exploreMain',
  created: function () {
    fetch(this.$baseUrl + '/api/planets', {
      method: 'GET'
    })
    .then(response => response.json())
    .then(data => {
      this.planets = data['hydra:member']
    })
  },
  mounted: function () {
  },
  methods: {
    nextPlanet: function () {
      this.turn = this.current>0 ? this.turn : this.turn-1
      this.current = this.current>0 ? this.current-1 : 3
    },
    prevPlanet: function () {
      this.turn = this.current<3 ? this.turn : this.turn+1
      this.current = this.current<3 ? this.current+1 : 0
    }
  }
}
</script>


<style lang="scss" scoped>
.truc {
  overflow: hidden;
  padding-bottom: 80px;
  height: 100%;
  color: var(--main-dark-white);
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: flex-end;
  position: relative;
  @media (min-width:768px) {
    flex-direction: row;
    align-items: flex-start;
    justify-content: flex-end;
    padding-right: 60vh;
    width: 100%;
  }
}
.else {
  width: 100%;
  height: 100%;
}
</style>

