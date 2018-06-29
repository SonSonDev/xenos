<template>
  <div class="select" v-if="planet">
    <!-- {{zones}} -->
    <div class="planet"
      :style="{ 'background': `linear-gradient(to top right, ${planet.colorStart}, ${planet.colorEnd})` }"
    >
      <div class="zone"
        v-for="(zone, i) in zones" :key="zone.id"
        v-if="zone"
      >
        <h4 class="name">{{zone.name}}</h4>
        <img src="../../assets/img/zone-button.png" alt="" @click="$emit('select', i)">
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
  color: white;
  display: flex;
  justify-content: center;
  .planet {
    position: relative;
    width: 30vh;
    height: 30vh;
    border-radius: 100%;
    margin-top: 40px;
    @media (min-width: 768px) {
      margin-top: 0;
      width: 24vw;
      height: 24vw;
      margin-right: 120px;
    }
    .zone {
      position: absolute;
      display: flex;
      flex-direction: column;
      align-items: center;
      h4 {
        font-size: 18px;
        @media (max-width: 767px) {
          text-align: center;
        }
      }
      img {
        margin-top: 5px;
        width: 50px;
      }
      &:nth-child(1) {
        top: 5%;
        left: 0%;
      }
      &:nth-child(2) {
        top: 25%;
        left: 60%;
      }
      &:nth-child(3) {
        top: 70%;
        left: 10%;
      }
      .buttonPlus {
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
        // background-image: url('../../assets/img/zone-button.png');
      }

    }
  }
}
</style>

