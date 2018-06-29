<template>
  <section class="mission_timeline">
    <h4 class="mission_timeline-title">It started from an idea...</h4>
    <div class="container">
      <div v-for="(item, index) in timeline" :key="index" class="mission_timeline-item"
      v-on:mouseover="Hover(index)"
      v-on:mouseout="disHover"
      :class="{fade:!isHover(index), focus:isHover(index)}">
        <div class="mission_timeline-item-line" :class="{first : isFirst(index), last : isLast(index)}">
          <svg class="mission_timeline-item-circle" width="40" height="40" viewBox="0 0 40 40" fill="#333333" xmlns="http://www.w3.org/2000/svg">
            <circle cx="20" cy="20" r="17.5" stroke="url(#paint0_linear)" stroke-width="5" v-bind:fill="fillCircle(index)"/>
            <defs>
              <linearGradient id="paint0_linear" x2="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(-8.23448 18.3224) scale(40) rotate(-41.5997)">
              <stop stop-color="#FF5F6D"/>
              <stop offset="1" stop-color="#FFC371"/>
              </linearGradient>
            </defs>
          </svg>
        </div>
        <div class="mission_timeline-item-details" :class="{reverse : isPair(index)}">
          <div class="mission_timeline-item-info">
            <h1 class="mission_timeline-item-info-date">{{item.date}}</h1>
            <h4 class="mission_timeline-item-info-title">{{item.title}}</h4>
            <p v-for="(text, indexx) in item.description" :key="indexx" class="mission_timeline-item-info-text">{{text}}</p>
            <p class="mission_timeline-item-info-bgdate">{{item.date}}</p>

          </div>
          <div class="mission_timeline-item-imgContainer">
            <img class="mission_timeline-item-img" :src="item.img" alt="">
          </div>
        </div>
      </div>
    </div>
    <div class="mission_timeline-end">
      <h4 class="mission_timeline-endText">And now it’s up to you to write history</h4>
      <OrangeButton link="/explore">Start exploring</OrangeButton>
    </div>
  </section>
</template>

<script>
import OrangeButton from "@/components/OrangeButton.vue";
import image1 from "@/assets//img/img-mission01.png"
import image2 from "@/assets//img/img-mission02.png"
import image3 from "@/assets//img/img-mission03.png"
import image4 from "@/assets//img/img-mission04.png"
import image5 from "@/assets//img/img-mission05.png"
import image6 from "@/assets//img/img-mission06.png"




export default {
  name:"MissionTimeline",
  components: {OrangeButton},
  data: function(){
    return {
      timeline: [
        {
          date: "1610",
          title: "First telescopic observation of the night sky",
          img: image1,
          description: ["Galileo sparked the birth of modern astronomy with his observations of the Moon, phases of Venus, moons around Jupiter, sunspots, and the news that seemingly countless individual stars make up the Milky Way Galaxy.","Galileo's discoveries about the Moon, Jupiter's moons, Venus, and sunspots supported the idea that the Sun - not the Earth - was the center of the Universe, as was commonly believed at the time."]
        },
        {
          date: "1957",
          title: "First artificial satellite",
          img: image2,
          description: ["Sputnik 1 was the first artificial Earth satellite. The Soviet Union launched it into an elliptical low Earth orbit on 4 October 1957, orbiting for three weeks before its batteries died, then silently for two more months before falling back into the atmosphere."]
        },
        {
          date: "1962",
          title: "Orbital solar observatory",
          img: image3,
          description: ["The first in a series of 8 successfully launched Orbiting Solar Observatories (OSO 1) was launched on 7 March 1962. The 200 kg spacecraft had a 9-sided spinning wheel section 1.2 m in diameter joined onto a fan- shaped sail section.","It was put into a roughly circular orbit at ~ 575 km altitude, 32.8 degrees inclination. It s primary mission objectives were to measure the solar electromagnetic radiation in the UV, X-ray, and gamma-ray regions. Secondarily, it was to investigate dust particle in space."]
        },
        {
          date: "1970",
          title: "First lunar rover",
          img: image4,
          description: ["On November 17, 1970 the Soviet Luna 17 spacecraft landed the first roving remote-controlled robot on the Moon. Known as Lunokhod 1, it weighed just under 2,000 pounds and was designed to operate for 90 days while guided by a 5-person team on planet Earth at the Deep Space Center near Moscow, USSR. Lunokhod 1 actually toured the lunar Mare Imbrium (Sea of Rains) for 11 months in one of the greatest successes of the Soviet lunar exploration program."]
        },
        {
          date: "1997",
          title: "Operational rover on another planet",
          img: image5,
          description: ["Pathfinder was the first NASA mission to reach Mars successfully since the twin Viking 1 and Viking 2 landers/orbiters in the mid-1970s, and its success helped pave the way for a robotic Red Planet invasion. In the two decades since, eight other NASA robots have reached Mars, and five of them remain active today. "]
        },
        {
          date: "2025",
          title: "The launching of Christa",
          img: image6,
          description: ["Christa, named after Christa McAuliffe, the first civilian selected to go into space, is our revolutionary all terrain rover. Its unique spherical wheel design allows it to effortlessly roll on every surface, and is able to withstand extreme weather conditions. "]
        }
      ],
      hover: {
        active: false,
        index: 0
      }
    }
  },
  methods: {
    isPair: function(index){
      return index%2===0;
    },
    isFirst: function(index){
      return index===0;
    },
    isLast: function(index){
      return index===this.timeline.length-1;
    },
    Hover: function(index){
      this.hover.active=true;
      this.hover.index=index;
    },
    isHover(index){
      if (this.hover.active) {
        if(index===this.hover.index) {
            return true;
        } else {
          return false;
        }
      } else {
        return true;
      }
    },
    fillCircle(index){
      if(index===this.hover.index && this.hover.active) {
        return "url(#paint0_linear)";
      } else {
        return "none";
      }
    },
    disHover: function(){
      this.hover.active = false;
    }
  }
}
</script>

<style lang="scss" scoped>
  .mission_timeline {
    margin-top:40px;
    margin-bottom: 160px;
    
    @media(min-width:768px){
      margin-top:80px;
      & .container {
        margin-bottom: 180px;
      }
    }
    @media(min-width:1440px){

      & .container {
        padding:0;
        width:1200px;
        margin: 0 auto 180px;
        
      }
    }
    &-title {
      text-align: center;
      color:#ffffff;
      margin-bottom: 40px;
    }
    &-item {
      display: flex;
      transition: ease 0.3s opacity;

      &-details {
        margin-left: 24px;
        color:#ffffff;
        margin-bottom: 80px;
        @media (min-width: 768px){
          margin: 40px 0;
          display: flex;
          justify-content: space-between;
          align-items: center;
          &.reverse {
            flex-direction: row-reverse;
          }
        }
      }
      &-info {
        position: relative;
        @media (min-width: 768px){
          max-width: 40%;
        }
        &-date {
          position: relative;
          z-index:1;
          margin-bottom: 5px;
        }
        &-title {
          position: relative;
          z-index:1;
          line-height: 29px;
          margin-bottom: 20px;
        }
        &-text {
          position: relative;
          z-index:1;
          margin-bottom: 20px;
        }
        &-bgdate {
          font-family: var(--font-bold);
          font-size: 23vw;
          color: #2B2B2B;
          position: absolute;
          z-index: 0;
          top:40px;
          left:0;
          @media (min-width: 768px) {
            font-size:18vw;
            top:50%;
            transform: translateY(-50%);
          }
        }
      }
      &-img {
        object-fit: cover;
        transform: scale(1.05);
        width: 100%;
        height: 100%;
        &Container{
          
          background-color: grey;
          @media (min-width: 768px){
            max-width: 40%;
            
          }
        }
      }
      &-line {
        position: relative;
        &::after {
          content:"";
          position: absolute;
          left:50%;
          height:100%;
          z-index: 2;
          border-left: 1px dashed var(--main-dark-white);
        }

        @media (min-width: 768px) {
          left:50%;
          &.first::after {
            height:50%;
            top:50%;
          }
          &.last::after {
            height:140%;
          }
        }

      }
      &-circle {
        position:relative;
        z-index:10;
        @media (min-width: 768px) {
          position: absolute;
          left: 50%;
          top: 50%;
          transform: translate(-50%,-50%);
        }
      }
    }
    &-end {
      display: flex;
      flex-direction: column;
      align-items: center;
      &Text {
        margin-top: 20px;
        margin-bottom: 20px;
        color: #ffffff;
        text-align: center;
        width: 80vw;
      }
      & .buttonContainer {
        display: block;
      }
    }
  }
  .fade {
    opacity: 0.5;
  }
  .focus {
    opacity: 1;
  }
  circle {
    transition: fill .4s ease;
  }

</style>
