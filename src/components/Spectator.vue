<template>
  <div class="volunteer" style="height: 1800px;">
    <div class="volunteer-header" :style="{backgroundImage: `url(${this.img})`}">
      <div class="volunteer-header-title">「JOIN US」</div>
    </div>
    <div class="volunteer-box">
      <div class="volunteer-box-header">2018Hackathon观众报名</div>
      <div class="volunteer-box-content" style="height:1280px;">
        <div class="volunteer-box-content-block">
          <div class="maintitle">观赛观众福利</div>
          <div class="content">
              本次黑客马拉松编程大赛将于05月 19 - 20 日在杭州电子科技大学科技馆举办，将采用全新的命题式赛制（期间有悬赏题目），以专业的开发者社区为平台，与众位开发者们来一场程序员节的技术狂欢。本次黑客马拉松面向全国范围报名，比赛设置奖项，优秀产品将直接受到国内领先科技媒体的曝光，开放平台和投资机构将投以热切关注。
              <br>本次比赛还将联合多家媒体与多家全球顶尖互联网公司向参赛选手及观众展示人脸识别前沿科技，获得更多更新资讯。
              <br>更多惊喜，现场等你！            
          </div>
        </div>

        <div class="volunteer-box-content-block">
          <div class="subtitle" style="font-size: 15px;">观众入场须知</div>
          <div class="subcontent">
            1.	领取门票时请确认时间和座位号（门票实名领取？）
            <br>2.	凭当场有效票进场，一人一票
            <br>3.	提前十分钟入场，准时入场，对号入场
            <br>4.	请勿将带皮、带壳瓜果，口香糖等带入场内
            <br>5.	请勿大声喧哗，观赛时请勿使用电话或在座位范围内随意走动
            <br>6.	场内禁止吸烟、严禁携带枪支弹药、管制刀具、金属喇叭、和易燃易爆等危险品入场，如遇特殊情况，请咨询相关工作人员
            <br>7.	请着装整洁，依序入场、服从工作人员指挥引导
            <br>8.	请各位观众争做文明观众、禁止向场内投掷任何物品
            <br>9.	观赛结束后，请观众依序退场，不要拥挤，不要再在场内滞留
            <br>10.	观众应尽量避免提前退场，应等待比赛完全结束后再离开；需提前退场，应选择在中间休息时离开，并注意不能打扰其他正在观看比赛的观众
            <br>11.	观赛观众不可中断、妨碍或干涉任何比赛活动，或者干扰、妨碍或干涉任何参赛选手或工作人员，或者干扰其他观众观看比赛的行为
            <br>12.	观赛观众不可干扰或妨碍工作人员行使权力和义务
            <br>13.	凡入场观众应被视作已详细阅读本条款，并已同意和接受此入场须知的全部内容
            <br>14.	HelloWorld社团保留对于此入场须知的补充、修改及最终解释权
          </div>
        </div>   

        <div class="volunteer-box-content-block nbd">
          <div class="maintitle">观众报名表</div>
          <div class="content">
            <div class="forms-input">
              <span>姓名：</span><input type="text" maxlength="15" v-model="c1">
            </div>
            <div class="forms-input">
              <span>性别：</span><input type="text" maxlength="1" v-model="c2">
            </div>
            <div class="forms-input">
              <span>学院：</span><input type="text" maxlength="20" v-model="c3">
            </div>
            <div class="forms-input">
              <span>学号：</span><input type="text" maxlength="20" v-model="c4">
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
              <span>想在比赛中看到什么内容：</span><textarea v-model="d1"></textarea>
            </div>     
            <div class="forms-input-big">
              <span>备注：</span><textarea v-model="d2"></textarea>
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
    }
  },
  methods: {
    registerHandler: function() {
      if(this.c1.length == 0 || this.c2.length == 0 || this.c3.length == 0 
      || this.c4.length == 0 || this.c5.length == 0 || this.c6.length == 0
      || this.c7.length == 0 || this.d1.length == 0) {
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
      params.append('d2', this.d2);    
      let self = this
      this.$axios({
        method: 'post',
        url: 'http://127.0.0.1/mmp/register_spectator.php',
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
