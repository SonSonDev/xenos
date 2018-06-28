<template>
    <section class="travel_mockup">
        <h1 class="travel_mockup-h1">See through</h1>
        <h4 class="travel_mockup-h4 gradientText">Christa’s eyes</h4>
        <div class="travel_mockup-awesome">
            <Wave class="travel_mockup-wave" color="#333333" is-top="true"/>
            <div class="travel_mockup-imgContainer">
                <img class="travel_mockup-img" src="" alt="">
            </div>
            <Wave class="travel_mockup-wave" color="#333333" />
        </div>
    </section>
</template>

<script>

import Wave from "@/components/Wave.vue"

export default {
  name:"TravelMockup",
    components: {
        Wave
    }
}
</script>

<style lang="scss" scoped>
    .travel_mockup{
        display: flex;
        flex-direction: column;
        align-items: center;
        // padding: 40px;
        line-height: 1.5;
        @media(min-width: 768px){
            padding-top: 180px;
        }
        &-h1{
            color: var(--main-dark-white);
            display: block;
        }
        &-h4{
            // max-width: 100px;
        }
        &-awesome{
        --header-color: var(--main-dark);
        width: 100%;
        height: 450px;
        overflow: hidden;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        background: linear-gradient(to right,var(--gradient-from), var(--gradient-to));
        margin-bottom: 40px;
        background-size: cover;
        background-position: center;
        }
    }
</style>
