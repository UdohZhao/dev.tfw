$(function(){

  // 验证登录表单
  $("#adminUserForm").validate({
      focusInvalid: true,
      rules: {
        username: {
          required: true,
          remote: {
              url: "/admin/adminUser/getUsername",     //后台处理程序
              type: "post",               //数据发送方式
              dataType: "json",           //接受数据格式
              data: {                     //要传递的数据
                  username: function() {
                      return $("#username").val();
                  }
              },
              error: function(e){
                console.log(e);
              }
          }
        },
        password: {
          required: true,
          minlength: 6
        },
        rPassword: {
          required: true,
          minlength: 6,
          equalTo: '#password'
        }
      },
      messages: {
        username: {
          required: "<span style='color:red;'>用户名不能为空 :(</span>",
          remote: "<span style='color:red;'>用户名已经存在 :(</span>"
        },
        password: {
          required: "<span style='color:red;'>密码不能为空 :(</span>",
          minlength: "<span style='color:red;'>密码长度不能小于6个字符 :(</span>"
        },
        rPassword: {
          required: "<span style='color:red;'>确认密码不能为空 :(</span>",
          minlength: "<span style='color:red;'>密码长度不能小于6个字符 :(</span>",
          equalTo: "<span style='color:red;'>两次密码不一致 :(</span>"
        }
      },
      submitHandler: function(form){
        $(form).ajaxSubmit({
            dataType:"json",
            success:function(res){
              // res
              if (res === true) {
                swal("提交成功", "即将跳转到后台用户列表 :)", "success");
                window.setTimeout("window.location.href='/admin/adminUser/index'",2000);
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
  });

})