
<template>
    <section class="travel_VR">
        <div class="travel_VR-container"> 
            <div class="travel_VR-textContainer">
                <h4 class="travel_VR-h4">A mixed reality experience</h4>
                <p class="travel_VR-p">Since the dawn of time, scientists strive to uncover the secrets of the Universe and the planets in it. From discovering the origin of everything to finding new forms of life, their work is essential to push humanity forward.</p>
                <p class="travel_VR-p">For the first time in history, everyone will be able to help them in this tremendous task by driving a remote rover.</p>
                <p class="travel_VR-p">Since the dawn of time, scientists strive to uncover the secrets of the Universe and the planets in it. From discovering the origin of everything to finding new forms of life, their work is essential to push humanity forward.</p>
            </div>
            <div class="travel_VR-imgContainer">
                <img class="travel_VR-img" src="" alt="">
            </div>
        </div>
    </section>
</template>

<script>
export default {
  name:"TravelVR"
}
</script>

<style lang="scss" scoped>
.travel_VR{
    color: var(--main-dark-white);
    display: flex;
    flex-direction: column;
    align-items: center;
    padding: 40px;
    line-height: 1.5;
    @media(min-width: 768px){
            align-items: flex-end;
            margin-right: 5vw;
            margin-left: 5vw;
        }
    &-textContainer{
        @media(min-width: 768px){
            max-width: 345px;
        }
    }
    &-container{
        @media(min-width: 768px){
            width: 100%;
            display: flex;
            flex-direction: row-reverse;
            justify-content: space-between;
            align-items: center;
            max-width: 1075px;
            margin: 0 auto;
        }
    }
    &-imgContainer{
        height: 200px;
        width: 100%;
        background-color: grey;
        margin-top: 5vh;
        @media (min-width: 768px){
          max-width: 40%;
          max-height: 450px;
        }
    }
    &-p{
        display: block;
        margin-top: 30px;
        max-width: 350px;
        @media(min-width: 768px){
        max-width: 345px;
    }
    }
}
</style>
