// hxdetails.js
var App = getApp();
Page({

  /**
   * 页面的初始数据
   */
  data: {
    domain: App.data.domain,
    //轮播
    imgUrls: [
    ],
    indicatorDots: true,
    autoplay: true,
    interval: 5000,
    duration: 1000,
    //信息内容
    my_availability: [
      {
        "image": "../../images/房子.png",
        "status": "期房",
        "title": "象屿两江御府",
        "address": "北碚-照母山",
        "style" : "别墅",
        "introduce": [
          {
            "name": "人工湖"
          },
          {
            "name": "湖景"
          },
          {
            "name": "高端会所"
          },
          {
            "name": "人车分流"
          }
        ],
        "money": "310",
        "money_unit": "万元/套起"
      },
    ],
    house_content: [
      {
        "name": "建筑面积",
        "content": 　"363.00平"
      },
      {
        "name": "首付占比",
        "content": "暂无数据",
      },
      {
        "name": "朝向",
        "content": "南北",
      },
      {
        "name": "月供",
        "content": "暂无数据",
      }
    ],
    //所属楼盘
    belong_huse : [
      {
        "name" : "象屿两江御府",
        "address" : "渝北-照母山"
      }
    ]
  },

  /**
   * 生命周期函数--监听页面加载
   */
  onLoad: function (options) {

    var that = this;

    // 获取主力户型id
    console.log(options.id);

    that.setData({
      id: options.id
    });

    // 友好的用户体验开始
    wx.showLoading({
      title: '加载中',
    })

    // 请求首页数据
    wx.request({
      url: App.data.domain + '/hxdetails/index',
      data: {
        id: that.data.id
      },
      header: {
        'content-type': 'application/json'
      },
      success: function (res) {
        console.log(res.data);

        // if 
        if (res.data.code == 200) {

          that.setData({
            data: res.data.data
          });

          console.log(that.data.data);

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
        console.log(e);
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