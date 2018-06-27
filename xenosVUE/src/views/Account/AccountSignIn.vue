<template>
  <section class="account_signIn">
    
    <div class="container">
      <form class="account_signIn-form">
        <h4 class="account_signIn-title">Sign In</h4>
        <label class="account_signIn-label" for="">Email</label>
        <input class="account_signIn-input" placeholder="carl.sagan@cosmos.com" type="text">
        <label class="account_signIn-label" for="">Password</label>
        <input class="account_signIn-input" placeholder="6+ characters" type="text">
        <p class="account_signIn-forgot">Forgot your password</p>
        <OrangeButton class="account_signIn-submitButton" link="/ezeaeaz">Sign In</OrangeButton>
        
        <router-link class="account_signIn-signInLink" to="account/signup">
          No account ? Create one.
        </router-link>
      </form>
    </div>
  </section>
</template>

<script>
import OrangeButton from "@/components/OrangeButton.vue";

export default {
name:"AccountSignIn",
components:{OrangeButton}
}
</script>

<style lang="scss" scoped>

.account_signIn {
  height: 100vh;
  display: flex;
  align-items: center;
  @media (min-width: 768px){
    height: inherit;
    &-form {
      width: 100%;
    }
  }
  &-form {
    display: flex;
    flex-direction: column;
    height: 434px;
    border: 1px dashed var(--main-orange);
    border-radius: 4px;
    padding:50px 20px 0;
    @media (min-width: 768px) {
      height: inherit;
      
    }
  }
  &-title {
    color: var(--main-white);
    margin-bottom: 50px;
    text-align: center;
    align-self: center;
  }
  &-label {
    color:var(--main-white);
    margin-top:20px;
    margin-bottom: 4px;
  }
  &-input {
    padding: 6px 10px;
    border-radius: 4px;
    border: none;
    &::placeholder {
      color: var(--main-grey);
    }
  }
  &-forgot {
    color: var(--main-white);
    text-align: center;
    font-family: var(--font-bold);
    margin-bottom: 30px; 
  }
  &-submitButton {
    align-self: center;
  }
  &-signInLink {
    color : var(--main-white);
    align-self: center;
    font-family: var(--font-bold);
    text-decoration: none;
    margin-top: 10px;
  }
  & .container {
    width: 100%;
    @media(min-width: 768px) {
      padding:0;
      margin: 220px auto 0;
      max-width: 324px;
      height: 376px;
    }
  }
}
</style>