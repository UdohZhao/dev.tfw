// hxdetails.js
Page({

  /**
   * 页面的初始数据
   */
  data: {
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
  onLoad: function () {
    var that = this;
    //ajax请求数据
    const requestTask = wx.request({
      method: "GET",
      url: "http://dev.tfw.local/index/index",
      data: {
        imgUrls:[
          'http://img02.tooopen.com/images/20150928/tooopen_sy_143912755726.jpg',
          'http://img06.tooopen.com/images/20160818/tooopen_sy_175866434296.jpg',
          'http://img06.tooopen.com/images/20160818/tooopen_sy_175833047715.jpg'
        ]
      },
      header: {
        'Content-Type': 'application/json'
      },
      success: function (res) {
        console.log(JSON.parse(res.data.imgUrls));
        // var arr = [];
        // console.log(typeof (arr))
        // for (var i in res.data.imgUrls){
        //   arr.push(res.data.imgUrls[i])
        // }
        that.setData({
          imgUrls: JSON.parse(res.data.imgUrls)
        })
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