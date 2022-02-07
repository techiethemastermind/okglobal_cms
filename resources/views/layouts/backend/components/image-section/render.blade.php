<section class="section">
    <div class="container">
        <div class="cont-img">
            @foreach($value as $item)
                @if($item->value[0]->link != '')
                <a href="{{ $item->value[0]->link }}">
                    <img class="img-cont" src="/storage/uploads/{{ $item->value[0]->image }}">
                </a>
                @else
                <img class="img-cont" src="/storage/uploads/{{ $item->value[0]->image }}">
                @endif
            @endforeach
        </div>
    </div>
</section>