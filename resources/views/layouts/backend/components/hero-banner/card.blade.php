<?php $component_id = substr(base_convert(sha1(uniqid(mt_rand())), 16, 36), 0, 8); ?>
<div class="card" data-type="componentItem" data-name="heroComponent">
    <div class="card-header">
        <h4 class="card-header-title">Hero Banner (Owl Slider)</h4>
        <button type="button" data-action="addItem" data-type="heroComponent" class="btn btn-sm btn-rounded-circle btn-white mr-2">+</button>
        <button type="button" data-action="removeSection" class="btn btn-sm btn-rounded-circle btn-white mr-2">-</button>
        <a class="btn btn-sm btn-rounded-circle btn-white dropdown-toggle" href="#hero_{{ $component_id }}" data-toggle="collapse"
            role="button" aria-expanded="false" aria-controls="heroComponent">
        </a>
    </div>

    <div class="card-body collapse hide" id="hero_{{ $component_id }}">
        <div class="list-group list-group-flush list-group-focus" data-type="group">
            @foreach($content->value as $item)
            <!--  Banner -->
            <div class="list-group-item" data-type="item">
                <span data-type="remove" data-class=".list-group-item">x</span>
                <div class="row">
                    <div class="col-4">

                        <div class="file_wrap">
                            <label for="">Background Image</label>
                            <img src="@if(isset($item->value) && ($item->value[0]->image != ''))/storage/uploads/{{ $item->value[0]->image }}@else{{ asset('assets/img/no-image.jpg') }}@endif" id="preview{{$loop->iteration}}_{{ $component_id }}" alt="" width="100%">
                            <div class="custom-file">
                                <input type="file" id="banner_file_{{$loop->iteration}}_{{ $component_id }}" class="custom-file-input" 
                                    data-preview="#preview{{$loop->iteration}}_{{ $component_id }}" >
                                <label for="banner_file_{{$loop->iteration}}_{{ $component_id }}" class="custom-file-label">Choose File</label>
                                <input type="hidden" name="banner_file_{{$loop->iteration}}_{{ $component_id }}" data-name="heroImage" 
                                    value="@if(isset($item->value) && ($item->value[0]->image != '')){{ $item->value[0]->image }}@endif">
                            </div>
                        </div>

                        <div class="form-group mt-3">
                            <label for="">Class</label>
                            <input type="text" class="form-control" data-name="itemClass" value="{{ $item->value[0]->class }}">
                        </div>
                    </div>

                    <div class="col-8">
                        <label for="">Content</label>
                        <textarea class="form-control" rows="10" data-name="heroContent" data-value="true" 
                            placeholder="Try typing something...">@if(isset($item->value)){{ $item->value[0]->content }}@endif</textarea>
                    </div>
                </div> <!-- / .row -->
            </div>
            @endforeach
        </div>
    </div>
</div>