<template>
  <div class="volunteer">
    <div class="volunteer-header" :style="{backgroundImage: `url(${this.img})`}">
      <div class="volunteer-header-title">「JOIN US」</div>
    </div>
    <div class="volunteer-box">
      <div class="volunteer-box-header">2018Hackathon志愿者招聘</div>
      <div class="volunteer-box-content">
        <div class="volunteer-box-content-block">
          <div class="maintitle">志愿者招聘</div>
          <div class="content">2018年05月19—20日HelloWorld社团将于科技馆举行盛大的Hackathon比赛。为做好这两天对于比赛选手的接待、服务、保障工作，保证各项活动的顺利开展，现面向全校学生招募志愿者，主要从事比赛礼仪、接待引导、校园参观、活动咨询、医疗保障等工作，由校团委或院团委或社团负责招募、培训、总体协调指挥和管理，围绕比赛任务具体开展工作。<br>志愿者被录用后，学校或社团将组织开展礼仪礼节等多方面的业务培训。在活动中，志愿者主要从事礼仪服务、接待、路线引导、会场服务、校园参观、活动咨询等工作。</div>
        </div>

        <div class="volunteer-box-content-block">
          <div class="subtitle">招募条件</div>
          <div class="subcontent">
            1.真诚，有责任感并乐于助人，组织纪律性强，自愿为他人提供服务和帮助<br>
            2.具备与所参加的志愿服务项目及活动相适应的基本素质，根据自身意愿和身体条件选择一个或多个志愿服务项目，具有从事志愿者服务工作的时间和精力<br>
            3.礼仪服务要求：口齿清晰、谈吐有度、平易近人、善于沟通<br>
            4.有学生干部等社会工作经验者或志愿工作经验者优先<br>
          </div>
        </div>   

        <div class="volunteer-box-content-block">
          <div class="subtitle">招募原则</div>
          <div class="subcontent">
            公开招募、自愿报名、择优录取、定岗服务
          </div>
        </div>

        <div class="volunteer-box-content-block">
          <div class="subtitle">志愿者保障</div>
          <div class="subcontent">
            1.统一发放服装与标识、必要的交通补贴与补助<br>
            2.获得志愿者服务证书、参与优秀志愿者评比<br>
            3.比赛服务期间，三餐与夜宵志愿者也同样有份
          </div>
        </div>          

        <div class="volunteer-box-content-block">
          <div class="subtitle">报名方式</div>
          <div class="subcontent">
            1.报名地点：杭电学活HelloWorld摊位或官网、微信公众号报名<br>
            2.报名方法：填写提交报名表<br>
          </div>
        </div>  

        <div class="volunteer-box-content-block nbd">
          <div class="maintitle">志愿者报名表</div>
          <div class="content">
            <div class="forms-input">
              <span>姓名：</span><input type="text" maxlength="15" v-model="c1">
            </div>
            <div class="forms-input">
              <span>性别：</span><input type="text" maxlength="1" v-model="c2">
            </div>
            <div class="forms-input">
              <span>年龄：</span><input type="text" maxlength="3" v-model="c3">
            </div>
            <div class="forms-input">
              <span>身高：</span><input type="text" maxlength="3" v-model="c4">
            </div>     
            <div class="forms-input long">
              <span>邮箱：</span><input type="text" maxlength="50" v-model="c5">
            </div>
            <div class="forms-input long">
              <span>手机号：</span><input type="text" maxlength="13" v-model="c6">
            </div>
            <div class="forms-input long">
              <span>QQ：</span><input type="text" maxlength="20" v-model="c7">
            </div>            

            <div class="forms-input-big">
              <span>个人爱好：</span><textarea v-model="d1"></textarea>
            </div>     
            <div class="forms-input-big">
              <span>个人简历：</span><textarea v-model="d2"></textarea>
            </div> 
            <div class="forms-input-big">
              <span>志愿服务经历：</span><textarea v-model="d3"></textarea>
            </div>
            <div class="forms-button" @click="registerHandler">
              提交
            </div>                                      
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      img: require('../assets/img/banner5.png'),
      c1: '',
      c2: '',
      c3: '',
      c4: '',
      c5: '',
      c6: '',
      c7: '',
      d1: '',
      d2: '',
      d3: '',
    }
  },
  methods: {
    registerHandler: function() {
      if(this.c1.length == 0 || this.c2.length == 0 || this.c3.length == 0 
      || this.c4.length == 0 || this.c5.length == 0 || this.c6.length == 0
      || this.c7.length == 0 || this.d1.length == 0 || this.d2.length == 0
      || this.d3.length == 0) {
        alert('请填写完整信息！')
        return;
      }      
      if (!confirm("确认信息填写无误？")) return;
      
      var params = new URLSearchParams();
      params.append('c1', this.c1);   
      params.append('c2', this.c2);   
      params.append('c3', this.c3);   
      params.append('c4', this.c4);   
      params.append('c5', this.c5);   
      params.append('c6', this.c6);   
      params.append('c7', this.c7);   
      params.append('d1', this.d1);   
      params.append('d2', this.d1);
      params.append('d3', this.d1);
      let self = this
      this.$axios({
        method: 'post',
        url: 'http://127.0.0.1/mmp/register_volunteer.php',
        data: params
      })
      .then(function (response) {
        let data = response.data
        alert(data.msg)
        if (data.error != -1) {
          self.c1 = ""
          self.c2 = ""
          self.c3 = ""
          self.c4 = ""
          self.c5 = ""
          self.c6 = ""
          self.c7 = ""
          self.d1 = ""        
          self.d2 = "" 
          self.d3 = ""           
        }
      })
      .catch(function (error) {
        console.log(error);
      });  
    }
  }
}
</script>

<style>

</style>
