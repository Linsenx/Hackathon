<template>
  <div class="schedule" :style="{backgroundImage: `url(${this.img})`}">
    <div id="sch"></div>
    <div class="schedule-title">赛程安排</div>
    <table class="schedule-table" border="0">
      <tr>
        <th>时间</th>
        <th>8:00~9:00</th>
        <th>9:00~9:40</th>
        <th>9:40~10:00</th>
        <th>10:00~10:30</th>
        <th>10:30~12:00</th>
        <th>12:00~12:10</th>
        <th>12:10~23:30</th>
        <th>23:30~00:30</th>
      </tr>
      <tr>
        <td><span>5.12</span></td>
        <td><span>参赛人员签到，自由组队</span></td>
        <td><span>参赛队伍调试设备，解决相关问题；相关媒体人员入场</span></td>
        <td><span>接待嘉宾入场</span></td>
        <td><span>主持人致辞</span></td>
        <td><span>嘉宾致辞</span></td>
        <td><span>赞助商公布全部悬赏任务<br>主持人宣布比赛正式开始</span></td>
        <td><span>选手开发时间<br>（17:00～18:00：主办方提供晚餐）<br>线上宣传人对比赛活动进行直播宣传</span></td>
        <td><span>夜宵时间+互动小游戏</span></td>
      </tr>
      <tr>
        <th>时间</th>
        <th>00:30~9:30</th>
        <th>9:30~12:00</th>
        <th>12:00~13:00</th>
        <th>13:00~13:10</th>
        <th>13:10~15:00</th>
        <th>15:00~15:20</th>
        <th>15:20~15:50</th>
        <th>15:50~16:00</th>
      </tr>
      <tr>
        <td><span>5.13</span></td>
        <td><span>选手开发时间<br>（7:30～8:30：主办方提供早餐）</span></td>
        <td><span>作品及相关文档提交</span></td>
        <td><span>评审组浏览作品，给予“作品：基础分数”<br>（12:00～13:00：主办方提供午餐）<br>比赛观众入场</span></td>
        <td><span>主办方公布彩蛋答案<br>获奖者领取趣味奖</span></td>
        <td><span>参赛队伍作品解说<br>评审组给予“作品：解说/灵感分数”<br>赞助商选择“悬赏任务”完成者</span></td>
        <td><span>嘉宾致辞<br>主办方计算参赛选手得分</span></td>
        <td><span>主办方宣布三等奖/二等奖/一等奖获得者<br>嘉宾颁奖</span></td>
        <td><span>全体参赛人员同嘉宾合影<br>参赛选手领取赛事纪念奖</span></td>
      </tr>           
    </table>
    <div class="schedule-footer">
      
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      img: require('../assets/img/banner2.jpg')
    }
  }
}
</script>

<style>

</style>
