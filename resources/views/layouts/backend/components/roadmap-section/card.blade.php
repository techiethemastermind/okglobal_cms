<?php $component_id = substr(base_convert(sha1(uniqid(mt_rand())), 16, 36), 0, 8); ?>
<div class="card" data-type="componentItem" data-name="roadmapComponent">
    <div class="card-header">
        <h4 class="card-header-title">Roadmap Section</h4>
        <button type="button" data-action="addItem" data-type="roadmapComponent" class="btn btn-sm btn-rounded-circle btn-white mr-2">+</button>
        <button type="button" data-action="removeSection" class="btn btn-sm btn-rounded-circle btn-white mr-2">-</button>
        <a class="btn btn-sm btn-rounded-circle btn-white dropdown-toggle" href="#roadmap_{{ $component_id }}" data-toggle="collapse"
            role="button" aria-expanded="false" aria-controls="roadmapComponent">
        </a>
    </div>

    <div class="card-body collapse hide" id="roadmap_{{ $component_id }}">
        <div class="row">
            <div class="col-12">
                <div class="form-group">
                    <label for="">Title</label>
                    <input type="text" data-name="title" class="form-control" placeholder="Title" value="{{ $content->value[0]->title }}">
                </div>
                <div class="form-group">
                    <label for="">Description</label>
                    <textarea type="text" data-name="description" class="form-control" placeholder="Description">{{ $content->value[0]->description }}</textarea>
                </div>
                <hr>
                @foreach($content->value[0]->value as $item)
                <div class="form-group" data-name="timelines">
                    <label for="">Timeline {{ $loop->iteration }}</label>
                    <textarea type="text" data-name="timeline" class="form-control" placeholder="Content">{!! $item->content !!}</textarea>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>