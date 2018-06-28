<template>
  <div class="select">
    <!-- {{zones}} -->
    <div class="planet"
      :style="{ 'background': `linear-gradient(to top right, ${planet.colorStart}, ${planet.colorEnd})` }"
    >
      <div class="zone"
        v-for="(zone, i) in zones" :key="zone.id"
        v-if="zone"
      >
        <h3 class="name">{{zone.name}}</h3>
        <div class="button"
          @click="$emit('select', i)"
        >+</div>
      </div>
    
    </div>
  </div>
</template>

<script>
export default {
  name: 'E2select',
  props: ['zones', 'planet']
}
</script>

<style lang="scss" scoped>
.select {
  display: flex;
  justify-content: center;
  .planet {
    position: relative;
    width: 30vh;
    height: 30vh;
    border-radius: 100%;
    @media (min-width: 768px) {
      width: 24vw;
      height: 24vw;
      margin-right: 120px;
    }
    .zone {
      position: absolute;
      display: flex;
      flex-direction: column;
      align-items: center;
      &:nth-child(1) {
        top: 10%;
        left: 20%;
      }
      &:nth-child(2) {
        top: 40%;
        left: 60%;
      }
      &:nth-child(3) {
        top: 70%;
        left: 20%;
      }
      .button {
        margin-top: 10px;
        cursor: pointer;
        font-family: var(--font-bold);
        color: var(--main-dark);
        border-radius: 100%;
        text-align: center;
        line-height: 30px;
        width: 30px;
        height: 30px;
        background-color: var(--main-dark-white);
        box-shadow: 0px 4px 10px rgba(51, 51, 51, 0.15);
      }

    }
  }
}
</style>

