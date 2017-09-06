// housedetails.js
var App = getApp();
Page({

  /**
   * 页面的初始数据
   */
  data: {
    domain: App.data.domain,
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
        "name" : "开盘",
        "content" :　"2017-07-23"
      },
      {
        "name" : "交房时间",
        "content" : "2018-07-23",
      },
      {
        "name": "装修情况",
        "content": "毛坯",
      },
      {
        "name": "开发商",
        "content": "重庆华宇",
      },
      {
        "name": "预售许可证",
        "content": "渝国土房管（2016） 预字第（151）号",
      },
      {
        "name": "产权年限",
        "content": "50年（住宅）",
      },
      {
        "name": "物业公司",
        "content": "重庆中海",
      },
      {
        "name": "建筑类型",
        "content": "多层，高层",
      },
      {
        "name": "车位配比",
        "content": "1:1",
      },
      {
        "name": "规划户数",
        "content": "1230户",
      },
      {
        "name": "容积率",
        "content": "商住：4.2",
      },
      {
        "name": "绿化率",
        "content": "25%",
      }
    ],
    //户型信息
    huxing_content: [
      {
        "imageUrl" : "../../images/房子.png",
        "title" : "公寓户型",
        "style" : "商住：80平米"
      },
      {
        "imageUrl": "../../images/房子.png",
        "title": "LOFT户型",
        "style": "商住：120平米"
      },
      {
        "imageUrl": "../../images/房子.png",
        "title": "公寓户型",
        "style": "商住：80平米"
      },
      {
        "imageUrl": "../../images/房子.png",
        "title": "公寓户型",
        "style": "商住：80平米"
      },
      {
        "imageUrl": "../../images/房子.png",
        "title": "公寓户型",
        "style": "商住：80平米"
      },
    ],
    //职业顾问信息
    consultant: [
      {
        "imgUrl" : "../../images/房子.png",
        "name" : "杰克",
        "phone" : "13111111111"
      }
    ]
  },
  //电话信息弹出
  callPhone: function (e) {

    // 获取电话
    console.log(e.currentTarget.dataset.phone);

    wx.makePhoneCall({
      phoneNumber: e.currentTarget.dataset.phone
    })

  },
  /**
   * 生命周期函数--监听页面加载
   */
  onLoad: function (options) {

    var that = this;

    // 获取房屋id，类型
    console.log(options);

    that.setData({
      hid: options.id,
      htype: options.type
    });

    console.log(that.data.hid);
    console.log(that.data.htype);

    // htype 1>新房详细 ，2>二手房详细，3>住房详细
    var url;
    if (that.data.htype == 1) {
      url = App.data.domain + "/housedetails/getNhdetail";
    }
    if (that.data.htype == 2) {
      url = App.data.domain + "/housedetails/getUhdetail";
    }
    if (that.data.htype == 3) {
      url = App.data.domain + "/housedetails/getThdetail";
    }

    console.log(url);

    // 友好的用户体验开始
    wx.showLoading({
      title: '加载中',
    })

    // 请求首页数据
    wx.request({
      url: url,
      data: {
        id: that.data.hid
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