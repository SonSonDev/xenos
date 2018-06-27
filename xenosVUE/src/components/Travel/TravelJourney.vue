
<template>
    <section class="travel_journey">
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
            align-items: flex-end;
            margin-right: 14vw;
        }
    &-container{
        @media(min-width: 768px){
            max-width: 345px;
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
