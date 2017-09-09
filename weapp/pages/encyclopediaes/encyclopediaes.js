// encyclopedia.js
var app = getApp(); // 实例化APP
Page({

  /**
   * 页面的初始数据
   */
  data: {
    domain: app.data.domain,
    id:"",
    hidden: true,
  },

  link_address:function(e){  //点击跳转下一级目录
    console.log(e)
    var id = e.currentTarget.id;  
    console.log(id)
    var link = '../encyclopediadetails/encyclopediadetails?id=' + id;
    wx.navigateTo({
      url: link
    })
  },
  onLoad: function (options) {
    var that = this;
    var id = options.id
    // 友好的用户体验开始
    wx.showLoading({
      title: '加载中',
    })
    wx.request({
      method: "GET",
      url: app.data.domain + '/houseEncyclopediaCategory/seles?id=' + id,
      data: {},
      header: {
        'Content-Type': 'application/json'
      },
      success: function (res) {
        console.log(res.data)

        if (res.data.code == 200) {

          that.setData({
            encycle_content: res.data.data
          })

          console.log(that.data.encycle_content);

        } else {
          // 提示
          wx.showModal({
            title: '提示',
            content: '数据显示异常 :(',
            showCancel: false,
            success: function (res) {
              if (res.confirm) {
                wx.reLaunch({
                  url: '/pages/index/index'
                })
              }
            }
          })
        }
      },
      fail: function (e) {
        // 提示
        wx.showModal({
          title: '提示',
          content: '数据显示异常 :(',
          showCancel: false,
          success: function (res) {
            if (res.confirm) {
              wx.reLaunch({
                url: '/pages/index/index'
              })
            }
          }
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