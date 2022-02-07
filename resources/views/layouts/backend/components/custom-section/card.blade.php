<?php $component_id = substr(base_convert(sha1(uniqid(mt_rand())), 16, 36), 0, 8); ?>
<div class="card" data-type="componentItem" data-name="sectionComponent">
    <div class="card-header">
        <h4 class="card-header-title">Custom Section</h4>
        <button type="button" data-action="addItem" data-type="sectionComponent" class="btn btn-sm btn-rounded-circle btn-white mr-2">+</button>
        <button type="button" data-action="removeSection" class="btn btn-sm btn-rounded-circle btn-white mr-2">-</button>
        <a class="btn btn-sm btn-rounded-circle btn-white dropdown-toggle" href="#section_{{ $component_id }}" data-toggle="collapse"
            role="button" aria-expanded="false" aria-controls="sectionComponent">
        </a>
    </div>

    <div class="card-body collapse hide" id="section_{{ $component_id }}">
        <div class="row">
            <div class="col-4">
                <div class="form-group">
                    <label for="">Background Image</label>
                </div>
                <div class="file_wrap">
                    <img src="@if(isset($content->value) && ($content->value[0]->image != ''))/storage/uploads/{{ $content->value[0]->image }}@else{{ asset('assets/img/no-image.jpg') }}@endif" id="preview_{{ $component_id }}" alt="" width="100%">
                    <div class="custom-file">
                        <input type="file" id="col_file_{{ $component_id }}" class="custom-file-input" 
                            data-preview="#preview_{{ $component_id }}" >
                        <label for="col_file_{{ $component_id }}" class="custom-file-label">Choose File</label>
                        <input type="hidden" name="col_file_{{ $component_id }}" data-name="colImage" value="@if(isset($content->value) && ($content->value[0]->image != '')){{ $content->value[0]->image }}@endif">
                    </div>
                </div>
                <div class="form-group">
                    <label for="">Style: </label>
                    <select name="style" id="select_style" class="form-control" data-name="style" onchange="changeStyle_{{ $component_id }}(this)">
                        @for($i = 1; $i < 3; $i++)
                        <option value="{{ $i }}" @if(isset($content->value[0]->style) && ($content->value[0]->style == $i)) selected @endif>Style {{ $i }}</option>
                        @endfor
                    </select>
                </div>
                <div class="form-group" @if(isset($content->value[0]->style) && ($content->value[0]->style != '1')) style="display: none;" @endif>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="section_{{ $component_id }}" data-name="type"
                            @if(isset($content->value[0]->style) && ($content->value[0]->type == '1')) checked="" @endif data-name="type">
                        <label class="form-check-label" for="section_{{ $component_id }}">
                            Right
                        </label>
                    </div>
                </div>
            </div>

            <div class="col-8">
                <div class="form-group">
                    <label for="">Section Content</label>
                    <textarea class="form-control" rows="6" data-name="content">{{ $content->value[0]->content }}</textarea>
                </div>
                <div class="form-group">
                    <label for="">Class</label>
                    <input type="text" class="form-control" data-name="class" placeholder="Enter Section Class" value="{{ $content->value[0]->class }}">
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
