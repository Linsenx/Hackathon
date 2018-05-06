<template>
  <div id="Homepage">
    <Navbar/>
    <Header/>
    <div id="container"> 
      <Description/>
      <Schedule/>
      <Sponsor/>
      <Register/>
      <div class="register-footer">
        © All Rights Reserved HelloWorld
      </div>
    </div>
  </div>
</template>

<script>
import Navbar from '../components/Navbar.vue'
import Header from '../components/Header.vue'
import Description from '../components/Description.vue'
import Schedule from '../components/Schedule.vue'
import Register from '../components/Register.vue'
import Sponsor from '../components/Sponsor.vue'

export default {
  name: 'App',
  components: {
    Header,
    Description,
    Schedule,
    Register,
    Sponsor,
    Navbar,
  }
}
</script>

<style lang="scss">

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

#container {
  //width: ts(1920);
  //display: none;
  margin: 0 auto;
}
</style>
