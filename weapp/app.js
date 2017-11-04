//app.js
App({
  data:{
    //domain: 'http://dev.tefangw.vag',
    domain: 'https://tefangw.com',
    technicalSupport: '重庆存己科技提供技术支持'
  },
  onLaunch: function () {
    console.log('App Launch')
  },
  onShow: function () {
    console.log('App Show')
  },
  onHide: function () {
    console.log('App Hide')
  },
  globalData: {
    hasLogin: false
  }
});
