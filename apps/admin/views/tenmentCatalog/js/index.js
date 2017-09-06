
// 租房详细信息
function nhInfo(id){
  window.location.href = "/admin/tenmentInfo/index/tcid/"+id;
}
//修改
function edit(id){
  window.location.href = "/admin/tenmentCatalog/add/id/"+id;
}
// flag
function flag(id,type){
  var title;
  var text;
  // status
  if (type == 1) {
    title = "确认隐藏该内容吗？";
    text = "隐藏后该用户将不在前台显示 :(";
  } else {
    title = "确认展示该内容吗？";
    text = "展示后该用户将可正常显示 :)";
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
        url: "/admin/adminUser/flae/id/"+id,
        data: {type:type},
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
                    url: "/admin/tenmentCatalog/del/id/"+id,
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
//提交审核
function commit_status(id){
  swal({
    title: '确定要提交吗？',
    text: '提交后将不可更改 :(',
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
                url: "/admin/tenmentCatalog/commit_status/id/"+id+'/status/1',
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
// //未通过
// function commit_pass(id){
//           // Ajax
//           $.ajax({
//             type: "GET",
//             url: "/admin/tenmentCatalog/commit_pass/id/"+id+'/status/2',
//             dataType: "JSON",
//             success: function(res){
//               // res
//               if (res === true) {
//                 swal("提交成功", "当前操作已发生改变 :)", "success");
//                 setTimeout("window.location.reload();",2000);
//               }else if(res.error == 400){
//                 swal("您没有该板块的权限", "即将返回页面 :(", "error");
//                 setTimeout("window.location.reload();",2000);
//               }
//               else {
//                 swal("提交失败", "请刷新页面后重试 :(", "error");
//               }
//             },
//             error: function(e){
//               console.log(e);
//               swal("未知错误", "请刷新页面后重试 :(", "error");
//             }
//           });
// }

// //可通过
// function commit_adopt(id){
//           // Ajax
//           $.ajax({
//             type: "GET",
//             url: "/admin/tenmentCatalog/commit_adopt/id/"+id+'/status/3',

//             dataType: "JSON",
//             success: function(res){
//               // res
//               if (res === true) {
//                 swal("提交成功", "当前操作已发生改变 :)", "success");
//                 setTimeout("window.location.reload();",2000);
//               }else if(res.error == 400){
//                 swal("您没有该板块的权限", "即将返回页面 :(", "error");
//                 setTimeout("window.location.reload();",2000);
//               }
//               else {
//                 swal("提交失败", "请刷新页面后重试 :(", "error");
//               }
//             },
//             error: function(e){
//               console.log(e);
//               swal("未知错误", "请刷新页面后重试 :(", "error");
//             }
//           });
// }
