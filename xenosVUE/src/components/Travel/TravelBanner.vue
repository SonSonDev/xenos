<template>
    <section class="travel_banner">
       <div class="travel_banner-awesome">
            <Wave class="travel_banner-wave" color="#333333" is-top="true"/>
            <img class="travel_banner-img" src="../../assets/img/rover.svg" alt="">
            <Wave class="travel_banner-wave" color="#333333" />
        </div>
    </section>
</template>

<script>

import Wave from "@/components/Wave.vue"

export default {
    name:"TravelBanner",
    components: {
        Wave
    }
}

</script>

<style lang="scss" scoped>
.travel_banner{
    margin-bottom: 15vh;
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