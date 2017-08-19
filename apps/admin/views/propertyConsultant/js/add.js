$(function(){

  // 验证添加置业顾问表单
  $("#propertyConsultantForm").validate({
      focusInvalid: true,
      rules: {
        cname: {
          required: true
        },
        phone: {
          required: true
        },
        belong_company: {
          required: true
        }
      },
      messages: {
        cname: {
          required: "<span style='color:red;'>姓名不能为空 :(</span>"
        },
        phone: {
          required: "<span style='color:red;'>电话不能为空 :(</span>"
        },
        belong_company: {
          required: "<span style='color:red;'>所属地产公司不能为空 :(</span>"
        }
      },
      submitHandler: function(form){
        // 头像
        var head_portrait = $("#previewImg").val();
        var hpPath = $("input[name='hpPath']").val();
        if (head_portrait == '' && hpPath == undefined) {
          sweetAlert("提交失败", "请上传头像 :(", "error");
        } else {
          $(form).ajaxSubmit({
            dataType:"json",
            success:function(res){
              // res
              if (res === true) {
                swal("提交成功", "即将跳转到置业顾问列表 :)", "success");
                window.setTimeout("window.location.href='/admin/propertyConsultant/index'",2000);
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
  function delHp(filePath){
    swal({
      title: "确认删除头像吗？",
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
              swal("提交成功", "当前头像已被删除 :)", "success");
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