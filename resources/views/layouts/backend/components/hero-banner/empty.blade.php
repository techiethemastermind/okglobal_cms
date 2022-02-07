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
            <!--  Banner -->
            <div class="list-group-item" data-type="item">
                <span data-type="remove" data-class=".list-group-item">x</span>
                <div class="row">
                    <div class="col-4">

                        <!-- Dropzone -->
                        <div class="file_wrap">

                            <img src="{{ asset('assets/img/no-image.jpg') }}" id="preview_{{ $component_id }}" alt="" width="100%">
                            <div class="custom-file">
                                <input type="file" id="banner_file_{{ $component_id }}" class="custom-file-input" 
                                    data-preview="#preview_{{ $component_id }}" >
                                <label for="banner_file_{{ $component_id }}" class="custom-file-label">Choose File</label>
                                <input type="hidden" name="banner_file_{{ $component_id }}" data-name="heroImage" value="">
                            </div>
                        </div>
                    </div>

                    <div class="col-8">
                        <textarea class="form-control" rows="8" data-name="heroContent" data-value="true" 
                            placeholder="Try typing something..."></textarea>
                    </div>
                </div> <!-- / .row -->
            </div>
        </div>
    </div>
</div>