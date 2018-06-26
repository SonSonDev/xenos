<template>
  <div class="rover">
    <Header/>
    <TravelHeader/>
    <TravelBanner/>
  </div>
</template>

<script>
import Header from "@/components/Header.vue"
import TravelHeader from "@/components/Travel/TravelHeader.vue"
import TravelBanner from "@/components/Travel/TravelBanner.vue"
export default {
  name: 'rover',
  components: {
    Header, TravelHeader, TravelBanner
  }
}
</script>
