<template>

  <div class="connect">
    <p>You need to be connected to pay</p>
    
    <div class="buttons">
      <router-link :to="'/account/signin'">
        <button
        >Login</button>
      </router-link>
      <router-link :to="'/account/signup'">
        <button
        >Sign up</button>
      </router-link>
    </div>

  </div>
</template>

<style lang="scss" scoped>
.connect {
  color: var(--main-dark-white);
  display: flex;
  align-items: center;
  flex-direction: column;
  .buttons {
    margin-top: 20px;
    button {
      margin: 0 10px;
    }
  }
}
</style>
