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
        cname: {
          required: true
        },
        phone: {
          required: true
        },
        type: {
          required: true,
          digits: true
        }  
    },
      messages: {
        cname: {
          required: "<span style='color:red;'>姓名不能为空 :(</span>",
         
        },
        phone: {
          required: "<span style='color:red;'>电话不能为空 :(</span>"
        },
        type: {
          required: "<span style='color:red;'>贷款类型不能为空 :(</span>"
        }     
      },
      submitHandler: function(form){
        // 获取htype，ptype选中的值
        var dtype = new Array();
        $.each($("#dtype:checked"),function(){
              htype.push($(this).val());
        });
       
        // if
        if (dtype < 1 ) {
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