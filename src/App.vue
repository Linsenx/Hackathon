<template>
  <div id="app">
    <router-view></router-view>
  </div>
</template>

<script>
export default {
  name: 'App',
}
</script>

<style lang="scss">
@import "./assets/style/clean.css";
@import "./assets/style/main.scss";

html {
  background: black;
}

#app {
  font-family: "PingFang SC", "Microsoft YaHei", "微软雅黑";
  font-size: 12px;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  //height: 4000px;
  background: #ccc;
}

</style>
