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
    encycle_content : []
  },

  link_address:function(e){  //点击跳转下一级目录
    console.log(e)
    var id = e.currentTarget.id;  
    console.log(id)
    if (id == 1 || id == 5 ){
    var link = '../encyclopedia/encyclopedia?id=' + id;
    wx.navigateTo({
      url: link
    })
    }
    if (id != 1 && id != 5  ){
      var link = '../encyclopediaes/encyclopediaes?id=' + id;
      wx.navigateTo({
        url: link
      })
    }
  },
  onLoad: function (options) {
    var id = options.id
    var that = this;
    var self = this;
    // 友好的用户体验开始
    wx.showLoading({
      title: '加载中',
    })
    wx.request({
      method: "GET",
      url: app.data.domain + '/houseEncyclopediaCategory/sel?id=' + id  ,
      data: {},
      header: {
        'Content-Type': 'application/json'
      },
      success: function (res) {
        // var contentObj = [];
        console.log(res.data)
        var aa = res.data.data
        for (var i in aa) {
          self.data.encycle_content.push({
            id: aa[i].id,
            pid: aa[i].pid,
            icon_path: aa[i].icon_path,
            cname: aa[i].cname,
          });
        }
        self.setData({
          encycle_content: self.data.encycle_content
        })
        //   self.data.postsList = contentObj
      
      },
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