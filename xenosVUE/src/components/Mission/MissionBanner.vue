<template>
  <section class="mission_banner">
    <div class="mission_banner-awesome">
        <Wave color="#333333" is-top="true"/>
        <Wave color="#333333" />
   </div>
   <div class="mission_banner-quote">
       <h5 class="mission_banner-quoteText">
           “Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.  (citation stylée de quelqu’un stylé)”
        </h5>
       <p class="mission_banner-quoteAuthor">- Quelqu’un de stylé</p>
   </div>
  </section>
</template>

<script>
import Wave from "@/components/Wave.vue"

export default {
    name:"MissionBanner",
    components: {
        Wave
    }
}
</script>

<style lang="scss" scoped>

.mission_banner {
    &-awesome{
        --header-color: var(--main-dark-color);
        width: 100%;
        height: 450px;
        overflow: hidden;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        background-image: url("https://i.pinimg.com/originals/bc/7e/90/bc7e902dd2c12a88f9ccb9bb628758cf.jpg");
        margin-bottom: 40px;
        background-size: cover;
        background-position: center;
    }
    &-quote {
        &Text {
            background: linear-gradient(to right,var(--gradient-from), var(--gradient-to));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            max-width: 234px;
            text-align: center;
            margin: 17px auto 22px;
            line-height: 22px;
            @media (min-width:768px) {
                max-width: 466px;
            }
        }
        &Author {
            color:var(--main-grey-color);
            text-align: center;
        }
    }
}
</style>