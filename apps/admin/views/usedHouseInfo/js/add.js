$(function(){

    // 验证登录表单
    $("#usedHouseInfoForm").validate({
        focusInvalid: true,
        rules: {
            tage: {
                required: true
            },
            community: {
                required: true
            },
            unit_price: {
                required: true,
                digits: true
            },

            orientation: {
                required: true
            },
            type: {
                required: true
            },
            upfitter: {
                required: true
            },
            era: {
                required: true
            },
            rail_transit: {
                required: true
            }
        },
        messages: {
            tage: {
                required: "<span style='color:red;'>楼层不能为空 :(</span>"
            },
            community: {
                required: "<span style='color:red;'>小区不能为空 :(</span>"
            },
            unit_price: {
                required: "<span style='color:red;'>单价不能为空 :(</span>",
                digits: "<span style='color:red;'>必须为整数 :(</span>"
            },
            orientation: {
                required: "<span style='color:red;'>朝向不能为空 :(</span>"
            },
            type: {
                required: "<span style='color:red;'>类型不能为空 :(</span>"
            },
            upfitter: {
                required: "<span style='color:red;'>装修不能为空 :(</span>"
            },
            era: {
                required: "<span style='color:red;'>年代不能为空 :(</span>"
            },
            rail_transit: {
                required: "<span style='color:red;'>轨交不能为空 :(</span>"
            }
        },
        submitHandler: function(form){
            // if
            var html = ue.getContent();
            if(html==''){
                swal("拒绝提交", '核心卖点不能为空', "error");
                return false;
            } else {
                $(form).ajaxSubmit({
                    dataType:"json",
                    success:function(res){
                        // res
                        if (res.error == 0) {
                            swal("提交成功", '', "success");
                            window.location.href='http://'+window.location.host+'/admin/usedHouseCatalog/index';
                        } else if (res.error == 201) {
                            swal("提交失败", res.msg, "error");
                        } else if (res.error == 202) {
                            swal("提交失败", res.msg, "error");
                        } else if (res.error == 401) {
                            swal("提交成功", "受影响的操作 :)", "success");
                            setTimeout("window.location.href = document.referrer;",2000);
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
        }
    });

});
