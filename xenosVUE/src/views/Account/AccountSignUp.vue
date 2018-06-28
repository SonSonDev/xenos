<template>
  <section class="account_signUp">
    
    <div class="container">
      <form class="account_signUp-form" v-on:submit.prevent="signUp">
        <h1 class="account_signUp-title">Create your account</h1>
        <h4 class="account_signUp-subTitle gradientText">And become an explorer</h4>
        <div class="account_signUp-nameContainer">
          <div class="account_signUp-nameContainer-part">
            <label class="account_signUp-label" for="">First Name</label>
            <input class="account_signUp-input" v-model="form.firstname" 
            placeholder="Carl" type="text">
          </div>
          <div class="account_signUp-nameContainer-part">
            <label class="account_signUp-label" for="">Last Name</label>
            <input class="account_signUp-input" v-model="form.lastname" placeholder="Sagan" type="text">
          </div>
        </div>
        <label class="account_signUp-label" for="">Email</label>
        <input class="account_signUp-input" v-model="form.email" placeholder="carl.sagan@cosmos.com" type="text">
        <label class="account_signUp-label" for="">Password</label>
        <input class="account_signUp-input" v-model="form.password" type="password" placeholder="6+ characters" ref="password1" :class="{error:form.error}">
        <label class="account_signUp-label" for="">Confirm Password</label>
        <input class="account_signUp-input" v-model="form.cpassword" type="password" placeholder="6+ characters" :class="{error:form.error}">

        <div class="account_signUp-checkboxContainer">
          <input class="account_signUp-checkbox" type="checkbox" name="termcondition" id="termcondition" v-model="form.checkbox">
          <label class="account_signUp-checkbox-label">I agree to the <a class="account_signUp-checkbox-labelLink">terms & conditions</a></label>
        </div>

        <div class="buttonContainer account_signUp-submitButton">
          <input type="submit" class="button" value="Sign Up">
        </div>


      </form>
        <p class="account_signUp-signUpLink-text" >Already have an account ? <router-link class="account_signUp-signUpLink gradientText" to="/account">Sign In</router-link></p>
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
        cpassword:"",
        checkbox:false,
        error:false
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
      if (this.form.password !== this.form.cpassword || !this.form.checkbox || this.form.firstname ==="" || this.form.lastname==="" || this.form.email==="") {
        console.log("tu t'es trompé!");
        this.form.password="";
        this.form.cpassword=""
        this.form.checkbox=false
        this.$refs.password1.focus()
        this.form.error=true
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
  
  display: flex;
  align-items: center;
  @media (min-width: 768px){
    & .container {
      max-width:466px;
      padding: 0;
      margin: 0 auto;
    }
  }
  &-form {
    margin-top:40px;
    display: flex;
    flex-direction: column;
      box-sizing: border-box;
    
    
    @media (min-width: 768px) {
      margin-top: 181px;
    }
  }

  &-nameContainer {
    display: flex;
    justify-content: space-between;

    &-part {
      width: 45%;
      & input {
        width: 100%;
      }
    }
  }
  &-title {
    color: var(--main-white);
    text-align: center;
    margin-bottom: 8px;
  }
  &-subTitle {
    text-align: center;
    margin-bottom: 20px;
    @media (min-width: 768px) {
      margin-bottom: 40px;
      
    }
  }
  &-label {
    color:var(--main-white);    
  }

  &-input {
    padding: 10px 8px;
    border-radius: 4px;
    border: none;
    margin-top: 8px;
    background-color: var(--secondary-dark);
    margin-bottom: 20px;
    box-sizing: border-box;
    color: var(--main-white);
    outline: none;

    &.error {
      border: 1px solid rgb(204, 56, 56);
    }
    &::placeholder {
      color: #7F7F7F;
      // color: var(--main-grey);
    }
  }

  &-checkbox {
    width: 20px;
    height: 20px;
    color: var(--secondary-dark);
    margin-right: 10px;
    &Container {
      display: flex;
      align-items: center;
      margin-bottom: 20px;
      @media (min-width: 768px) {
        justify-content: center;  
      }
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
  &-forgot {
    color: var(--main-white);
    text-align: center;
    font-family: var(--font-bold); 
  }
  &-submitButton {
    align-self: center;
    margin-bottom: 20px;
  }
  &-signUpLink {
    text-decoration: none;
    cursor: pointer;
    &-text {
      color : var(--main-white);
      font-family: var(--font-bold);
      text-align: center;
    }
  }
  & .container {
    width: 100%;
    @media(min-width: 768px) {

    }
  }

}
</style>