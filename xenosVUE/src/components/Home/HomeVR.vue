<template>
  <section class="home_VR">
    <div class="home_VR-desc">
      <div class="container">
        <h4 class="home_VR-desc-title">Start the VR experience</h4>
        <p class="home_VR-desc-text">Christa, named after Christa McAuliffe, the first civilian selected to go into space, is our revolutionary all terrain rover. Its unique spherical wheel design allows it to effortlessly roll on every surface, and is able to withstand extreme weather conditions.</p>
        <p class="home_VR-desc-text">With its five 8K sensors, you’ll be able to experience a fully immersive 360° journey on the selected planets.</p>
      </div>
    </div>
    <div class="home_VR-imgContainer">
      <div class="container">
        <iframe class="home_VR-player" src="https://www.youtube.com/embed/Nx71FNASBQ0" frameborder="0" allowfullscreen="true" scrolling="no" height="378" width="588"></iframe><a href="https://www.twitch.tv/nasa?tt_content=text_link&tt_medium=live_embed" style="padding:2px 0px 4px; display:block; width:345px; font-weight:normal; font-size:10px; text-decoration:underline;"></a>
      </div>
    </div>
  </section>
</template>

<script>
export default {
  name:"HomeVR"
}
</script>

<style lang="scss" scoped>

  .home_VR {
    margin-top:80px;
    margin-bottom: 200px;
    @media(min-width: 768px){
      margin-top:120px;
      display: flex;
      flex-direction: row-reverse;
    }
    &-desc {
      margin-bottom: 40px;
      @media (min-width: 768px) {
        margin-bottom: 0;
        width:50%;
        display:flex;
        align-items:center;
      }
      &-onTitle {
        text-transform : uppercase;
        color: var(--main-grey);
        margin-bottom:2px;
      }
      &-title {
        margin-bottom: 20px;
        color: var(--main-dark);
      }
      &-text {
        line-height: 22px;
        margin-bottom: 20px;
        color: var(--main-dark);
      }
    }

    &-img {
      max-width:100%;
      margin-bottom:20px;
      position: relative;
      z-index: 1;
      &Container {
        justify-content: center;
        margin:0 auto;
        display: flex;
        align-items: center;
        position:relative;
      }

    }

    &-player {
      width: 320px;
      height: 180px;
      max-width: 90vw;
      @media (min-width: 768px) {
        width: 588px;
        height: 360px;
      }
    }
  }

</style>