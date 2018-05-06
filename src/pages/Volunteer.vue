<template>
  <div id="Homepage">
    <Navbar :nowItem="1" />

    <div id="container"> 
      <Volunteer/>
      <div class="register-footer">
        © All Rights Reserved HelloWorld
      </div>
    </div>
  </div>
</template>

<script>
import Navbar from '../components/Navbar.vue'
import Volunteer from '../components/Volunteer.vue'

export default {
  name: 'App',
  components: {
    Navbar,
    Volunteer,
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
