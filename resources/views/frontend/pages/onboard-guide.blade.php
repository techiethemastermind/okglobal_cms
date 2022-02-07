@extends('layouts.frontend.app')

@section('pageContent')
    <div class="no-print" id="wrapper">
        <!-- Page Content -->
        <div id="page-content-wrapper" class="main-wrapper">

            <!-- Navbar -->
            @if ($header == 'block')
                @include('layouts.frontend.header-block')
            @else
                @include('layouts.frontend.header')
            @endif

            <!-- <div class="container-fluid p-3"> -->
            <div class="body-wrapper">
                <main>
                    <!-- Hero part -->
                    <section class="page-inner-banner bg-common money-project-banner"
                        style="background-image: url('/img/money-project/render_v4.png');">
                        <div class="container">
                            <div class="page-banner-text">
                                <div class="banner-header">
                                    <h1>MY IDENTITY COIN a part of “The Money Project”</h1>
                                    <p>by OkGlobal Coin SWITCH - MYID</p>
                                </div>
                            </div>
                        </div>
                    </section>

                    <!-- Proof section -->
                    <section class="proof-section side-video video-main">
                        <div class="px-5">
                            <div class="custom-header text-center">
                                <h1>
                                    Proof of Person technology to protect against theft or loss of your next generation
                                    BORDERLESS money!
                                </h1>
                            </div>
                            <div class="row py-75">
                                <div class="col-md-12 col-lg-7">
                                    <div class="video-popup-cont">
                                        <a href="#" class=" js-modal-btn" data-video-id="_YiasvS-dgA">
                                            <div class="video-thumb">
                                                <img src="/img/money-project/maxresdefault.jpg" alt=""
                                                    class="thumb">
                                                <div class="video-button">
                                                    <div class="blob">
                                                        <div class="shape"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-12 col-lg-5">
                                    <div class="panel-content">
                                        <span class="h1 disc pb-3">No more limits</span>
                                        <span class="h1 disc pb-3">No ID REQUIRED</span>
                                        <span class="h1 disc pb-3">No more currency exchange fees</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                    <!-- MYID expected section -->
                    <section class="myid-expected py-100 section">
                        <div class="px-5">
                            <div class="custom-header text-left">
                                <h1 class="mb-3">MYID expected to INCREASE in value!!!</h1>
                                <span class="h1">AVAILABLE TO EVERYONE!!!</span>
                                <h1 class="font-large text-center my-5"><span class="red">SAVE</span> MONEY, <span class="red">MAKE</span> MONEY TODAY</h1>
                                <h2 class="mb-3 text-right">Come in now and grow your future!</h2>
                                <span class="h2 text-right" style="display: inherit;">Borderless, No ID REQUIRED, The future of REAL MONEY!</span>
                            </div>
                            <div class="container pt-2 video-main video-1">
                                <div class="video-popup-cont">
                                    <a href="javascript: void(0)" class=" js-modal-btn" data-video-id="Hrd_3_7S-qg">
                                        <div class="video-thumb">
                                            <img src="/img/money-project/service.png" alt="" class="thumb">
                                            <div class="video-button">
                                                <div class="blob">
                                                    <div class="shape">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="btn-wrap text-center p-3">
                                <a href="https://wa.me/6585185737" class="">REGISTER AND PURCHASE MYID OVER AT OUR INTERNATION SERVICE CENTER NOW!</a>
                             </div>
                        </div>
                    </section>

                    <!-- Save money section -->
                    {{-- <section class="section-3 section-identity money-project-section-3">
                        <div class="rel px-5">
                            <div class="img-container">
                                <img src="/storage/uploads/1620756751-secured.jpg" alt="" class="display-img">
                            </div>
                            <div class="panel-card w-1200px t-120px">
                                <h2 class="font-italic text-right">Save money at these local businesses now!</h2>
                                <span class="h1 text-right" style="display: inherit;">Our opportunity to reach the dream of financial independence!</span>
                            </div>
                        </div>
                    </section> --}}

                    <!-- The Money Project icons section -->
                    <section class="money-project-icons py-100">
                        <div class="px-5">
                            <div class="custom-header text-center">
                                <h1>
                                    A part of “The Money Project” by OkGlobal Coin SWITCH - MYID
                                </h1>
                            </div>
                            <div class="container img-container mt-5">
                                <img src="{{ asset('img/money-project/6things_v2.png') }}" alt="" class="display-img">
                            </div>
                        </div>
                    </section>

                    <!-- bfusion section -->
                    <section class="busion pt-50">
                        <div class="container img-container text-center">
                            <span class="img-wrap p-5 bg-white">
                                <img src="{{ asset('img/money-project/bfusion-logo-black-blue.png') }}" alt="" class="display-img">
                                <hr>
                                <h3>Cross Border - Smart Growth</h3>
                            </span>
                        </div>
                    </section>

                    <section class="section-3 flip-card panel-project busion-1" id="">
                        <div class="rel mx-5">
                            <div class="img-container">
                                <img src="{{ asset('img/money-project/bfusion-about-us-micro-zones-map.jpg') }}" alt="" class="display-img">
                            </div>
                            <div class="panel-card w-1200px t-120px">
                                <h2>In collaboration with the Border Fusion Initiative: Bringing the border community together through a binational trading vision.</h2>
                            </div>
                        </div>
                        {{-- <div class="px-5">
                            <div class="custom-header text-center py-100">
                                <h1>Local community leader and business support!</h1>
                            </div>
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="panel img-full-width mb-4 p-4">
                                            <img src="{{ asset('assets/img/no-image-thumb.jpg') }}" class="rounded-circle" alt="">
                                        </div>
                                        <div class="panel px-3 icon-description text-center">
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetuer adipscing elit, sed diam nonummy nibh
                                            </p>
                                        </div>
                                    </div>

                                    <div class="col-lg-4">
                                        <div class="panel img-full-width mb-4 p-4">
                                            <img src="{{ asset('assets/img/no-image-thumb.jpg') }}" class="rounded-circle" alt="">
                                        </div>
                                        <div class="panel px-3 icon-description text-center">
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetuer adipscing elit, sed diam nonummy nibh
                                            </p>
                                        </div>
                                    </div>

                                    <div class="col-lg-4">
                                        <div class="panel img-full-width mb-4 p-4">
                                            <img src="{{ asset('assets/img/no-image-thumb.jpg') }}" class="rounded-circle" alt="">
                                        </div>
                                        <div class="panel px-3 icon-description text-center">
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetuer adipscing elit, sed diam nonummy nibh
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                    </section>

                    <!-- Map section -->
                    <section class="section-padding py-100 quote">
                        <div class="container rel">
                            <div class="img-container">
                                <img src="{{ asset('img/money-project/quote.png') }}" alt="" class="display-img">
                            </div>
                        </div>

                        <div class="px-5 rel mt-5">
                            <div class="img-container">
                                <img src="{{ asset('img/money-project/map_v4.png') }}" alt="" class="display-img">
                            </div>
                        </div>
                    </section>

                    <!-- type of MYID section -->
                    <section class="section-padding myid-new-coin">
                        <div class="container rel">
                            <div class="custom-header text-center">
                                <h1>Types of MYID</h1>
                            </div>
                            <div class="row py-100">
                                <div class="col-lg-6 col-md-12">
                                    <div class="coin-card text-center">
                                        <div class="coin-desc">
                                            <h3 class="red">Tradable MYID <br>
                                                Able to Buy/Sell on Exchanges </h3>
                                        </div>
                                        <div class="coin-img">
                                            <img src="{{ asset('img/money-project/MYID-coin-02.png') }}" alt="">
                                        </div>
                                        <div class="coin-desc">
                                            <h2 class="mb-3">MYID (ERC20)</h2>
                                            <span class="h2 light">TRADEABLE contract address:</span>
                                            <span class="h2 bold">0x5273063725a43a323300c502478c22fbb4e92c2d</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-12">
                                    <div class="coin-card text-center">
                                        <div class="coin-desc">
                                            <h3 class="red">Non-Tradable MYID <br>
                                                (Gas fee to be paid later to convert to TRADABLE MYID)</h3>
                                        </div>
                                        <div class="coin-img">
                                            <img src="{{ asset('img/money-project/MYID-coin-02.png') }}" alt="">
                                        </div>
                                        <div class="coin-desc">
                                            <h2 class="mb-3">MYID (TRC20)</h2>
                                            <span class="h2 light">NON-TRADEABLE contract address:</span>
                                            <span class="h2 bold">0xD9625Fd459693Dd012366a207355dfD2FFC461C2</span>
                                            <br>
                                            <span class="h2 light">Network:</span>
                                            <span class="h2 bold">MYID-NON TRADEABLE *DO NOT TRADE* (Ethereum Gas fee to be paid by your request to convert to TRADEABLE MYID)</span>
                                            <br>
                                            <span class="h2 light">RPC Url:</span>
                                            <span class="h2 bold">https://rpc.tomochain.com/</span>
                                            <br>
                                            <span class="h2 light">Chain ID:</span>
                                            <span class="h2 bold">88</span>
                                            <br>
                                            <span class="h2 light">Symbol:</span>
                                            <span class="h2 bold">REMAINING GAS FEE BALANCE </span>
                                            <br>
                                            <span class="h2 light">Block Explorer URL:</span>
                                            <div class="text-center mt-4">
                                                <a class="btn-wrap px-5 py-3" href="https://scan.tomochain.com/tokens/0xd9625fd459693dd012366a207355dfd2ffc461c2" class="">View Here</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                    <!-- Download Wallet section -->
                    <section class="download-wallet py-0 section">
                        <div class="px-5">
                            <div class="custom-header text-center">
                                <h1 class="mb-3">Download your wallet here</h1>
                            </div>
                            <div class="container pt-5 video-main video-1">
                                <div class="metamask-logo text-center">
                                    <img src="{{ asset('img/money-project/mm-logo-01.png') }}" alt="">
                                </div>
                                <div class="download-logos mb-5 mt-3">
                                    <div class="row">
                                        <div class="col-md-3"></div>
                                        <div class="col-md-3 appstore pr-5">
                                            <a href="https://metamask.app.link/skAH3BaF99">
                                                <img src="{{ asset('img/money-project/appstore.png') }}" alt="">
                                            </a>
                                        </div>
                                        <div class="col-md-3 googleplay pl-5">
                                            <a href="https://metamask.app.link/bxwkE8oF99">
                                                <img src="{{ asset('img/money-project/googleplay.png') }}" alt="">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <h2 class="video-title text-center mb-0">Watch how to setup your wallet here</h2>
                                <div class="row text-center mb-3 align-items-center justify-content-center" style="margin-top: 2em;">
                                    <div class="col-md-4 col-sm-6 mb-4">
                                        <div class="embed-responsive embed-responsive-4by3">
                                            <iframe src="https://www.youtube.com/embed/OoxFu56-B_I" frameborder="0" allow="accelerometer; autoplay;  clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6 mb-4">
                                        <div class="embed-responsive embed-responsive-4by3">
                                            <iframe src="https://www.youtube.com/embed/5BBlBuoR-58" frameborder="0" allow="accelerometer; autoplay;  clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6 mb-4">
                                        <div class="embed-responsive embed-responsive-4by3">
                                            <iframe src="https://www.youtube.com/embed/gkghXtBKU68" frameborder="0" allow="accelerometer; autoplay;  clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
                                        </div>
                                    </div>
                                </div>
                                <div class="video-popup-cont mt-1">
                                    <a href="javascript: void(0)" class=" js-modal-btn" data-video-id="Hrd_3_7S-qg">
                                        <div class="video-thumb">
                                            <img src="/img/money-project/service.png" alt="" class="thumb">
                                            <div class="video-button">
                                                <div class="blob">
                                                    <div class="shape"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </section>

                    <!-- Market section -->
                    <section class="section-padding market pb-100">
                        <div class="container rel">
                            <div class="custom-header text-center">
                                <h1>Track MY IDENTITY Coin across multiple exchanges at:</h1>
                            </div>
                            <div class="market-logo text-center mt-4">
                                <img src="{{ asset('img/money-project/coinmarketcap-vector-logo-02.png') }}" alt="">
                            </div>
                            <div class="text-center mt-4">
                                <span class="btn-wrap text-center px-5 p-3">
                                    <a href="https://coinmarketcap.com/currencies/my-identity-coin/" target="_blank">Check Here</a>
                                </span>
                            </div>
                        </div>
                    </section>

                    <!-- Telegram Chat section -->
                    <section class="telegram-chat pb-100">
                        <div class="container rel">
                            <div class="custom-header text-center mb-5">
                                <h1>Telegram chat rooms for MY IDENTITY Coin:</h1>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="text-center mb-5">
                                        <img src="{{ asset('img/money-project/telegram.png') }}" alt="">
                                    </div>
                                    <div class="text-center">
                                        <span class="btn-wrap text-center px-5 p-3">
                                            <a href="https://t.me/myidentitycoin" class="">English</a>
                                        </span>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="text-center mb-5">
                                        <img src="{{ asset('img/money-project/telegram.png') }}" alt="">
                                    </div>
                                    <div class="text-center">
                                        <span class="btn-wrap text-center px-5 p-3">
                                            <a href="https://t.me/myidentitycoinspanish" class="">Spanish</a>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                </main>
            </div>

            @include('layouts.frontend.footer')
        </div>
    </div>
@endsection

@push('after-scripts')
    <script>

    </script>
@endpush
