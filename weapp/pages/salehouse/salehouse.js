// salehouse.js
var App = getApp();
Page({

  /**
   * 页面的初始数据
   */
  data: {
    domain: App.data.domain,
    introduceLength: 0,
    files: [],
    sdhspr: ["无","学区房", "特价房"],
    array: [
      ["一室","二室","三室","四室","五室","五室以上"],
      ["一厅","二厅","三厅"],
      ["一卫","二卫","三卫"]
    ],
    index: [0,0,0],
    datastatus:0
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

    // 请求卖房数据
    wx.request({
      url: App.data.domain + '/sellHouseInfo/add',
      header: {
        'content-type': 'application/json'
      },
      success: function (res) {
        console.log(res.data);

        // if 
        if (res.data.code == 200) {

          that.setData({
            shiData: res.data.data
          });

          console.log(that.data.shiData);

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
  
  },

  /**
   * 图片上传
   */
  chooseImage: function (e) {
    var that = this;

    console.log(that.data.files.length);

    // 最多上传9张图片
    if (that.data.files.length > 8) {

      wx.showModal({
        title: '提示',
        content: '最多上传9张图片 :(',
        showCancel: false
      })

    } else {

      wx.chooseImage({
        sizeType: ['original', 'compressed'], // 可以指定是原图还是压缩图，默认二者都有
        sourceType: ['album', 'camera'], // 可以指定来源是相册还是相机，默认二者都有
        success: function (res) {
          // 返回选定照片的本地文件路径列表，tempFilePath可以作为img标签的src属性显示图片
          var tempFilePaths = res.tempFilePaths;

          const uploadTask = wx.uploadFile({
            url: App.data.domain + '/base/upload',
            filePath: tempFilePaths[0],
            name: 'file',
            success: function (res) {

              console.log(JSON.parse(res.data));

              // 获取上传结果
              var data = JSON.parse(res.data);

              // 200 
              if (data.code == 200) {

                that.setData({
                  files: that.data.files.concat(data.data)
                });

                console.log(that.data.files);

              } else {

                // 提示
                wx.showModal({
                  title: '提示',
                  content: data.msg,
                  showCancel: false
                })

              }


            }
          })

        }

      })

    }

  },
  previewImage: function (e) {
    wx.previewImage({
      current: e.currentTarget.id, // 当前显示图片的http链接
      urls: this.data.files // 需要预览的图片http链接列表
    })
  },

  /**
   * 房屋特点
   */
  bindSdhsprChange: function (e) {

    var that = this;

    // 获取选中的值
    console.log(e.detail.value);

    that.setData({
      sdhsprIndex: e.detail.value
    })

  },

  /**
   * 房屋类型
   */
  bindHtypeChange: function (e) {

    var that = this;

    // 获取选中的值
    console.log(e.detail.value);

    that.setData({
      htypeIndex: e.detail.value
    })

  },

  /**
   * 房屋朝向
   */
  bindOrientationChange: function (e) {

    var that = this;

    // 获取选中的值
    console.log(e.detail.value);

    that.setData({
      orientationIndex: e.detail.value
    })

  },

  /**
   * 提交form表单
   */
  formSubmit: function (e) {

    var that = this;

    // 获取用户输入的值
    console.log(e.detail.value.community);
    console.log(e.detail.value.area);
    console.log(e.detail.value.house_type);
    console.log(e.detail.value.selling_price);
    console.log(e.detail.value.introduce);
    console.log(e.detail.value.sdhspr);
    console.log(e.detail.value.htype);
    console.log(e.detail.value.orientation);
    console.log(e.detail.value.cname);
    console.log(e.detail.value.phone);
    console.log(that.data.files);

    // 计算输入长度
    that.setData({
      introduceLength: e.detail.value.introduce.length
    });

    // 验证
    if (e.detail.value.community == '' || e.detail.value.community == false) {
      wx.showModal({
        title: '提示',
        content: '小区名称不能为空 :(',
        showCancel: false
      })
    } else if (e.detail.value.area == '' || e.detail.value.area == false) {
      wx.showModal({
        title: '提示',
        content: '面积不能为空 :(',
        showCancel: false
      })
    } else if (e.detail.value.house_type == '' || e.detail.value.house_type == false) {
      wx.showModal({
        title: '提示',
        content: '户型不能为空 :(',
        showCancel: false
      })
    } else if (e.detail.value.selling_price == '' || e.detail.value.selling_price == false) {
      wx.showModal({
        title: '提示',
        content: '售价不能为空 :(',
        showCancel: false
      })
    } else if (e.detail.value.introduce == '' || e.detail.value.introduce == false) {
      wx.showModal({
        title: '提示',
        content: '房屋介绍不能为空 :(',
        showCancel: false
      })
    } else if (that.data.introduceLength > 200) {
      wx.showModal({
        title: '提示',
        content: '房屋介绍请控制在200字内 :(',
        showCancel: false
      })
    } else if (e.detail.value.cname == '' || e.detail.value.cname == false) {
      wx.showModal({
        title: '提示',
        content: '姓名不能为空 :(',
        showCancel: false
      })
    } else if (e.detail.value.phone == '' || e.detail.value.phone == false) {
      wx.showModal({
        title: '提示',
        content: '手机号码不能为空 :(',
        showCancel: false
      })
    } else if (!(/^1[3|4|5|8][0-9]\d{8}$/.test(e.detail.value.phone))) {
      wx.showModal({
        title: '提示',
        content: '请输入正确的手机号码 :(',
        showCancel: false
      })
    } else if (e.detail.value.sdhspr == null) {
      wx.showModal({
        title: '提示',
        content: '请选择房屋特点 :(',
        showCancel: false
      })
    } else if (e.detail.value.htype == null) {
      wx.showModal({
        title: '提示',
        content: '请选择房屋类型 :(',
        showCancel: false
      })
    } else if (e.detail.value.orientation == null) {
      wx.showModal({
        title: '提示',
        content: '请选择房屋朝向 :(',
        showCancel: false
      })
    } else if (that.data.files.length == 0) {
      wx.showModal({
        title: '提示',
        content: '请上传室内图和户型图 :(',
        showCancel: false
      })
    } else {


      console.log(e.detail.value.community);
      console.log(e.detail.value.area);
      console.log(e.detail.value.house_type);
      console.log(e.detail.value.selling_price);
      console.log(e.detail.value.introduce);
      console.log(e.detail.value.sdhspr);
      console.log(e.detail.value.htype);
      console.log(e.detail.value.orientation);
      console.log(e.detail.value.cname);
      console.log(e.detail.value.phone);
      console.log(that.data.files);

      // 友好的用户体验开始
      wx.showLoading({
        title: '正在提交',
      })

      // 请求卖房数据
      wx.request({
        url: App.data.domain + '/sellHouseInfo/add',
        data: {
          community: e.detail.value.community,
          area: e.detail.value.area,
          house_type: e.detail.value.house_type,
          selling_price: e.detail.value.selling_price,
          introduce: e.detail.value.introduce,
          sdhspr: e.detail.value.sdhspr,
          htype: e.detail.value.htype,
          orientation: e.detail.value.orientation,
          cname: e.detail.value.cname,
          phone: e.detail.value.phone,
          files: that.data.files
        },
        method: 'POST',
        header: {
          'content-type': 'application/x-www-form-urlencoded'
        },
        success: function (res) {
          console.log(res.data);

          // if 
          if (res.data.code == 200) {

            // 提示
            wx.showModal({
              title: '提交成功',
              content: res.data.msg,
              showCancel: false,
              success: function (res) {
                if (res.confirm) {
                  wx.redirectTo({
                    url: '/pages/salehouse/salehouse'
                  })
                }
              }
            })

          } else {

            // 提示
            wx.showModal({
              title: '提交失败',
              content: res.data.msg,
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

    }

    return false;

    //console.log('form发生了submit事件，携带数据为：', e.detail.value)
  }

})