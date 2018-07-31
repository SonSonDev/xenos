<template>
  <div class="summary">
    <h4 class="title">
      Your summary
    </h4>
    <div class="recap">
      <div class="ticket">
        <div class="content">
          <div class="planet">
            <div class="ball"
              :style="{ 'background': `linear-gradient(to top right, ${planet.colorStart}, ${planet.colorEnd})` }"
            ></div>
          </div>
          <div class="title">
            <p>{{planet.name}} - {{zone.name}}</p>
          </div>
          <div class="details">
            <p>{{`${time.date[0]} / ${time.date[1]} / ${time.date[2]}`}}</p>
            <p>{{`${time.hour[0]} : ${time.hour[1]}`}}</p>
          </div>
        </div>
        <div class="hide"></div>
        <div class="hide"></div>
        <div class="hide"></div>
        <div class="hide"></div>
      </div>
      <h4 class="price">
        <span class="gradientText">Price: </span>{{zone.price}} $
      </h4>
    </div>
  </div>
</template>

<script>
export default {
  name: 'E4summary',
  props: ['planet', 'zone', 'time'],

}
</script>


<style lang="scss" scoped>
.summary {
  color: var(--main-dark-white);
  padding: 0 64px;
  display: flex;
  flex-direction: column;
  align-items: center;
  margin-bottom: 40px;
  @media (min-width: 768px) {
    padding-top: 80px;
  }
  > .title {
    margin-bottom: 20px;
    @media (min-width: 768px) {
      font-size: 36px;
    }
  }
  .recap {
    .ticket {
      position: relative;
      background: linear-gradient(to right,var(--gradient-from), var(--gradient-to));
      padding: 14px;
      .content {
        display: grid;
        grid-template-columns: 100px 200px;
        grid-template-rows: 30px 70px;
        justify-items: center;
        align-items: center;
        > div {
          display: flex;
          align-items: center;
          width: 100%;
          height: 100%;
          border: 1px solid white;
          padding: 10px;
        }
        .planet {
          grid-column: span 1;
          grid-row: span 2;
          border-right: none;
          display: flex;
          justify-content: center;
          align-items: center;
          .ball {
            width: 80%;
            height: 80%;
            border-radius: 100%;
            background: linear-gradient(to right,lime, yellow);
          }
        }
        .title {
          border-bottom: none;
        }
        .details {
          flex-direction: column;
          align-items: flex-start;
        }
      }
      .hide {
        position: absolute;
      }
    }
    .price {
      text-align: center;
      margin-top: 20px;
    }
  }
}
</style>

