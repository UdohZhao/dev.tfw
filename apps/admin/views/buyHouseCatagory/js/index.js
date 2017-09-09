// 修改
function edit(id){
    window.location.href = "/admin/buyHouseCatagory/add/id/"+id;
}

// flag
function flag(id,status){
    var title;
    var text;
    // status
    if (status == 1) {
        title = "确认隐藏该房类别吗？";
        text = "隐藏后该房类别将不再显示 :(";
    } else {
        title = "确认显示该房类别吗？";
        text = "显示后该房类别将可正常显示 :)";
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
                    url: "/admin/buyHouseCatagory/flag/id/"+id,
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
        url: "/admin/buyHouseCatagory/del/id/"+id,
        dataType: "JSON",
        
        success: function(res){
          // res
          if (res === true) {
            swal("提交成功", "当前操作已发生改变 :)", "success");
            setTimeout("window.location.reload();",2000);
          } else if (res === false) {
            swal("提交失败", "请先删除其下级 :(", "error");
          } else {
            swal("提交失败", "请先删除其下级 :(", "error");
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

//添加下一级
//当前选择的id 即父级id
function add(id){
   window.location.href='http://'+window.location.host+'/admin/buyHouseCatagory/add/pid/'+id;
}

//查看下一级
//当前选择的id 即父级id
function view_next(id){
    window.location.href='/admin/buyHouseCatagory/index/id/'+id;
    
}

//添加文章
function add_article(id,cname){
    window.location.href='http://'+window.location.host+'/admin/buyHouseCatagory/add_article?id='+id+'&cname='+cname;
}

//查看文章
function show_article_list(id){
    window.location.href='http://'+window.location.host+'/admin/buyHouseCatagory/article_list/id/'+id;
}