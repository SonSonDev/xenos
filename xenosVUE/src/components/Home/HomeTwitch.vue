<template>
  <section class="home_twitch">
    <div class="container">
      <h3 class="home_twitch-title">Cannot wait ? Follow the adventure on Twitch.</h3>
      <iframe class="home_twitch-player" src="https://player.twitch.tv/?channel=nasa" frameborder="0" allowfullscreen="true" scrolling="no" height="378" width="620"></iframe><a href="https://www.twitch.tv/nasa?tt_content=text_link&tt_medium=live_embed" style="padding:2px 0px 4px; display:block; width:345px; font-weight:normal; font-size:10px; text-decoration:underline;"></a>
      
    </div>
  </section>
</template>

<script>
export default {
  name: "HomeTwich"
}
</script>

<style lang="scss" scoped>
  .home_twitch {
    display: flex;
    flex-direction: column;
    align-items: center;
    text-align: center;
    margin-top:80px;
    margin-bottom: 160px;

    @media (min-width: 768px) {
      margin-top:120px; 
    }
    &-title {
      color: #333333;
      font-size: 24px;
      font-family: var(--font-bold);
      margin-bottom: 30px;

    }
    &-player {
      width: 320px;
      height: 180px;
      max-width: 90vw;
      @media (min-width: 768px) {
        width: 640px;
        height: 360px;
      }
      @media (min-width: 1280px) {
        width: 1024px;
        height: 576px;
      }
    }
  }
</style>
