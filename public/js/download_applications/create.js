function submitForm(){showLoader("Saving","Please wait...."),data=new FormData($("#add-app")[0]),$.ajax({type:"post",url:"/download_applications",data:data,method:"POST",dataType:"json",contentType:!1,cache:!1,processData:!1,success:function(a){console.log(a),"saved"==a.status?(showSuccessAlert("Success","Application successfully added"),$("#add-app")[0].reset()):showErrorAlert("Error","Application unsuccessfully added, please check your information.")},error:function(a){showHttpErrorAlert(a)}})}$(document).ready(function(){$("#add-app").submit(function(a){a.preventDefault();$(this).serializeArray();submitForm()}),$("#reset_btn").click(function(){$("#image1").attr("src",$(this).val()),$("#image2").attr("src",$(this).val()),$("#image3").attr("src",$(this).val()),$("#add-app").length>0&&$("#add-app")[0].reset()})});