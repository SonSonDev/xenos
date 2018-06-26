<template>
  <header class="header">
    <div class="header-logo-container">
      <img src="../assets/img/full-color-white.png" alt="">
    </div>
    <nav class="nav">
      
      <ul class="nav-list">
        <li class="nav-list-item">
          <router-link to="/">
            <span class="jam jam-home nav-list-icon"></span>
            <span class="nav-list-itemLabel">Home</span>
          </router-link>
        </li>
        <li class="nav-list-item">
          <router-link to="/mission">
            <span class="jam jam-lightbulb nav-list-icon"></span>
            <span class="nav-list-itemLabel">Our mission</span>
          </router-link>
        </li>
        <li class="nav-list-item">
          <router-link to="/rover">
            <span class="jam jam-rocket nav-list-icon"></span>
            <span class="nav-list-itemLabel">The rover</span>
          </router-link>
        </li>
        <li class="nav-list-item">
          <router-link to="/explore">
            <span class="jam jam-universe nav-list-icon"></span>
            <span class="nav-list-itemLabel">Explore</span>
          </router-link>
        </li>
        <li class="nav-list-item">
          <router-link to="/account">
            <span class="jam jam-user nav-list-icon nav-list-icon--still"></span>
            <span class="nav-list-itemLabel">Account</span>
          </router-link>
        </li>
      </ul>
    </nav>
    
  </header>
</template>

<script>

export default {
  name: 'Header',
  props: {
  }
}

</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped lang="scss">
.header {
  box-sizing: content-box;
  padding:12px 0 0;
  position: fixed;
  bottom:0;
  left:0;
  right:0;
  background-color: var(--header-color);
  z-index:10;
  @media(min-width:768px){
    background-color:unset;
    position: absolute;
    top:0;
    display: flex;
    padding:40px 60px 0;
    justify-content: space-between;
    position: inherit;
    bottom: inherit;
    
  }
  @media(min-width:1440px){
    padding:40px 122px 0;
  }


  &-logo-container {
    display: none;
    @media(min-width:768px){
      display:block;
    }
    width: 100px;
    & img {
      width: 100%;
    }
  }
}

//Nav////////////////////////////////////////////
.nav {
  height: 50px;
  @media (min-width:768px) {
    display:flex;
    align-items: center;
  }
  
  &-list {
    width:100%;
    height:100%;
    display: flex;
    @media(min-width:768px){
      align-items:center;
    }
    &-item {
      width: 20%;
      @media(min-width:768px){
        width: 10vw;
        max-width: 110px;
      }

      & a {
        font-family: var(--font-regular);
        color: var(--header-item-color);
        text-decoration: none;
        display: flex;
        flex-direction: column;
        align-items: center;
        font-size: 10px;
        &.router-link-exact-active {
          color:var(--main-orange);
        }
        @media(min-width:768px){
          font-family: var(--font-bold);
          width: min-content;
          font-size: 14px;
          flex-direction: row;
          align-items: center;
        }
      }
      &Label {
        white-space:nowrap;
      }
    }

    //Nav Icon///////////////////////////////////
    &-icon {
      font-size: 25px;
      margin-bottom:8px;
      @media(min-width:768px){
        display:none;
        margin-bottom:0;
        &--still {
          display: block;
        }
      }
    }
  }
  
}

</style>
