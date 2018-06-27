<template>

  <div class="explore">
    <Header/>
    <div class="explore_main">
      <E0header/>
      <transition name="slide-right">
        <router-view class="child-view"></router-view>
      </transition>
    </div>
  </div>
</template>

<script>
import Header from "@/components/Header.vue"
import E0header from "@/components/Explore/E0header.vue"

export default {
  name: 'Explore',
  components: { Header, E0header }
}


</script>


<style lang="scss" scoped>


.explore {
  height: 100%;
  width: 100%;
  overflow: hidden;
  @media(min-width: 768px){
    margin-top: 101px; 

  }
  &_main {
    height: 100%;
    display: flex;
    flex-direction: column;
    @media (min-width:768px) {
      flex-direction: row;
    }
  }
}
.child-view {
  transition: all .5s cubic-bezier(.55,0,.1,1);
}
.slide-left-enter, .slide-right-leave-active {
  opacity: 0;
  -webkit-transform: translate(30px, 0);
  transform: translate(30px, 0);
}
.slide-left-leave-active, .slide-right-enter {
  opacity: 0;
  -webkit-transform: translate(-30px, 0);
  transform: translate(-30px, 0);
}

</style>

