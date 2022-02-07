<?php $component_id = substr(base_convert(sha1(uniqid(mt_rand())), 16, 36), 0, 8); ?>
<div class="card" data-type="componentItem" data-name="coinsComponent">
    <div class="card-header">
        <h4 class="card-header-title">Coins Section</h4>
        <button type="button" data-action="addItem" data-type="coinsComponent" class="btn btn-sm btn-rounded-circle btn-white mr-2">+</button>
        <button type="button" data-action="removeSection" class="btn btn-sm btn-rounded-circle btn-white mr-2">-</button>
        <a class="btn btn-sm btn-rounded-circle btn-white dropdown-toggle" href="#coins_{{ $component_id }}" data-toggle="collapse"
            role="button" aria-expanded="false" aria-controls="coinsComponent">
        </a>
    </div>

    <div class="card-body collapse hide" id="coins_{{ $component_id }}">
        <div class="list-group list-group-flush list-group-focus" data-type="group">
            @foreach($content->value as $item)

            <div class="list-group-item" data-type="item">
                <span data-type="remove" data-class=".list-group-item">x</span>
                <div class="row">
                    <div class="col-4">
                        <div class="file_wrap">
                            <img src="@if(isset($item->value) && ($item->value[0]->image != ''))/storage/uploads/{{ $item->value[0]->image }}@else{{ asset('assets/img/no-image.jpg') }}@endif"
                                id="preview_{{ $component_id }}_{{$loop->iteration}}" alt="" width="100%">
                            <div class="custom-file">
                                <input type="file" id="coin_file_{{ $component_id }}_{{$loop->iteration}}" class="custom-file-input" 
                                    data-preview="#preview_{{ $component_id }}_{{$loop->iteration}}" >
                                <label for="coin_file_{{ $component_id }}_{{$loop->iteration}}" class="custom-file-label">Choose File</label>
                                <input type="hidden" name="coin_file_{{ $component_id }}_{{$loop->iteration}}" data-name="coinImage" 
                                    value="@if(isset($item->value) && ($item->value[0]->image != '')){{ $item->value[0]->image }}@endif">
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <label for="">Option</label>
                            <select class="form-control" data-name="option">
                                <option value="1" @if($item->value[0]->option == '1') selected @endif>Option 1 (Register)</option>
                                <option value="2" @if($item->value[0]->option == '2') selected @endif>Option 2 (Sale)</option>
                                <option value="3" @if($item->value[0]->option == '3') selected @endif>Option 1 (Coming soon)</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-8">
                        <div class="form-group">
                            <label>Title</label>
                            <input type="text" class="form-control" data-name="title" value="{{ $item->value[0]->title }}" placeholder="Enter Title">
                        </div>
                        <div class="form-group">
                            <label>Description</label>
                            <textarea class="form-control" rows="3" data-name="description" placeholder="Enter Description">{!! $item->value[0]->description !!}</textarea>
                        </div>
                        <div class="form-group">
                            <label>Button title</label>
                            <input type="text" class="form-control" data-name="button" value="{{ $item->value[0]->button }}" placeholder="class for section">
                        </div>
                    </div>
                </div> <!-- / .row -->
            </div>
            @endforeach
        </div>
    </div>
</div>