$(document).ready(function(){imageLoader1(),id=$("#id").val(),$.ajax({type:"post",url:"/identity_coins/details",data:{id:id},dataType:"JSON",success:function(t){for(var a=0;a<t.length;a++)addNewRow(t[a])},error:function(t){showHttpErrorAlert(t)}})});

function imageLoader1(){$("#select_img1").click(function(){$("#image_select1").click()}),$("#image_select1").change(function(){if(this.files&&this.files[0]){var e=new FileReader;e.onload=function(e){$("#image1").attr("src",e.target.result)},e.readAsDataURL(this.files[0])}}),$("#select_img2").click(function(){$("#image_select2").click()}),$("#image_select2").change(function(){if(this.files&&this.files[0]){var e=new FileReader;e.onload=function(e){$("#image2").attr("src",e.target.result)},e.readAsDataURL(this.files[0])}}),$("#select_img3").click(function(){$("#image_select3").click()}),$("#image_select3").change(function(){if(this.files&&this.files[0]){var e=new FileReader;e.onload=function(e){$("#image3").attr("src",e.target.result)},e.readAsDataURL(this.files[0])}})}

function addNewRow(data){

	let cells = generateTableRow('table-details', 'worksheet_row', 3);
	if(data){
		cells[0].innerHTML  = `<input type="checkbox" class="worksheet-row-index"/>`;
		cells[1].innerHTML  = `<input type="text" id="detail-description" name="detail_description[]" class="form-control input-sm"  autocomplete="off"   value="${data.description ?? ''}"/>`; 
		cells[2].innerHTML = `<input type="text" id="detail-exchange" name="detail_exchange[]" class="form-control input-sm"  autocomplete="off" value="${data.exchange ?? ''}" />`; 
		cells[2].innerHTML += `<input type="hidden" id="detail-id" name="detail_id[]" class="form-control input-sm"  autocomplete="off" value="${data.id ?? ''}" />`; 
	
	}else{

		cells[0].innerHTML  = `<input type="checkbox" class="worksheet-row-index"/>`;
		cells[1].innerHTML  = `<input type="text" id="detail-description" name="detail_description[]" class="form-control input-sm"  autocomplete="off"  />`; 
		cells[2].innerHTML = `<input type="text" id="detail-exchange" name="detail_exchange[]" class="form-control input-sm"  autocomplete="off" />`; 
		cells[2].innerHTML += `<input type="hidden" id="detail-id" name="detail_id[]" class="form-control input-sm"  autocomplete="off" />`; 
	}
}

function removeWSRow()
{
    $('.worksheet-row-index:checkbox:checked').parents('tr.worksheet_row').remove();
}



