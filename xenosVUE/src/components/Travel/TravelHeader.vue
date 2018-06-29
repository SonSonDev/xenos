
<template>
    <section class="travel_header">
        <h1 class="travel_header-title">Take control</h1>
        <h4 class="travel_header-subTitle">Of your new companion</h4>
        <p class="travel_header-text">Our rover, launched in multiple copies on the target planets of the solar system, allows the user to see through his eyes. With its multiple rotating cameras, it offers a 360 ° view to contemplate the surface and its surroundings. Its spherical wheels adapt to various reliefs, combined with an optical stabilizer. Obstacles are avoided using sonar ultrasound technology, offering a comfortable and optimal exploration.</p>
    </section>
</template>

<script>
export default {
  name:"TravelHeader"
}
</script>

<style lang="scss" scoped>

.travel_header {
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
