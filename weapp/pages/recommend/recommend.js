// recommend.js
Page({

  /**
   * 页面的初始数据
   */
  data: {
      //最新房源
      my_availability: [
        {
          "image": "../../images/房子.png",
          "status": "期房",
          "title": "象屿两江御府",//标题
          "address": "北碚-照母山",//地址
          "introduce": [//特点
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
          "money": "310",//展示价格
          "money_unit": "万元/套起"
        },
        {
          "image": "../../images/房子.png",
          "status": "期房",
          "title": "约克郡",
          "address": "北碚-照母山",
          "introduce": [
            {
              "name": "低总价"
            },
            {
              "name": "湖景"
            },
            {
              "name": "大型社区"
            },
            {
              "name": "带幼儿园"
            }
          ],
          "money": "489",
          "money_unit": "万元/套起"
        }
      ]
    },
})