// index.js


var app = getApp(); // 实例化APP
Page({
  data: {
    //内容
    abort_content: []
  },

  onLoad: function (options) { 
    var that = this;
    wx.request({
      method: "POST",
      url: app.data.domain + '/about/index',//仅为示例，并非真实的接口地址
      data: {
      },
      header: {
        'Content-Type': 'application/x-www-form-urlencoded'
      },
      success: function (res) {
        console.log(res.data)
        that.setData({
          abort_content: res.data.data
      })
      },
    });
  },

  onReady: function () {
    // 页面渲染完成
  },
  onShow: function () {
  },
  onHide: function () {
    // 页面隐藏
  },
  onUnload: function () {
    // 页面关闭
  },
  //搜索
  showInput: function () {
  
  },
  hideInput: function () {
    
  },
  clearInput: function () {
  
  },
  inputTyping: function (e) {
  
  }
})