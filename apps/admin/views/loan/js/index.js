function update_info(id){
    window.location.href='/admin/loan/add?id='+id;
}
  //已读
function status(id){
           swal({
            title: "确认改为已读吗？",
            text: "已读后将不可返回 :(",
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
            url: "/admin/loan/statu/id/"+id,
            dataType: "JSON",
            success: function(res){
              // res
              if (res === true) {
                swal("提交成功", "当前操作已发生改变 :)", "success");
                setTimeout("window.location.reload();",2000);
              }else if(res.error == 400){
                swal("您没有该板块的权限", "即将返回页面 :(", "error");
                setTimeout("window.location.reload();",2000);
              }
              else {
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
function del_info(id){
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
        url: "/admin/loan/del_info/id/"+id,
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