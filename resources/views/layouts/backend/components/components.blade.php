@if(isset($page->content))
@foreach(json_decode($page->content) as $content)
    @if($content->name == 'heroComponent')
        @component('layouts.backend.components.hero-banner.card', ['content' => $content]) @endcomponent
    @endif
    @if($content->name == 'iconComponent')
        @component('layouts.backend.components.icon-section.card', ['content' => $content]) @endcomponent
    @endif
    @if($content->name == 'imageComponent')
        @component('layouts.backend.components.image-section.card', ['content' => $content]) @endcomponent
    @endif
    @if($content->name == 'coinsComponent')
        @component('layouts.backend.components.coins-section.card', ['content' => $content]) @endcomponent
    @endif
    @if($content->name == 'colComponent')
        @component('layouts.backend.components.col-section.card', ['content' => $content]) @endcomponent
    @endif
    @if($content->name == 'roadmapComponent')
        @component('layouts.backend.components.roadmap-section.card', ['content' => $content]) @endcomponent
    @endif
    @if($content->name == 'videoComponent')
        @component('layouts.backend.components.video-section.card', ['content' => $content]) @endcomponent
    @endif
    @if($content->name == 'htmlComponent')
        @component('layouts.backend.components.html-section.card', ['content' => $content]) @endcomponent
    @endif
    @if($content->name == 'teamComponent')
        @component('layouts.backend.components.team-section.card', ['content' => $content]) @endcomponent
    @endif
    @if($content->name == 'sectionComponent')
        @component('layouts.backend.components.custom-section.card', ['content' => $content]) @endcomponent
    @endif
    @if($content->name == 'bannerComponent')
        @component('layouts.backend.components.banner-section.card', ['content' => $content]) @endcomponent
    @endif
    @if($content->name == 'countryComponent')
        @component('layouts.backend.components.country-section.card', ['content' => $content]) @endcomponent
    @endif
    @if($content->name == 'featuresComponent')
        @component('layouts.backend.components.features-section.card', ['content' => $content]) @endcomponent
    @endif
    @if($content->name == 'contactForm')
        @component('layouts.backend.components.contact-form.card', ['content' => $content]) @endcomponent
    @endif
    @if($content->name == 'mapComponent')
        @component('layouts.backend.components.map-section.card', ['content' => $content]) @endcomponent
    @endif
@endforeach
@endif