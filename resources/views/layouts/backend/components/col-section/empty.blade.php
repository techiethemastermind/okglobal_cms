<?php $component_id = substr(base_convert(sha1(uniqid(mt_rand())), 16, 36), 0, 8); ?>
<div class="card" data-type="componentItem" data-name="colComponent">
    <div class="card-header">
        <h4 class="card-header-title">Column Section</h4>
        <button type="button" data-action="addItem" data-type="colComponent" class="btn btn-sm btn-rounded-circle btn-white mr-2">+</button>
        <button type="button" data-action="removeSection" class="btn btn-sm btn-rounded-circle btn-white mr-2">-</button>
        <a class="btn btn-sm btn-rounded-circle btn-white dropdown-toggle" href="#col_{{ $component_id }}" data-toggle="collapse"
            role="button" aria-expanded="false" aria-controls="colComponent">
        </a>
    </div>

    <div class="card-body collapse hide" id="col_{{ $component_id }}">
        <div class="row">
            <div class="col-4">
                <div class="file_wrap">
                    <img src="{{ asset('assets/img/no-image.jpg') }}" id="preview_{{ $component_id }}" alt="" width="100%">
                    <div class="custom-file">
                        <input type="file" id="col_file_{{ $component_id }}" class="custom-file-input" 
                            data-preview="#preview_{{ $component_id }}" >
                        <label for="col_file_{{ $component_id }}" class="custom-file-label">Choose File</label>
                        <input type="hidden" name="col_file_{{ $component_id }}" data-name="colImage" value="">
                    </div>
                </div>
                <div class="form-group mt-3">
                    <label for="">Style: </label>
                    <select name="style" id="select_style" class="form-control" data-name="style">
                        @for($i = 1; $i < 6; $i++)
                        <option value="{{ $i }}">Style {{ $i }}</option>
                        @endfor
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Class</label>
                    <input type="text" class="form-control" data-name="class" value="">
                </div>
                <div class="form-group">
                    <label for="">Id</label>
                    <input type="text" class="form-control" data-name="id" value="">
                </div>
            </div>
            <div class="col-8">
                <div class="form-group">
                    <label>Title</label>
                    <input type="text" class="form-control" data-name="title" value="" placeholder="Enter Title">
                </div>
                <div class="form-group">
                    <label>Description</label>
                    <textarea class="form-control" rows="3" data-name="description" placeholder="Enter Description"></textarea>
                </div>
                <hr>
                <div class="form-group">
                    <label>Buttons Area</label>
                    <textarea class="form-control" rows="3" data-name="buttons" placeholder="Enter Description"></textarea>
                </div>
            </div>
        </div> <!-- / .row -->
    </div>
    
</div>