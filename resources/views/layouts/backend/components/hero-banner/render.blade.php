<section class="hero-banner bg-common rel">
    <ul class="list-banner owl-carousel">
        @foreach($value as $item)
        <li class="item">
            <div class="banner-base rel bg-common {{ $item->value[0]->class }}"
                style="background-image: url('/storage/uploads/{{ $item->value[0]->image }}');">
                <div class="container">
                    {!! $item->value[0]->content !!}
                </div>
            </div>
        </li>
        @endforeach
    </ul>
</section>