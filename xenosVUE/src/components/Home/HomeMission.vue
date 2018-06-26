<template>
  <section class="home_ourMission">
    <div class="home_ourMission-desc">
      <div class="container">
        <h6 class="home_ourMission-desc-onTitle">Our mission</h6>
        <h4 class="home_ourMission-desc-title">A new way to explore</h4>
        <p class="home_ourMission-desc-text">Since the dawn of time, scientists strive to uncover the secrets of the Universe and the planets in it. From discovering the origin of everything to finding new forms of life, their work is essential to push humanity forward.</p>
        <p class="home_ourMission-desc-text">For the first time in history, everyone will be able to help them in this tremendous task.</p>
        <a class="buttonContainer" href="">
          <button class="button">Learn more</button>
        </a>
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
          <p class="home_ourMission-timeline-desc-text">{{info[active].description}}</p>
        </div>
      </div>
    </div>
  </section>
</template>

<script>
export default {
  name:"HomeMission",
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
          date: "1996",
          title: "Mahel",
          description: "Futaba Futaba Futaba Futaba Futaba Futaba Futaba Futaba Futaba Futaba Futaba Futaba Futaba Futaba Futaba Futaba Futaba Futaba Futaba Futaba Futaba Futaba Futaba Futaba"
        },
        {
          date: "1997",
          title: "Valentine",
          description: "Femme à Hommes on te dit. Blablablablablablabla Blablablablablablabla Blablablablablablabla Blablablablablablabla Blablablablablablabla. J'ai envie de regarder un drama coréen. C'est pas du grand cinéma, mais c'est marrant."
        },
        {
          date: "1998",
          title: "Quentin",
          description: "Mouais mouais mouais. NBA, Mario Tennis, blablabla. Je joue à des jeux caca."
        },
        {
          date: "2000",
          title: "Théodore",
          description: "Tout à l'heure, j'ai fait un prout quand j'ai fait pipi. Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l'imprimerie depuis les années 1500, quand un peintre anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte. Il n'a pas fait que survivre cinq siècles, mais s'est aussi adapté à la bureautique informatique, sans que son contenu n'en soit modifié. Il a été popularisé dans les années 1960 grâce à la vente de feuilles Letraset contenant des passages du Lorem Ipsum, et, plus récemment, par son inclusion dans des applications de mise en page de texte, comme Aldus PageMaker."
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
    padding-top: 105px;

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
        color: var(--main-grey-color);

      }
      &-title {
        margin-bottom: 20px;
        color: var(--main-dark-color);

      }
      &-text {
        line-height: 22px;
        margin-bottom: 20px;
        color: var(--main-dark-color);
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
            display:block;
          }
        }
        
      }

      &-desc {
        color:#ffffff;

        background: linear-gradient(39.95deg, #FF5F6D 15.19%, #FFC371 84.81%);
        border-radius:30px;
        padding-top:41px;
        padding-bottom:83px;

        @media (min-width:768px) {
          width:60vw;
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
        }
      }
    }
  }

</style>
