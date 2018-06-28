<template>
  <section class="home_donation">
    <div class="home_donation-desc">
      <div class="home_donation-container">
        <h6 class="home_donation-desc-onTitle">Help science</h6>
        <h4 class="home_donation-desc-title">Progression before the next step</h4>
        <div class="home_donation-desc-border">
            <div class="home_donation-desc-lvl">
                <Wave class="home_donation-wave" color="white" is-top="true"/>
            </div>
            <div class="home_donation-desc-overflow"></div>
        </div>
        <p class="home_donation-desc-text">Christa, named after Christa McAuliffe, the first civilian selected to go into space, is our revolutionary all terrain rover. Its unique spherical wheel design allows it to effortlessly roll on every surface, and is able to withstand extreme weather conditions.</p>
        <p class="home_donation-desc-text">With its five 8K sensors, you’ll be able to experience a fully immersive 360° journey on the selected planets.</p>
        <OrangeButton link="#">Donate to help the exploration</OrangeButton>
      </div>
    </div>
    <div class="home_donation-imgContainer">
      <div class="">
        
      </div>
    </div>
  </section>
</template>

<script>
import OrangeButton from "@/components/OrangeButton.vue"
import Wave from "@/components/Wave.vue"
export default {
  name:"HomeDonation",
  components: {
      OrangeButton,
      Wave
    }
}
</script>

<style lang="scss" scoped>

  .home_donation {
    margin-bottom: 160px;
    padding: 40px;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    @media(min-width: 768px){
      margin-top:120px;
    }
    &-desc {
      margin-bottom: 40px;
      max-width: 466px;
      @media (min-width: 768px) {
        margin-bottom: 0;
        width:50%;
        display:flex;
        flex-direction: column;
        justify-content: center;
        align-items:center;
      }
      &-onTitle {
        text-transform : uppercase;
        color: var(--main-grey);
        margin-bottom:2px;
      }
      &-title {
        margin-bottom: 40px;
        color: var(--main-dark);
      }
      &-text {
        line-height: 22px;
        margin-bottom: 20px;
        color: var(--main-dark);
      }
      &-border {
          width: 215px;
          height: 215px;
          border: 8px var(--main-grey) solid;
          border-radius: 50%;
          position: relative;
          margin: auto;
          margin-bottom: 30px;
      }
      &-lvl {
          width: 200px;
          height: 200px;
          border: 7px white solid;
          border-radius: 50%;
          overflow: hidden;
          background: linear-gradient(to right,var(--gradient-from), var(--gradient-to));
          position: absolute;
          top: 0;
          left: 0;
      }
      &-overflow{
          width: 200px;
          height: 200px;
          border: 9px white solid;
          border-radius: 50%;
          position: absolute;
          top: 0;
          left: 0;
      }
    }
    &-wave{
        border-bottom: 70px solid white;
        transform: scale(0);
    }
    &-container{
        @media (min-width: 768px) {
        display: flex;
        flex-direction: column;
        align-items: center;
      }
    }
  }

</style>