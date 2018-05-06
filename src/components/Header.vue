<template>
  <div id="header" class="header" :style="{backgroundImage: `url(${this.img})`}">
    <canvas id="canvas"></canvas>
    <div id="header-titles" class="header-titles" style="display:none;">
      <div class="header-titles-main">Hackathon</div>
      <div class="header-titles-sub">一场灵魂的共鸣与狂欢</div>
      <div class="header-titles-time">2018/5/19~20 杭州</div>
    </div>
  </div>
</template>

<script>
//import ani from  '../assets/js/index.js'

export default {
  components: {
  },
  data() {
    return {
      img: require('../assets/img/banner4.jpg')
    }
  }
}
</script>

<style>

</style>
