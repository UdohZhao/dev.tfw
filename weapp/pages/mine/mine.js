// mine.js
Page({

  /**
   * 页面的初始数据
   */
  data: {
    //内容信息
    abort_content: [
   

    ],
  },

  /**
   * 生命周期函数--监听页面加载
   */
  onLoad: function (options) {
    var that = this;
    const requestTask = wx.request({
      method: "POST",
      url: app.data.domain + '/about/index',
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
        abort_content: []
      });
    }
    wx.request({
      method: "POST",
      url: app.data.domain + '/about/index',
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
          self.data.abort_content.push({
           
            content: aa[i].content
          });
        }
        self.setData({
          totalpage: res.data.total_page,
          abort_content: self.data.abort_content
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
  lower: function (e) {
    var self = this;
    console.log(self.data.page + 1)
    if (self.data.page + 1 <= self.data.totalpage) {
      self.setData({
        page: self.data.page + 1
      });
      self.fetchImgListDate({ page: self.data.page });
    } else {
      self.setData({
        completedata: false,
        page: self.data.page + 1
      });
    }
  },

  //房源跳转详细信息
  eachHouse: function (e) {
    var id = e.currentTarget.dataset.id;
    var link = "../housedetails/housedetails?eachId=" + id
    wx.navigateTo({
      url: link
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