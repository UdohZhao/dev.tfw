// oldhouse.js
Page({
  data: {
    //首页九宫格id
    viewId: "",
    //搜索
    inputShowed: false,
    inputVal: "",
    //navbar
    // tabs1: ["区域", "价格", "户型", "产权类型", "面积"],
    // tabs2: ["区域", "价格", "房型", "类型", "装修"],
    // activeIndex: 99,
    // activeBox: 0,
    // activeBox: 0,
    // sliderOffset: 0,
    data: [],//数据
    house_type: 0,//户型
    house_style: 0,//风格
    house_area: 0,//面积
    tabTxt: ['户型', '风格', '面积'],//tab文案
    tab: [true, true, true],
    disabled: false,//加载更多按钮状态
    page: 1,//当前页码
    hasMore: false,//加载更多按钮
    moreTxt: '点击加载更多',
    dataNull: true,
    completeList: true,
    page_count: '',

    //区域选择
    checkboxItems1: [
      { name: '不限' },
      { name: '东城', value: '0', },
      { name: '西城', value: '1', },
      { name: '朝阳', value: '2', },
      { name: '海淀', value: '3', },
      { name: '丰台', value: '4', },
      { name: '石景山', value: '5' },
      { name: '通州', value: '6', },
      { name: '大兴', value: '7', },
      { name: '怀柔', value: '8', },
      { name: '平谷', value: '9', },
      { name: '顺义', value: '10', },
      { name: '密云', value: '11' },
      { name: '延庆', value: '12', },
      { name: '房山', value: '13', },
      { name: '昌平', value: '14', },
      { name: '门头沟', value: '15', },
      { name: '固安', value: '16', },
      { name: '廊坊', value: '17' },
      { name: '香河', value: '18', },
      { name: '燕郊', value: '19', },
      { name: '涿州', value: '20', },
      { name: '雄安', value: '21', }
    ],
    //户型选择
    huxing_checkboxItems1: [
      { name: '不限' },
      { name: '一室', value: '0', },
      { name: '二室', value: '1', },
      { name: '三室', value: '2', },
      { name: '四室', value: '3', },
      { name: '五室以上', value: '4', }
    ],
    //价格选择
    radioItems1: [
      { name: '不限', value: '0' },
      { name: '6千以下', value: '1', },
      { name: '6千~1万', value: '2' },
      { name: '1~1.5万', value: '3', },
      { name: '1.5~2万', value: '4' },
      { name: '2~3万', value: '5', },
      { name: '3~4万', value: '6' },
      { name: '4~6万', value: '7', },
      { name: '6万以上', value: '8', }
    ],
    //面积选择
    area_radioItems1: [
      { name: '不限', value: '0' },
      { name: '60以下', value: '1', },
      { name: '60-80', value: '2' },
      { name: '80-100', value: '3', },
      { name: '100-120', value: '4' },
      { name: '120-150', value: '5', },
      { name: '150-200', value: '6' },
      { name: '200以上', value: '7', }
    ],
    //产权类型选择
    property_radioItems1: [
      { name: '不限', value: '0' },
      { name: '回迁房', value: '1', },
      { name: '军产房', value: '2' },
      { name: '法拍房', value: '3', },
      { name: '福利房', value: '4' },
      { name: '小产权房', value: '5', },
      { name: '其他', value: '6' }
    ],
    //房子列表
    my_availability1: [
      {
        "image": "../../images/房子.png",
        "community": "象屿两江御府1",
        "address": "北碚-照母山",
        "trait": [
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
        "price": "310万元/套起"
      },
      {
        "image": "../../images/房子.png",
        "community": "象屿两江御府1",
        "address": "北碚-照母山",
        "trait": [
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
        "price": "310万元/套起"
      }
    ],
  },
  search_button: function () {
    wx: wx.navigateTo({
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
    var data = [true, true, true], index = e.currentTarget.dataset.index;
    data[index] = !this.data.tab[index];
    this.setData({
      tab: data
    })
  },
  // 获取筛选项
  getFilter: function () {
    var self = this;
    wx.request({
      url: "https://api.jiajuol.com/partner/weixin/common/condition_list.php",
      data: {
        type: 'housetype-style-area'
      },
      header: {
        'Content-Type': 'application/json'
      },
      success: function (res) {
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
          tab: [true, true, true],
          tabTxt: tabTxt,
          house_type: id
        });
        break;
      case '1':
        tabTxt[1] = txt;
        self.setData({
          page: 1,
          data: [],
          tab: [true, true, true],
          tabTxt: tabTxt,
          house_style: id
        });
        break;
      case '2':
        tabTxt[2] = txt;
        self.setData({
          page: 1,
          data: [],
          tab: [true, true, true],
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
    if (d.data.status == "1") {
      if (d.data.data) {
        var datas = this.data.data.concat(d.data.data), flag = d.data.data.length < 10;
        this.setData({
          data: datas,
          disabled: flag ? true : false,
          moreTxt: flag ? "已加载全部数据" : "点击加载更多",
          hasMore: true,
          dataNull: true
        });

      } else {
        this.setData({
          hasMore: false,
          dataNull: false
        });
      }
    } else {
      console.log('接口异常！')
    }
    wx.hideToast();
  },
  //加载数据
  getData: function (callback) {
    var self = this;
    wx.showToast({
      title: '加载中...',
      icon: 'loading',
      duration: 10000
    });
    wx.request({
      url: 'https://api.jiajuol.com/partner/weixin/subject/subject_list.php',
      data: {
        page: self.data.page,
        house_type: self.data.house_type,
        house_style: self.data.house_style,
        house_area: self.data.house_area
      },
      header: {
        'Content-Type': 'application/json'
      },
      success: function (res) {
        self.dataFormat(res);
        self.setData({
          page_count: res.data.page_count
        })
      },
      fail: function () {
        console.log('error!!!!!!!!!!!!!!')
      },
    })
  },
  //加载更多
  lower: function (res) {
    var self = this;
    var page_size = 5;
    self.data.page++;
    console.log(self.data.page)
    if (self.data.page <= self.data.page_count) {
      self.getData(function (d) {
        self.dataFormat(d)
      });
    } else {
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
    this.setData({
      inputVal: e.detail.value
    });
  },
  //navbar
  onLoad: function (options) {
    this.setData({
      viewId: options.viewId,
    })
  },
  tabClick: function (e) {
    this.setData({
      sliderOffset: e.currentTarget.offsetLeft,
      activeIndex: e.currentTarget.id,
      activeBox: 1
    });
  },
  //确定选择
  confirmBtn: function () {
    this.setData({
      activeIndex: 99,
      activeBox: 0
    })
  }
});