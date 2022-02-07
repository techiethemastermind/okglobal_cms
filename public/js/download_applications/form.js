
let rowIndexs=0;
$(document).ready(function() {
    imageLoader1();
    imageLoader2();
    imageLoader3();
    if($('#id')){
        id=$('#id').val();
        getFeature(id);
    }
	
});


function imageLoader1(){$("#select_img1").click(function(){$("#image_select1").click()}),$("#image_select1").change(function(){if(this.files&&this.files[0]){var e=new FileReader;e.onload=function(e){$("#image1").attr("src",e.target.result)},e.readAsDataURL(this.files[0])}})}


function imageLoader2(){$("#select_img2").click(function(){$("#image_select2").click()}),$("#image_select2").change(function(){if(this.files&&this.files[0]){var e=new FileReader;e.onload=function(e){$("#image2").attr("src",e.target.result)},e.readAsDataURL(this.files[0])}})}

function imageLoader3(){$("#select_img3").click(function(){$("#image_select3").click()}),$("#image_select3").change(function(){if(this.files&&this.files[0]){var e=new FileReader;e.onload=function(e){$("#image3").attr("src",e.target.result)},e.readAsDataURL(this.files[0])}})}

function addNewRow(data){
    rowIndexs ++ ;
    console.log(data);
    let cells = generateTableRow('table_feature', 'worksheet_row', 2);

    if(data){

        cells[0].innerHTML  = `<input type="checkbox" class="worksheet-row-index"/>`;
        cells[1].innerHTML = ` <input type="text" id="feature-${rowIndexs}" name="feature[]" value="${data.name ?? ''}"  class="province-class form-control input-sm style_input"  autocomplete="off" required />`
        cells[1].innerHTML += ` <input type="text" id="feature-id-${rowIndexs}" name="feature_id[]" value="${data.id ?? ''}"  class="province-class form-control input-sm style_input"  autocomplete="off"  />`


    }else{

        cells[0].innerHTML  = `<input type="checkbox" class="worksheet-row-index"/>`;
        cells[1].innerHTML = ` <input type="text" id="feature-${rowIndexs}" name="feature[]"  class="province-class form-control input-sm style_input"  autocomplete="off" required />`
        cells[1].innerHTML += ` <input type="text" id="feature-id-${rowIndexs}" name="feature_id[]"  class="province-class form-control input-sm style_input"  autocomplete="off"  />`


    }
}

function removeWSRow()
{
    $('.worksheet-row-index:checkbox:checked').parents('tr.worksheet_row').remove();
}


function getFeature(t){$.ajax({type:"post",url:"/download_applications/getfeatures",data:{id:t},dataType:"JSON",success:function(t){for(var a=0;a<t.length;a++)addNewRow(t[a])},error:function(t){showHttpErrorAlert(t)}})}