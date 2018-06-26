<template>
  <section>
   <Wave color="#333333" is-top="true"/>
   <Wave color="#333333" />
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
section {
  --header-color: var(--main-dark-color);
    width: 100%;
    height: 400px;
    overflow: hidden;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    background-image: url("https://i.pinimg.com/originals/bc/7e/90/bc7e902dd2c12a88f9ccb9bb628758cf.jpg");
    margin-bottom: 40px;
    background-size: cover;
    background-position: center;
}
</style>