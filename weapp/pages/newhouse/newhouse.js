// newhouse.js
var app=getApp();
Page({
  data: {
    //首页九宫格type
    linktype:'',
    //搜索
    inputShowed: false,
    inputVal: "",
    //navbar
    data: [],//数据
    house_stye: 0,
    house_are: 0,
    house_type: 0,//户型
    house_style: 0,//风格
    house_area: 0,//面积
    tabTxt: ['区域', '价格','户型','产权类型', '面积'],//tab文案
    tab: [true, true, true, true, true],
    page: 1,//当前页码
    dataNull: true,
    completeList:true,
    page_count:'',
    searchVal : ''
  },

  formSubmit: function (e) {
    console.log('form发生了submit事件，携带数据为：', e.detail.value)
  },

  search_button:function(){
    wx:wx.navigateTo({
      url: '../search/searchlist/searchlist',
    })
  },
  onReady: function () {
    //初始化数据
    var self = this;
    self.getFilter();
    // wx.getNetworkType({
    //     success: function(res) {
    //         var networkType = res.networkType // 返回网络类型2g，3g，4g，wifi
    //         // console.log(networkType);
    //     }
    // })
  },
  // 选项卡
  filterTab: function (e) {
    var data = [true, true, true, true, true], index = e.currentTarget.dataset.index;
    console.log(index)
    data[index] = !this.data.tab[index];
    this.setData({
      tab: data
    })
  },
  // 获取筛选项
  getFilter: function () {
    var self = this;
    wx.request({
      method: 'POST',
      url: app.data.domain + '/newhouse/demo',
      data: {},
      header: {
        'Content-Type': 'application/x-www-form-urlencoded'
      },
      success: function (res) {
        console.log(res)
        self.getData();
        self.setData({
          filterList: res.data.data
        });
      },
      fail: function () {
        console.log('error!!!!!!!!!!!!!!')
      }
    })
  },
  //筛选项点击操作
  filter: function (e) {
    var self = this, id = e.currentTarget.dataset.id, txt = e.currentTarget.dataset.txt, tabTxt = this.data.tabTxt;
    switch (e.currentTarget.dataset.index) {
      case '0':
        tabTxt[0] = txt;
        self.setData({
          page: 1,
          data: [],
          tab: [true, true, true, true, true],
          tabTxt: tabTxt,
          house_type: id
        });
        break;
      case '1':
        tabTxt[1] = txt;
        self.setData({
          page: 1,
          data: [],
          tab: [true, true, true, true, true],
          tabTxt: tabTxt,
          house_style: id
        });
        break;
      case '2':
        tabTxt[2] = txt;
        self.setData({
          page: 1,
          data: [],
          tab: [true, true, true, true, true],
          tabTxt: tabTxt,
          house_area: id
        });
        break;
      case '3':
        tabTxt[3] = txt;
        self.setData({
          page: 1,
          data: [],
          tab: [true, true, true, true, true],
          tabTxt: tabTxt,
          house_style: id
        });
        break;
      case '4':
        tabTxt[4] = txt;
        self.setData({
          page: 1,
          data: [],
          tab: [true, true, true, true, true],
          tabTxt: tabTxt,
          house_area: id
        });
        break;
    }
    //数据筛选
    self.getData();
  },
  //数据处理
  dataFormat: function (d) {
    console.log(d.data.data.length)
    if (d.data.status == "1") {
      if (d.data.data) {
        var datas = this.data.data.concat(d.data.data), flag = d.data.data.length < 10;
        this.setData({
          data: datas,
          dataNull: true
        });

      } else {
        this.setData({
          dataNull: false
        });
      }
    } else {
      console.log('接口异常！')
    }
    wx.hideToast();
  },
  // //加载数据
  getData: function (callback) {
    var self = this;
    wx.showToast({
      title: '加载中...',
      icon: 'loading',
      duration: 10000
    });
    wx.request({
      method : 'POST',
      url: app.data.domain + '/newhouse/newhouse',
      data: {
        page: self.data.page,
        condition: self.data.tabTxt,
        searchVal: self.data.searchVal,
      },
      header: {
        'Content-Type': 'application/x-www-form-urlencoded'
      },
      success: function (res) {
        console.log(res)
        self.dataFormat(res);
        self.setData({
          page_count: res.data.totalpage,
          data : res.data.data
        })
      },
      fail: function () {
        console.log('error!!!!!!!!!!!!!!')
      },
    })
  },
  // //加载更多
  lower: function (res) {
    var self = this;
    var page_size = 5;
    self.data.page++;
    console.log(self.data.page)
    if (self.data.page <= self.data.page_count){
      self.getData(function (d) {
        self.dataFormat(d)
        });
    }else{
        self.setData({
          completeList: false,
        })
    }
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
    var self=this;
    self.setData({
      searchVal: e.detail.value,
    })
    self.getData();
  },
  //navbar
  onLoad: function (options) {
    this.setData({
      linktype: options.linktype
    })
  },
});