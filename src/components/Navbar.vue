<template>
  <div @scroll.native="scrollHandler" class="navbar" :style="{'background': bgColor}">
    <div class="navbar-inner">
      <span class="navbar-inner-logo">
        <a href="http://www.hdu-helloworld.club/"><img src="../assets/img/logo.png"></a>
      </span>
      <ul class="navbar-inner-list">
        <li v-for="(item,index) in items[nowItem]" 
            :key="index" 
            :class="{'navbar-inner-list-item': true, 'selected': item.id==nowSelected, 'border': item.class}"
        >
          <a :href="item.link">{{item.name}}</a>
        </li>
      </ul>
    </div>
  </div>
</template>

<script>
export default {
  props: {
    nowItem: {
      type: Number,
      default: 0
    }
  },
  data() {
    return {
      bgColor: 'transparent',
      nowSelected: -1,
      items: [
        [ //主页
          {id: 0, name: '报名入口', link: '#reg', class: 'true', height: [3400,10000]},
          {id: 5, name: '技术支持', link: '/sponsor', class: '', height: [-2301,-3400]},
          {id: 1, name: '大赛支持', link: '#sup', class: '', height: [2301,3400]},
          {id: 2, name: '赛程安排', link: '#sch', class: '', height: [1801,2300]},
          {id: 3, name: '参赛须知', link: '#qua', class: '', height: [751,1800]},
          {id: 4, name: 'Hackathon简介', link: '#des', class: '', height: [300,750]},          
        ],
        [ //报名
          {id: 0, name: '报名入口', link: '#qua', class: '', height: [0,10000]},
          {id: 1, name: '返回首页', link: '/', class: '', height: [-100,-100]},          
        ],
        [ //技术支持
          {id: 0, name: '技术支持', link: '#qua', class: '', height: [0,10000]},
          {id: 1, name: '返回首页', link: '/', class: '', height: [-100,-100]},          
        ]               
      ]
    }
  },
  mounted() {
    window.addEventListener('scroll', this.scrollHandler)
  },
  methods: {
    scrollHandler: function (el) {
      let scrollTop = window.pageYOffset || document.documentElement.scrollTop || document.body.scrollTop
      if (scrollTop < 200) {
        this.bgColor = "transparent"
      } else {
        this.bgColor = "black"
      }

      let hasSelected = false
      for (let i = 0; i < this.items[this.nowItem].length; ++i) {
        let heightArr = this.items[this.nowItem][i].height
        if (scrollTop >= heightArr[0] && scrollTop <= heightArr[1]) {
          this.nowSelected = this.items[this.nowItem][i].id
          hasSelected = true
        }
      }
      if (!hasSelected) this.nowSelected = -1
    }
  }
}
</script>

<style scoped>
.navbar {
  z-index: 999;
  transition: background .7s;
}
</style>
