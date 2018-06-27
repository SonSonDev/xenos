<template>
  <div class="explore_main_content">
    <h4 class="explore_main_content_title">
      {{planet.name}}
    </h4>
    <div class="explore_main_content_next">
      <p class="explore_main_content_next_text">
        {{planet.description}}
      </p>
      <iframe class="explore_main_content_next_video" :src="planet.video" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
      <transition name="slide-right">
      <router-link
        :to="`/explore/${planet.name}`"
      >
        <button class="explore_main_content_next_button">Next</button>
      </router-link>
      </transition>
    </div>
  </div>
</template>

<script>
export default {
  name: 'E1main',
  props: ['planet']
}
</script>

<style lang="scss" scoped>
.explore {
  &_main {
    &_content {
      height: 60vh;
      display: flex;
      flex-direction: column;
      position: relative;
      z-index: 2;
      @media (min-width: 768px) {
        margin-top: 80px;
        max-width: 345px;
        height: auto;
      }
      &_title {
        text-align: center;
        @media (min-width: 768px) {
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
              height: auto;
          }
        }
      }
    }
  }
}

</style>

