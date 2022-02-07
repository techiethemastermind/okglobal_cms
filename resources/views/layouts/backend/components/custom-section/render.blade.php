@if(isset($value[0]->style) && ($value[0]->style == '1'))
<section class="section {{ $value[0]->class }}">
    <div class="container">
        <div class="row">
            @if($value[0]->type == '1')
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 pb-3">
                {!! $value[0]->content !!}
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 pb-4">
                <img src="@if($value[0]->image != '')/storage/uploads/{{ $value[0]->image }}@else{{ asset('assets/img/no-image.jpg') }}@endif" alt="">
            </div>
            @else
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 pb-4">
                <img src="@if($value[0]->image != '')/storage/uploads/{{ $value[0]->image }}@else{{ asset('assets/img/no-image.jpg') }}@endif" alt="">
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 pb-3">
                {!! $value[0]->content !!}
            </div>
            @endif
        </div>
    </div>
</section>
@endif

@if(isset($value[0]->style) && ($value[0]->style == '2'))
<section class="rel bg-common next {{ $value[0]->class }}" style="background-image: url(@if($value[0]->image != '')/storage/uploads/{{ $value[0]->image }}@else{{ asset('assets/img/no-image.jpg') }}@endif);" id="purchase-currency">
    <div class="container z-top">
        <div class="panel-content">
            {!! $value[0]->content !!}
        </div>
    </div>
</section>
@endif