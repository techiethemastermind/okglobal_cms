<section class="{{ $value[0]->class }}">

    @if(isset($value[0]->style))
        @if($value[0]->style == 'container')
        <div class="container">
            {!! $value[0]->content !!}
        </div>
        @endif

        @if($value[0]->style == 'full')
            {!! $value[0]->content !!}
        @endif
    @else
        <div class="container">
            {!! $value[0]->content !!}
        </div>
    @endif
</section>
