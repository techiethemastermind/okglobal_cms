@foreach($content as $item)
    @php $component = $item->name @endphp
    @switch($component)
        @case('heroComponent')
            @include('layouts.backend.components.hero-banner.render', ['value' => $item->value])
        @break;

        @case('iconComponent')
            @include('layouts.backend.components.icon-section.render', ['value' => $item->value])
        @break;

        @case('imageComponent')
            @include('layouts.backend.components.image-section.render', ['value' => $item->value])
        @break;

        @case('coinsComponent')
            @include('layouts.backend.components.coins-section.render', ['value' => $item->value])
        @break;

        @case('colComponent')
            @include('layouts.backend.components.col-section.render', ['value' => $item->value])
        @break;

        @case('roadmapComponent')
            @include('layouts.backend.components.roadmap-section.render', ['value' => $item->value])
        @break;

        @case('videoComponent')
            @include('layouts.backend.components.video-section.render', ['value' => $item->value])
        @break;

        @case('htmlComponent')
            @include('layouts.backend.components.html-section.render', ['value' => $item->value])
        @break;

        @case('teamComponent')
            @include('layouts.backend.components.team-section.render', ['value' => $item->value])
        @break;

        @case('sectionComponent')
            @include('layouts.backend.components.custom-section.render', ['value' => $item->value])
        @break;

        @case('bannerComponent')
            @include('layouts.backend.components.banner-section.render', ['value' => $item->value])
        @break;

        @case('countryComponent')
            @include('layouts.backend.components.country-section.render', ['value' => $item->value])
        @break;

        @case('featuresComponent')
            @include('layouts.backend.components.features-section.render', ['value' => $item->value])
        @break;

        @case('contactForm')
            @include('layouts.backend.components.contact-form.render', ['value' => $item->value])
        @break;

        @case('mapComponent')
            @include('layouts.backend.components.map-section.render', ['value' => $item->value])
        @break;
            
    @endswitch
@endforeach