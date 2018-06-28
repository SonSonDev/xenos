<template>
  <div class="step4">

    <E4summary
      :planet="planet"
      :zone="zone"
      :time="time"
    />

    <E4connect v-if="!user"/>
    <E4payment v-else />


    <transition name="slide-right">
      <router-link :to="`/explore/${$route.params.planet}/${zone.name}/done`">
        <button
          @click="pay"
        >Confirm</button>
      </router-link>
    </transition>
  </div>
</template>

<script>
import E4summary from '@/components/Explore/E4summary.vue'
import E4connect from '@/components/Explore/E4connect.vue'
import E4payment from '@/components/Explore/E4payment.vue'

export default {
  name: 'step4',
  props: ['planet', 'zone', 'time'],
  components: { E4summary, E4connect, E4payment },
  data: function() {
    return {
      user: null
    }
  },
  created: function () {
    this.user = JSON.parse(window.localStorage.getItem('xenosUserData'))
  },
  methods: {
    pay: function () {
      fetch(this.$baseUrl + '/api/bookings', {
        method: 'POST',
        headers: {
          'Accept': 'application/json',
          'Content-Type': 'application/json'
        },
        body: `
          {
            "userId": "${this.user['@id']}",
            "zoneId": "${this.zone['@id']}",
            "day": "${this.time.date[2]}-${this.time.date[1]}-${this.time.date[0]}T${this.time.hour[0]}:${this.time.hour[1]}:00+00:00",
            "hour": "${this.time.date[2]}-${this.time.date[1]}-${this.time.date[0]}T${this.time.hour[0]}:${this.time.hour[1]}:00+00:00",
            "endHour": "${this.time.date[2]}-${this.time.date[1]}-${this.time.date[0]}T${this.time.hour[0]}:${this.time.hour[1]}:00+00:00"
          }
        `
      })
    }
  }
}

</script>

<style lang="scss" scoped>
.step4 {
  overflow: auto;
  display: flex;
  flex-direction: column;
  align-items: center;
  button {
    margin-top: 10px;
  }
}
</style>
