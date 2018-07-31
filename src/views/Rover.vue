<template>
  <div class="rover">
    <Header/>
    <TravelHeader/>
    <TravelBanner/>
    <TravelJourney/>
    <TravelMockup/>
    <TravelVR/>
    <Footer page-background="#333333"/>
  </div>
</template>

<script>
import Header from "@/components/Header.vue"
import TravelHeader from "@/components/Travel/TravelHeader.vue"
import TravelBanner from "@/components/Travel/TravelBanner.vue"
import TravelJourney from "@/components/Travel/TravelJourney.vue"
import TravelMockup from "@/components/Travel/TravelMockup.vue"
import TravelVR from "@/components/Travel/TravelVR.vue"
import Footer from "@/components/Footer.vue"


export default {
  name: 'rover',
  components: {
    Header, TravelHeader, TravelBanner, TravelJourney, TravelMockup, TravelVR, Footer
  }
}
</script>
