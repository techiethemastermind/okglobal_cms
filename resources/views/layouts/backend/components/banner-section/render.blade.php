@if($value[0]->style == '1')
<section class="page-inner-banner bg-common {{ $value[0]->class }}" style="background-image: url('/storage/uploads/{{ $value[0]->image }}');">
    <div class="container">
        <div class="page-banner-text">
            <div class="banner-header">
                <h1>{{ $value[0]->title }}</h1>
                <p>{{ $value[0]->description }}</p>
            </div>
        </div>
    </div>
</section>
@endif

@if($value[0]->style == '2')
<section class="page-inner-banner bg-common {{ $value[0]->class }}" style="background-image: url('/storage/uploads/{{ $value[0]->image }}');">
    <div class="container">
        <div class="page-banner-text">
            <h1>{{ $value[0]->title }}</h1>
            <div class="page-breadcrumb">
                <ul class="list-inline">
                    <li class="list-inline-item">
                        <a href="">Home |</a>
                    </li>
                    <li class="list-inline-item">
                        <a href="javascript: void(0)">{{ $value[0]->title }}</a>
                    </li>
                </ul>
            </div>

        </div>
    </div>
</section>
@endif

@if($value[0]->style == '3')
<section class="hero-banner bg-common rel page-banner {{ $value[0]->class }}" style="background-image: url('/storage/uploads/{{ $value[0]->image }}');">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-6">
                <div class="hero-caption">
                    <!-- <h1>This is yours, This is Ours.</h1> -->
                    <h1>{{ $value[0]->title }}</h1>
                    <p>{{ $value[0]->description }}</p>
                </div>
            </div>
        </div>
    </div>
</section>
@endif