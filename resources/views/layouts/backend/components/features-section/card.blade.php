<?php $component_id = substr(base_convert(sha1(uniqid(mt_rand())), 16, 36), 0, 8); ?>
<div class="card" data-type="componentItem" data-name="featuresComponent">
    <div class="card-header">
        <h4 class="card-header-title">Features Section</h4>
        <button type="button" data-action="addItem" data-type="featuresComponent" class="btn btn-sm btn-rounded-circle btn-white mr-2">+</button>
        <button type="button" data-action="removeSection" class="btn btn-sm btn-rounded-circle btn-white mr-2">-</button>
        <a class="btn btn-sm btn-rounded-circle btn-white dropdown-toggle" href="#featured_{{ $component_id }}" data-toggle="collapse"
            role="button" aria-expanded="false" aria-controls="featuresComponent">
        </a>
    </div>

    <div class="card-body collapse hide" id="featured_{{ $component_id }}">
    @foreach($content->value as $item)
        <div class="row mb-3" data-type="item">
            <div class="col-4">
                <label for="">Feature Icon</label>
                <div class="file_wrap">
                    <img src="@if($item->image != '') /storage/uploads/{{ $item->image }} @else{{ asset('assets/img/no-image.jpg') }}@endif" 
                        id="preview_{{ $component_id }}_{{ $loop->iteration }}" alt="" width="100%">
                    <div class="custom-file">
                        <input type="file" id="icon_file_{{ $component_id }}_{{ $loop->iteration }}" class="custom-file-input" 
                            data-preview="#preview_{{ $component_id }}_{{ $loop->iteration }}" >
                        <label for="icon_file_{{ $component_id }}_{{ $loop->iteration }}" class="custom-file-label">Choose File</label>
                        <input type="hidden" name="icon_file_{{ $component_id }}_{{ $loop->iteration }}" data-name="iconImage" value="{{ $item->image }}">
                    </div>
                </div>
            </div>
            <div class="col-8">
                <div class="form-group">
                    <label>Title</label>
                    <input type="text" class="form-control" data-name="title" placeholder="Enter Title" value="{{ $item->title }}" >
                </div>
                <div class="form-group">
                    <label>Description</label>
                    <textarea class="form-control" rows="3" data-name="description" placeholder="Enter Description">{{ $item->description }}</textarea>
                </div>
            </div>
        </div> <!-- / .row -->
        <hr>
        @endforeach
    </div>
    
</div>