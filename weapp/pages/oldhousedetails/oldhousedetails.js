// oldhousedetails.js
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
    titleTop : [
      {
        "title" : "行宫小区 独立两居 南北通透 交通便利"
      }
    ],
    titleBottom : [
      {
        "words" : "位置安静",
      },
      {
        "words": "一梯两户",
      },
      {
        "words": "交通便利",
      }
    ],
    saleMsg : [
      {
        "number" : "220万",
        "type" : "售价"
      },
      {
        "number": "2室一厅一卫",
        "type": "房型"
      },
      {
        "number": "74平米",
        "type": "面积"
      }
    ],
    moreContent : [
      {
        "title" : "单价",
        "content" : "29729元/平米"
      },
      {
        "title": "楼层",
        "content": "中层（共6层）"
      },
      {
        "title": "朝向",
        "content": "南北"
      },
      {
        "title": "类型",
        "content": "普通住宅"
      },
      {
        "title": "装修",
        "content": "中等装修"
      },
      {
        "title": "年代",
        "content": "1998年"
      },
      {
        "title": "发布",
        "content": "2017-06-28"
      }
    ],
    district : [
      {
        "name" : "行宫",
        "address" : "北京 朝阳区"
      }
    ],
    //职业顾问信息
    consultant: [
      {
        "imgUrl": "../../images/房子.png",
        "name": "杰克",
        "phone": "13111111111"
      }
    ],
    //核心卖点
    sellingPoint : [
      {
        "title": "核心卖点",
        "content" : [
          {
            "list": "1、户型：此房是正规一房户型，精装拎包入住。"
          },
          {
            "list": "2、周边配套：小区周边有超市、公交车站、幼儿园小学中学、银行、酒店等。"
          },
          {
            "list": "3、交通情况：小区门口就是公交站，多路公交去哪儿都方便。有10多路公交车，可直达主城各大商圈。"
          },
          {
            "list": "4、商圈配套：家乐福超市、永辉超市等。"
          }
        ]
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
    })
  },
  /**
   * 生命周期函数--监听页面加载
   */
  onLoad: function (options) {
  
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