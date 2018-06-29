<template>
  <div class="main">
    <h1 class="title">{{zone.name}}</h1>
    <p class="description">{{zone.description}}</p>
    <div class="infoBox">
      <div class="info">
        <p class="gradientText">Distance from Earth</p>
        <h5>{{planet.distance}} km</h5>
      </div>
      <div class="info">
        <p class="gradientText">Average temperature</p>
        <h5>{{planet.temperature}}°C</h5>
      </div>
      <div class="info">
        <p class="gradientText">Surface gravity</p>
        <h5>{{planet.gravity}} m/s&sup2;</h5>
      </div>
      <div class="info">
        <p class="gradientText">Radius</p>
        <h5>{{planet.radius}} km</h5>
      </div>
    </div>

    <transition name="slide-right">
      <router-link :to="`/explore/${$route.params.planet}/${zone.name}`">
        <button
          @click="$emit('nextStep')"
        >Next</button>
      </router-link>
    </transition>
  </div>
</template>

<script>
export default {
  name: 'E2main',
  props: ['zone', 'planet']
}
</script>

<style lang="scss" scoped>
.main {
  color: var(--main-dark-white);
  display: flex;
  flex-direction: column;
  align-items: center;
  padding: 0 64px;
  @media (min-width: 768px) {
    align-items: flex-start;
    max-width: 400px;
  }
  .title {
  }
  .description {
    text-align: center;
    margin: 20px 0;
    @media (min-width: 768px) {
      text-align: left;
    }
  }
  .infoBox {
    display: none;
    @media (min-width: 768px) {
      display: grid;
      grid-template-columns: 1fr 1fr;
      grid-gap: 10px 20px; 
    }
    .info {
      p {
        line-height: 1;
      }
      h5 {
        display: block;
        margin-top: 6px;
      }
    }
  }
  button {
    @media (min-width: 768px) {
      margin-top: 40px;
    }
  }
}

</style>

