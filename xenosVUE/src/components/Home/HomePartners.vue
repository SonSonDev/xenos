<template>
  <section class="home_partners">
    <div class="container">
      <h4 class="home_partners-title">Our partners</h4>
      <img class="home_partners-img-mobile" src="../../assets/img/mobilepartnerslogos.png" alt="">
      <img class="home_partners-img-desktop" src="../../assets/img/desktoppartnerslogos.png" alt="">
    </div>
  </section>
</template>

<script>
export default {
  name: "HomePartners"
}
</script>

<style lang="scss" scoped>
  .home_partners {
    display: flex;
    flex-direction: column;
    align-items: center;
    text-align: center;
    margin-top:80px;
    margin-bottom: 160px;

    @media (min-width: 768px) {
      margin-top:120px; 
    }

    &-img-mobile{
        margin-top: 80px;
        @media (min-width: 768px) {
            display: none;
        }
    }
    &-img-desktop{
        display: none;
        @media (min-width: 768px) {
            display: block;
            margin-top: 54px;
            // height: 50px; 
        }
    }
  }
</style>
