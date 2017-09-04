// nextstep.js
Page({

  /**
   * 页面的初始数据
   */
  data: {
    array: ["学区房", "特价房", "住宅", "商品房"],
    objectArray:[
      {
        id: 0,
        name: "学区房"
      },
      {
        id: 1,
        name: "特价房"
      },
      {
        id: 2,
        name: "住宅"
      },
      {
        id: 3,
        name: "商品房"
      },
    ],
    index: 0,

    housetype: 0,
    arrayorientation: ["东", "南", "西", "北","西南","西北"],
    objectArrayorientation: [
      {
        ido: 0,
        name: "东"
      },
      {
        ido: 1,
        name: "南"
      },
      {
        ido: 2,
        name: "西"
      },
      {
        ido: 3,
        name: "北"
      },
      {
        ido: 4,
        name: "西南"
      },
      {
        ido: 5,
        name: "西北"
      },
    ],
    houseorientation: 0,
    arrayfloor: ["高层", "中层", "低层"],
    objectArrayfloor: [
      {
        idfloor: 0,
        name: "高层"
      },
      {
        idfloor: 1,
        name: "中层"
      },
      {
        idfloor: 2,
        name: "低层"
      }
    ],
    housefloor: 0,
    housedecoration: 0,
    arraydecoration: ["精装", "简装", "毛坯"],
    objectArraydecoration: [
      {
        iddecoration: 0,
        name: "精装"
      },
      {
        iddecoration: 1,
        name: "简装"
      },
      {
        iddecoration: 2,
        name: "毛坯"
      }
    ],
    textaeraLen: 0,
    files: [],
    files1: []
  },
  bindPickerChangetype: function (e) {
    console.log('picker发送选择改变，携带值为', e.detail.value)
    this.setData({
      id: e.detail.value,
      housetype: 1
    })
  },
  bindPickerChangeorientation: function (e) {
    console.log('picker发送选择改变，携带值为', e.detail.value)
    this.setData({
      ido: e.detail.value,
      houseorientation: 1
    })
  },
  bindPickerChangefloor: function (e) {
    console.log('picker发送选择改变，携带值为', e.detail.value)
    this.setData({
      idfloor: e.detail.value,
      housefloor: 1
    })
  },
  bindPickerChangedecoration: function (e) {
    console.log('picker发送选择改变，携带值为', e.detail.value)
    this.setData({
      iddecoration: e.detail.value,
      housedecoration: 1
    })
  },
  textaeralength: function(e){
    // var textaeraLen=e.detail.value.length
    // console.log(textaeraLen)
    this.setData({
      textaeraLen: e.detail.value.length
    });
  },
  chooseImage: function (e) {
    var that = this;
    wx.chooseImage({
      sizeType: ['original', 'compressed'], /*// 可以指定是原图还是压缩图，默认二者都有*/
      sourceType: ['album', 'camera'], /*// 可以指定来源是相册还是相机，默认二者都有*/
      success: function (res) {
        /*// 返回选定照片的本地文件路径列表，tempFilePath可以作为img标签的src属性显示图片*/
        that.setData({
          files: that.data.files.concat(res.tempFilePaths)
        });
      }
    })
  },
  previewImage: function (e) {
    wx.previewImage({
      current: e.currentTarget.id, /*// 当前显示图片的http链接*/
      urls: this.data.files /*// 需要预览的图片http链接列表*/
    })
  },
  chooseImage1: function (e) {
    var that = this;
    wx.chooseImage({
      sizeType: ['original', 'compressed'], /*// 可以指定是原图还是压缩图，默认二者都有*/
      sourceType: ['album', 'camera'], /*// 可以指定来源是相册还是相机，默认二者都有*/
      success: function (res) {
        /*// 返回选定照片的本地文件路径列表，tempFilePath可以作为img标签的src属性显示图片*/
        that.setData({
          files1: that.data.files1.concat(res.tempFilePaths)
        });
      }
    })
  },
  previewImage1: function (e) {
    wx.previewImage({
      current: e.currentTarget.id, /*// 当前显示图片的http链接*/
      urls: this.data.files1 /*// 需要预览的图片http链接列表*/
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