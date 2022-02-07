<?php $component_id = substr(base_convert(sha1(uniqid(mt_rand())), 16, 36), 0, 8); ?>
<div class="card" data-type="componentItem" data-name="mapComponent">
    <div class="card-header">
        <h4 class="card-header-title">Interactive Map Section</h4>
        <button type="button" data-action="addItem" data-type="mapComponent" class="btn btn-sm btn-rounded-circle btn-white mr-2">+</button>
        <button type="button" data-action="removeSection" class="btn btn-sm btn-rounded-circle btn-white mr-2">-</button>
        <a class="btn btn-sm btn-rounded-circle btn-white dropdown-toggle" href="#map_{{ $component_id }}" data-toggle="collapse"
            role="button" aria-expanded="false" aria-controls="mapComponent">
        </a>
    </div>

    <div class="card-body collapse hide" id="map_{{ $component_id }}">
        <div class="row">
            <div class="col-12">
                <div class="form-group">
                    <label for="">Countries</label>
                    <textarea class="form-control" rows="6" data-name="content">{{ $content->value[0]->content }}</textarea>
                </div>

                <div class="form-group">
                    <label for="">Class</label>
                    <input type="text" class="form-control" data-name="class" placeholder="Enter Section Class" value="{{ $content->value[0]->class }}">
                </div>
            </div>
        </div>
    </div>
</div>