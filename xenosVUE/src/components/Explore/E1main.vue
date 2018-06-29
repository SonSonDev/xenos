<template>
  <div class="explore_main_content">
    <h4 class="explore_main_content_title">
      {{planet.name}}
    </h4>
    <div class="explore_main_content_next">
      <p class="explore_main_content_next_text">
        {{planet.description}}
      </p>
      <div class="explore_main_content_next_video">
        <iframe class="explore_main_content_next_video_iframe" :src="planet.video" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
      </div>
      <transition name="slide-right">
      <router-link
        :to="`/explore/${planet.name}`"
      >
        <button
          @click="$emit('nextStep')"
          class="explore_main_content_next_button"
        >Next</button>
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
        // padding: 0 64px;
        text-align: center;
        max-width: 240px;
        position: relative;
        z-index: 1;
        @media (min-width: 768px) {
          padding: 0;
          justify-content: flex-start;
          max-width: none;
          text-align: left;
        }
        &_text {
          line-height: 1.2;

        }
        &_button {
          margin-top: 10px;
        }
        &_video {
          display: none;
          @media (min-width: 768px) {
            display: block;
            margin-top: 24px;
            border-radius: 10px;
            overflow: hidden;
            &_iframe {
              width: 100%;
              height: 100%;
            }
          }
        }
      }
    }
  }
}


</style>

