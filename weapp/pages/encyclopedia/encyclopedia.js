// encyclopedia.js
Page({

  /**
   * 页面的初始数据
   */
  data: {
    detailId:"",
    page: 1,
    hidden: true,
    encycle_content : []
  },
  link_address:function(e){
    console.log(e)
    var id = e.currentTarget.id;
    console.log(id)
    var link = '../encyclopediadetails/encyclopediadetails?detailId=' + id;
    wx.navigateTo({
      url: link
    })
  },
  onLoad: function (options) {
    var that = this;
    that.setData({
      detailId: options.detailId
    })
    that.fetchImgListDate();
  },
  lower: function (e) {
    var self = this;
    self.setData({
      page: self.data.page + 1
    });
    self.fetchImgListDate({ page: self.data.page });
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
        encycle_content: []
      });
    }
    wx.request({
      method: "GET",
      url: "https://api.jiajuol.com/partner/weixin/subject/subject_list.php",
      data: {
        "fromPageId": 0,
        "pageSize": 5,
        "viewUserId": '',
        "page": self.data.page
      },
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
            subject: aa[i].subject,
            cover_img: aa[i].cover_img,
            house_price: aa[i].house_price,
            type_name: aa[i].type_name,
            style_name: aa[i].style_name,
            area_name: aa[i].area_name,
            description: aa[i].description
          });
        }
        self.setData({
          encycle_content: self.data.encycle_content
        })
        //   self.data.postsList = contentObj
        setTimeout(function () {
          self.setData({
            hidden: true
          });
        }, 300);
      },
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