<template>
    <section class="travel_banner">
        <img class="travel_banner-rover" src="../../assets/img/rover.svg" alt="">
        <img class="travel_banner-imgMobile" src="../../assets/img/bg-rover-shape.svg" alt="">
        <img class="travel_banner-imgDesktop" src="../../assets/img/bg-rover-desktop-shape.svg" alt="">
    </section>
</template>

<script>

export default {
    name:"TravelBanner"
}
</script>

<style lang="scss" scoped>
.travel_banner{
    margin-bottom: 15vh;
    &-rover{
        width: 90%;
        position: absolute;
        left: 5%;
        top: 57%;
        z-index: -1;
    }
    &-imgMobile{
        width: 100%;
        position: relative;
        top: 5%;
        z-index: -2;
        @media (min-width:768px) {
            display: none;
        }
    }
    &-imgDesktop{
        display: none;
        @media (min-width:768px) {
            display: block;
            position: relative;
            z-index: -1;
            width: 100%;
        }
    }

}
</style>