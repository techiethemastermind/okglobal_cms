<section class="features rel">
    <div class="container">
        <div class="row">
            @foreach($value as $item)
            <div class="common-col col-md-6 col-lg-3">
                <div class="box-under"></div>
                <div class="feature-wrapper">
                    <img src="@if($item->image != '') /storage/uploads/{{ $item->image }} @else{{ asset('assets/img/no-image.jpg') }}@endif" alt="">
                    <h1>{{ $item->title }}</h1>
                    <p>{{ $item->description }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>