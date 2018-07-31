<template>
  <router-link class="buttonContainer" :to="link">
    <button class="button"><slot></slot></button>
  </router-link>
</template>

<script>
export default {
  name:"OrangeButton",
  props: ["link"]
}
</script>

<style lang="scss" scoped>
.button {
  font-family: var(--font-bold);
  padding: 12px 32px;
  font-size: 14px;
  color: white;
  cursor: pointer;
  text-align:center;
  border: none;
  background-size: 300% 100%;
  background-image: linear-gradient(45deg, #FF5F6D, #FFC371, #FF5F6D, #FFC371 );
  box-shadow: 0px 4px 10px rgba(255, 150, 111, 0.15);
  border-radius: 50px;
  moz-transition: all .4s ease-in-out;
  -o-transition: all .4s ease-in-out;
  -webkit-transition: all .4s ease-in-out;
  transition: all .4s ease-in-out;
  white-space: nowrap;
  &:hover {
    background-position: 100% 0;
    moz-transition: all .4s ease-in-out;
    -o-transition: all .4s ease-in-out;
    -webkit-transition: all .4s ease-in-out;
    transition: all .4s ease-in-out;
  }
  &:focus {
    outline: none;
  }

  &Container {
    width:min-content;
    color: white;
    text-decoration: none;
  }
}
</style>
