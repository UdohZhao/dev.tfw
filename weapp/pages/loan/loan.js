// loan.js
var app = getApp(); // 实例化APP
var WxParse = require('../../dist/wxParse/wxParse.js');
Page({

  /**
   * 页面的初始数据
   */
  data: {
    //内容信息
    abort_content : '',

    //弹出框
    hidden: true,
    nocancel: false,
    //下拉选择
    selectPerson:true,
    firstPerson: '抵押贷款',
    selectArea: false,
    notice_str: '',
    index: 0  
  },

  /**
  * 获取金融贷款姓名
  */
  getCname: function (e) {
    var that = this;
    // 获取姓名
    console.log(e);
    that.setData({
      cname: e.detail.value
    });
    console.log(that.data.cname);
    var cname = that.data.cname
  },
  getPhone: function (e) {
    var that = this;
    //获取电话号码
    console.log(e);
    that.setData({
      phone: e.detail.value
    });
    console.log(that.data.phone);
  } ,
  mySelect: function (e) {
    var that = this;
    // 获取用户选中的贷款类型
    that.setData({
      firstPerson: e.target.dataset.me,
      selectPerson: true,
      selectArea: false,
      loansType: e.currentTarget.dataset.type
    })
    console.log(that.data.loansType);
  },
  confirm: function (e) {
    var that = this;
    // 获取用户输入的姓名和电话和类型
    console.log(that.data.cname);
    console.log(that.data.phone);
    console.log(that.data.loansType);
    if (that.data.phone == undefined) {
      wx.showModal({
        title: '提示',
        content: '请输入正确的手机号码！',
        showCancel: false
      })
      return false;
    }
    var myreg = /^(((13[0-9]{1})|(15[0-9]{1})|(18[0-9]{1})|(17[0-9]{1}))+\d{8})$/;
    if (!myreg.test(that.data.phone)) {
      wx.showModal({
        title: '提示',
        content: '请输入正确的手机号码！',
        showCancel: false
      })
      return false;
    }
    if (that.data.cname == false || that.data.cname == undefined) {
      wx.showModal({
        title: '提示',
        content: '姓名不能为空',
        showCancel: false
      })
    } else {
      // code ...
      wx.request({
        method: 'POST',
        url: app.data.domain + '/loan/add',
        data: {
          cname: that.data.cname,
          phone: that.data.phone,
          type: that.data.loansType
        },
        header: {
          'Content-Type': 'application/x-www-form-urlencoded'
        },
        success: function (res) {

          // if (res.data.data.code == 400) {

          // }


          wx.showModal({
            title: '提示',
            content: '提交成功！',
            showCancel: false,
            success: function (res) {
              if (res.confirm) {
                console.log('用户点击确定')
                wx.reLaunch({
                  url: '/pages/loan/loan'
                })
              }
            }
          })
        }
      })

    }
    return false;
  },
 
 
  application_loan : function(){
    this.setData({
      hidden: false,
 
    })
  },
  cancel :function (){
    this.setData({
      hidden: true,
    })
  },
 
  //点击选择类型
  clickPerson: function () {
    var selectPerson = this.data.selectPerson;
    if (selectPerson == true) {
      this.setData({
        selectArea: true,
        selectPerson: false,
      })
    } else {
      this.setData({
        selectArea: false,
        selectPerson: true,
      })
    }
  },

  
  /**
   * 生命周期函数--监听页面加载
   */
  onLoad: function (options) {
    var that = this;
    // 友好的用户体验开始
    wx.showLoading({
      title: '加载中',
    })
    wx.request({
      url: app.data.domain + '/loan/sel', //仅为示例，并非真实的接口地址
      data: {
      },
      header: {
        'content-type': 'application/json'
      },
      success: function (res) {
        console.log(res.data);

        that.setData({
          data: res.data.data
        })

        console.log(that.data.data);
        WxParse.wxParse('content', 'html', that.data.data[0].content, that, 0);
      

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
  
  },


 

})