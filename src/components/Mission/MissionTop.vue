<template>
  <section>
    <h1>Our mission</h1>
    <h4>is you mission</h4>
    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Inventore quas omnis architecto, nobis tempora in harum corporis. Fugit ullam laudantium, reiciendis, at obcaecati assumenda odio suscipit eos doloremque quasi culpa? Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consectetur inventore voluptatibus quod voluptatum sed expedita, quis sint itaque id nemo quisquam similique fugit quidem facere sit eius recusandae totam quibusdam!</p>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus nostrum molestiae neque voluptatem rerum in vero itaque debitis soluta ratione quasi quaerat modi officiis sapiente, enim, minima magnam omnis quam! Lorem ipsum, dolor sit amet consectetur adipisicing elit. Corrupti placeat sunt dolorum non nesciunt molestias aliquid voluptatibus nobis reprehenderit, quas porro nisi saepe nulla laborum iure sed aperiam est repellat.</p>
  </section>
</template>

<script>
export default {
  name:"MissionTop"
}
</script>

<style lang="scss" scoped>
section {
  display: flex;
  flex-direction: column;
  align-items: center;
  padding: 40px;
  line-height: 1.5;
  @media(min-width: 768px){
    padding-top: 180px;
  }
}
h1 {
  color: var(--main-dark-white);
}
h4 {
  background: linear-gradient(to right,var(--gradient-from), var(--gradient-to));
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
p {
  color: var(--main-dark-white);
  display: block;
  margin-top: 30px;
  @media(min-width: 768px){
    max-width: 1000px;
  }
}
</style>
