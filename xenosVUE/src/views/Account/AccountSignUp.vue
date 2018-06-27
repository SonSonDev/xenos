<template>
  <section class="account_signUp">
    
    <div class="container">
      <form class="account_signUp-form" v-on:submit.prevent="signUp">
        <h4 class="account_signUp-title">Create your account</h4>
        <label class="account_signUp-label" for="">First Name</label>
        <input class="account_signUp-input" v-model="form.firstname" placeholder="Carl" type="text">
        <label class="account_signUp-label" for="">Last Name</label>
        <input class="account_signUp-input" v-model="form.lastname" placeholder="Sagan" type="text">
        <label class="account_signUp-label" for="">Email</label>
        <input class="account_signUp-input" v-model="form.email" placeholder="carl.sagan@cosmos.com" type="text">
        <label class="account_signUp-label" for="">Password</label>
        <input class="account_signUp-input" v-model="form.password" type="password" placeholder="6+ characters">
        <label class="account_signUp-label" for="">Confirm Password</label>
        <input class="account_signUp-input" v-model="form.cpassword" type="password" placeholder="6+ characters">
        
        <div class="buttonContainer account_signUp-submitButton">
          <input type="submit" class="button" value="Sign Up">
        </div>
        <router-link class="account_signUp-signUpLink" to="/account/">Already have an account ? Sign In</router-link>
      </form>
    </div>
  </section>
</template>

<script>
import OrangeButton from "@/components/OrangeButton.vue";

export default {
  name:"AccountSignUp",
  components:{OrangeButton},
  data: function(){
    return {
      form: {
        firstname:"",
        lastname:"",
        email:"",
        password:"",
        cpassword:""
      }
    }
  },
  methods: {
    getUser() {
      fetch('http://127.0.0.1:8000/api/users', {
        method: 'GET'
      })
      .then(response => response.json())
      .then(data => {
        this.User = data['hydra:member']
        console.log(data);
        
      })
    },
    addUser() {
      fetch('http://127.0.0.1:8000/api/users', {
        method: 'POST',
        headers: {
          'Accept': 'application/json',
          'Content-Type': 'application/json'
        },
        body: '{"email": "' + this.form.email + '", "password": "' + this.form.password + '", "firstname":"' + this.form.firstname + '", "lastname":"' + this.form.lastname + '"}'
      })
      .then(function() {
        console.log('{"email": "' + this.form.email + '", "password": "' + this.form.password + '", "firstname":"' + this.form.firstname + '", "lastname":"' + this.form.lastname + '"}')
        this.getUser()
        this.form = {
          firstname:"",
          lastname:"",
          email:"",
          password:"",
          cpassword:""
        }
      }.bind(this))
    },
    deleteUser(id) {
      fetch('http://127.0.0.1:8000/api/users/'+id, {
          method: 'DELETE'
      })
      .then(function() {
          this.getUser()
      }.bind(this))
    },
    signUp(){
      if (this.form.password !== this.form.cpassword) {
        console.log("tu t'es trompé!");
      } else {
        this.addUser()
        window.location.href = "/account"
      }
    }
  },
  created: function(){
    this.getUser();
  }
}
</script>

<style lang="scss" scoped>

.account_signUp {
  padding-top: 63px;
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
    
    border: 1px dashed var(--main-orange);
    border-radius: 4px;
    padding:40px 20px 40px;
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
    margin-bottom: 4px;
  }
  &-input {
    padding: 6px 10px;
    border-radius: 4px;
    border: none;
    
    margin-bottom: 20px;
    
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
  &-signUpLink {
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
      margin: 120px auto 0;
      max-width: 324px;
      
    }
  }
}
</style>