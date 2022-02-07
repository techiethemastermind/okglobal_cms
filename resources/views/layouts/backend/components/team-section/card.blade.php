<?php $component_id = substr(base_convert(sha1(uniqid(mt_rand())), 16, 36), 0, 8); ?>
<div class="card" data-type="componentItem" data-name="teamComponent">
    <div class="card-header">
        <h4 class="card-header-title">Team Section</h4>
        <button type="button" data-action="addItem" class="btn btn-sm btn-rounded-circle btn-white mr-2">+</button>
        <button type="button" data-action="removeSection" class="btn btn-sm btn-rounded-circle btn-white mr-2">-</button>
        <a class="btn btn-sm btn-rounded-circle btn-white dropdown-toggle" href="#ts_{{ $component_id }}" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="teamComponent">
        </a>
    </div>

    <div class="card-body hide collapse" id="ts_{{ $component_id }}" style="">

        <div class="form-group">
            <label for="">Section Title</label>
            <input type="text" class="form-control" data-name="title" value="{{ $content->value[0]->title }}">
        </div>

        @foreach($content->value[0]->value as $item)
        <div class="row" data-name="group">
            <div class="col-4">
                <label>Avatar</label>
                <div class="file_wrap">
                    <img src="@if($item->image != '')/storage/uploads/{{ $item->image }}@else{{ asset('assets/img/no-image.jpg') }}@endif" id="preview_{{ $component_id }}_{{ $loop->iteration }}" alt="" width="100%">
                    <div class="custom-file">
                        <input type="file" id="avatar_file_{{ $component_id }}_{{ $loop->iteration }}" 
                            class="custom-file-input" data-preview="#preview_{{ $component_id }}_{{ $loop->iteration }}">
                        <label for="avatar_file_{{ $component_id }}_{{ $loop->iteration }}" class="custom-file-label">Choose File</label>
                        <input type="hidden" name="avatar_file_{{ $component_id }}_{{ $loop->iteration }}" data-name="avatarImage" value="{{ $item->image }}">
                    </div>
                </div>
            </div>
            <div class="col-8">
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" class="form-control" data-name="name" value="{{ $item->name }}" placeholder="Enter Name">
                </div>
                <div class="form-group">
                    <label>Bio</label>
                    <input type="text" class="form-control" data-name="bio" value="{{ $item->bio }}" placeholder="Enter Bio">
                </div>
                <div class="form-group">
                    <label>Description</label>
                    <textarea class="form-control" rows="3" data-name="description" placeholder="Enter Description">{{ $item->description }}</textarea>
                </div>
            </div>
        </div>
        <hr>
        @endforeach
    </div>
</div>