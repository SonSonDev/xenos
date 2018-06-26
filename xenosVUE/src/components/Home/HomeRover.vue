<template>
  <section class="home_theRover">
    <div class="home_theRover-desc">
      <div class="container">
        <h6 class="home_theRover-desc-onTitle">The Rover</h6>
        <h4 class="home_theRover-desc-title">Meet Christa !</h4>
        <p class="home_theRover-desc-text">Christa, named after Christa McAuliffe, the first civilian selected to go into space, is our revolutionary all terrain rover. Its unique spherical wheel design allows it to effortlessly roll on every surface, and is able to withstand extreme weather conditions.</p>
        <p class="home_theRover-desc-text">With its five 8K sensors, you’ll be able to experience a fully immersive 360° journey on the selected planets.</p>
        <OrangeButton link="/rover">Get to know it!</OrangeButton>
      </div>
    </div>
    <div class="home_theRover-imgContainer">
      <div class="container">
        <img class="home_theRover-img" src="@/assets/img/rover-illu.svg" >
      </div>
    </div>
  </section>
</template>

<script>
import OrangeButton from "@/components/OrangeButton.vue";
export default {
  name:"HomeRover",
  props:{},
  components: {OrangeButton}
}
</script>

<style lang="scss" scoped>

  .home_theRover {
    margin-top:80px;

    @media(min-width: 768px){
      margin-top:120px;
      display: flex;
      flex-direction: row-reverse;
    }
    &-desc {
      margin-bottom: 40px;
      @media (min-width: 768px) {
        margin-bottom: 0;
        width:50%;
        display:flex;
        align-items:center;
      }
      &-onTitle {
        text-transform : uppercase;
        color: var(--main-grey-color);
        margin-bottom:2px;
      }
      &-title {
        margin-bottom: 20px;
        color: var(--main-dark-color);
      }
      &-text {
        line-height: 22px;
        margin-bottom: 20px;
        color: var(--main-dark-color);
      }
    }

    &-img {
      max-width:100%;
      margin-bottom:20px;
      &Container {
        justify-content: center;
        margin:0 auto;
        display: flex;
        align-items: center;
        position:relative;

        &::after {
          content:"";
          z-index:-1;
          position:absolute;
          background: linear-gradient(39.95deg, #FF5F6D 15.19%, #FFC371 84.81%);
          border-radius:100%;
          width:100%;
          height:65%;
          bottom:0;
          left:0;
        }
        & container {
          width:min-content;
        }

      }

    }
  }

</style>
