<template>
  <div class="select">
    <div class="date">
      <h4 class="title">Date</h4>
      <div class="choicesBox">
        <h5 class="choice"
        v-for="(date, i) in dates" :key="i"
        :class="{active: i===selected}"
        @click="onSelect(i)"
        >{{`${date[0]} / ${date[1]} / ${date[2]}`}}</h5>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: 'E3date',
  props: ['zone'],
  data: function () {
    return {
      selected: null,
      dates: [
        [20, 11, 2032],
        [21, 11, 2032],
        [22, 11, 2032],
        [23, 11, 2032],
        [24, 11, 2032],
        [25, 11, 2032],
      ]
    }
  },
  methods: {
    onSelect: function (i) {
      this.selected = i
      this.$emit('selected', this.dates[this.selected])
    }
  }
}
</script>

<style lang="scss" scoped>
.select {
  color: var(--main-dark-white);
  padding: 0 64px;
  text-align: center;
  display: flex;
  flex-direction: column;
  align-items: center;
  @media (min-width: 768px) {
    padding: 0;
  }
  .date {
    width: 100%;
    display: flex;
    flex-direction: column;
    max-width: 250px;
    @media (min-width: 768px) {
      width: 20vw;
    }
    .title {
      padding: 10px;
      border-bottom: 1px solid var(--main-orange);
    }
    .choicesBox {
      height: 20vh;
      overflow: auto;
      .choice {
        padding: 10px;
        border-bottom: 1px dashed var(--secondary-dark);
        cursor: pointer;
        &:hover {
          background: linear-gradient(to right,var(--gradient-from), var(--gradient-to));
          background-clip: text;
          -webkit-background-clip: text;
          -webkit-text-fill-color: transparent;
        }
        &.active {
          color: var(--main-orange);
          background-color: var(--secondary-dark);
        }
      }
    }
  }
}
</style>

