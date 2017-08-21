$(function(){

    // 验证添加房类别表单
    $("#buyHouseCatagory").validate({
        focusInvalid: true,
        rules: {
            title: {
                required: true
            }
        },
        messages: {
            title: {
                required: "<span style='color:red;'>购房百科标题不能为空 :(</span>"
            }
        },
        submitHandler: function(form){
            // 头像
            var html = ue.getContent();
            if(html==''){
                swal("拒绝提交", '内容不能为空', "error");
                return false;
            } else {
                $(form).ajaxSubmit({
                    dataType:"json",
                    success:function(res){
                        // res
                        if (res === true) {
                            swal("提交成功", "即将跳转到购房百科列表 :)", "success");
                            window.setTimeout("window.location.href='/admin/buyHouseCatagory/index'",2000);
                        } else if (res === false) {
                            swal("提交失败", "请尝试刷新页面后重试 :(", "error");
                        } else if (res.error === 201) {
                            swal("保存成功", "即将跳转到列表页面 :)", "success");
                            window.setTimeout("window.location.href=document.referrer",2000);
                        } else if (res.error === 401) {
                            swal("提交失败", "请尝试刷新页面后重试 :(", "error");
                        } else {
                            swal("提交失败", res, "error");
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

})


