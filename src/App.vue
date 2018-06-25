<template>
  <div id="app">
    <Header/>
    <router-view/>
  </div>
</template>

<script>

import Header from '@/components/Header.vue'

export default {
  components: {
    Header
  }
}
</script>


<style lang="scss">
@import './assets/css/reset.css';
@import './assets/css/jam.min.css';

@font-face {
  font-family: "Barlow-Bold";
  src: url("./assets/fonts/Barlow-Bold.ttf");
}
@font-face {
  font-family: "Barlow-Medium";
  src: url("./assets/fonts/Barlow-Medium.ttf");
}
@font-face {
  font-family: "Barlow-Regular";
  src: url("./assets/fonts/Barlow-Regular.ttf");
}

.container {
  box-sizing: border-box;
  padding-left:43px;
  padding-right:43px;

  @media(min-width: 768px){
    padding-right: 60px;
    padding-left: 60px;
  }
  @media(min-width: 1440px){
    padding-right: 122px;
    padding-left: 122px;
  }
}


// Button////////////////////////////////
  
button {
  font-family: "Barlow-Bold";
  padding: 12px 32px;
  font-size: 14px;
  color: #fff;
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
    width:inherit;
    color: #fff;
    text-decoration: none;
  }
}

#app {
  position: relative;
}

</style>
