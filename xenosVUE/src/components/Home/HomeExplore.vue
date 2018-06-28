<template>
  <section class="home_explore">
    <div class="home_explore-desc">
      <div class="container">
        <h6 class="home_explore-desc-onTitle">Explore</h6>
        <h4 class="home_explore-desc-title">Discover the Solar System</h4>
        <p class="home_explore-desc-text">Since the dawn of time, scientists strive to uncover the secrets of the Universe and the planets in it. From discovering the origin of everything to finding new forms of life, their work is essential to push humanity forward.</p>
        <p class="home_explore-desc-text">For the first time in history, everyone will be able to help them in this tremendous task.</p>

        <OrangeButton link="/explore">Start exploring</OrangeButton>

      </div>
    </div>
    <div class="home_explore-imgContainer">
      <div class="container">
        <!-- <svg class="planets" width="312" height="260" viewBox="0 0 312 260" fill="none" xmlns="http://www.w3.org/2000/svg">
          <ellipse cx="44.8834" cy="45.0375" rx="44.8834" ry="45.0375" transform="translate(8.24883 10.7119)" fill="#B4E0B3"/>
          <ellipse cx="81.2753" cy="81.5543" rx="81.2753" ry="81.5543" transform="translate(149.449)" fill="#F57D7D"/>
          <ellipse cx="67.2037" cy="67.4345" rx="67.2037" ry="67.4345" transform="translate(0 125.131)" fill="#0085AE"/>
        </svg>

        <svg class="planetsDesk" width="643" height="534" viewBox="0 0 643 534" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
          <circle cx="92.5" cy="92.5" r="92.5" transform="translate(17 22)" fill="#B4E0B3"/>
          <circle cx="167.5" cy="167.5" r="167.5" transform="translate(308)" fill="#F57D7D"/>
          <circle cx="138.5" cy="138.5" r="138.5" transform="translate(0 257)" fill="#0085AE"/>
          <rect width="184" height="184" transform="translate(355 43)" fill="url(#pattern0)"/>
          <defs>
            <pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
              <use xlink:href="#image0" transform="scale(0.00338983)"/>
            </pattern>
          </defs>
        </svg> -->
        <img class="home_explore-img" src="@/assets/img/planets.png" alt="">
      </div>
    </div>
  </section>
</template>

<script>
import OrangeButton from "@/components/OrangeButton.vue"
export default {
  name: 'HomeExplore',
  components: {OrangeButton}
}
</script>

<style lang="scss" scoped>

  .home_explore {
    margin-top:80px;
    margin-bottom: 60px;
    @media(min-width: 768px){
      margin-top:120px;
      display: flex;
      flex-direction: row;
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
        margin-bottom:2px;
        text-transform : uppercase;
        color: var(--main-grey);
      }
      &-title {
        margin-bottom: 20px;
        color: var(--main-dark);
      }
      &-text {
        line-height: 22px;
        margin-bottom: 20px;
        color: var(--main-dark);
      }
    }
    &-img {
      width: 100%;
      &Container {
        justify-content: center;
        width:80%;
        margin:0 auto;
        display: flex;
        align-items: center;
        @media(min-width:768px){
          width:60%;      
        }
        & .planets {
          @media(min-width:768px){
            display:none;
          }
        }
        & .planetsDesk {
          display:none;
          @media(min-width:768px){
            display:block;
            width:100%;      
          }
        }
      }
    }
  }

</style>
