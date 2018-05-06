<template>
  <div id="Homepage">
    <Navbar :nowItem="2" />

    <div id="container"> 
      <Company/>
      <div class="register-footer">
        © All Rights Reserved HelloWorld
      </div>
    </div>
  </div>
</template>

<script>
import Navbar from '../components/Navbar.vue'
import Company from '../components/Company.vue'

export default {
  name: 'App',
  components: {
    Navbar,
    Company,
  },
  data() {
    return {
    }
  }
}
</script>

<style lang="scss">

#container {
  margin: 0 auto;
}

</style>
