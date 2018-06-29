<template>
  <div class="step5">
    <h4 class="title">Thank you for your participation</h4>
    <p class="gradientText">You will receive a confirmation mail with all details</p>

    <transition name="slide-right">
      <router-link :to="'/account/dashboard'">
        <button
        >Launch Exploration</button>
      </router-link>
    </transition>
  </div>
</template>

<style lang="scss" scoped>
.step5 {
  color: var(--main-dark-white);
  text-align: center;
  margin: 200px auto 0;
  padding: 0 40px;
  .title {
  }
  p {
    line-height: 1;
    margin: 20px 0;
  }
}
</style>

