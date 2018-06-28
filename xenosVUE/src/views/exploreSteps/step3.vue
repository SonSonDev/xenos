<template>
  <div class="step3">

    <h4 class="instruction">Select a date then a slot :</h4>
    <div class="selection">
      <E3date
        :zone="zone"
        @selected="updateDate"
      />
      <E3hour
        v-if="date"
        @selected="updateHour"
      />
    </div>

    <transition name="slide-right">
      <router-link :to="`/explore/${$route.params.planet}/${zone.name}/ok`">
        <button
          @click="$emit('selectedTime', {date: date, hour: hour})"
        >Next</button>
      </router-link>
    </transition>

  </div>
</template>

<script>
import E3main from "@/components/Explore/E3main.vue"
import E3date from "@/components/Explore/E3date.vue"
import E3hour from "@/components/Explore/E3hour.vue"

export default {
  name: 'explore',
  components: { E3main, E3date, E3hour },
  props: ['zone'],
  data: function() {
    return {
      date: null,
      hour: null
    }
  },
  created: function () {

  },
  methods: {
    updateDate: function (date) {
      this.date = date
    },
    updateHour: function (hour) {
      this.hour = hour
    }
  }
}

</script>

<style lang="scss" scoped>
.step3 {
  color: var(--main-dark-white);
  width: 100%;
  display: flex;
  flex-direction: column;
  justify-content: space-between;
  height: 100%;
  padding-top: 20px;
  padding-bottom: 70px;
  @media (min-width: 768px) {
    padding-top: 80px;
    justify-content: flex-start;
  }
  .instruction {
    display: none;
    @media (min-width: 768px) {
      display: block;
      margin-bottom: 20px;
    }
  }
  .selection {
    @media (min-width: 768px) {
      display: flex;
    }
  }
  button {
    margin: 0px auto 0;
    display: block;
    text-decoration: none;
    @media (min-width: 768px) {
      align-self: flex-start;
    }
  }
}
</style>
