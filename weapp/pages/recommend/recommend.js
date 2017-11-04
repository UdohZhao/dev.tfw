// recommend.js
var App = getApp();
Page({

  /**
   * 页面的初始数据
   */
  data: {
      domain: App.data.domain,
      //最新房源
      my_availability: [
        {
          "image": "../../images/house.png",
          "status": "期房",
          "title": "象屿两江御府",
          "address": "北碚-照母山",
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
        {
          "image": "../../images/house.png",
          "status": "期房",
          "title": "约克郡",
          "address": "北碚-照母山",
          "introduce": [
            {
              "name": "低总价"
            },
            {
              "name": "湖景"
            },
            {
              "name": "大型社区"
            },
            {
              "name": "带幼儿园"
            }
          ],
          "money": "489",
          "money_unit": "万元/套起"
        }
      ]
    },

  /** 
   * 初始化加载
   */
  onLoad: function (options) {

    var that = this;

    // 友好的用户体验开始
    wx.showLoading({
      title: '加载中',
    })

    // 请求最新房源数据
    wx.request({
      url: App.data.domain + '/index/index',
      header: {
        'content-type': 'application/json'
      },
      success: function (res) {
        console.log(res.data);

        // if 
        if (res.data.code == 200) {

          that.setData({
            nhcData: res.data.data.nhcData
          });

          console.log(that.data.nhcData);

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
  onReady: function () {
    // Do something when page ready.
  },
  onShow: function () {
    // Do something when page show.
  },
  onHide: function () {
    // Do something when page hide.
  },
  onUnload: function () {
    // Do something when page close.
  },
  onPullDownRefresh: function () {
    // Do something when pull down.
  },
  onReachBottom: function () {
    // Do something when page reach bottom.
  },
  onShareAppMessage: function () {
    // return custom share data when user share.
  },
  onPageScroll: function () {
    // Do something when page scroll
  },

  /**
   * 去往房屋详细
   */
  gotoHd: function (e) {

    var that = this;

    // 获取房屋id，类型
    console.log(e.currentTarget.dataset.id);
    console.log(e.currentTarget.dataset.type);

    wx.navigateTo({
      url: '/pages/housedetails/housedetails?id=' + e.currentTarget.dataset.id + '&hctype=' + e.currentTarget.dataset.type
    })

  },




})