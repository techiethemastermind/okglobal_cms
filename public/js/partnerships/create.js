function submitForm(){showLoader("Saving","Please wait...."),data=new FormData($("#add-partner")[0]),$.ajax({type:"post",url:"/partnerships",data:data,method:"POST",dataType:"json",contentType:!1,cache:!1,processData:!1,success:function(e){console.log(e),"saved"==e.status?(showSuccessAlert("Success","Partnership successfully added"),$("#add-partner")[0].reset()):showErrorAlert("Error","Partnership unsuccessfully added, please check your information.")},error:function(e){showHttpErrorAlert(e)}})}$(document).ready(function(){$("#add-partner").submit(function(e){e.preventDefault();$(this).serializeArray();submitForm()}),$("#reset_btn").click(function(){$("#image1").attr("src",$(this).val()),$("#add-partner").length>0&&$("#add-partner")[0].reset()})});