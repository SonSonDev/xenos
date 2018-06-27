<template>
  <div class="truc" v-if="planets.length">
      <div class="explore_main_content">
        <h4 class="explore_main_content_title">
          {{planets[current].name}}
        </h4>
        <div class="explore_main_content_next">
          <p class="explore_main_content_next_text">
            {{planets[current].description}}
          </p>
          <iframe class="explore_main_content_next_video" :src="planets[current].video" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
          <transition name="slide-right">
          <router-link
            :to="`/explore/${planets[current].name}`"
          >
            <button class="explore_main_content_next_button">Next</button>
          </router-link>
          </transition>
        </div>
      </div>

      <div class="explore_main_select">
        <div class="explore_main_select_arrows">
          <span
            @click="nextPlanet"
            class="explore_main_select_arrows_left jam jam-arrow-circle-left"
          ></span>
          <span
            @click="prevPlanet"
            class="explore_main_select_arrows_right jam jam-arrow-circle-right"
          ></span>
        </div>
        <div class="explore_main_select_slider"
          :style="`transform: rotate(${turn*360 + current*90}deg)`"
        >
          <div
            v-for="(planet, i) in planets" :key="planet.id"
            class="explore_main_select_slider_planet"
            :style="{ 'background': `linear-gradient(to top right, ${planet.colorStart}, ${planet.colorEnd})` }"
            :class="{active: current === i }"
          ></div>
          <div class="explore_main_select_slider_circle"></div>
        </div>
      </div>
  </div>
</template>

<script>

export default {
  data: function() {
    return {
      planets: [],
      current: 0,
      turn: 0,
      transitionName: 'slide-left'
    }
  },
  name: 'exploreMain',
  created: function () {
    fetch(this.$baseUrl + 'planets', {
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
      this.turn = this.current<4 ? this.turn : this.turn+1
      this.current = this.current<4 ? this.current+1 : 0
    }
  }
}
</script>
