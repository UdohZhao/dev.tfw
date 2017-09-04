// salehouse.js
Page({

  /**
   * 页面的初始数据
   */
  data: {
    array: [
      ["一室","二室","三室","四室","五室","五室以上"],
      ["一厅","二厅","三厅"],
      ["一卫","二卫","三卫"]
    ],
    index: [0,0,0],
    datastatus:0
  },
  bindPickerChange: function (e) {
    console.log('picker发送选择改变，携带值为', e.detail.value)
    this.setData({
      index: e.detail.value,
      datastatus:1
    })
  },
  formSubmit: function (e) {
    console.log('form发生了submit事件，携带数据为：', e.detail.value)
  },
})