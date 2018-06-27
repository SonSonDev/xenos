<template>
    <section class="travel_mockup">
        <h1 class="travel_mockup-h1">See through</h1>
        <h4 class="travel_mockup-h4 gradientText">Christa’s eyes</h4>
    </section>
</template>

<script>

export default {
  name:"TravelMockup"
}
</script>

<style lang="scss" scoped>
    .travel_mockup{
        display: flex;
        flex-direction: column;
        align-items: center;
        padding: 40px;
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
    }
</style>
