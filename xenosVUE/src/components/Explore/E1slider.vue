<template>
  <div class="explore_main_select">
    <div class="explore_main_select_arrows">
      <span
        @click="$emit('prevPlanet')"
        class="explore_main_select_arrows_left jam jam-arrow-circle-left"
      ></span>
      <span
        @click="$emit('nextPlanet')"
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
</template>

<script>
export default {
  name: 'E1slider',
  props: ['planets', 'current', 'turn']
}
</script>

<style lang="scss" scoped>
.explore {
  &_main {
    &_select {
      height: calc(28vh * 1.86);
      position: absolute;
      z-index: 0;
      @media(min-width:768px){
        transform: rotate(-90deg);
        right: -22vh;
        top: 12vh;
      }
      &_arrows {
        display: flex;
        color: #6A6A6A;
        font-size: 24px;
        position: relative;
        top: 15vh;
        z-index: 100;
        &_left {
          margin-left: auto;
          margin-right: 40vh;
          &:hover {
            color: var(--main-dark-white);
          }
        }
        &_right {
          margin-right: auto;
          &:hover {
            color: var(--main-dark-white);
          }
        }
      }
      &_slider {
        // pointer-events: none;
        display: grid;
        grid-template-columns: repeat(3, 28vh);
        grid-template-rows: repeat(3, 28vh);
        justify-items: center;
        align-items: center;
        transition: transform .5s ease-out;
        position: relative;
        &_planet {
          width: 100%;
          height: 100%;
          border-radius: 50%;
          transform: scale(.4);
          transition: transform .5s ease-out;
          background-color: #fff;
          border: 10px solid var(--main-dark);
          &.active {
            transform: scale(1.2);
            border: none;
          }
          &:nth-child(1) {
            grid-column: 2 / 3;
            grid-row: 1 / 2;
          }
          &:nth-child(2) {
            background: linear-gradient(to top right,var(--gradient-from), var(--gradient-to));
            grid-column: 1 / 2;
            grid-row: 2 / 3;
          }
          &:nth-child(3) {
            background: linear-gradient(to top right,var(--gradient-from), var(--gradient-to));
            grid-column: 2 / 3;
            grid-row: 3 / 4;
          }
          &:nth-child(4) {
            background: linear-gradient(to top right,var(--gradient-from), var(--gradient-to));
            grid-column: 3 / 4;
            grid-row: 2 / 3;
          }
        }
        &_circle {
          width: 65%;
          height: 65%;
          border-radius: 50%;
          border: 1px dashed var(--main-grey);
          grid-column: 1 / 4;
          grid-row: 1 / 4;
        }
        &_hide {
          width: 100%;
          height: 56vw;
          background-color: var(--main-dark);
          position: absolute;
          bottom: 0;
          left: 0;
        }
      }
    }
  }
}
</style>

