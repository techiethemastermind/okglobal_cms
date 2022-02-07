@if($value->style == '1')
<section class="country-list">
    <div class="container container-wrapper">
        <div class="row">
            @foreach($value->value as $item)
            <div class="col-md-6 col-lg-3">
                <div class="country-wrapper">
                    <img src="@if($item->image != '') /storage/uploads/{{ $item->image }} @else{{ asset('assets/img/no-image.jpg') }}@endif"
                        alt="">
                    <div class="name">
                     <h1>{{ $item->title }}</h1>
                        {!! $item->description !!}
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endif

@if($value->style == '2')
<section class="country-list panel-2-business">
    <div class="container container-wrapper">
        <div class="row">
            @foreach($value->value as $item)
            @if($loop->iteration < 4)
            <div class="col-md-6 col-lg-4">
                <div class="country-wrapper">
                    <img src="@if($item->image != '') /storage/uploads/{{ $item->image }} @else{{ asset('assets/img/no-image.jpg') }}@endif" alt="">
                    <div class="name">
                        <h1>{{ $item->title }}</h1>
                        {!! $item->description !!}
                    </div>
                </div>
            </div>
            @endif
            @endforeach
        </div>
    </div>
</section>
@endif

@if($value->style == '3')
<section class="country-list feature-ok">
    <div class="container container-wrapper">
        <div class="header">
            <h1>Our OkGlobal Coin Features</h1>
        </div>
        <div class="row">
            @foreach($value->value as $item)
            <div class="col-md-6 col-lg-3">
                <div class="country-wrapper">
                    <h1 class="title">{{ $item->title }}</h1>
                    <img src="@if($item->image != '') /storage/uploads/{{ $item->image }} @else{{ asset('assets/img/no-image.jpg') }}@endif" alt="">
                    <div class="name">
                        {!! $item->description !!}
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endif