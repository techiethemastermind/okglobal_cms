@extends('layouts.backend.app')

@section('content')

@push('after-styles')

<style>
[dir=ltr] .avatar-2by1 {
    width: 8rem;
    height: 2.5rem;
}

[dir=ltr] label.content-left {
    justify-content: left;
}
</style>

@endpush


<!-- HEADER -->
<div class="header">
    <div class="container-fluid">

        <!-- Body -->
        <div class="header-body">
            <div class="row align-items-end">
                <div class="col">

                    <!-- Title -->
                    <h1 class="header-title">
                        Setting
                    </h1>

                </div>
            </div> <!-- / .row -->
        </div> <!-- / .header-body -->

    </div>
</div> <!-- / .header -->

<!-- Container -->
<div class="container-fluid">

    <div class="row">
        <div class="col-12">

            <div class="card">
                <div class="card-body">

                    <ul class="nav nav-tabs nav-tabs-sm nav-overflow header">
                        <li class="nav-item">
                            <a href="#general" class="nav-link active" data-toggle="tab" role="tab">
                                General
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#social" class="nav-link" data-toggle="tab" role="tab">
                                Social Links
                            </a>
                        </li>
                    </ul>

                    <div class="tab-content" id="myTabContent">
                        
                        <div id="general" class="tab-pane fade text-70 active show">
                            <form action="{{ route('admin.settings.general.save') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                
                                <div class="form-group">
                                    <label>App Name: </label>
                                    <input type="text" name="app__name" class="form-control col-lg-8" value="{{ config('app.name') }}">
                                </div>

                                <div class="form-group">
                                    <label>App URL: </label>
                                    <input type="text" name="app__url" class="form-control col-lg-8" value="{{ config('app.url') }}">
                                </div>

                                <div class="form-group">
                                    <label>App Description: </label>
                                    <textarea name="app__description" rows="3" class="form-control col-lg-8">{{ config('app.description') }}</textarea>
                                </div>

                                <hr>

                                <label>App logo & favicon: </label>

                                <div class="form-group row col-8">
                                    <div class="avatar avatar-xxl border mr-4">
                                        <img src="@if(!empty(config('nav_logo'))) 
                                                {{ asset('storage/logos/'.config('nav_logo')) }}
                                            @else 
                                                {{asset('/assets/img/logo.svg')}}
                                            @endif" alt="Avatar" class="avatar-img rounded logo" id="file_nav_logo_preview">
                                    </div>
                                    <div class="from-group col">
                                        <label>Logo for Nav menu (Light version): </label>
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="file_nav_logo" name="nav_logo"
                                                accept="image/jpeg,image/gif,image/png"
                                                data-preview="#file_nav_logo_preview">
                                            <label for="file_nav_logo" class="custom-file-label">Choose file</label>
                                        </div>
                                        <small class="text-muted">Note : Upload logo with transparent background
                                            in .png format and 160x160(WxH) pixels.
                                            Height should be fixed, width according to your aspect ratio.</small>
                                    </div>
                                </div>

                                <div class="form-group row col-8">
                                    <div class="avatar avatar-xxl border mr-4">
                                        <img src="@if(!empty(config('favicon'))) 
                                                {{ asset('storage/logos/'.config('favicon')) }}
                                            @else 
                                                {{asset('/assets/img/logo.svg')}}
                                            @endif" alt="Avatar" class="avatar-img rounded logo" id="file_favicon_preview">
                                    </div>
                                    <div class="from-group col">
                                        <label>Favicon: </label>
                                        <div class="custom-file">
                                            <input type="file" id="file_favicon" name="favicon" class="custom-file-input"
                                                accept="image/jpeg,image/gif,image/png"
                                                data-preview="#file_favicon_preview">
                                            <label for="file_favicon" class="custom-file-label">Choose file</label>
                                        </div>
                                        <small class="text-muted">Note : Upload logo with resolution 32x32 pixels and
                                            extension
                                            .png or .gif or .ico</small>
                                    </div>
                                </div>

                                <hr>

                                <button type="submit" class="btn btn-primary">Update</button>
                                
                            </form>
                        </div>

                        <!-- Tab content for Logo and Favicon -->
                        <div id="social" class="tab-pane fade text-70">
                            <form action="{{ route('admin.settings.general.save') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label>Facebook: </label>
                                    <input type="text" name="social__facebook" class="form-control col-lg-8" value="{{ config('social.facebook') }}">
                                </div>

                                <div class="form-group">
                                    <label>Twitter: </label>
                                    <input type="text" name="social__twitter" class="form-control col-lg-8" value="{{ config('social.twitter') }}">
                                </div>

                                <div class="form-group">
                                    <label>Instagram: </label>
                                    <input type="text" name="social__instagram" class="form-control col-lg-8" value="{{ config('social.instagram') }}">
                                </div>

                                <div class="form-group">
                                    <label>Telegram: </label>
                                    <input type="text" name="social__telegram" class="form-control col-lg-8" value="{{ config('social.telegram') }}">
                                </div>

                                <div class="form-group">
                                    <label>Discord: </label>
                                    <input type="text" name="social__discord" class="form-control col-lg-8" value="{{ config('social.discord') }}">
                                </div>

                                <div class="form-group">
                                    <label>Youtube: </label>
                                    <input type="text" name="social__youtube" class="form-control col-lg-8" value="{{ config('social.youtube') }}">
                                </div>

                                <div class="form-group">
                                    <label>Custom 1: </label>
                                    <input type="text" name="social__custom1" class="form-control col-lg-8" value="{{ config('social.custom1') }}">
                                </div>

                                <hr>

                                <div class="form-group">
                                    <label>CoinDesk: </label>
                                    <input type="text" name="social__coindesk" class="form-control col-lg-8" value="{{ config('social.coindesk') }}">
                                </div>

                                <div class="form-group">
                                    <label>News: </label>
                                    <input type="text" name="social__news" class="form-control col-lg-8" value="{{ config('social.news') }}">
                                </div>

                                <button type="submit" class="btn btn-primary">Update</button>
                            </form>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
</div>

@push('after-scripts')

<script>
    
$(document).ready(function() {

    // Init code
    $('#show_secret').on('click', function(e) {
        if($(this).find('span.fa').hasClass('fa-eye')) {
            $('#services__razorpay__secret').attr('type', 'text');
            $(this).find('span.fa').removeClass('fa-eye');
            $(this).find('span.fa').addClass('fa-eye-slash');
        } else {
            $('#services__razorpay__secret').attr('type', 'password');
            $(this).find('span.fa').addClass('fa-eye');
            $(this).find('span.fa').removeClass('fa-eye-slash');
        }
    });
});

$('form').submit(function(e) {
    e.preventDefault();

    $(this).ajaxSubmit({
        success: function(res) {
            if (res.success) {
                console.log(res);
                swal("Success!", "Successfully updated", "success");
            }
        }
    });
});

$('.custom-checkbox-toggle').on('click', 'input[type="checkbox"]', function() {

    var id = $(this).attr('id');

    if ($(this).prop('checked')) {
        $(this).val('1');
        $('div.wrap[for="' + id + '"').removeClass('d-none');
    } else {
        $(this).val('0');
        $('div.wrap[for="' + id + '"').addClass('d-none');
    }

});
</script>

@endpush

@endsection