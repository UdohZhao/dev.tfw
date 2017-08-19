$(function(){

  // 验证登录表单
  $("#cityForm").validate({
      focusInvalid: true,
      rules: {
        cname: {
          required: true
        },
        sort: {
          required: true,
          digits: true
        }
      },
      messages: {
        cname: {
          required: "<span style='color:red;'>城市名称不能为空 :(</span>"
        },
        sort: {
          required: "<span style='color:red;'>排序不能为空 :(</span>",
          digits: "<span style='color:red;'>必须输入整数 :(</span>"
        }
      },
      submitHandler: function(form){
        $(form).ajaxSubmit({
            dataType:"json",
            success:function(res){
              // res
              if (res === true) {
                swal("提交成功", "即将跳转到城市列表 :)", "success");
                window.setTimeout("window.location.href='/admin/city/index'",2000);
              } else if (res === false) {
                swal("提交失败", "请尝试刷新页面后重试 :(", "error");
              } else {
                swal("提交失败", "检测到该名称已经存在 :(", "error");
              }
            },
            error:function(e){
              console.log(e);
              swal("未知错误", "请尝试刷新页面后重试 :(", "error");
            }
        });
      }
  });

})