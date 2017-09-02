// recommend.js
var app = getApp();
Page({

  /**
   * 页面的初始数据
   */
  data: {
    //最新房源
    my_availability: [],
  },

  /**
   * 生命周期函数--监听页面加载
   */
  onLoad: function (options) {
    var that = this
    wx.request({
      method: "POST",
      url: app.data.domain + '/index/recommend', //仅为示例，并非真实的接口地址
      data: {
      },
      header: {
        'Content-Type': 'application/x-www-form-urlencoded'
      },
      success: function (res) {
        console.log(res.data)
        that.setData({
          my_availability: res.data.data,
        })
      }
    });
    var that = this
    wx.request({
      method: "POST",
      url: app.data.domain + '/index/demo', //仅为示例，并非真实的接口地址
      data: {
      },
      header: {
        'Content-Type': 'application/x-www-form-urlencoded'
      },
      success: function (res) {
        console.log(res.data)
        that.setData({
          my_availability: res.data.data,
        })
      }
    });
    var that = this
    wx.request({
      method: "POST",
      url: app.data.domain + '/index/recommend2', //仅为示例，并非真实的接口地址
      data: {
      },
      header: {
        'Content-Type': 'application/x-www-form-urlencoded'
      },
      success: function (res) {
        console.log(res.data)
        my_availability: res.data
      }
    })
    
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