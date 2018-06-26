<template>
  <div class="explore">
    <Header/>


    <!-- <router-link
      :key="planet"
      v-for="planet in planets"
      :to="`/explore/${planet}`"
    >
      <button>{{planet}}</button>
      {{$route.params.id}}
    </router-link> -->

  <div class="explore_main">

    <div class="explore_main_header">
      <h4 class="explore_main_header_title">Step1</h4>
      <h6 class="explore_main_header_subtitle gradientText">01. Select the planet you want to explore</h6>
      <p class="explore_main_header_text gradientText">
        Select the planet you want to explore
        Select the planet you want to explore
      </p>
    </div>

    <div class="explore_main_content">
      <h4 class="explore_main_content_title">Mars</h4>
      <div class="explore_main_content_next">
        <p class="explore_main_content_next_text">Uranus is the seventh planet from the Sun. It has the third-largest planetary radius and fourth-largest planetary ...</p>
        <button class="explore_main_content_next_button">Next</button>
      </div>
    </div>

    <div class="explore_main_select">
      <div class="explore_main_select_arrows">
        <span class="explore_main_select_arrows_left jam jam-arrow-circle-left"></span>
        <span class="explore_main_select_arrows_right jam jam-arrow-circle-right"></span>
      </div>
      <div class="explore_main_select_slider">
        <div class="explore_main_select_slider_planet active"></div>
        <div class="explore_main_select_slider_planet"></div>
        <div class="explore_main_select_slider_planet"></div>
        <div class="explore_main_select_slider_planet"></div>
        <div class="explore_main_select_slider_circle"></div>
      </div>
    </div>
  </div>

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


<style lang="scss">
body {
  height: 100vh;
  overflow-y: hidden;
}
.explore {
  height: 100%;
  width: 100%;


  &_main {
    height: 100%;

    color: var(--main-dark-white);
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: space-between;
    position: relative;
    @media(min-width:768px){
      flex-direction: row;
    }
  &_select {
    height: calc(28vh * 1.86);
    overflow-y: hidden;
    position: absolute;
    top: 30vh;
    @media(min-width:768px){
      transform: rotate(-90deg);
      right: -22vh;
    }
    &_arrows {
      display: flex;
      color: #6A6A6A;
      font-size: 24px;
      position: relative;
      top: 14vh;
      &_left {
        margin-left: auto;
        margin-right: 34vh;
      }
      &_right {
        margin-right: auto;
      }
    }
    &_slider {
      display: grid;
      grid-template-columns: repeat(3, 28vh);
      grid-template-rows: repeat(3, 28vh);
      justify-items: center;
      align-items: center;
      transition: transform .5s linear;
      position: relative;
      &_planet {
        width: 100%;
        height: 100%;
        border-radius: 50%;
        transform: scale(.4);
        transition: transform .5s ease-out;
        background-color: #fff;
        border: 10px solid var(--main-dark-color);
        &.active {
          transform: scale(1);
          border: none;
        }
        &:nth-child(1) {
          background-color: aqua;
          background: linear-gradient(to top right,var(--gradient-from), var(--gradient-to));
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
        border: 1px dashed var(--main-grey-color);
        grid-column: 1 / 4;
        grid-row: 1 / 4;
      }
      &_hide {
        width: 100%;
        height: 56vw;
        background-color: var(--main-dark-color);
        position: absolute;
        bottom: 0;
        left: 0;
      }
    }
  }
  &_content {
    height: 60vh;
    display: flex;
    flex-direction: column;
    margin-bottom: 80px;
    @media(min-width:768px){
      margin-right: 30vh;
    }
    &_title {
      
      text-align: center;
      // margin-bottom: 20px;
    }
    &_next {
      margin-top: auto;
      height: 100%;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: flex-end;
      padding: 0 64px;
      text-align: center;
      max-width: 240px;
      &_text {

      }
      &_button {
        margin-top: 20px;
      }
    }
  }



  &_header {
    display: flex;
    flex-direction: column;
    padding: 26px 64px;
    &_title {
      align-self: center;
    }
    &_subtitle {
      margin-top: 16px;
    }
    &_text {
      margin-top: 6px;
    }
  }

  }

}

</style>

