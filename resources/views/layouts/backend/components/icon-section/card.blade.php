<?php $component_id = substr(base_convert(sha1(uniqid(mt_rand())), 16, 36), 0, 8); ?>

<div class="card" data-type="componentItem" data-name="iconComponent">

    <div class="card-header">
        <h4 class="card-header-title">Icon Section</h4>
        <button type="button" data-action="addItem" data-type="iconComponent" class="btn btn-sm btn-rounded-circle btn-white mr-2">+</button>
        <button type="button" data-action="removeSection" class="btn btn-sm btn-rounded-circle btn-white mr-2">-</button>
        <a class="btn btn-sm btn-rounded-circle btn-white dropdown-toggle" href="#ic_{{ $component_id }}" data-toggle="collapse"
            role="button" aria-expanded="false" aria-controls="iconComponent">
        </a>
    </div>

    <div class="card-body collapse hide" id="ic_{{ $component_id }}">
        <div class="row">
            <div class="col-4">

                <!-- Dropzone -->
                <div class="file_wrap">

                    <img src="@if(isset($content->value) && ($content->value[0]->image != ''))/storage/uploads/{{ $content->value[0]->image }}@else{{ asset('assets/img/no-image.jpg') }}@endif" id="preview_{{ $component_id }}" alt="" width="100%">
                    <div class="custom-file">
                        <input type="file" id="icon_file_{{ $component_id }}" class="custom-file-input" 
                            data-preview="#preview_{{ $component_id }}" >
                        <label for="icon_file_{{ $component_id }}" class="custom-file-label">Choose File</label>
                        <input type="hidden" name="icon_file_{{ $component_id }}" data-name="iconImage" value="@if(isset($content->value) && ($content->value[0]->image != '')){{ $content->value[0]->image }}@endif">
                    </div>
                </div>

                <div class="form-group mt-4">
                    <label>Link</label>
                    <input type="text" class="form-control" data-name="link" value="{{ $content->value[0]->link }}" placeholder="Enter link">
                </div>
            </div>

            <div class="col-8">
                <div class="form-group">
                    <label>Title</label>
                    <input type="text" class="form-control" data-name="title" value="{{ $content->value[0]->title }}" placeholder="Enter Title">
                </div>
                <div class="form-group">
                    <label>Description</label>
                    <textarea class="form-control" rows="3" data-name="content" placeholder="Enter Description">{!! $content->value[0]->content !!}</textarea>
                </div>
                <hr>
                <div class="form-group">
                    <label>Section Class</label>
                    <input type="text" class="form-control" data-name="class" value="{{ $content->value[0]->class }}" placeholder="class for section">
                </div>
            </div>
        </div> <!-- / .row -->
    </div>
</div>