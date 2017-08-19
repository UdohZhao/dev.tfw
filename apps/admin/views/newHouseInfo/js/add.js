$(function(){

  // jQueryForm提交表单
  $('#newHouseInfoForm').submit(function() {
   $(this).ajaxSubmit({
      dataType: "JSON",
      success: function(res){
        // res
        if (res.error == 0) {
          window.location.href = "/admin/newHouseMain/add/nhcid/"+res.msg;
        } else if (res.error == 201) {
          swal("提交失败", res.msg, "error");
        } else {
          swal("提交失败", res.msg, "error");
        }
      },
      error: function(e){
        console.log(e);
        swal("未知错误", "请尝试刷新页面后重试 :(", "error");
      }
   });
   return false; //阻止表单默认提交
  });

})

// 追加一栏
function addColumn(){
  var html = '';
  html += '<div class="col-md-6 form-group">'+
          '<input type="text" class="form-control" name="k[]" placeholder="请输入键名">'+
          '</div>'+
          '<div class="col-md-6 form-group">'+
          '<input type="text" class="form-control" name="v[]" placeholder="请输入键值">'+
          '</div>';
  $("#column").append(html);
}
