$(document).ready(function(){imageLoader1(),imageLoader2(),id=$("#id").val(),$.ajax({type:"post",url:"/money_projects/details",data:{id:id},dataType:"JSON",success:function(e){console.log(e);for(var o=0;o<e.length;o++)addNewRow(e[o])},error:function(e){showHttpErrorAlert(e)}})});

function imageLoader1(){$("#select_img1").click(function(){$("#image_select1").click()}),$("#image_select1").change(function(){if(this.files&&this.files[0]){var e=new FileReader;e.onload=function(e){$("#image1").attr("src",e.target.result)},e.readAsDataURL(this.files[0])}})}function imageLoader2(){$("#select_img2").click(function(){$("#image_select2").click()}),$("#image_select2").change(function(){if(this.files&&this.files[0]){var e=new FileReader;e.onload=function(e){$("#image2").attr("src",e.target.result)},e.readAsDataURL(this.files[0])}})}

function addNewRow(data){

    let cells = generateTableRow('table-details', 'worksheet_row', 2);
    if(data){
        cells[0].innerHTML  = `<input type="checkbox" class="worksheet-row-index"/>`;
        cells[1].innerHTML  = `<input type="text" id="detail-feature" name="detail_feature[]" class="form-control input-sm"  autocomplete="off" required  value="${data.feature ?? ''}"/>`; 
        cells[1].innerHTML += `<input type="hidden" id="detail-id" name="detail_id[]" class="form-control input-sm"  autocomplete="off" value="${data.id ?? ''}" required/>`; 
    
    }else{

        cells[0].innerHTML  = `<input type="checkbox" class="worksheet-row-index"/>`;
        cells[1].innerHTML  = `<input type="text" id="detail-feature" name="detail_feature[]" class="form-control input-sm"  autocomplete="off" required />`; 
        cells[1].innerHTML += `<input type="hidden" id="detail-id" name="detail_id[]" class="form-control input-sm"  autocomplete="off" />`; 
    }
}

function removeWSRow()
{
    $('.worksheet-row-index:checkbox:checked').parents('tr.worksheet_row').remove();
}
