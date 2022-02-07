<?php $component_id = substr(base_convert(sha1(uniqid(mt_rand())), 16, 36), 0, 8); ?>
<div class="card" data-type="componentItem" data-name="countryComponent">
    <div class="card-header">
        <h4 class="card-header-title">Countrylist Section</h4>
        <button type="button" data-action="addItem" data-type="countryComponent" class="btn btn-sm btn-rounded-circle btn-white mr-2">+</button>
        <button type="button" data-action="removeSection" class="btn btn-sm btn-rounded-circle btn-white mr-2">-</button>
        <a class="btn btn-sm btn-rounded-circle btn-white dropdown-toggle" href="#country_{{ $component_id }}" data-toggle="collapse"
            role="button" aria-expanded="false" aria-controls="countryComponent">
        </a>
    </div>

    <div class="card-body collapse hide" id="country_{{ $component_id }}">
        <div class="row mb-4">
            <div class="col-12">
                <div class="form-group">
                    <label for="">List Title:</label>
                    <input type="text" class="form-control" data-name="title" value="@if(isset($content->value->title)){{ $content->value->title }}@endif">
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <label for="">Style: </label>
                    <select name="style" class="form-control" data-name="style">
                        @for($i = 1; $i < 4; $i++)
                        <option value="{{ $i }}" @if(isset($content->value->title) && ($content->value->style == $i)) selected @endif>Style {{ $i }}</option>
                        @endfor
                    </select>
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <label for="">Class:</label>
                    <input type="text" class="form-control" data-name="class" value="@if(isset($content->value->title)){{ $content->value->class }}@endif">
                </div>
            </div>
        </div>
        <hr>
        @foreach($content->value->value as $item)
        <div class="row mb-3" data-type="item">
            <div class="col-4">
                <div class="file_wrap">
                    <img src="@if($item->image != '') /storage/uploads/{{ $item->image }} @else{{ asset('assets/img/no-image.jpg') }}@endif"
                         id="preview_{{ $component_id }}_{{ $loop->iteration }}" alt="" width="100%">
                    <div class="custom-file">
                        <input type="file" id="avatar_file_{{ $component_id }}_{{ $loop->iteration }}" class="custom-file-input" 
                            data-preview="#preview_{{ $component_id }}_{{ $loop->iteration }}" >
                        <label for="avatar_file_{{ $component_id }}_{{ $loop->iteration }}" class="custom-file-label">Choose File</label>
                        <input type="hidden" name="avatar_file_{{ $component_id }}_{{ $loop->iteration }}" data-name="countryImage" value="{{ $item->image }}">
                    </div>
                </div>
            </div>
            <div class="col-8">
                <div class="form-group">
                    <label for="">Title</label>
                    <input type="text" class="form-control" data-name="itemTitle" value="{{ $item->title }}">
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