<template>
  <section class="home_ourMission">
    <div class="home_ourMission-desc">
      <div class="container">
        <h6 class="home_ourMission-desc-onTitle">Our mission</h6>
        <h4 class="home_ourMission-desc-title">A new way to explore</h4>
        <p class="home_ourMission-desc-text">Since the dawn of time, scientists strive to uncover the secrets of the Universe and the planets in it. From discovering the origin of everything to finding new forms of life, their work is essential to push humanity forward.</p>
        <p class="home_ourMission-desc-text">For the first time in history, everyone will be able to help them in this tremendous task.</p>
        <OrangeButton link="/mission">Learn More</OrangeButton>
      </div>
    </div>

    <div class="home_ourMission-timeline">
      <div class="home_ourMission-timeline-interaction">
        <svg class="timelineSvg" width="278" height="60" viewBox="0 0 278 60" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M0 9.10308C6.85207 2.2135 19.5315 -2.67652 31.6741 1.60662C45.8491 6.60669 66.015 29.5195 76.5062 25.6984C86.8615 21.9267 124.265 -9.15179 149.767 3.97361C175.269 17.099 223.182 35.3539 262.439 9.25395" transform="translate(11.901 16.3934)" stroke="url(#paint0_linear)" stroke-width="6" stroke-linecap="round"/>
          <!-- <circle cx="15" cy="15" r="13" transform="translate(0 5)" fill="url(#paint1_linear)" stroke="url(#paint3_linear)" stroke-width="4"/>
          <circle cx="15" cy="15" r="13" transform="translate(137 2)" fill="white" stroke="url(#paint3_linear)" stroke-width="4"/>
          <circle cx="15" cy="15" r="13" transform="translate(210 24)" fill="white" stroke="url(#paint3_linear)" stroke-width="4"/>
          <circle cx="15" cy="15" r="13" transform="translate(70 27)" fill="white" stroke="url(#paint3_linear)" stroke-width="4"/> -->
          <circle v-for="(circle, index) in circles" v-bind:key="index" v-bind:transform="position(index)" v-bind:fill="fillCircle(index)" v-on:click="changeState(index)" cx="15" cy="15" r="13" stroke="url(#paint3_linear)" stroke-width="4"/> 
        </svg>
        <svg class="timelineSvgDesk" width="730" height="121" viewBox="0 0 730 121" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M0 30.745C21.8376 8.10039 39.6282 -2.49792 80.7827 0.49697C121.667 3.47218 210.39 97.8497 243.826 85.2905C276.829 72.8938 396.032 -29.255 477.308 13.8855C558.583 57.026 612.274 106.117 705.371 62.9764" transform="translate(19.2105 15.3708)" stroke="url(#paint0_linear)" stroke-width="10" stroke-linecap="round"/>
          <!-- <circle cx="19" cy="19" r="16.5" transform="translate(0 23.8017)" fill="url(#paint1_linear)" stroke="url(#paint1_linear)" stroke-width="5"/>
          <circle cx="19" cy="19" r="16.5" transform="translate(236 82.314)" fill="#F8F8F8" stroke="url(#paint1_linear)" stroke-width="5"/>
          <circle cx="19" cy="19" r="16.5" transform="translate(433)" fill="#F8F8F8" stroke="url(#paint1_linear)" stroke-width="5"/>
          <circle cx="19" cy="19" r="16.5" transform="translate(605.87 72.3967)" fill="#F8F8F8" stroke="url(#paint1_linear)" stroke-width="5"/> -->
          <circle v-for="(circle, index) in circles" v-bind:key="index" v-bind:transform="positionDesk(index)" v-bind:fill="fillCircle(index)" v-on:click="changeState(index)" cx="19" cy="19" r="16.5" stroke="url(#paint3_linear)" stroke-width="5"/>
        </svg>
        <svg width="0" height="0">
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
        </svg>

      </div>
      <div class="home_ourMission-timeline-desc">

        <div class="container">
          <p class="home_ourMission-timeline-desc-date">{{info[active].date}}</p>
          <h3 class="home_ourMission-timeline-desc-title">{{info[active].title}}</h3>
          <p v-for="(paragraphe, index) in info[active].description" :key="index" class="home_ourMission-timeline-desc-text">{{paragraphe}}</p>
        </div>
        <img src="@/assets/img/1.png" class="home_ourMission-timeline-desc-bg">


      </div>
    </div>
  </section>
</template>

<script>
import OrangeButton from '@/components/OrangeButton.vue';

export default {
  name:"HomeMission",
  components: {OrangeButton},
  props:{
  },
  data : function(){
    return {
      circles: [
        {
          position: {x:0, y:5},
          positionDesk: {x:0, y:23.8017},
          active:true
        },{
          position: {x:70, y:27},
          positionDesk: {x:236, y:82.314},
          active:false
        },{
          position: {x:137, y:2},
          positionDesk: {x:433, y:0},
          active:false
        },{
          position: {x:210, y:24},
          positionDesk: {x:605.87, y:72.3967},
          active:false
        }
      ],
      info: [
        {
          date: "1610",
          title: "First telescopic observation of the night sky",
          description: ["Galileo sparked the birth of modern astronomy with his observations of the Moon, phases of Venus, moons around Jupiter, sunspots, and the news that seemingly countless individual stars make up the Milky Way Galaxy.","Galileo's discoveries about the Moon, Jupiter's moons, Venus, and sunspots supported the idea that the Sun - not the Earth - was the center of the Universe, as was commonly believed at the time."]
        },
        {
          date: "1957",
          title: "First artificial satellite",
          description: ["Sputnik 1 was the first artificial Earth satellite. The Soviet Union launched it into an elliptical low Earth orbit on 4 October 1957, orbiting for three weeks before its batteries died, then silently for two more months before falling back into the atmosphere."]
        },
        {
          date: "1962",
          title: "Orbital solar observatory",
          description: ["The first in a series of 8 successfully launched Orbiting Solar Observatories (OSO 1) was launched on 7 March 1962. The 200 kg spacecraft had a 9-sided spinning wheel section 1.2 m in diameter joined onto a fan- shaped sail section.","It was put into a roughly circular orbit at ~ 575 km altitude, 32.8 degrees inclination. It s primary mission objectives were to measure the solar electromagnetic radiation in the UV, X-ray, and gamma-ray regions. Secondarily, it was to investigate dust particle in space."]
        },
        {
          date: "1970",
          title: "First lunar rover",
          description: ["On November 17, 1970 the Soviet Luna 17 spacecraft landed the first roving remote-controlled robot on the Moon. Known as Lunokhod 1, it weighed just under 2,000 pounds and was designed to operate for 90 days while guided by a 5-person team on planet Earth at the Deep Space Center near Moscow, USSR. Lunokhod 1 actually toured the lunar Mare Imbrium (Sea of Rains) for 11 months in one of the greatest successes of the Soviet lunar exploration program."]
        }
      ],
      active:0,
    }
  },
  methods: {
    position: function(index){
      return `translate(${this.circles[index].position.x} ${this.circles[index].position.y})`
    },
    positionDesk: function(index){
      return `translate(${this.circles[index].positionDesk.x} ${this.circles[index].positionDesk.y})`
    },
    fillCircle: function(index){
      if(this.circles[index].active) {
        return "url(#paint1_linear)";
      } else {
        return "white";
      }
    },
    changeState: function(index){
      this.active=index;
      for(var i=0; i < this.circles.length; i++){
        if(i!==index){
          this.circles[i].active=false;
        } else {
          this.circles[i].active=true;
        }
      }
    }
    
  }
}
</script>

<style lang="scss" scoped>
  
  .home_ourMission {
    padding-top: 140px;

    @media(min-width:768px) {
      display:flex;
    
    }
    &-desc {
      margin-bottom: 80px;
      @media (min-width: 768px) {
        margin-bottom: 0;
      }
      &-onTitle {
        text-transform : uppercase;
        color: var(--main-grey);

      }
      &-title {
        margin-bottom: 20px;
        color: var(--main-dark);

      }
      &-text {
        line-height: 22px;
        margin-bottom: 20px;
        color: var(--main-dark);
      }
    }

    &-timeline {
      @media (min-width:768px) {
        display:flex;
        flex-direction: column;
        justify-content: space-between;
      }
      &-interaction {
        display:flex;
        flex-direction: column;
        align-items:center;
        margin-bottom: 40px;
        & circle {
          cursor:pointer;
        }

        & .timelineSvg {
          @media (min-width:768px) {
            display:none;
          }
        }
        & .timelineSvgDesk {
          max-width:95%;
          display:none;
          @media (min-width:768px) {
          margin-top: 60px;
            display:block;
          }
        }
        
      }

      &-desc {
        color:#ffffff;

        // background: linear-gradient(39.95deg, #FF5F6D 15.19%, #FFC371 84.81%);
        border-radius:30px;
        padding-top:41px;
        padding-bottom:83px;
        position:relative;
        @media (min-width:768px) {
        margin-top: 80px;
          width:60vw;
        }
        &-bg {
          position:absolute;
          z-index:0;
          width:98%;
          height:98%;
          left:50%;
          top:50%;
          transform:translate(-50%,-50%);
        }
        & .container {
          padding-top:30px; 
          padding-bottom:30px; 
          position: relative;
          z-index: 1;
        }

        &-date {
          font-family: var(--font-bold);
          font-size:40px;
          line-height: 50px;
        }
        &-title {
          margin-bottom:20px;
        }
        &-text {
          line-height:22px;
          margin-bottom:10px;
        }
      }
    }
  }

</style>
