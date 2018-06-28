<template>
  <section class="mission_top">
    <h1 class="mission_top-title">Our mission</h1>
    <h4 class="mission_top-subTitle">is your mission</h4>
    <p class="mission_top-text">Xenos is part of a mission where space exploration will no longer belong to astronauts or scientists, but will now be an accessible experience for millions of people from Earth in a secure way. Seeing beyond the surface, and even helping to collect data will then be attainable for everyone. These data will be collected by the probe itself on the surface of each planet, and controlled by remote explorers.</p>
    <p class="mission_top-text">We imagine a future in which it's actually all of you; anyone that has access to this immersive technology, libraries, in their schools, in their basements, all being able to participate in the exploration of these new worlds together</p>
  </section>
</template>

<script>
export default {
  name:"MissionTop"
}
</script>

<style lang="scss" scoped>

.mission_top {
  display: flex;
  flex-direction: column;
  align-items: center;
  padding: 40px;
  line-height: 1.5;
  margin-bottom: 40px;
  @media(min-width: 768px){
    padding-top: 180px;
  }
  &-title {
    color: var(--main-dark-white);
  }

  &-subTitle {
    background: linear-gradient(to right,var(--gradient-from), var(--gradient-to));
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
  }

  &-text {
    color: var(--main-dark-white);
    display: block;
    margin-top: 30px;
    @media(min-width: 768px){
      max-width: 1000px;
    }
  }
}

</style>
