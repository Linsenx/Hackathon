<template>
  <div id="Homepage">
    <Navbar :nowItem="1" />

    <div id="container"> 
      <Participant/>
      <div class="register-footer">
        © All Rights Reserved HelloWorld
      </div>
    </div>
  </div>
</template>

<script>
import Navbar from '../components/Navbar.vue'
import Participant from '../components/Participant.vue'

export default {
  name: 'App',
  components: {
    Navbar,
    Participant,
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
