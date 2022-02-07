<header class="main_header_bg" id="site-header">
    <nav id="translator_wrap" class="top-bar container justify-content-right">
        <div id="conveythis-wrapper-main" class="d-none">
            <a href="https://www.conveythis.com" class="conveythis-no-translate notranslate" title="ConveyThis" >ConveyThis</a>
        </div>
    </nav>
    <nav class="navbar navbar-light navbar-expand-lg  justify-content-center container">
        <a href="/" class="navbar-brand mr-0">
            <img src="/img/logo.png" alt="">
        </a>
        <a href="https://global.bittrex.com/Market/Index?MarketName=USDT-MYID" class="scond-logo" target="_blank">
            <img src="/img/MYID-Button.png" alt="">
        </a>
        <a href="/onboarding-guide" class="scond-logo onboard">
            <img src="{{ asset('img/money-project/onboarding-guide.png') }}" alt="">
        </a>
        <button class="navbar-toggler ml-1" type="button" data-toggle="collapse"
            data-target="#collapsingNavbar2">
            <span class="nav-toggle__text"></span>
        </button>
        <div class="navbar-collapse collapse justify-content-between align-items-center w-100"
            id="collapsingNavbar2">
            <ul class="navbar-nav nav-main ml-auto text-center">
                <?php $menu_data = \App\Models\Menu::where('type', '0')->orderBy('order')->get(); ?>
                @foreach($menu_data as $item)
                <?php $sub_items = \App\Models\Menu::where('type', '1')->where('parent', $item->id)->orderBy('order')->get(); ?>
                    @if($sub_items->count() > 0)
                    <li class="nav-item dropdown">
                        <a href="#" class="dropdown-toggle" role="button" id="dropdown_{{ $item->id }}"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ $item->title }}</a>
                        <div class="dropdown-menu" aria-labelledby="dropdown_{{ $item->id }}">
                            @foreach($sub_items as $sub)
                            <a class="dropdown-item" href="/{{ $sub->link }}">{{ $sub->title }}</a>
                            @endforeach
                        </div>
                    </li>
                    @else
                    <li class="nav-item">
                        <a href="/{{ $item->link }}">{{ $item->title }}</a>
                    </li>
                    @endif
                @endforeach
            </ul>
        </div>
    </nav>
</header>

@push('after-styles')
<style>
    .top-bar {
        height: 25px;
    }
    #conveythis-wrapper {
        top: 5px;
        left: inherit !important;
        right: 24px;
        height: 40px;
    }
    #conveythis-wrapper div {
        background-color: #d1d4dc !important;
        border: none !important;
        color: #333 !important;
        border-radius: 5px;
    }
</style>
@endpush

@push('after-scripts')

<script src="//s2.conveythis.com/javascriptClassic/1/conveythis.js"></script>
<script src="//s2.conveythis.com/javascriptClassic/1/translate.js"></script>
<script type="text/javascript">
    document.addEventListener("DOMContentLoaded", function(e) {
        conveythis.init({source_language_id: 703, languages: [{"id":"703","active":true},{"id":"747","active":false},{"id":"742","active":false},{"id":"777","active":false},{"id":"739","active":false},{"id":"756","active":false},{"id":"719","active":false},{"id":"730","active":false},{"id":"727","active":false},{"id":"771","active":false},{"id":"734","active":false},{"id":"707","active":false}]})
    });
</script>

<script>
    $(document).ready(function(e) {
        $('#conveythis-wrapper').appendTo('#translator_wrap');
    });
</script>
@endpush
