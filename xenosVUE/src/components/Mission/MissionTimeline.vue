<template>
  <section class="mission_timeline">
    <h4 class="mission_timeline-title">It started from an idea...</h4>
    <div class="container">
      <div v-for="(item, index) in timeline" :key="index" class="mission_timeline-item">
        <div class="mission_timeline-item-line" :class="{first : isFirst(index), last : isLast(index)}">
          <svg class="mission_timeline-item-circle" width="40" height="40" viewBox="0 0 40 40" fill="#333333" xmlns="http://www.w3.org/2000/svg">
            <circle cx="20" cy="20" r="17.5" stroke="url(#paint0_linear)" stroke-width="5"/>
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
            <p v-for="(text, indexx) in item.text" :key="indexx" class="mission_timeline-item-info-text">{{text}}</p>
          </div>
          <div class="mission_timeline-item-imgContainer">
            <img class="mission_timeline-item-img" src="" alt="">
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

export default {
  name:"MissionTimeline",
  components: {OrangeButton},
  data: function(){
    return {
      timeline: [
        {
          date: "1973",
          title: "A new way to explore",
          text: ["Since the dawn of time, scientists strive to uncover the secrets of the Universe and the planets in it. From discovering the origin of everything to finding new forms of life, their work is essential to push humanity forward.",
          "For the first time in history, everyone will be able to help them in this tremendous task by driving a remote rover."]
        },
        {
          date: "1973",
          title: "A new way to explore",
          text: ["Since the dawn of time, scientists strive to uncover the secrets of the Universe and the planets in it. From discovering the origin of everything to finding new forms of life, their work is essential to push humanity forward.",
          "For the first time in history, everyone will be able to help them in this tremendous task by driving a remote rover."]
        },
        {
          date: "1973",
          title: "A new way to explore",
          text: ["Since the dawn of time, scientists strive to uncover the secrets of the Universe and the planets in it. From discovering the origin of everything to finding new forms of life, their work is essential to push humanity forward.",
          "For the first time in history, everyone will be able to help them in this tremendous task by driving a remote rover."]
        },
        {
          date: "1973",
          title: "A new way to explore",
          text: ["Since the dawn of time, scientists strive to uncover the secrets of the Universe and the planets in it. From discovering the origin of everything to finding new forms of life, their work is essential to push humanity forward.",
          "For the first time in history, everyone will be able to help them in this tremendous task by driving a remote rover."]
        }
      ]
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
        @media (min-width: 768px){
          max-width: 40%;
        }
        &-date {
          margin-bottom: 5px;
        }
        &-title {
          line-height: 29px;
          margin-bottom: 20px;
        }
        &-text {
          margin-bottom: 20px;
        }
      }
      &-imgContainer{
        height: 150px;
        width: 100%;
        background-color: grey;
        @media (min-width: 768px){
          max-width: 40%;
          height:100%;
        }
      }
      &-line {
        position: relative;
        &::after {
          content:"";
          position: absolute;
          left:50%;
          height:100%;
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
        z-index:1;
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
</style>
