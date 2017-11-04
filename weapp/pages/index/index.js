// index.js
var App = getApp(); // 实例化APP
Page({
  data: {
    domain: App.data.domain,
    linktype : '',//房屋链接类型0,1,2,3
    totalpage:'',
    status:true,
    page:1,
    hidden: true,
    completedata:true,//到底了
    //地点选择
    selectPerson: true,
    firstPerson: '北京',
    selectArea: false,
    //搜索
    inputShowed: false,
    inputVal: "",
    //九宫格
    grids: [],
    //购房百科
    my_encyclopedia: [],
    //金融贷款
    loan : [],
    //最新房源
    my_availability:[],
    //实时搜索
    search_list:[]
  },
  //获取房屋type
  gettype:function(e){
    var aa = e.currentTarget.dataset.linktype
    this.setData({
      linktype: aa
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
  // 城市切换
  mySelect: function (e) {
    var that = this;
    that.setData({
      firstPerson: e.target.dataset.me,
      selectPerson: true,
      selectArea: false,
    })
  },
  // 点击城市事件
  openToast: function () {

    var that = this;

    wx.showModal({
      title: '提示',
      content: '该地区暂未开放 :(',
      showCancel: false
    })

    that.setData({
      selectArea: false,
      selectPerson: true,
    })

  },
  onLoad: function (options) {
    
    var that = this;

    // 友好的用户体验开始
    wx.showLoading({
      title: '加载中',
    })

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
        
          that.setData({
            cityData: res.data.data.cityData,
            hcData: res.data.data.hcData,
            nhcData: res.data.data.nhcData
          });

          console.log(that.data.cityData);
          console.log(that.data.hcData);
          console.log(that.data.nhcData);

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
  fetchImgListDate: function (data) {
    var self = this;
    self.setData({
      hidden: false
    });
    if (!data) data = {};
    if (!data.page) data.page = 1;
    if (data.page === 1) {
      self.setData({
        my_availability: []
      });
    }
    wx.request({
      method: "POST",
      url: App.data.domain + '/index/demo',
      data: {
        "fromPageId": 0,
        "pageSize": 5,
        "viewUserId": '',
        "page": self.data.page
      },
      header: {
        'Content-Type': 'application/x-www-form-urlencoded'
      },
      success: function (res) {
        // var contentObj = [];
        console.log(res.data)
        var aa=res.data.data
        console.log(aa)
        for (var i in aa) {
            self.data.my_availability.push({
              slideshow: aa[i].slideshow,
              community: aa[i].community,
              address: aa[i].address,
              show_price: aa[i].show_price,
              trait: aa[i].trait,
              title: aa[i].title
            });
        }
          self.setData({
            totalpage: res.data.total_page,
            my_availability: self.data.my_availability
          })
        //   self.data.postsList = contentObj
        setTimeout(function () {
          self.setData({
            hidden: true
          });
        }, 500);
      }
    })

  },
  lower: function (e) {
    var self = this;
    console.log(self.data.page + 1)
    if (self.data.page+1 <= self.data.totalpage) {
      self.setData({
        page: self.data.page + 1
      });
      self.fetchImgListDate({ page: self.data.page });
    } else {
      self.setData({
        completedata: false,
        page: self.data.page + 1
      });
    }
  },
  eachHouse: function (e) {
    var id = e.currentTarget.dataset.id;
    var link = "../housedetails/housedetails?eachId=" + id
    wx.navigateTo({
      url: link
    })
  },
  onReady: function () {
    // 页面渲染完成
  },
  onShow: function () {
    // 页面显示

    // demo 
    // wx.request({
    //   url: app.data.domain+'/index/demo', //仅为示例，并非真实的接口地址
    //   method: 'POST',
    //   data: {},
    //   header: {
    //     'content-type': 'application/x-www-form-urlencoded'
    //   },
    //   success: function(res) {
    //     console.log(res.data)
    //     console.log(res.data.code)

    //     // if 
    //     if (res.data.code == 200) {


    //       // coding ....

    //     } else {

    //       alert(res.data.msg);

    //     }

    //   }
    // })


  },
  onHide: function () {
    // 页面隐藏
  },
  onUnload: function () {
    // 页面关闭
  },
  //搜索
  showInput: function () {
    this.setData({
      inputShowed: true
    });
  },
  hideInput: function () {
    this.setData({
      inputVal: "",
      inputShowed: false
    });
  },
  clearInput: function () {
    this.setData({
      inputVal: ""
    });
  },
  inputTyping: function (e) {
    this.setData({
      inputVal: e.detail.value
    });
  },
  
  /**
   * 去往房屋详细
   */
  gotoHd: function (e) {

    var that = this;

    // 获取房屋id，类型
    console.log(e.currentTarget.dataset.id);
    console.log(e.currentTarget.dataset.type);

    wx.navigateTo({
      url: '/pages/housedetails/housedetails?id=' + e.currentTarget.dataset.id + '&hctype=' + e.currentTarget.dataset.type
    })

  },

  /**
   * 去往房屋条目
   */
  gotoHouse: function(e){

    //url = "/pages/newhouse/newhouse?hcid={{v.id}}&hctype=1"

    // 获取房屋类别主键id，房屋类别
    console.log(e.currentTarget.dataset.id);
    console.log(e.currentTarget.dataset.type);

    // 3 跳转到卖房页面
    var url;
    if (e.currentTarget.dataset.type == 3) {
      url = "/pages/salehouse/salehouse?hcid=" + e.currentTarget.dataset.id + "&hctype=" + e.currentTarget.dataset.type;
    } else {
      url = "/pages/newhouse/newhouse?hcid=" + e.currentTarget.dataset.id + "&hctype=" + e.currentTarget.dataset.type;
    }
    
    wx.navigateTo({
      url: url
    })

  }

})