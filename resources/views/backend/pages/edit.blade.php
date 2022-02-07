@extends('layouts.backend.app')

@section('content')
<!-- HEADER -->
<div class="header">
    <div class="container-fluid">

        <!-- Body -->
        <div class="header-body">
            <div class="row align-items-end">
                <div class="col">

                    <!-- Title -->
                    <h1 class="header-title">
                        Edit Page
                    </h1>

                </div>
            </div> <!-- / .row -->
        </div> <!-- / .header-body -->

    </div>
</div> <!-- / .header -->

<!-- Container -->
<div class="container-fluid">
    <div class="row">

        <div class="col-9 col-lg-9 col-xl-9">
            <!-- Form -->
            <form id="pageForm" method="POST" action="{{ route('admin.page.updatepage') }}" enctype="multipart/form-data"> @csrf
                <input type="hidden" name="id" value="{{ $page->id }}">
                <div class="form-group">
                    <label for="pageTitle">Page Title</label>
                    <input type="text" class="form-control form-control-lg" id="pageTitle" name="pageTitle" value="{{ $page->title }}"
                        placeholder="Enter Page Title">
                </div>
                <div class="form-group">
                    <label for="pageSlug">Slug</label>
                    <input type="text" class="form-control" id="pageSlug" name="pageSlug" value="{{ $page->slug }}" placeholder="Slug">
                </div>

                <div class="form-group">
                    <label class="bold">Components</label>
                    <button type="button" class="btn btn-outline-secondary btn-block mb-24pt mb-sm-0" data-toggle="modal"
                        data-target="#componentModal">+ Add</button>
                </div>

                <hr>

                <!-- components -->
                <div class="form-group" data-type="componentWrap" id="components">
                    @component('layouts.backend.components.components', ['page' => $page]) @endcomponent
                </div>

                <hr>
                
                <div class="form-group">
                    <button type="button" class="btn btn-outline-secondary btn-block mb-24pt mb-sm-0" data-toggle="modal"
                        data-target="#componentModal">+ Add</button>
                </div>
            </form>
        </div>

        <div class="col-3 col-lg-3 col-xl-3">
            <div class="card">
                <div class="card-header">
                    <button type="button" class="btn btn-primary mr-3" data-type="1">Publish</button>
                    <button type="button" class="btn btn-danger" data-type="0">Save Draft</button>
                </div>
                <div class="card-body">
                    <p class="mb-3 name">
                        Status
                    </p>
                    <p class="mb-1 name">
                        Visibility
                    </p>
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    <h4 class="card-header-title">Page Attribute</h4>
                </div>

                <div class="card-body">
                    <div class="form-group">
                        <label>Page Template</label>
                        <select id="pageTemplate" class="custom-select" data-toggle="select">
                            <option @if($page->template == 'Homepage') selected @endif>Homepage</option>
                            <option @if($page->template == 'Default') selected @endif>Default</option>
                            <option @if($page->template == 'Dark') selected @endif>Dark</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Header Style</label>
                        <select id="headerTemplate" class="custom-select" data-toggle="select">
                            <option value="fixed" @if($page->header == 'fixed') selected @endif>Fixed Header</option>
                            <option value="block" @if($page->header == 'block') selected @endif>Block Header</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Order</label>
                        <input type="number" class="form-control" value="0">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Left side Modal -->
<div class="modal fade fixed-left" id="componentModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-vertical" role="document">
        <div class="modal-content">
            <div class="modal-body" data-list="{&quot;valueNames&quot;: [&quot;name&quot;]}">

                <!-- Form -->
                <form class="mb-4">
                    <div class="input-group input-group-merge input-group-rounded">

                        <!-- Input -->
                        <input type="search" class="form-control form-control-prepended list-search" placeholder="Search">

                        <!-- Prepend -->
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <span class="fe fe-search"></span>
                            </div>
                        </div>

                    </div>
                </form>

                <!-- List group -->
                <div class="my-n3">
                    <div class="list-group list-group-flush list-group-focus list">
                        @component('layouts.backend.components.icons') @endcomponent
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@push('after-scripts')

<script>

    $(document).ready(function() {

        // events
        $('button[data-type]').on('click', function(e) {
            
            var published = $(this).attr('data-type');

            var components_json = JSON.stringify(get_component_data());

            $('#pageForm').ajaxSubmit({
                beforeSubmit: function(formData, formObject, formOptions) {

                    formData.push({
                        name: 'template',
                        type: 'text',
                        value: $('#pageTemplate').val()
                    });

                    formData.push({
                        name: 'header',
                        type: 'text',
                        value: $('#headerTemplate').val()
                    });

                    formData.push({
                        name: 'published',
                        type: 'text',
                        value: published
                    });

                    // Append data
                    formData.push({
                        name: 'components',
                        type: 'text',
                        value: components_json
                    });
                },
                success: function(res) {
                    if(res.success) {
                        swal('Success!', res.message, 'success');
                    }
                },
                error: function(err) {
                    console.log(err);
                }
            });
        });
    });
</script>

@endpush