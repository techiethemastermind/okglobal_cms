<?php $component_id = substr(base_convert(sha1(uniqid(mt_rand())), 16, 36), 0, 8); ?>
<div class="card" data-type="componentItem" data-name="contactForm">
    <div class="card-header">
        <h4 class="card-header-title">Contact Form</h4>
        <button type="button" data-action="addItem" data-type="contactForm" class="btn btn-sm btn-rounded-circle btn-white mr-2">+</button>
        <button type="button" data-action="removeSection" class="btn btn-sm btn-rounded-circle btn-white mr-2">-</button>
        <a class="btn btn-sm btn-rounded-circle btn-white dropdown-toggle" href="#contact_{{ $component_id }}" data-toggle="collapse"
            role="button" aria-expanded="false" aria-controls="contactForm">
        </a>
    </div>

    <div class="card-body collapse hide" id="contact_{{ $component_id }}">
        <div class="row">
            <div class="col-12">
                <div class="form-group">
                    <label for="">Title</label>
                    <input type="text" class="form-control" data-name="title" value="{{ $content->value[0]->title }}">
                </div>

                <div class="form-group">
                    <label for="">Description</label>
                    <input type="text" class="form-control" data-name="description" value="{{ $content->value[0]->description }}">
                </div>

                <hr>

                <div class="form-group">
                    <label for="">Google Map</label>
                    <textarea data-name="address" rows="4" class="form-control">{{ $content->value[0]->address }}</textarea>
                </div>
            </div>
        </div>
    </div>
</div>