function submitForm(){showLoader("Saving","Please wait...."),data=new FormData($("#inquiry")[0]),$.ajax({type:"post",url:"/contact_us/inquiry",data:data,method:"POST",dataType:"json",contentType:!1,cache:!1,processData:!1,success:function(e){"saved"==e.status?(showSuccessAlert("Sent","We already received your email please wait for our reply thank you!"),$("#inquiry")[0].reset()):showErrorAlert("Error","Please check you internet")},error:function(e){showHttpErrorAlert(e)}})}$(document).ready(function(){$("#inquiry").submit(function(e){e.preventDefault();$(this).serializeArray();submitForm()})});