<template>
  <div class="register" :style="{backgroundImage: `url(${this.img})`}">
    <div id="reg"></div>
    <div class="register-header box --noshadow">
      <div class="box-header">
        <div class="box-header-titles">
          <p class="english">Registration</p>
          <p class="chinese">报名咨询</p>
        </div>
      </div>
    </div>
    <div class="register-forms">
      <div>
        <div class="register-forms-input">
          <span>姓名：</span><input type="text" maxlength="10" v-model="name">
        </div>
        <div class="register-forms-input">
          <span>性别：</span><input type="text" maxlength="1" v-model="gender">
        </div>
        <div class="register-forms-input">
          <span>年龄：</span><input type="text" maxlength="3" v-model="age">
        </div>
        <div class="register-forms-input">
          <span>身高：</span><input type="text" maxlength="3" v-model="height">
        </div>
      </div>
      <div style="margin-top: 60px;">
        <div class="register-forms-input long">
          <span>所在高校：</span><input type="text" v-model="school">
        </div>
        <div class="register-forms-input long">
          <span>所在年级：</span><input type="text" v-model="grade">
        </div>
        <div class="register-forms-input long">
          <span>是否组队：</span><input type="text" v-model="team" placeholder="若已组队，请输入队名">
        </div>
      </div>
      <div style="margin-top: 120px;">
        <div class="register-forms-input mlong">
          <span>你的个人介绍：</span><input type="text" v-model="motto" placeholder="介绍您的项目经历/相关赛事参与经历，可提高筛选通过率">
        </div>
        <div class="register-forms-checkbox">
          <input type="checkbox" id="confirm" v-model="confirm"> 
          <label for="confirm">我已阅读并自觉遵守比赛规则</label>
        </div>
      </div>   
      <div style="margin-top: 20px;">
        <div class="register-forms-button" @click="registerHandler">
          <span>确认提交</span>
        </div>
      </div>  
    </div>
    <div class="register-support">
      <div class="register-support-list">
        <div class="register-support-item">
          <img width="94" height="70" :src="require('../assets/img/logo5.png')">
          <p>哈工大微软俱乐部</p>
        </div>
        <div class="register-support-item">
          <img height="73" :src="require('../assets/img/logo7.png')">
          <p>浙江工业大学精弘网络</p>
        </div>
        <div class="register-support-item">
          <img height="73" :src="require('../assets/img/logo8.png')">
          <p>中国矿业大学计算机<br>学院科技学院</p>
        </div>
        <div class="register-support-item">
          <img height="73" :src="require('../assets/img/logo6.png')">
          <p>温州大学程序设计协会</p>
        </div>    
        <div class="register-support-item">
          <img height="73" :src="require('../assets/img/logo9.png')">
          <p>重庆大学微软学生俱乐部</p>
        </div>
        <div class="register-support-item">
          <img height="73" :src="require('../assets/img/logo10.png')">
          <p>哈尔滨工程大学科技协会</p>
        </div>     
        <div class="register-support-item">
          <img height="73" :src="require('../assets/img/logo11.png')">
          <p>南京理工大学计算机学生会</p>
        </div>     
        <div class="register-support-item">
          <img height="73" :src="require('../assets/img/logo12.png')">
          <p>天津大学计算机学生会</p>
        </div>         
        <div class="register-support-item">
          <img height="73" :src="require('../assets/img/logo13.png')">
          <p>中南大学苹果俱乐部</p>
        </div>        
        <div class="register-support-item">
          <img height="73" :src="require('../assets/img/logo14.png')">
          <p>扬州大学信息工程学院社团联合会</p>
        </div>    
        <div class="register-support-item">
          <img width="94" height="70" :src="require('../assets/img/logo5.png')">
          <p>电子科技大学微软俱乐部</p>
        </div>                           
      </div>                 
    </div>
  </div>
</template>

<script>

export default {
  data() {
    return {
      img: require('../assets/img/banner3.jpg'),
      name: '',
      gender: '',
      age: '',
      phone: '',
      school: '',
      grade: '',
      team: '',
      motto: '',
      confirm: false,
    }
  }, 
  methods: {
    registerHandler: function() {
      if(this.name.length == 0 || this.gender.length == 0 || this.age.length == 0 
      || this.phone.length == 0 || this.school.length == 0 || this.grade.length == 0
      || this.team.length == 0 || this.motto.length == 0) {
        alert('请填写完整信息！')
        return;
      }
      let emailReg = new RegExp("^[a-z0-9]+([._\\-]*[a-z0-9])*@([a-z0-9]+[-a-z0-9]*[a-z0-9]+.){1,63}[a-z0-9]+$"); 
      if (!emailReg.test(this.gender)) {
        alert('邮箱格式错误！')
        return;
      }
      // if (this.gender != '男' && this.gender != '女') {
      //   alert('ARE U ALIEN ? （请输入 男 / 女 ......）');
      //   return;
      // }
      // if (this.team != '是' && this.team != '否') {
      //   alert('请输入 是 / 否');
      //   return;
      // }
      if (this.confirm == false) {
        alert('请先阅读比赛规则并且勾选『我已经阅读并自觉遵守比赛规则』');
        return;
      }
      var params = new URLSearchParams();
      params.append('name', this.name);   
      params.append('gender', this.gender);   
      params.append('age', this.age);   
      params.append('phone', this.phone);   
      params.append('school', this.school);   
      params.append('grade', this.grade);   
      params.append('team', this.team);   
      params.append('motto', this.motto);   
      this.$axios({
        method: 'post',
        url: 'http://hackthon.hdu-helloworld.club/register.php',
        data: params
      })
      .then(function (response) {
        let data = response.data
        alert(data.msg)
        if (data.error == -1) return;
      })
      .catch(function (error) {
        console.log(error);
      });  
      this.name = ""
      this.gender = ""
      this.age = ""
      this.phone = ""
      this.school = ""
      this.grade = ""
      this.team = ""
      this.motto = ""   
    }
  }
}
</script>

<style>

</style>
