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
    var that = this;
    const requestTask = wx.request({
      method: "POST",
      url: app.data.domain + '/index/index',
      data: {},
      header: {
        'Content-Type': 'application/x-www-form-urlencoded'
      },
      success: function (res) {
        if (res.data.code == 200) {
        } else {
          console.log("错误！！")
        }
      }
    })
    that.fetchImgListDate();
  },

  fetchImgListDate: function (data) {
    var self = this;
    self.setData({
      hidden: false
    });
    if (!data) data = {};
    if (!data.page) data.page = 1;
    if (data.page === 1) {
      self.setData({
        my_availability: []
      });
    }
    wx.request({
      method: "POST",
      url: app.data.domain + '/index/demo',
      data: {
        "fromPageId": 0,
        "pageSize": 5,
        "viewUserId": '',
        "page": self.data.page
      },
      header: {
        'Content-Type': 'application/x-www-form-urlencoded'
      },
      success: function (res) {
        // var contentObj = [];
        console.log(res.data)
        var aa = res.data.data
        console.log(aa)
        for (var i in aa) {
          self.data.my_availability.push({
            slideshow: aa[i].slideshow,
            community: aa[i].community,
            address: aa[i].address,
            show_price: aa[i].show_price,
            trait: aa[i].trait,
            title: aa[i].title
          });
        }
        self.setData({
          totalpage: res.data.total_page,
          my_availability: self.data.my_availability
        })
        //   self.data.postsList = contentObj
        setTimeout(function () {
          self.setData({
            hidden: true
          });
        }, 500);
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