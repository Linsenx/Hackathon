<template>
  <div class="volunteer" style="height: 1800px;">
    <div class="volunteer-header" :style="{backgroundImage: `url(${this.img})`, backgroundPosition: 'top'}">
      <div class="volunteer-header-title">「Sponsor」</div>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      img: require('../assets/img/banner3.jpg'),
    }
  },
  methods: {
    
  }
}
</script>

<style>

</style>
