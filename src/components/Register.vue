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
      <div class="box-content">
        <router-link to="/participant"><div class="register-button">参赛者报名</div></router-link>
        <router-link to="/spectator"><div class="register-button">观众报名</div></router-link>
        <router-link to="/volunteer"><div class="register-button">志愿者报名</div></router-link>
        <img class="register-pic" height="180" :src="require('../assets/img/qq.png')">
        <div class="register-pic-title">2018Hackathon报名官方群</div>
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
