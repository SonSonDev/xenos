
<template>
    <section class="travel_journey">
        <div class="travel_journey-background"></div>
        <div class="travel_journey-container"> 
            <h4 class="travel_journey-h4">The Journey of Christa</h4>
            <p class="travel_journey-p">Since the dawn of time, scientists strive to uncover the secrets of the Universe and the planets in it. From discovering the origin of everything to finding new forms of life, their work is essential to push humanity forward.</p>
            <p class="travel_journey-p">For the first time in history, everyone will be able to help them in this tremendous task by driving a remote rover.</p>
            <p class="travel_journey-p">Since the dawn of time, scientists strive to uncover the secrets of the Universe and the planets in it. From discovering the origin of everything to finding new forms of life, their work is essential to push humanity forward.</p>
            <p class="travel_journey-p">For the first time in history, everyone will be able to help them in this tremendous task by driving a remote rover.</p>
        </div>
    </section>
</template>

<script>
export default {
  name:"TravelJourney"
}
</script>

<style lang="scss" scoped>
.travel_journey{
    color: var(--main-dark-white);
    display: flex;
    flex-direction: column;
    align-items: center;
    padding: 40px;
    line-height: 1.5;
    @media(min-width: 768px){
            flex-direction: row;
            justify-content: flex-end;
            margin-right: 12vw;
        }
    &-container{
        @media(min-width: 768px){
            max-width: 345px;
        }
    }
    &-background{
        background-image: url(../../assets/img/bg-rover-image.svg);
        @media(min-width: 768px){
            position: absolute;
            left: 0;
            height: 75vh;
            width: 65vw;
        }
    }
    &-h4{
        
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
