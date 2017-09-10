// search.js
var App = getApp();
Page({

  /**
   * 页面的初始数据
   */
  data: {
    hcid: 1,
    hctype: 0,
    domain: App.data.domain,
    //地点选择
    selectPerson: true,
    firstPerson: '新房',
    selectArea: false,
    //搜索框
    selectHide: false,
    inputValue: '',
    getSearch: [],
    modalHidden: true
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
  //点击切换
  mySelect: function (e) {
    this.setData({
      firstPerson: e.target.dataset.me,
      selectPerson: true,
      selectArea: false,
    })
  },
  modalChangeConfirm: function () {
    wx.setStorageSync('searchData', [])
    this.setData({
      modalHidden: true
    })
    wx.redirectTo({
      url: '../search/search'
    })
    // this.onLoad();

  },
  modalChangeCancel: function () {
    this.setData({
      modalHidden: true
    })
  },
  clearSearchStorage: function () {
    this.setData({
      modalHidden: false
    })
    // this.onLoad();
  },
  onShow: function () {
    var getSearch = wx.getStorageSync('searchData');
    console.log(getSearch)
    this.setData({
      getSearch: getSearch,
      inputValue: ''
    })
    console.log('search is onshow')
  },
  // onHide: function () {
  //   console.log('search is onHide')
  //   wx.redirectTo({
  //     url: '../oldhouse/oldhouse'
  //   })
  // },
  bindchange: function (e) {
    console.log('bindchange')
  },
  clearInput: function () {
    this.setData({
      inputValue: ''
    })
  },
  /**
   * 生命周期函数--监听页面加载
   */
  onLoad: function (options) {
  
    var that = this;

    // 请求首页数据
    wx.request({
      url: App.data.domain + '/index/index',
      header: {
        'content-type': 'application/json'
      },
      success: function (res) {
        console.log(res.data);

        // if 
        if (res.data.code == 200) {

          // 去除卖房
          res.data.data.hcData.pop();

          that.setData({
            hcData: res.data.data.hcData,
          });

          console.log(that.data.hcData);

        } else {
          // 提示
          wx.showModal({
            title: '提示',
            content: '未知错误 :(',
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


  },

  /**
   * 生命周期函数--监听页面初次渲染完成
   */
  onReady: function () {
  
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

  /**
   * 去往房屋条目
   */
  gotoHouse: function (e) {

    var that = this;

    var selectPerson = that.data.selectPerson;

    if (selectPerson == true) {
      that.setData({
        selectArea: true,
        selectPerson: false,
      })
    } else {
      that.setData({
        selectArea: false,
        selectPerson: true,
      })
    }

    that.setData({
      firstPerson: e.currentTarget.dataset.val,
      selectPerson: true,
      selectArea: false,
    })

    // 获取房屋类别主键id，房屋类别
    console.log(e.currentTarget.dataset.id);
    console.log(e.currentTarget.dataset.type);

    that.setData({
      hcid: e.currentTarget.dataset.id,
      hctype: e.currentTarget.dataset.type
    });

  },

  /** 
   * 搜索框
   */
  bindInput: function (e) {

    var that = this;

    that.setData({
      inputValue: e.detail.value
    })

    console.log('搜索值：' + this.data.inputValue)

  },

  /** 
   * 搜索按钮
   */
  setSearchStorage: function (e) {

    var that = this;

    // 获取房类别id，房类型，搜索值
    console.log(that.data.hcid);
    console.log(that.data.hctype);
    console.log(that.data.inputValue);

    // 搜索值不能为空
    if (that.data.inputValue == '' || that.data.inputValue == false) {

      // 提示
      wx.showModal({
        title: '提示',
        content: '搜索关键字不能为空 :(',
        showCancel: false
      })

    } else {

      wx.navigateTo({
        url: "/pages/newhouse/newhouse?hcid=" + that.data.hcid + "&hctype=" + that.data.hctype + "&search=" + that.data.inputValue
      })

    }

  }


})