<template>
  <section class="mission_science">

    <div class="container">
      <h4 class="mission_science-title">Recherche scientifique</h4>
      <p class="mission_science-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quam lacus suspendisse faucibus interdum. Felis donec et odio pellentesque diam volutpat commodo sed. Enim lobortis scelerisque fermentum dui. Purus in massa tempor nec feugiat nisl pretium fusce.</p>
    </div>

    <div class="mission_science-numbers">
      <h4 class="mission_science-numbers-title">Xenos in numbers</h4>
      <h5 class="mission_science-numbers-subTitle">Since the beginning</h5>
      <div class="mission_science-numbers-container">
        <div class="mission_science-numbers-item">
          <h1 class="mission_science-numbers-itemNumber">10.000</h1>
          <h5 class="mission_science-numbers-itemText">Kilometers covered</h5>
        </div>
        <div class="mission_science-numbers-item">
          <h1 class="mission_science-numbers-itemNumber">4</h1>
          <h5 class="mission_science-numbers-itemText">Planets explored</h5>
        </div>
        <div class="mission_science-numbers-item">
          <h1 class="mission_science-numbers-itemNumber">86</h1>
          <h5 class="mission_science-numbers-itemText">New material discovered</h5>
        </div>
      </div>
    </div>
  </section>
</template>

<script>
export default {
  
}
</script>

<style lang="scss" scoped>
  .mission_science {
    margin-top: 40px;
    @media (min-width: 768px) {
      margin-top: 80px;
      
    }
    @media (min-width:949px){
      & .container {
        padding:0;
      }
      max-width:949px;
      margin: 40px auto 0;
    }
    &-title {
      color:#ffffff;
      margin-bottom: 20px;
    }

    &-text {
      color:#ffffff;
      margin-bottom: 20px;
    }

    &-numbers {
      color: #ffffff;
      background: linear-gradient(39.04deg, #FF5F6D 15.26%, #FFC371 84.74%);
      border-radius:200px;
      padding:50px 0 78px;
      @media(min-width: 768px){
        padding-bottom: 145px;
      }
      &-title {
        text-align: center;
        margin-bottom:4px;
      }
      &-subTitle{
        text-align: center;
        margin-bottom: 40px;
      @media(min-width: 768px){
        margin-bottom: 80px;
      }
      }
      &-item {
        margin-bottom:20px;
        @media(min-width: 768px){
          // margin:0 42px;
          width: 30%;
        }
        &Number {
          text-align: center;
          margin-bottom:4px;

        }
        &Text {
          text-align: center;
        }
      }
      &-container {
        @media (min-width:768px){
          display: flex;
          justify-content: center;
        }
      }
    }
  }
</style>
