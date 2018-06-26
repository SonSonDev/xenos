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
      <h6 class="explore_main_header_subtitle">Discover</h6>
      <h4 class="explore_main_header_title">Other worlds</h4>
      <p class="explore_main_header_text">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo, itaque! Possimus itaque non, repellat sed, aliquid praesentium animi.
      </p>
      <h6 class="explore_main_header_headline gradientText">01. Select the planet you want to explore</h6>
      <p class="explore_main_header_instruction">Select the planet you want to explore Select the planet you want to explore</p>
      <h6 class="explore_main_header_headline grey">01. Select the planet you want to explore</h6>
      <p class="explore_main_header_instruction grey">Select the planet you want to explore Select the planet you want to explore</p>
      <h6 class="explore_main_header_headline grey">01. Select the planet you want to explore</h6>
      <p class="explore_main_header_instruction grey">Select the planet you want to explore Select the planet you want to explore</p>
      <h6 class="explore_main_header_headline grey">01. Select the planet you want to explore</h6>
      <p class="explore_main_header_instruction grey">Select the planet you want to explore Select the planet you want to explore</p>
    </div>

    <div class="explore_main_content">
      <h4 class="explore_main_content_title">Mars</h4>
      <div class="explore_main_content_next">
        <p class="explore_main_content_next_text">Uranus is the seventh planet from the Sun. It has the third-largest planetary radius and fourth-largest planetary ...</p>
        <div class="explore_main_content_next_video">
          <iframe class="explore_main_content_next_video_iframe" src="https://www.youtube.com/embed/GF60Iuh643I" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
        </div>
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


<style lang="scss" scoped>
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
      justify-content: space-between;
      align-items: flex-start;
    }
  &_select {
    height: calc(28vh * 1.86);
    overflow-y: hidden;
    position: absolute;
    top: 30vh;
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
      top: 14vh;
      &_left {
        margin-left: auto;
        margin-right: 40vh;
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
          transform: scale(1.2);
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
    height: 66vh;
    display: flex;
    flex-direction: column;
    margin-bottom: 80px;
    @media (min-width: 768px) {
      // width: 100%;
      max-width: 345px;
      margin-right: 56vh;
      height: auto;
    }
    &_title {
      text-align: center;
      @media (min-width: 768px) {
        margin-top: 120px;
        margin-bottom: 20px;
        font-size: 36px;
      }
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
      @media (min-width: 768px) {
        padding: 0;
        justify-content: flex-start;
        max-width: none;
        text-align: left;
      }
      &_text {

      }
      &_button {
        margin-top: 20px;
      }
      &_video {
        display: none;
        @media (min-width: 768px) {
          display: block;
          width: 100%;
          margin-top: 24px;
          &_iframe {
            width: 100%;
            height: auto;
          }
        }
      }
    }
  }
  &_header {
    display: flex;
    flex-direction: column;
    padding: 26px 64px;
    @media (min-width: 768px) {
      width: 24vw;
      margin-top: 80px;
      padding: 0 64px;
    }
    &_subtitle {
      margin-bottom: 2px;
      color: var(--main-grey-color);
      display: none;
      @media (min-width: 768px) {
        display: block;
      }
    }
    &_title {
      // align-self: center;
      display: none;
      @media (min-width: 768px) {
        display: block;
      }
    }
    &_text {
      display: block;
      margin: 20px 0;
      display: none;
      @media (min-width: 768px) {
        display: block;
      }
    }
    &_headline {
      margin-top: 16px;
      &.grey {
        display: none;
      }
      @media (min-width: 768px) {
        margin-top: 0;
        display: block;
        color: var(--secondary-dark-color);
      }
    }
    &_instruction {
      margin-top: 6px;
      margin-bottom: 20px;
      &.grey {
        display: none;
        @media (min-width: 768px) {
          display: block;
          color: var(--secondary-dark-color);
        }
      }
    }
  }

  }

}

</style>

