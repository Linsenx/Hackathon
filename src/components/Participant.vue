<template>
  <div class="volunteer" style="height: 2900px;">
    <div class="volunteer-header" :style="{backgroundImage: `url(${this.img})`}">
      <div class="volunteer-header-title">「JOIN US」</div>
    </div>
    <div class="volunteer-box">
      <div class="volunteer-box-header">2018Hackathon参赛选手报名</div>
      <div class="volunteer-box-content" style="height: 2400px;">
        <div class="volunteer-box-content-block">
          <div class="maintitle">序言</div>
          <div class="content">本次Hackathon不限制创意类型，支持参赛者进行符合大赛主题的相关开发，赛事包含悬赏命题，悬赏命题在比赛前由赞助商公布。鼓励开发者发挥创新、合作精神，将自己的创意酝酿到极致。</div>
        </div>

        <div class="volunteer-box-content-block">
          <div class="subtitle">参赛流程</div>
          <div class="subcontent">
            <b>1.参赛报名：</b><br>
            <ul>
              <li>开发者需以个人身份报名，报名时需提交个人身份信息。需要注意的是，团队参赛每个成员均需单独报名。若已经有团队，请在报名中备注团队报名。</li>
              <li>主办方会对报名行筛选，报名注册时附带个人简历、项目经历等资料，可提高筛选通过率。</li>
              <li>若被筛选通过，参赛者的邮箱将会收由大赛主办方发送的《Hack「中国」2018 Hackathon》参赛邀请邮件。故请留下有效邮箱地址。</li>
            </ul>

            <b>2.团队规模：</b><br>
            <ul>
              <li>每个团队 2-5 人，每人最多选择1 个团队加入。</li>
              <li>参赛者提前组队，也可到现场自由组队。</li>
            </ul>

            <b>3.活动须知：</b><br>
            <ul>
              <li>参赛者收到的参赛邀请邮件中将附带活动时间表，如无意外，基本活动安排与时间表无异，规定的活动时间内，在具体的活动地点将会有工作人员接应。</li>
              <li>比赛届时凭借参赛邀请邮件或邀请函进行签到，领取参赛证、身份卡、赛事资料及其他比赛相关物品。</li>
            </ul>   

            <b>4.现场组队：</b><br>
            <ul>
              <li>活动场会设有白板，准备现场组队的开发者可以将身份卡放置于白板上，可标注自己“能做什么，想做什么，在找怎样的人等等关键词”。不同的身份卡用于区分开发者角色，帮助快速组队。</li>
            </ul>                          
          </div>
        </div>   

        <div class="volunteer-box-content-block">
          <div class="subtitle">比赛流程</div>
          <div class="subcontent">
            <b>1.比赛签到：</b>参赛选手到达比赛现场，签到并领取相关物资。<br>
            <b>2.现场组队：</b>准备现场组队的开发者可以将身份卡放置于现场准备的组队板上，标注自己“能做什么，想做什么，在找怎样的人等等关键词”。调试相关硬件设备。<br>
            <b>3.宣讲阶段：</b>大赛主办方进行技术内容宣讲。开发者可选择感兴趣的内容参与，并就自己感兴趣的问题现场提问。<br>
            <b>4.开发阶段：</b>参赛队伍进行 24 小时开发。开发者如果有用到现场技术服务方，可以随时通过赞助商的现场展位向大赛服务提供商询问技术问题。<br>
            <b>5.提交评审：</b>参赛队伍可以在比赛开始后的 20 小时后开始提交产品。提交截止后，大赛评委会将选出 80% 优秀产品进行产品展示。<br>
            <b>6.观众入场：</b>参观比赛人员入场，观看产品展示环节。<br>
            <b>7.产品展示：</b>每件产品有 5 分钟时间，可以通过演说、实物演示等手段进行产品展示，评委会根据产品的创新性、实用性、完成度来评分。<br>
            <b>8.颁奖典礼：</b>大赛评委会将在参加产品展示的产品中选出部分优秀产品，予以奖励。<br>
          </div>
        </div>

        <div class="volunteer-box-content-block">
          <div class="subtitle">比赛规则</div>
          <div class="subcontent">
            <b>1.赛前规定：</b><br>
            <ul>
              <li>参赛选手请根据邮件中时间表于指定时间到达指定地点，主办方将派工作人员于此接应。</li>
              <li>参赛选手因故无法按时到达、参与比赛，应尽快联系主办方，并告知详情协商解决方案。</li>
            </ul>

            <b>2.现场规则：</b><br>
            <ul>
              <li>参赛队伍进行24小时开发，不能剽窃他人创意、思路。</li>
              <li>现场自由交流不能干扰其他队伍开发，禁止大音量外放音乐、观看视频、禁止抽烟</li>
              <li>现场提供网络，禁止类似于大流量下载等影响网络的行为</li>
              <li>参赛证、身份卡作为识别证件，请随身携带，配合工作人员检查。</li>
              <li>现场提供餐饮，请勿携带外来食品、饮品带入会场内。</li>
            </ul>   

            <b>2.现场规则：</b><br>
            <ul>
              <li>测试展示项目所需设备，请于主办方咨询处联系工作人员。</li>
              <li>测试时间：9:00～12:00。请自行安排时间，避免拥挤。</li>
              <li>若有VGA视频输出、3.5mm标准音频输出，请尽早测试主办方提供的转接线。</li>
              <li>展示需要的局域网需选手自行搭建。</li>
              <li>项目展示时间为5分钟，届时我们将有严格的时间把控，请各位参赛队伍提前做好相应准备。</li>
            </ul>               
          </div>
        </div>      

        <div class="volunteer-box-content-block">
          <div class="subtitle">评分规则</div>
          <div class="subcontent">
            <b>本届赛事评分包括两部分，基础分数（40%）、灵感分数（40%）以及解说分数（20%）。</b><br>
            <ul>
              <li>基础评分部分，评分点主要包括：与主题匹配度，完成度。</li>
              <li>灵感评分部分，评分点主要包括：创意新颖度，重在别出心裁。</li>
              <li>解说评分部分，评分点主要包括：产品展示流畅度，产品实用性。</li>
            </ul>            
            <b>技术</b><br>
            <ul>
              <li>产品所需技术难度。</li>
            </ul> 
            <b>影响力</b><br>
            <ul>
              <li>产品所解决问题的影响规模。</li>
            </ul>                              
            <b>实用性</b><br>
            <ul>
              <li>产品在现实生活中的实用性。</li>
            </ul>                
            <b>设计</b><br>
            <ul>
              <li>产品外观、用户界面和用户体验。</li>
            </ul>                       
            <b>展示度</b><br>
            <ul>
              <li>团队对产品展示的清晰有条理性。</li>
            </ul>             
            <b>创意性</b><br>
            <ul>
              <li>产品的新颖度。是否已有同类产品？差别在哪里？</li>
            </ul>     
            <b>作品完成度</b><br>
            <ul>
              <li>评委将根据作品Demo最终完成情况对作品完成度进行评判。</li>
            </ul>              
            <b>代码</b><br>
            <ul>
              <li>参赛队伍将代码提交到活动官方提交平台，在作品提交阶段需向评委组提交作品代码。</li>
            </ul>                                                                                           
          </div>
        </div>              

        <div class="volunteer-box-content-block nbd">
          <div class="maintitle">选手报名表</div>
          <div class="content">
            <div class="forms-input">
              <span>姓名：</span><input type="text" maxlength="15" v-model="c1">
            </div>
            <div class="forms-input">
              <span>电话：</span><input type="text" maxlength="13" v-model="c2">
            </div>
            <div class="forms-input">
              <span>邮箱：</span><input type="text" maxlength="50" v-model="c3">
            </div>
            <div class="forms-input">
              <span>年龄：</span><input type="text" maxlength="3" v-model="c4">
            </div>     
            <div class="forms-input long">
              <span>所在高校：</span><input type="text" maxlength="50" v-model="c5">
            </div>
            <div class="forms-input long">
              <span>所在年级：</span><input type="text" maxlength="13" v-model="c6">
            </div>
            <div class="forms-input long">
              <span>是否组队：</span><input type="text" maxlength="20" v-model="c7" placeholder="若已组队，输入队名">
            </div>            
            <div class="forms-input-big">
              <span>你的个人介绍：</span><textarea v-model="d1" placeholder="介绍您的项目经历/相关赛事参与经历，可提高筛选通过率"></textarea>
            </div>     
            <div class="forms-checkbox">
              <input type="checkbox" id="confirm" v-model="confirm"> 
              <label for="confirm">我已阅读并自觉遵守比赛规则</label>
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
      confirm: false,
      c1: '',
      c2: '',
      c3: '',
      c4: '',
      c5: '',
      c6: '',
      c7: '',
      d1: '',
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
      if (this.confirm == false) {
        alert('请先阅读比赛规则并且勾选『我已经阅读并自觉遵守比赛规则』');
        return;
      }      
      let emailReg = new RegExp("^[a-z0-9]+([._\\-]*[a-z0-9])*@([a-z0-9]+[-a-z0-9]*[a-z0-9]+.){1,63}[a-z0-9]+$"); 
      if (!emailReg.test(this.c3)) {
        alert('邮箱格式错误！')
        return;
      }      
      if (!confirm("确认信息填写无误？")) return;
      var params = new URLSearchParams();
      params.append('name', this.c1);   
      params.append('gender', this.c2);   
      params.append('age', this.c4);   
      params.append('phone', this.c2);   
      params.append('school', this.c5);   
      params.append('grade', this.c6);   
      params.append('team', this.c7);   
      params.append('motto', this.d1);   
      let self = this
      this.$axios({
        method: 'post',
        url: 'http://127.0.0.1/mmp/register_participant.php',
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
