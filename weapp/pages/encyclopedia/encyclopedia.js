// encyclopedia.js
var app = getApp(); // 实例化APP
Page({

  /**
   * 页面的初始数据
   */
  data: {
    domain: app.data.domain,
    id:"",
    hidden: true,
    hasMore: true,
    hasRefesh: false
  },
  onLoad: function (options) {

    var that = this;

    // 获取pid,类型
    console.log(options.pid);
    console.log(options.type);
    
    that.setData({
      pid: options.pid,
      hecType: options.type
    })

    // 友好的用户体验开始
    wx.showLoading({
      title: '加载中',
    })
    wx.request({
      method: "GET",
      url: app.data.domain + '/houseEncyclopediaCategory/sel?pid=' + that.data.pid   ,
      data: {},
      header: {
        'Content-Type': 'application/json'
      },
      success: function (res) {
        console.log(res.data)

        if (res.data.code == 200) {

          that.setData({
            hecData: res.data.data
          })

          console.log(that.data.hecData);

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
   * 去往下级
   */
  gotoLevel: function(e){

    var that = this;

    // 获取顶级主键id,类型
    console.log(e.currentTarget.dataset.id);
    console.log(that.data.hecType);
    
    // 如果hecType等于0的话请求下级，等于1的话跳转页面

    if (that.data.hecType == 1) {
       // codeing .. 
      var link = '../encyclopediaes/encyclopediaes?id=' + e.currentTarget.dataset.id;
      wx.navigateTo({
        url: link
      })
       console.log('跳转页面.');
    } else {    
      
      // 友好的用户体验开始
      wx.showLoading({
        title: '加载中',
      })
      wx.request({
        method: "GET",
        url: app.data.domain + '/houseEncyclopediaCategory/sel?pid=' + e.currentTarget.dataset.id ,
        data: {},
        header: {
          'Content-Type': 'application/json'
        },
        success: function (res) {
          console.log(res.data)
          if (res.data.code == 200) {
            that.setData({
              hecData: res.data.data,
              hecType: 1
            })
            console.log(that.data.hecData);
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

      })
      // 友好的用户体验结束
      setTimeout(function () {
        wx.hideLoading()
      }, 2000) 
    }
  },
  // //页面滑动到底部
  // loadMore:function() {
  //   var that = this;
  //   that.setData({
  //     hasRefesh: true,
  //   });
  //   if (!this.data.hasMore) return
  //   wx.request({
  //     method: "GET",
  //     url: app.data.domain + '/houseEncyclopediaCategory/sel?pid=' + that.data.pid + '&number=' + (++that.data.page)  ,
  //     data: {},
  //     header: {
  //       'Content-Type': 'application/json'
  //     },
  //     success: function (res) {
  //       console.log(res.data)
  //       if (res.data.code == 200) {
  //         that.setData({
  //           hecData: res.data.data,
  //           hidden: true,
  //           hasRefesh: false,
  //         })

  //         console.log(that.data.hecData);

  //       } else {
  //         // 提示
  //         wx.showModal({
  //           title: '提示',
  //           content: '数据显示异常 :(',
  //           showCancel: false,
  //           success: function (res) {
  //             if (res.confirm) {
  //               wx.reLaunch({
  //                 url: '/pages/index/index'
  //               })
  //             }
  //           }
  //         })
  //       }
  //     },
  //     fail: function (e) {
  //       // 提示
  //       wx.showModal({
  //         title: '提示',
  //         content: '数据显示异常 :(',
  //         showCancel: false,
  //         success: function (res) {
  //           if (res.confirm) {
  //             wx.reLaunch({
  //               url: '/pages/index/index'
  //             })
  //           }
  //         }
  //       })
  //     }

  //   })
  
  // },
    
})