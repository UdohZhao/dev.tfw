// encyclopediadetails.js
var app = getApp(); // 实例化APP
Page({

  /**
   * 页面的初始数据
   */
  data: {
    encyclopediadetails : []
  },

  /**
   * 生命周期函数--监听页面加载
   */
  onLoad: function (options) {
    console.log(options.id)
    var id = options.id
    var self = this;
    var that = this;
    // 友好的用户体验开始
    wx.showLoading({
      title: '加载中',
    })
    wx.request({
      method: "POST",
      url: app.data.domain + '/houseEncyclopediaCategory/sel1?id=' +id, //仅为示例，并非真实的接口地址
      data: {
      },
      header: {
        "Content-Type": "application/x-www-form-urlencoded"  
      },
      success: function (res) {
        console.log(res.data)
        var aa = res.data.data
        for (var i in aa) {
          self.data.encyclopediadetails.push({
            cname: aa[i].cname,
            title: aa[i].title,
            content: aa[i].content,
          });
        }
        self.setData({
          encyclopediadetails: self.data.encyclopediadetails
        })
        
      }
    })
    // 友好的用户体验结束
    setTimeout(function () {
      wx.hideLoading()
    }, 2000)
  },

  /**
   * 生命周期函数--监听页面初次渲染完成
   */
  onReady: function () {
  
  },

  /**
   * 生命周期函数--监听页面显示
   */
  onShow: function () {
  
  },

  /**
   * 生命周期函数--监听页面隐藏
   */
  onHide: function () {
  
  },

  /**
   * 生命周期函数--监听页面卸载
   */
  onUnload: function () {
  
  },

  /**
   * 页面相关事件处理函数--监听用户下拉动作
   */
  onPullDownRefresh: function () {
  
  },

  /**
   * 页面上拉触底事件的处理函数
   */
  onReachBottom: function () {
  
  },

  /**
   * 用户点击右上角分享
   */
  onShareAppMessage: function () {
  
  }
})