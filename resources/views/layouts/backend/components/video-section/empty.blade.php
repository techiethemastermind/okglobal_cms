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
                        <option value="{{ $i+1 }}">Style {{ $i+1 }}</option>
                        @endfor
                    </select>
                </div>
            </div>

            <div class="col-8">

                <div class="wrap" data-for="style1">
                    <div class="form-group">
                        <label for="">Video Link</label>
                        <input type="text" class="form-control" placeholder="Enter video link" value="" data-name="link">
                    </div>
                    <div class="form-group">
                        <label for="">Title</label>
                        <input type="text" class="form-control" placeholder="Enter Title" data-name="title" value="">
                    </div>
                    <div class="form-group">
                        <label for="">Description</label>
                        <textarea class="form-control" rows="5" data-name="description"></textarea>
                    </div>
                </div>

                <div class="wrap" data-for="style2" style="display: none;" >
                    <div class="form-group" data-name="group" >
                        <div class="form-group">
                            <label for="">Video Link</label>
                            <input type="text" class="form-control" placeholder="Enter video link" value="" data-name="link">
                        </div>
                        <div class="form-group">
                            <label for="">Video Description</label>
                            <textarea class="form-control" rows="3" data-name="description"></textarea>
                        </div>
                        <div class="form-group">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="yb_{{ $component_id }}" checked="" data-name="type">
                                <label class="form-check-label" for="yb_{{ $component_id }}">
                                    Youtube
                                </label>
                            </div>
                        </div>
                        <hr>
                    </div>
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