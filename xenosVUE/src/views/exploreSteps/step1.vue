<template>
  <v-touch class="truc" v-if="planets.length"
    v-on:swipeleft="nextPlanet"
    v-on:swiperight="prevPlanet">

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

  </v-touch>
  <div v-else class="else"></div>
</template>

<script>
import E1main from "@/components/Explore/E1main.vue"
import E1slider from "@/components/Explore/E1slider.vue"



export default {
  components: { E1main, E1slider },
  data: function() {
    return {
      planets: [{"@id":"/api/planets/1","@type":"Planet","id":1,"name":"Mars","description":"Mars is the fourth planet from the Sun and the second-smallest planet in the Solar System after Mercury.","img":null,"colorStart":"#47332C","colorEnd":"#FF956E","video":"https://www.youtube.com/embed/NXbCNAIIAxw","zones":["/api/zones/1","/api/zones/2","/api/zones/3"],"temperature":-60,"gravity":3.711,"distance":"225 million","radius":"3 390"},{"@id":"/api/planets/2","@type":"Planet","id":2,"name":"Venus","description":"Venus is the second planet from the Sun. It  rotates in the opposite direction to most other planets.","img":null,"colorStart":"#A47B4D","colorEnd":"#D5C2A1","video":"https://www.youtube.com/embed/yzqbN6z8ncc","zones":["/api/zones/4","/api/zones/5","/api/zones/6"],"temperature":465,"gravity":8.87,"distance":"40 million","radius":"6 052"},{"@id":"/api/planets/3","@type":"Planet","id":3,"name":"Mercury","description":"Mercury is the smallest planet in the Solar System. Its orbital period is also the shortest.","img":null,"colorStart":"#3F3F3F","colorEnd":"#CDCDCD","video":"https://www.youtube.com/embed/m3ZUhpisWeQ","zones":["/api/zones/7","/api/zones/8","/api/zones/9"],"temperature":166.85,"gravity":3.7,"distance":"90 million","radius":"2 440"},{"@id":"/api/planets/4","@type":"Planet","id":4,"name":"Europa","description":"Europa is the smallest of the four Galilean moons orbiting Jupiter, and the sixth-closest to the planet.","img":null,"colorStart":"#937C53","colorEnd":"#959C94","video":"https://www.youtube.com/embed/kz9VhCQbPAk","zones":["/api/zones/10","/api/zones/11","/api/zones/12"],"temperature":-190,"gravity":1.314,"distance":"628.3 millions","radius":"1561"}],
      current: 0,
      turn: 0,
    }
  },
  name: 'exploreMain',
  created: function () {
    // fetch(this.$baseUrl + '/api/planets', {
    //   method: 'GET'
    // })
    // .then(response => response.json())
    // .then(data => {
    //   this.planets = data['hydra:member']
    // })
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

