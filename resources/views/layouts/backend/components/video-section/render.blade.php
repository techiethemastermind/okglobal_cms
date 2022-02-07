
@if($value[0]->style == '1')
<section class="video-main video-1">
    <div class="container">
        <div class="header text-center">
        <h1>{!! $value[0]->value[0]->title !!}</h1>
        </div>
        <div class="panel-content-text text-center">
            {!! $value[0]->value[0]->description !!}
        </div>
        <div class="video-popup-cont">
            <a href="javascript: void(0)" class=" js-modal-btn" data-video-id="4-N1Qv4HJkE">
                <div class="video-thumb">
                    <img src="/img/banner-about.jpg" alt="" class="thumb">
                    <div class="video-button">
                        <div class="blob">
                            <div class="shape">
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </div>
</section>
@endif

@if($value[0]->style == '2')
<section class="youtube-thumbs">
    <div class="container">
        <h1 class="title">Our Videos</h1>
        <div class="row text-center mb-3 align-items-center justify-content-center">
            @foreach($value[0]->value as $item)
                @if($item->type == '1')
                <div class="col-lg-6 mb-4">
                    <div class="embed-responsive embed-responsive-4by3">
                        <iframe src="{{ $item->link }}" frameborder="0" allow="accelerometer; autoplay;  clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
                    </div>
                </div>
                @else
                <div class="col-lg-3 col-md-4 d-none">
                    <a href="#" class="video-watch js-modal-btn hvr-grow" data-video-id="{{ $item->link }}">
                        <div class="icon">
                            <img src="/img/youtube-eliminate-{{ $loop->iteration }}.jpg" alt="">
                            <h1 class="video-title">{{ $item->description }}</h1>
                        </div>
                    </a>
                </div>
                @endif
            @endforeach
        </div>
    </div>
</section>
@endif