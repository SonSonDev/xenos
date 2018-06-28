<template>
    <div class="explore_main_header">
      <h6 class="explore_main_header_subtitle">Discover</h6>
      <h4 class="explore_main_header_title">Other worlds</h4>
      <p class="explore_main_header_text">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo, itaque! Possimus itaque non, repellat sed, aliquid praesentium animi.
      </p>
      <h6 class="explore_main_header_headline gradientText">01. Select the planet you want to explore</h6>
      <p class="explore_main_header_instruction">Select the planet you want to explore Select the planet you want to explore</p>
      <h6 class="explore_main_header_headline grey">02. Select the zone you want to explore on</h6>
      <p class="explore_main_header_instruction grey">Select the planet you want to explore Select the planet you want to explore</p>
      <h6 class="explore_main_header_headline grey">03. Select when you want to explore</h6>
      <p class="explore_main_header_instruction grey">Select the planet you want to explore Select the planet you want to explore</p>
      <h6 class="explore_main_header_headline grey">04. Done !</h6>
      <p class="explore_main_header_instruction grey">Select the planet you want to explore Select the planet you want to explore</p>
    </div>
</template>

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
          display: none;
          @media (min-width: 768px) {
            margin-top: 0;
            display: block;
            color: var(--secondary-dark);
          }
        }
      }
      &_instruction {
        margin-top: 6px;
        margin-bottom: 10px;
        &.grey {
          display: none;
          @media (min-width: 768px) {
            display: block;
            color: var(--secondary-dark);
          }
        }
      }
    }
  }
}

</style>

