// community.js
var app = getApp()
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
    //小区名字
    communityName: "行宫",
    //位置
    address: "北京 朝阳区",
    //小区介绍
    communityIntroduce : [
      {
        "typename" : "小区简介",
        "list" : [
          {
            "listname" : "产权类型",
            "content" : "类型1"
          },
          {
            "listname": "竣工时间",
            "content": "2007年"
          },
          {
            "listname": "绿化率",
            "content": "25%"
          },
          {
            "listname": "物业费",
            "content": "1.00元/平米"
          },
          {
            "listname": "总户数",
            "content": "365户"
          },
          {
            "listname": "停车位",
            "content": "127个"
          },
          {
            "listname": "容积率",
            "content": "3.1"
          },
          {
            "listname": "建筑面积",
            "content": "71818平米"
          },
          {
            "listname": "开发商",
            "content": "重庆华宇"
          },
          {
            "listname": "物业公司",
            "content": "重庆展锋物业公司"
          }
        ]
      }
    ],
    //小区概况
    community_profile : [
      {
        "name" : "小区概况",
        "content": "行宫小区位于北京朝阳区，西邻南山区政府,南邻南山商业文化中心区，东邻深圳市高新技术产业园区，北邻深圳大学，是以深圳XX公司为主开发兴建的高尚住宅。小区由7栋9-11层围合式住宅组成，共399户，居住人口1000余人，入伙率达100%，占地24225平方米，总建筑面积44379平方米，其中商业面积为2621平方米，绿化近10000平方米，绿化率60%，地下车库车位173个。"
      },
      {
        "name" : "小区配套",
        "content": "菜市场  西郊医院  山城、新世纪超市  步行10分钟就到步行街  会所  棋牌室  洗衣店  餐厅  美容美发  停车场  篮球场  羽毛球场  游泳池"
      }
    ],
    //默认获取地址
    hasLocation: false
  },
  //根据经纬度在地图上显示
  openLocation: function (e) {
    var value = e.detail.value
    console.log(value)
    wx.openLocation({
      longitude: Number(value.longitude),
      latitude: Number(value.latitude),
      name: value.name,
      address: value.address
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