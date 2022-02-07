<section class="section {{ $value[0]->class }}">
    <div class="container">
        <div class="header">
            <h2 class="text-center">
                {!! $value[0]->title !!}
            </h2>
        </div>
        <div class="icon-area text-center">
            <a href="{{ $value[0]->link }}" class="telegram-icon" target="_blank">
                <img src="/storage/uploads/{{ $value[0]->image }}" alt="">
            </a>
        </div>
    </div>
</section>