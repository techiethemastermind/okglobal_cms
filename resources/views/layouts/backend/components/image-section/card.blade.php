<?php $component_id = substr(base_convert(sha1(uniqid(mt_rand())), 16, 36), 0, 8); ?>

<div class="card" data-type="componentItem" data-name="imageComponent">

    <div class="card-header">
        <h4 class="card-header-title">Image Section</h4>
        <button type="button" data-action="addItem" data-type="imageComponent" class="btn btn-sm btn-rounded-circle btn-white mr-2">+</button>
        <button type="button" data-action="removeSection" class="btn btn-sm btn-rounded-circle btn-white mr-2">-</button>
        <a class="btn btn-sm btn-rounded-circle btn-white dropdown-toggle" href="#image_section_{{ $component_id }}" data-toggle="collapse"
            role="button" aria-expanded="false" aria-controls="imageComponent">
        </a>
    </div>

    <div class="card-body collapse hide" id="image_section_{{ $component_id }}">
        <div class="row">
            @foreach($content->value as $item)
            <div class="col-6">
                <div class="file_wrap">
                    <img src="@if($item->value[0]->image != '')/storage/uploads/{{ $item->value[0]->image }}@else{{ asset('assets/img/no-image.jpg') }}@endif" 
                        id="preview_{{ $component_id }}_{{ $loop->iteration }}" alt="" width="100%">
                    <div class="custom-file">
                        <input type="file" id="image_file_{{ $component_id }}_{{ $loop->iteration }}" class="custom-file-input" 
                            data-preview="#preview_{{ $component_id }}_{{ $loop->iteration }}" >
                        <label for="image_file_{{ $component_id }}_{{ $loop->iteration }}" class="custom-file-label">Choose File</label>
                        <input type="hidden" name="image_file_{{ $component_id }}_{{ $loop->iteration }}" data-name="image" value="{{ $item->value[0]->image }}">
                    </div>
                    <input type="text" class="form-control mt-3" data-name="link" placeholder="Image link" value="{{ $item->value[0]->link }}">
                </div>
            </div>
            @endforeach
        </div> <!-- / .row -->
    </div>
</div>