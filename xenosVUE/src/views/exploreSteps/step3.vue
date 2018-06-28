<template>
  <div class="step3">

    <E3date
      :zone="prevChoice"
    />
    <E3hour />


  </div>
</template>

<script>
import E3main from "@/components/Explore/E3main.vue"
import E3date from "@/components/Explore/E3date.vue"
import E3hour from "@/components/Explore/E3hour.vue"

export default {
  name: 'explore',
  components: { E3main, E3date, E3hour },
  props: ['prevChoice'],
  data: function() {
    return {

    }
  },
  created: function () {

  },
  methods: {

  }
}

</script>

<style lang="scss" scoped>
.step3 {
  width: 100%;
  display: flex;
  flex-direction: column;
  justify-content: space-between;
  // height: 100%;
  padding-top: 20px;
  padding-bottom: 70px;
  @media (min-width: 768px) {
    flex-direction: row-reverse;
    padding-top: 80px;
  }
}
</style>
