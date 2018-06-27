<template>
  <div class="explore">
    <Header/>
    <button>{{$route.params.planet}}</button>
  </div>
</template>

<script>
import Header from "@/components/Header.vue"

export default {
  data: function() {
    return {
      planets: [
        'Uranus',
        'Mars',
        'Venus'
      ]
    }
  },
  name: 'explore',
  components: {
    Header
  }
}


</script>
