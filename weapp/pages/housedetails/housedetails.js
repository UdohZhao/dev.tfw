// housedetails.js
Page({

  /**
   * 页面的初始数据
   */
  data: {
    //轮播
    imgUrls: [
      'http://img02.tooopen.com/images/20150928/tooopen_sy_143912755726.jpg',
      'http://img06.tooopen.com/images/20160818/tooopen_sy_175866434296.jpg',
      'http://img06.tooopen.com/images/20160818/tooopen_sy_175833047715.jpg'
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
  callPhone: function () {
    wx.showModal({
      content: '13111111111',
      showCancel: false,
      success: function (res) {
        if (res.confirm) {
          console.log('用户点击确定')
        }
      }
    });
  },
  /**
   * 生命周期函数--监听页面加载
   */
  onLoad: function (options) {
    this.setData({
      eachId: options.eachId,
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