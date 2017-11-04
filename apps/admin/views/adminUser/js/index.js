$(function(){

  // 验证登录表单
  $("#ePassForm").validate({
      focusInvalid: true,
      rules: {
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
        password: {
          required: "<span style='color:red;'>新密码不能为空 :(</span>",
          minlength: "<span style='color:red;'>新密码长度不能小于6个字符 :(</span>"
        },
        rPassword: {
          required: "<span style='color:red;'>确认新密码不能为空 :(</span>",
          minlength: "<span style='color:red;'>新密码长度不能小于6个字符 :(</span>",
          equalTo: "<span style='color:red;'>两次密码不一致 :(</span>"
        }
      },
      submitHandler: function(form){
        $(form).ajaxSubmit({
            dataType:"json",
            success:function(res){
              // 隐藏Modal
              $('#ePassModal').modal('hide');
              // res
              if (res === true) {
                swal("提交成功", "受影响的操作 :)", "success");
                window.setTimeout("window.location.reload();",2000);
              } else {
                swal("提交失败", "密码不能同上次一样 :(", "error");
              }
            },
            error:function(e){
              console.log(e);
              swal("未知错误", "请尝试刷新页面后重试 :(", "error");
            }
        });
      }
  });

});

// 修改密码
function ePass(id,username){
  // 动态赋值
  $("#username").attr("value",username);
  $("#ePassForm").attr("action","/admin/adminUser/ePass/id/"+id);
  // modal
  $('#ePassModal').modal({
    backdrop: 'static',
    keyboard: false
  });
}

// flag
function flag(id,status){
  var title;
  var text;
  // status
  if (status == 1) {
    title = "确认冻结该用户吗？";
    text = "冻结后该用户将不可登录 :(";
  } else {
    title = "确认解冻该用户吗？";
    text = "解冻后该用户将可正常登录 :)";
  }
  swal({
    title: title,
    text: text,
    type: "warning",
    showCancelButton: true,
    confirmButtonColor: "#DD6B55",
    confirmButtonText: "确定",
    cancelButtonText: "取消",
    closeOnConfirm: false,
    closeOnCancel: false
  },
  function(isConfirm){
    if (isConfirm) {
      // Ajax
      $.ajax({
        type: "POST",
        url: "/admin/adminUser/flag/id/"+id,
        data: {status:status},
        dataType: "JSON",
        success: function(res){
          // res
          if (res === true) {
            swal("提交成功", "当前操作已发生改变 :)", "success");
            setTimeout("window.location.reload();",2000);
          } else {
            swal("提交失败", "请刷新页面后重试 :(", "error");
          }
        },
        error: function(e){
          console.log(e);
          swal("未知错误", "请刷新页面后重试 :(", "error");
        }
      });
    } else {
      swal("取消了", "当前操作未发生改变 :)", "error");
    }
  });
}

// 删除
function del(id){
  swal({
    title: "确认删除吗？",
    text: "删除后将不可恢复 :(",
    type: "warning",
    showCancelButton: true,
    confirmButtonColor: "#DD6B55",
    confirmButtonText: "确定",
    cancelButtonText: "取消",
    closeOnConfirm: false,
    closeOnCancel: false
  },
  function(isConfirm){
    if (isConfirm) {
      // Ajax
      $.ajax({
        type: "GET",
        url: "/admin/adminUser/del/id/"+id,
        dataType: "JSON",
        success: function(res){
          // res
          if (res === true) {
            swal("提交成功", "当前操作已发生改变 :)", "success");
            setTimeout("window.location.reload();",2000);
          } else {
            swal("提交失败", "请刷新页面后重试 :(", "error");
          }
        },
        error: function(e){
          console.log(e);
          swal("未知错误", "请刷新页面后重试 :(", "error");
        }
      });
    } else {
      swal("取消了", "当前操作未发生改变 :)", "error");
    }
  });
}