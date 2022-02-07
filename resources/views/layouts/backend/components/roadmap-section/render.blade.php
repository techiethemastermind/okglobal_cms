
<section class="roadmap-panel">
    <div class="container">
        <div class="roadmap-section">
            <div class="roadmap-wrapper">
                <div class="header text-center">
                    <h1>{{ $value[0]->title }}</h1>
                    <p>{{ $value[0]->description }}</p>
                </div>

                <div class="main-timeline">
                    @foreach($value[0]->value as $item)
                    <div class="timeline">
                        {!! $item->content !!}
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>