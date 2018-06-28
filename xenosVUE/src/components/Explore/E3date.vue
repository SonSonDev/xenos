<template>
  <div class="select">
    <div class="date">
      <h3 class="title">Date</h3>
      <div class="choicesBox">
        <h5 class="choice">20/01/2024</h5>
        <h5 class="choice">22/01/2024</h5>
        <h5 class="choice">23/01/2024</h5>
        <h5 class="choice">24/01/2024</h5>
        <h5 class="choice">25/01/2024</h5>
        <h5 class="choice">26/01/2024</h5>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: 'E3select',
  props: ['zone']
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
  .date {
    width: 100%;
    display: flex;
    flex-direction: column;
    max-width: 250px;
    .title {
      padding: 10px;
      border-bottom: 1px solid var(--main-orange);
    }
    .choicesBox {
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
      }
    }
  }
}
</style>

