$(function(){

  // 验证登录表单
  $("#newHouseCatalogForm").validate({
      focusInvalid: true,
      rules: {
        cid: {
          required: true,
          remote: {
              url: "/admin/city/getCity/pid/"+$("input[name='pid']").val(),
              type: "post",
              dataType: "json",
              data: {
                  cid: function() {
                      return $("input[name='cid']").val();
                  }
              },
              error: function(e){
                console.log(e);
              }
          }
        },
        title: {
          required: true
        },
        community: {
          required: true
        },
        price: {
          required: true,
          digits: true
        },
        show_price: {
          required: true
        },
        trait: {
          required: true
        },
        area: {
          required: true,
          digits: true
        },
        address: {
          required: true
        },
        prtype: {
          required: true
        },
        house_type: {
          required: true
        }
      },
      messages: {
        cid: {
          required: "<span style='color:red;'>关联城市名称不能为空 :(</span>",
          remote: "<span style='color:red;'>没有匹配到该城市，目前仅支持北京下级区县 :(</span>"
        },
        title: {
          required: "<span style='color:red;'>标题不能为空 :(</span>"
        },
        community: {
          required: "<span style='color:red;'>小区不能为空 :(</span>"
        },
        price: {
          required: "<span style='color:red;'>价格不能为空 :(</span>",
          digits: "<span style='color:red;'>必须为整数 :(</span>"
        },
        show_price: {
          required: "<span style='color:red;'>展示价格不能为空 :(</span>"
        },
        trait: {
          required: "<span style='color:red;'>特点不能为空 :(</span>"
        },
        area: {
          required: "<span style='color:red;'>面积不能为空 :(</span>",
          digits: "<span style='color:red;'>必须为整数 :(</span>"
        },
        address: {
          required: "<span style='color:red;'>地址不能为空 :(</span>"
        },
        prtype: {
          required: "<span style='color:red;'>产权类型不能为空 :(</span>"
        },
        house_type: {
          required: "<span style='color:red;'>房屋类型不能为空 :(</span>"
        }
      },
      submitHandler: function(form){
        // 获取htype，ptype选中的值
        var htype = new Array();
        var ptype = new Array();
        $.each($("#htype:checked"),function(){
              htype.push($(this).val());
        });
        $.each($("#ptype:checked"),function(){
              ptype.push($(this).val());
        });
        // if
        if (htype < 1 || ptype < 1) {
          swal("拒绝提交", "请勾选户型和物业类型 :(", "error");
        } else {
          $(form).ajaxSubmit({
              dataType:"json",
              success:function(res){
                // res
                if (res.error == 0) {
                  window.location.href = "/admin/newHouseInfo/add/nhcid/"+res.msg;
                } else if (res.error == 201) {
                  swal("提交失败", res.msg, "error");
                } else if (res.error == 202) {
                  swal("提交失败", res.msg, "error");
                } else if (res.error == 401) {
                  swal("提交成功", "受影响的操作 :)", "success");
                  setTimeout("window.location.href = document.referrer;",2000);
                } else {
                  swal("提交失败", "请尝试刷新页面后重试 :(", "error");
                }
              },
              error:function(e){
                console.log(e);
                swal("未知错误", "请尝试刷新页面后重试 :(", "error");
              }
          });
        }
      }
  });

});

// 模糊搜索城市名称
function getCity(){
  // search
  var search = $("input[name='search']").val();
  if (search == false) {
    sweetAlert("拒绝提交", "城市名称不能为空 :(", "error");
  } else {
    // Ajax
    $.ajax({
      type: "POST",
      url: "/admin/city/getCity",
      data: {search:search},
      dataType: "JSON",
      success: function(res){
        console.log(res);
      },
      error: function(e){
        console.log(e);
        sweetAlert("未知错误", "请尝试刷新页面后重试 :(", "error");
      }
    });
  }


}