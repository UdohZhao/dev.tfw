// index.js
var app = getApp(); // 实例化APP
Page({
  data: {
   
    //内容
    abort_content: []

  },

  onLoad: function (options) {
    var that = this;
    
    that.fetchImgListDate();
  },
  fetchImgListDate: function (data) {
    var self = this;
    wx.request({
     
      url: app.data.domain + '/about/index',
      data: {
      },
      header: {
        'Content-Type': 'application/json'
      },
      success: function (res) {
        // var contentObj = [];
        
        var aa = res.data.data
        console.log(aa)
        for (var i in aa) {
          self.data.abort_content.push({
            content: aa[i].content
          });
        }
        self.setData({
          abort_content: self.data.abort_content
        })
      }
    })

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