<template>
  <canvas :class="{top:isTop}" ref="canvas"></canvas>
</template>

<script>

import paper from 'paper'

export default {
  name: 'Wave',
  props: ["color", "isTop"],
  mounted: function() {
    
    this.paper = paper.setup(this.$refs.canvas);

    const vw = this.paper.view.size.width
    const vh = this.paper.view.size.height
    
    // The amount of segment points we want to create:
    var amount = Math.floor(vw / 80);

    // The maximum height of the wave:
    var height = 60

    // Create a new this.paper.path and style it:
    var path = new paper.Path({
      fillColor: this.color
    });

    // Add 5 segment points to the path spread out
    // over the width of the view:
    for (var i = 0; i <= amount; i++) {
      path.add(new paper.Point((i/amount)*vw*1.2, 1));
    }
    path.add(new paper.Point(vw, vh))
    path.add(new paper.Point(0, vh))

    // Select the path, so we can see how it is constructed:
    // path.selected = true;

    this.paper.view.onFrame = function(event) {
      
      // Loop through the segments of the path:
      for (var i = 0; i <= amount; i++) {
        var segment = path.segments[i];

        // A cylic value between -1 and 1
        var sinus = Math.sin(event.time * 1 + i);
        
        // Change the y position of the segment point:
        segment.point.y = sinus * height/4 + height;
      }
      // Uncomment the following line and run the script again
      // to smooth the path:
      path.smooth({ type: 'continuous' , from: 0, to: amount-1});
    }
  }
}

</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped lang="scss">

canvas {
  position: relative;
  bottom:-10px;
  // background-color: red;
  width:100%;
  height: 100px;
  &.top {
    transform: rotate(180deg);
    bottom:40px;

  }
}

</style>
