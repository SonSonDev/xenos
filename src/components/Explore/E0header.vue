<template>
    <div class="explore_main_header">
      <h6 class="explore_main_header_subtitle">Discover</h6>
      <h4 class="explore_main_header_title">Other worlds</h4>
      <p class="explore_main_header_text">
        Humanity's interest in the heavens has been universal and enduring. Humans are driven to explore the unknown, discover new worlds, push the boundaries of our scientific and technical limits, and then push further. 
      </p>

      <div class="step" v-for="(step, i) in steps" :key="i"
        :class="{ active: i===current }">
        <h6 class="explore_main_header_headline gradientText">{{step.headline}}</h6>
        <p class="explore_main_header_instruction">{{step.instruction}}</p>
      </div>


    </div>
</template>

<script>
export default {
  name: 'E0header',
  props: ['current'],
  data: function () {
    return {
      steps: [
        { headline: '01. Select the planet you want to explore',
        instruction: 'Click on the arrows to navigate through the list of planets available for exploration' },
        { headline: '02. Select the zone you want to explore on',
        instruction: 'The planets are divided in zones. Click on the zone you want to explore' },
        { headline: '03. Select when you want to explore',
        instruction: 'The rover explorations are tightly scheduled. Select the day and the time you want to pilot the rover' },
        { headline: '04. DONE !',
        instruction: 'That’s it ! Now you just need to pay to confirm your booking. All the money will be used to help science' },
      ]
    }
  }
}
</script>


<style lang="scss" scoped>
.explore {
  &_main {
    &_header {
      margin: 0 auto;
      color: var(--main-dark-white);
      display: flex;
      flex-direction: column;
      padding: 26px 64px;
      max-width: 400px;
      @media (min-width: 768px) {
        margin: 80px;
        padding: 0 64px;
        width: 100%;
      }
      &_subtitle {
        margin-bottom: 2px;
        color: var(--main-grey);
        display: none;
        @media (min-width: 768px) {
          display: block;
        }
      }
      &_title {
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
          // display: none;
          @media (min-width: 768px) {
            margin-top: 0;
            // display: block;
            color: var(--secondary-dark);
          }
        }
      }
      &_instruction {
        margin-top: 6px;
        margin-bottom: 10px;
        &.grey {
          // display: none;
          @media (min-width: 768px) {
            // display: block;
            color: var(--secondary-dark);
          }
        }
      }
    }
  }
}
.step {
  display: none;
  @media (min-width: 768px) {
    display: block;
    color: var(--secondary-dark);
    .gradientText {
      color: var(--secondary-dark) !important;
      background: none;
      -webkit-background-clip: text;
      -webkit-text-fill-color: var(--secondary-dark);
    }
  }
  p {
    line-height: 1.2;
  }
}
.step.active {
  display: block;
  h6 {
    background: linear-gradient(to right,var(--gradient-from), var(--gradient-to));
    background-clip: text;
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
  }
  p {
    color: var(--main-dark-white);
  }
}
</style>

