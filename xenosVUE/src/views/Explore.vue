<template>
  <div class="explore">
    <Header/>
    <div class="title">
      <h4>Step1</h4>
      <p class="gradientText">01. Select the planet you want to explore
Select the planet you want to explore
Select the planet you want to explore</p>
    </div>
    <!-- <router-link
      :key="planet"
      v-for="planet in planets"
      :to="`/explore/${planet}`"
    >
      <button>{{planet}}</button>
      {{$route.params.id}}
    </router-link> -->
  </div>
</template>

<script>
import Header from "@/components/Header.vue"

export default {
  data: function() {
    return {
      planets: [
        'Uranus',
        'Mars',
        'Venus'
      ]
    }
  },
  name: 'explore',
  components: {
    Header
  }
}


</script>


<style lang="scss" scoped>
.title {
  color: white;
}
</style>

