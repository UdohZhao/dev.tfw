
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
        url: "/admin/about/del/id/"+id,
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
// 修改密码
function ePass(id,content){
  // 动态赋值
  console.log( $("#container").eq(0).eq(0));
  $("#container").eq(0).attr('value',content);
  $("#ePassForm").attr("action","/admin/adminUser/ePass/id/"+id);
  // modal
  $('#ePassModal').modal({
    backdrop: 'static',
    keyboard: false
  });
}