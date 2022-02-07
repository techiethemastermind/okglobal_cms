<?php $component_id = substr(base_convert(sha1(uniqid(mt_rand())), 16, 36), 0, 8); ?>
<div class="card" data-type="componentItem" data-name="htmlComponent">
    <div class="card-header">
        <h4 class="card-header-title">Custom Html Section</h4>
        <button type="button" data-action="addItem" data-type="htmlComponent" class="btn btn-sm btn-rounded-circle btn-white mr-2">+</button>
        <button type="button" data-action="removeSection" class="btn btn-sm btn-rounded-circle btn-white mr-2">-</button>
        <a class="btn btn-sm btn-rounded-circle btn-white dropdown-toggle" href="#html_{{ $component_id }}" data-toggle="collapse"
            role="button" aria-expanded="false" aria-controls="htmlComponent">
        </a>
    </div>

    <div class="card-body collapse hide" id="html_{{ $component_id }}">
        <div class="row">
            <div class="col-12">

                <div class="row mb-4">
                    <div class="col-6">
                        <label for="">Style: </label>
                        <select name="style" class="form-control" data-name="style">
                            <option value="full" @if(isset($content->value[0]->style) && $content->value[0]->style == 'full') selected @endif> Full Width </option>
                            <option value="container" @if(isset($content->value[0]->style) && $content->value[0]->style == 'container') selected @endif> Boxed Width </option>
                        </select>
                    </div>

                    <div class="col-6">
                        <label for="">Class</label>
                        <input type="text" class="form-control" data-name="class" placeholder="Enter Section Class" value="{{ $content->value[0]->class }}">
                    </div>
                </div>

                <div class="form-group">
                    <label for="">HTML Content</label>
                    <textarea class="form-control" rows="6" data-name="content">{{ $content->value[0]->content }}</textarea>
                </div>
            </div>
        </div>
    </div>
</div>
