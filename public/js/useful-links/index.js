function deleteData(e){confirm("Are you sure you want to delete!")&&$.ajax({type:"post",url:"/useful-links/delete",data:{id:e},dataType:"JSON",success:function(e){console.log(e),"saved"==e.status&&(showSuccessAlert("Success","Useful Link successfully delete"),location.reload())},error:function(e){showHttpErrorAlert(e)}})}