<template>
  <section class="account_signIn">
    
    <div class="container">
      <form class="account_signIn-form" v-on:submit.prevent="connection">
        <h1 class="account_signIn-title">Login</h1>
        <h4 class="account_signIn-subTitle gradientText">To your dashboard</h4>
        <label class="account_signIn-label" for="">Email</label>
        <input class="account_signIn-input" placeholder="carl.sagan@cosmos.com" type="text" v-model="form.email">
        <label class="account_signIn-label" for="">Password</label>
        <input class="account_signIn-input" placeholder="6+ characters" type="text" v-model="form.password">
        
        <div class="account_signIn-checkboxContainer">
          <input class="account_signIn-checkbox" type="checkbox" name="termcondition" id="termcondition" v-model="form.checkbox">
          <label class="account_signIn-checkbox-label">Keep me signed in</label>
        </div>

        <div class="buttonContainer account_signIn-submitButton">
          <input type="submit" class="button" value="Log in">
        </div>

        <p class="account_signIn-signUpLink-text">Don’t have an account ? <router-link class="account_signIn-signUpLink gradientText" to="/account/signup">Sign up</router-link></p>

      </form>
    </div>
  </section>
</template>

<script>
import OrangeButton from "@/components/OrangeButton.vue";

export default {
  name:"AccountSignIn",
  components:{OrangeButton},
  data: function(){
    return {
      form: {
        email:"",
        password:""
      }
    }
  },
  methods:{
    connection() {
      fetch('http://127.0.0.1:8000/api/users', {
        method: 'GET'
      })
      .then(response => response.json())
      .then(data => {
        var userlist = data['hydra:member']
        

        for (var i = 0; i < userlist.length; i++) {
          if (userlist[i].email===this.form.email || userlist[i].password===this.form.password) {
            localStorage.setItem("xenosUserEmail", this.form.email)
            localStorage.setItem("xenosUserPW", this.form.password)
            return;
          }
        }
        localStorage.removeItem("xenosUserEmail")
        localStorage.removeItem("xenosUserPW")
      })
    }
  }
}
</script>

<style lang="scss" scoped>

.account_signIn {
  display: flex;
  align-items: center;
  
  &-form {
    display: flex;
    flex-direction: column;
    margin-top: 40px;
        
    @media (min-width: 768px) {
      margin-top: 181px;
      width: 466px;
    }
  }
  &-title {
    color: var(--main-white);
    text-align: center;
    align-self: center;
  }
  &-subTitle {
    margin-top: 8px;
    text-align: center;
    align-self: center;
    margin-bottom: 40px;
  }

  &-label {
    color:var(--main-white);
  }
  
  &-input {
    padding: 10px 8px;
    border-radius: 4px;
    border: none;
    margin-top: 8px;
    background-color: var(--secondary-dark-color);
    margin-bottom: 20px;
    box-sizing: border-box;
    color: var(--main-white);

    &::placeholder {
      color: #7F7F7F;
      // color: var(--main-grey);
    }
  }
  
  &-checkbox {
    width: 20px;
    height: 20px;
    color: var(--secondary-dark-color);
    margin-right: 10px;
    &Container {
      display: flex;
      align-items: center;
      margin-bottom: 20px;
      justify-content: center;  

    }
    &-label {
      text-transform: initial;
      font-size:14px;
      line-height: 22px;
      font-family: var(--font-regular);
      color: var(--main-white);
      &Link {
        cursor: pointer;
        text-decoration: underline;
        color: var(--main-white);
        font-family: var(--font-bold);
      }
    }
  }

  &-submitButton {
    align-self: center;
    margin-bottom: 20px;
  }
  &-signUpLink-text {
    color : var(--main-white);
    align-self: center;
    font-family: var(--font-bold);
    text-decoration: none;
    
  }
  & .container {
    width: 100%;
    @media(min-width: 768px) {
      width: inherit;
      padding: 0;
      margin: 0 auto;
    }
  }
}
</style>