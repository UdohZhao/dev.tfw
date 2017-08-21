$(function(){

    // 验证添加房类别表单
    $("#houseCategoryForm").validate({
        focusInvalid: true,
        rules: {
            cname: {
                required: true
            },
            sort: {
                required: true,
                digits: true
            }
        },
        messages: {
            cname: {
                required: "<span style='color:red;'>购房百科名称不能为空 :(</span>"
            },
            sort: {
                required: "<span style='color:red;'>排序不能为空 :(</span>",
                required: "<span style='color:red;'>必须输入整数 :(</span>"
            }
        },
        submitHandler: function(form){
            // 头像
            var icon = $("#previewImg").val();
            var ipPath = $("input[name='ipPath']").val();
            if (icon == '' && ipPath == undefined) {
                sweetAlert("提交失败", "请上传类别图标 :(", "error");
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

// 删除头像
function delIp(filePath){
    swal({
            title: "确认删除图标吗？",
            text: "删除后不可恢复 :(",
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
                    url: "/admin/base/delFile",
                    data: {filePath:filePath},
                    dataType: "JSON",
                    success: function(res){
                        // res
                        if (res === true) {
                            swal("提交成功", "当前图标已被删除 :)", "success");
                            setTimeout("window.location.reload();",2000);
                        } else {
                            swal("提交失败", "请尝试刷新页面后重试 :(", "error");
                        }
                    },
                    error: function(e){
                        console.log(e);
                    }
                });
            } else {
                swal("取消了", "头像是安全的 :)", "error");
            }
        });
}

//图片上传预览    IE是用了滤镜。
function previewImage(file)
{
    var MAXWIDTH  = 90;
    var MAXHEIGHT = 90;
    var div = document.getElementById('preview');
    if (file.files && file.files[0])
    {
        div.innerHTML ='<img id=imghead onclick=$("#previewImg").click()>';
        var img = document.getElementById('imghead');
        img.onload = function(){
            var rect = clacImgZoomParam(MAXWIDTH, MAXHEIGHT, img.offsetWidth, img.offsetHeight);
            img.width  =  rect.width;
            img.height =  rect.height;
            // img.style.marginLeft = rect.left+'px';
            img.style.marginTop = rect.top+'px';
        }
        var reader = new FileReader();
        reader.onload = function(evt){img.src = evt.target.result;}
        reader.readAsDataURL(file.files[0]);
    }
    else //兼容IE
    {
        var sFilter='filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(sizingMethod=scale,src="';
        file.select();
        var src = document.selection.createRange().text;
        div.innerHTML = '<img id=imghead>';
        var img = document.getElementById('imghead');
        img.filters.item('DXImageTransform.Microsoft.AlphaImageLoader').src = src;
        var rect = clacImgZoomParam(MAXWIDTH, MAXHEIGHT, img.offsetWidth, img.offsetHeight);
        status =('rect:'+rect.top+','+rect.left+','+rect.width+','+rect.height);
        div.innerHTML = "<div id=divhead style='width:"+rect.width+"px;height:"+rect.height+"px;margin-top:"+rect.top+"px;"+sFilter+src+"\"'></div>";
    }
}
function clacImgZoomParam( maxWidth, maxHeight, width, height ){
    var param = {top:0, left:0, width:width, height:height};
    if( width>maxWidth || height>maxHeight ){
        rateWidth = width / maxWidth;
        rateHeight = height / maxHeight;

        if( rateWidth > rateHeight ){
            param.width =  maxWidth;
            param.height = Math.round(height / rateWidth);
        }else{
            param.width = Math.round(width / rateHeight);
            param.height = maxHeight;
        }
    }
    param.left = Math.round((maxWidth - param.width) / 2);
    param.top = Math.round((maxHeight - param.height) / 2);
    return param;
}

