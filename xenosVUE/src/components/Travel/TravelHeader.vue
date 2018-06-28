
<template>
    <section class="travel_header">
        <h1 class="travel_header-title">Take control</h1>
        <h4 class="travel_header-subTitle">Of your new companion</h4>
        <p class="travel_header-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Inventore quas omnis architecto, nobis tempora in harum corporis. Fugit ullam laudantium, reiciendis, at obcaecati assumenda odio suscipit eos doloremque quasi culpa? Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consectetur inventore voluptatibus quod voluptatum sed expedita, quis sint itaque id nemo quisquam similique fugit quidem facere sit eius recusandae totam quibusdam!</p>
    </section>
</template>

<script>
export default {
  name:"TravelHeader"
}
</script>

<style lang="scss" scoped>

.travel_header {
  display: flex;
  flex-direction: column;
  align-items: center;
  padding: 40px;
  line-height: 1.5;
  margin-bottom: 40px;
  @media(min-width: 768px){
    padding-top: 180px;
  }
  &-title {
    color: var(--main-dark-white);
  }

  &-subTitle {
    background: linear-gradient(to right,var(--gradient-from), var(--gradient-to));
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
  }

  &-text {
    color: var(--main-dark-white);
    display: block;
    margin-top: 30px;
    @media(min-width: 768px){
      max-width: 1000px;
    }
  }
}

</style>
