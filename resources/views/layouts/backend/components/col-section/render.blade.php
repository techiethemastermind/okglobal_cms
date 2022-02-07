@if($value[0]->style == '1')
<section class="section-3 @if(isset($value[0]->class)){{ $value[0]->class }}@endif" @if(isset($value[0]->id)) id="{{ $value[0]->id }}" @endif>
    <div class="container rel">
        <div class="img-container">
            <img src="/storage/uploads/{{ $value[0]->image }}"
                alt="" class="display-img">
        </div>
        <div class="panel-card">
            <h2>{{ $value[0]->title }}</h2>
            <p>{!! $value[0]->description !!}</p>
            <div class="section-button text-left">
                {!! $value[0]->buttons !!}
            </div>
        </div>
    </div>
</section>
@endif

@if($value[0]->style == '2')
<section class="section-3 flip-card @if(isset($value[0]->class)){{ $value[0]->class }}@endif" @if(isset($value[0]->id)) id="{{ $value[0]->id }}" @endif>
    <div class="container rel">
        <div class="img-container">
            <img src="/storage/uploads/{{ $value[0]->image }}" alt="" class="display-img">
        </div>
        <div class="panel-card">
            <h2>{{ $value[0]->title }}</h2>
            <p>{!! $value[0]->description !!}</p>
            <div class="section-button text-left">
                {!! $value[0]->buttons !!}
            </div>
        </div>
    </div>
</section>
@endif

@if($value[0]->style == '3')
<section class="rel metamask @if(isset($value[0]->class)){{ $value[0]->class }}@endif" @if(isset($value[0]->id)) id="{{ $value[0]->id }}" @endif>
    <div class="shadow-box"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-6">
                <div class="panel-content">
                    <h1>{{ $value[0]->title }}</h1>
                    {!! $value[0]->description !!}
                    {!! $value[0]->buttons !!}
                </div>
            </div>
            <div class="col-md-12 col-lg-6">
                <div class="panel-image wow bounceInDown" style="visibility: visible; animation-name: bounceInDown;">
                    <img src="/storage/uploads/{{ $value[0]->image }}" alt="">
                </div>
            </div>
        </div>
    </div>
</section>
@endif

@if($value[0]->style == '4')
<section class="team-section @if(isset($value[0]->class)){{ $value[0]->class }}@endif" @if(isset($value[0]->id)) id="{{ $value[0]->id }}" @endif>
    <div class="container">
        <div class="mr-kim">
            <div class="row">
                <div class="col-lg-6 mb-4 text-center">
                    <img src="/storage/uploads/{{ $value[0]->image }}" alt="">
                </div>
                <div class="col-lg-6">
                    <div class="mr-kim-text">
                        <h1>{{ $value[0]->title }}</h1>
                        {!! $value[0]->description !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endif

@if($value[0]->style == '5')
<section class="side-video video-main" @if(isset($value[0]->id)) id="{{ $value[0]->id }}" @endif>
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-5">
                <div class="panel-content">
                    <h1>{{ $value[0]->title }}</h1>
                    <p>{{ $value[0]->description }}</p>
                </div>
            </div>
            <div class="col-md-12 col-lg-7">
                <div class="video-popup-cont">
                    <a>
                        <div class="video-thumb">
                            <img src="/storage/uploads/{{ $value[0]->image }}" alt="" class="thumb">
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
@endif