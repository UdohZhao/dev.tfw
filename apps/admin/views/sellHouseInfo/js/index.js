
//已读
function shInfo(id){
          // Ajax
          $.ajax({
            type: "GET",
            url: "/admin/sellHouseInfo/statu/id/"+id,
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
}