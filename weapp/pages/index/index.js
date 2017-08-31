// index.js
var app = getApp(); // 实例化APP
Page({
  data: {
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
  openToast: function () {
    wx.showModal({
      title: '提示',
      content: '此地尚未开发，敬请期待',
      success: function (res) {
        if (res.confirm) {
          console.log('用户点击确定')
        }
      }
    });
    this.setData({
      selectArea: false,
      selectPerson: true,
    })
  },
  onLoad: function (options) {
    var that = this;
    const requestTask=wx.request({
      method: "POST",
      url: app.data.domain + '/index/index',
      data: {},
      header: {
        'Content-Type': 'application/x-www-form-urlencoded'
      },
      success: function (res) {
        if(res.data.code==200){
        }else{
          console.log("错误！！")
        }
      }
    })
    that.fetchImgListDate();
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
      url: app.data.domain + '/index/demo',
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

  //房源跳转详细信息
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
  }
})