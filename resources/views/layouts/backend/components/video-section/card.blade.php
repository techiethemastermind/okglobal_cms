<?php $component_id = substr(base_convert(sha1(uniqid(mt_rand())), 16, 36), 0, 8); ?>
<div class="card" data-type="componentItem" data-name="videoComponent">
    <div class="card-header">
        <h4 class="card-header-title">Video Section</h4>
        <button type="button" data-action="addItem" data-type="videoComponent" class="btn btn-sm btn-rounded-circle btn-white mr-2">+</button>
        <button type="button" data-action="removeSection" class="btn btn-sm btn-rounded-circle btn-white mr-2">-</button>
        <a class="btn btn-sm btn-rounded-circle btn-white dropdown-toggle" href="#vs_{{ $component_id }}" data-toggle="collapse"
            role="button" aria-expanded="false" aria-controls="videoComponent">
        </a>
    </div>

    <div class="card-body collapse hide" id="vs_{{ $component_id }}">
        <div class="row">
            <div class="col-4">
                <div class="form-group">
                    <label for="">Style</label>
                    <select id="style_{{ $component_id }}" class="form-control" data-name="style" onchange="changeStyle_{{ $component_id }}(this)">
                        @for($i = 0; $i < 4; $i++)
                        <option value="{{ $i+1 }}" @if($content->value[0]->style == ($i+1)) selected @endif>Style {{ $i+1 }}</option>
                        @endfor
                    </select>
                </div>
            </div>

            <div class="col-8">

                <div class="wrap" data-for="style1" @if($content->value[0]->style != '1') style="display: none;" @endif >
                    <div class="form-group">
                        <label for="">Video Link</label>
                        <input type="text" class="form-control" placeholder="Enter video link" 
                            value="@if($content->value[0]->style == '1'){{ $content->value[0]->value[0]->link }}@endif" data-name="link">
                    </div>
                    <div class="form-group">
                        <label for="">Title</label>
                        <input type="text" class="form-control" placeholder="Enter Title" data-name="title" 
                            value="@if($content->value[0]->style == '1'){{ $content->value[0]->value[0]->title }}@endif">
                    </div>
                    <div class="form-group">
                        <label for="">Description</label>
                        <textarea class="form-control" rows="5" data-name="description">
                            @if($content->value[0]->style == '1'){{ $content->value[0]->value[0]->description }}@endif</textarea>
                    </div>
                </div>

                <div class="wrap" data-for="style2" @if($content->value[0]->style != '2') style="display: none;" @endif >
                    @foreach($content->value[0]->value as $item)
                    <div class="form-group" data-name="group" >
                        <div class="form-group">
                            <label for="">Video Link {{ $loop->iteration }}</label>
                            <input type="text" class="form-control" placeholder="Enter video {{ $loop->iteration }} link" value="{{ $item->link }}" data-name="link">
                        </div>
                        <div class="form-group">
                            <label for="">Video Description</label>
                            <textarea class="form-control" rows="3" data-name="description">{{ $item->description }}</textarea>
                        </div>
                        <div class="form-group">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="yb_{{ $component_id }}_{{ $loop->iteration }}"
                                    @if($content->value[0]->style == '2' && $item->type == '1') checked="" @endif data-name="type">
                                <label class="form-check-label" for="yb_{{ $component_id }}_{{ $loop->iteration }}">
                                    Youtube
                                </label>
                            </div>
                        </div>
                        <hr>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>

        <script>
            function changeStyle_{{ $component_id }}(selectObject) {
                var value = selectObject.value;
                var row = $(selectObject).closest('.row');
                row.find('div[data-for^=style]').css('display', 'none');
                row.find('div[data-for=style'+ value +']').css('display', 'block');
            }
        </script>
    </div>
</div>