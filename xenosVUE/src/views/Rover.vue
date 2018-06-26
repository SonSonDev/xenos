<template>
  <div class="rover">
    <Header/>
    <TravelHeader/>
    <p>trap</p>
  </div>
</template>

<script>
import Header from "@/components/Header.vue"
import TravelHeader from "@/components/Travel/TravelHeader.vue"
export default {
  name: 'rover',
  components: {
    Header, TravelHeader
  }
}
</script>


