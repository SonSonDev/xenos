<template>
  <section class="home_explore">
    <div class="home_explore-desc">
      <div class="container">
        <p class="home_explore-desc-onTitle">Explore</p>
        <h2 class="home_explore-desc-title">Discover the Solar System</h2>
        <p class="home_explore-desc-text">Since the dawn of time, scientists strive to uncover the secrets of the Universe and the planets in it. From discovering the origin of everything to finding new forms of life, their work is essential to push humanity forward.</p>
        <p class="home_explore-desc-text">For the first time in history, everyone will be able to help them in this tremendous task.</p>
        <a class="home_explore-button buttonContainer" href="">
          <button class="button">Start exploring</button>
        </a>
      </div>
    </div>
    <div class="home_explore-imgContainer">
      <svg width="312" height="260" viewBox="0 0 312 260" fill="none" xmlns="http://www.w3.org/2000/svg">
        <ellipse cx="44.8834" cy="45.0375" rx="44.8834" ry="45.0375" transform="translate(8.24883 10.7119)" fill="#B4E0B3"/>
        <ellipse cx="81.2753" cy="81.5543" rx="81.2753" ry="81.5543" transform="translate(149.449)" fill="#F57D7D"/>
        <ellipse cx="67.2037" cy="67.4345" rx="67.2037" ry="67.4345" transform="translate(0 125.131)" fill="#0085AE"/>
      </svg>
    </div>
    <HomeWave color="#333333"></HomeWave>
  </section>
  
</template>

<script>
import HomeWave from '@/components/Home/HomeWave.vue';

export default {
  name: 'HomeExplore',
  components: {
    HomeWave
  }
}
</script>

<style lang="scss" scoped>
  .container  {
    display:flex;
      flex-direction: column;
  }
  .home_explore {
    &-desc {
      margin-top:40px;
      margin-bottom: 40px;
      
      
      &-onTitle {
        font-size: 12px;
        font-family: "Barlow-Bold";
        text-transform : uppercase;
        color: #C8C8C8;

      }
      &-title {
        font-size: 24px;
        font-family: "Barlow-Bold";
        margin-bottom: 20px;
        color: #333333;


      }
      &-text {
        font-size: 14px;
        line-height: 22px;
        font-family: "Barlow-Regular";
        margin-bottom: 20px;
        color: #333333;
      }
    }
    &-button {
      display:block;
      align-self:flex-end;
      
    }
    &-img {
      &Container {
        width:min-content;
        margin:0 auto;
      }
    }
  }

</style>
