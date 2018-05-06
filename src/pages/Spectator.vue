<template>
  <div id="Homepage">
    <Navbar :nowItem="1" />

    <div id="container"> 
      <Spectator/>
      <div class="register-footer">
        © All Rights Reserved HelloWorld
      </div>
    </div>
  </div>
</template>

<script>
import Navbar from '../components/Navbar.vue'
import Spectator from '../components/Spectator.vue'

export default {
  name: 'App',
  components: {
    Navbar,
    Spectator,
  },
  data() {
    return {
      img: require('../assets/img/banner5.png')
    }
  }
}
</script>

<style lang="scss">

#container {
  margin: 0 auto;
}

</style>
