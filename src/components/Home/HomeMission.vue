<template>
  <section class="home_ourMission">
    <div class="home_ourMission-desc">
      <div class="container">
        <p class="home_ourMission-desc-onTitle">Our mission</p>
        <h2 class="home_ourMission-desc-title">A new way to explore</h2>
        <p class="home_ourMission-desc-text">Since the dawn of time, scientists strive to uncover the secrets of the Universe and the planets in it. From discovering the origin of everything to finding new forms of life, their work is essential to push humanity forward.</p>
        <p class="home_ourMission-desc-text">For the first time in history, everyone will be able to help them in this tremendous task.</p>
        <a class="buttonContainer" href="">
          <button class="button">Learn more</button>
        </a>
      </div>
    </div>
    <div class="home_ourMission-timeline">
      <div class="home_ourMission-timeline-interaction">
        <!-- SVG chiant!!!! -->
        <svg width="278" height="60" viewBox="0 0 278 60" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M0 9.10308C6.85207 2.2135 19.5315 -2.67652 31.6741 1.60662C45.8491 6.60669 66.015 29.5195 76.5062 25.6984C86.8615 21.9267 124.265 -9.15179 149.767 3.97361C175.269 17.099 223.182 35.3539 262.439 9.25395" transform="translate(11.901 16.3934)" stroke="url(#paint0_linear)" stroke-width="6" stroke-linecap="round"/>
          <circle cx="15" cy="15" r="15" transform="translate(0 5)" fill="url(#paint1_linear)"/>
          <path d="M28 15C28 22.1797 22.1797 28 15 28C7.8203 28 2 22.1797 2 15C2 7.8203 7.8203 2 15 2C22.1797 2 28 7.8203 28 15Z" transform="translate(137 2)" fill="white" stroke="url(#paint2_linear)" stroke-width="4"/>
          <circle cx="15" cy="15" r="13" transform="translate(210 24)" fill="white" stroke="url(#paint3_linear)" stroke-width="4"/>
          <circle cx="15" cy="15" r="13" transform="translate(70 27)" fill="white" stroke="url(#paint4_linear)" stroke-width="4"/>
          <defs>
          <linearGradient id="paint0_linear" x2="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(-2.47301 -1147.55) scale(268.313 2345.59)">
          <stop stop-color="#EEEEEE"/>
          <stop offset="1" stop-color="#EEEEEE" stop-opacity="0.3"/>
          </linearGradient>
          <linearGradient id="paint1_linear" x2="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(-6.17586 13.7418) scale(30) rotate(-41.5997)">
          <stop stop-color="#FF5F6D"/>
          <stop offset="1" stop-color="#FFC371"/>
          </linearGradient>
          <linearGradient id="paint2_linear" x2="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(-6.17586 13.7418) scale(30) rotate(-41.5997)">
          <stop stop-color="#FF5F6D"/>
          <stop offset="1" stop-color="#FFC371"/>
          </linearGradient>
          <linearGradient id="paint3_linear" x2="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(-6.17586 13.7418) scale(30) rotate(-41.5997)">
          <stop stop-color="#FF5F6D"/>
          <stop offset="1" stop-color="#FFC371"/>
          </linearGradient>
          <linearGradient id="paint4_linear" x2="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(-6.17586 13.7418) scale(30) rotate(-41.5997)">
          <stop stop-color="#FF5F6D"/>
          <stop offset="1" stop-color="#FFC371"/>
          </linearGradient>
          </defs>
        </svg
        
        
        >

      </div>
      <div class="home_ourMission-timeline-desc">
        <div class="container">
          <p class="home_ourMission-timeline-desc-date">2001</p>
          <h3 class="home_ourMission-timeline-desc-title">A Space Odyssey</h3>
          <p class="home_ourMission-timeline-desc-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis hendrerit dolor magna eget est lorem ipsum. Mattis molestie a iaculis at erat. A diam sollicitudin tempor id eu nisl nunc mi ipsum. Nec ullamcorper sit amet risus nullam eget felis eget nunc. Tincidunt augue interdum velit euismod in pellentesque massa placerat duis. Id diam vel quam elementum pulvinar.</p>
        </div>
      </div>
    </div>
  </section>
</template>

<script>
export default {
  name:"HomeMission",
  props:{
  }
}
</script>

<style lang="scss" scoped>
  
  .home_ourMission {
    padding-top: 105px;

    @media(min-width:768px) {
      display:flex;
    
    }
    &-desc {
      margin-bottom: 80px;

      &-onTitle {
        font-size: 12px;
        font-family: "Barlow-Bold";
        text-transform : uppercase;
        color:#C8C8C8;

      }
      &-title {
        font-size: 24px;
        font-family: "Barlow-Bold";
        margin-bottom: 20px;
        color: #333333;

      }
      &-text {
        font-size: 14px;
        line-height: 22px;
        font-family: "Barlow-Regular";
        margin-bottom: 20px;
        color: #333333;
      }
    }

    &-timeline {


      &-interaction {
        display:flex;
        flex-direction: column;
        align-items:center;
        margin-bottom: 40px;
      }

      &-desc {
        color:#ffffff;

        background: linear-gradient(39.95deg, #FF5F6D 15.19%, #FFC371 84.81%);
        padding-top:41px;
        padding-bottom:83px;

        &-date {
          font-family:"Barlow-Bold";
          font-size:40px;
        }
        &-title {
          font-family:"Barlow-Bold";
          font-size:28px;
          margin-bottom:20px;
        }
        &-text {
          font-family:"Barlow-Regular";
          font-size:14px;
          line-height:22px;
        }
      }
    }
  }

</style>
