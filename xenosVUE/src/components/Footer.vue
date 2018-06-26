<template>
  <footer class="footer">
    <Wave :color="pageBackground" is-top="true"/>
    <ul class="footer-social">
      <li class="footer-social-item">
        <a href="" class="footer-social-item-link">
          <span class="jam jam-twitter-circle"></span>
        </a>
      </li>
      <li class="footer-social-item">
        <a href="" class="footer-social-item-link">
          <span class="jam jam-facebook-circle"></span>

        </a>
        </li>
      <li class="footer-social-item">
        <a href="" class="footer-social-item-link">
          <span class="jam jam-twitch"></span>
        </a>
      </li>
    </ul>

    <div class="footer-groupContainer">
      <div class="footer-group">
        <h4 class="footer-groupTitle">Company</h4>
        <ul class="footer-list">
          <li class="footer-listItem">
            <a href="#" class="footer-listItem-link">Our History</a>
          </li>
          <li class="footer-listItem">
            <a href="#" class="footer-listItem-link">Technology</a>
          </li>
          <li class="footer-listItem">
            <a href="#" class="footer-listItem-link">Contact Us</a>
          </li>
          <li class="footer-listItem">
            <a href="#" class="footer-listItem-link">Jobs</a>
          </li>
        </ul>
      </div>
      <div class="footer-group">
        <h4 class="footer-groupTitle">Your account</h4>
        <ul class="footer-list">
          <li class="footer-listItem">
            <a href="#" class="footer-listItem-link">Your Schedule</a>
          </li>
          <li class="footer-listItem">
            <a href="#" class="footer-listItem-link">Refunds</a>
          </li>
        </ul>
      </div>
      <div class="footer-group">
        <h4 class="footer-groupTitle">Information</h4>
        <ul class="footer-list">
          <li class="footer-listItem">
            <a href="#" class="footer-listItem-link">Help Desk</a>
          </li>
          <li class="footer-listItem">
            <a href="#" class="footer-listItem-link">Press</a>
          </li>
          <li class="footer-listItem">
            <a href="#" class="footer-listItem-link">F.A.Q</a>
          </li>
        </ul>
      </div>
      <div class="footer-group">
        <h4 class="footer-groupTitle">Privacy</h4>
        <ul class="footer-list">
          <li class="footer-listItem">
            <a href="#" class="footer-listItem-link">Terms & Conditions</a>
          </li>
          <li class="footer-listItem">
            <a href="#" class="footer-listItem-link">Disclaimer</a>
          </li>
          <li class="footer-listItem">
            <a href="#" class="footer-listItem-link">Responsability Terms</a>
          </li>
        </ul>
      </div>
    </div>
  </footer>
</template>

<script>
import Wave from "@/components/Wave.vue"
export default {
  name: 'Footer',
  components: {Wave},
  props: ["pageBackground"]
  
}

</script>

<style lang="scss" scoped>

.footer {
  // background-color: #333333;
  background: linear-gradient(39.04deg, #FF5F6D 15.26%, #FFC371 84.74%);


  // padding-top: 30px;
  padding-bottom: 100px;
  &-social {

    display:flex;
    justify-content:center;
    &-item:not(:last-child) {
      margin-right: 40px;
    }
    &-item-link {
      text-decoration:none;
    }
    & span {
      color:#ffffff;
      font-size:32px;
    }
  }
  &-group {
    margin-top: 60px;
    width: 40%;
    @media (min-width:768px) {
      width:20%;
    }
    &Container {
      width: 300px;
      display: flex;
      justify-content:space-between;
      flex-wrap: wrap;
      margin: 0 auto;
      @media (min-width:768px) {
        width:632px;
      }
    }
    &Title {
      color:#ffffff;
      font-size: 12px;
      font-family: "Barlow-Bold";
      text-transform: uppercase;
      margin-bottom: 10px;
    }
  }
  &-list {
    &Item {
      &-link {
        color:#ffffff;
        font-size: 14px;
        line-height: 22px;
        text-decoration: none;
        font-family: "Barlow-Regular";
        
      }
    }
  }
}

</style>
