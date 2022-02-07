@extends('layouts.frontend.app')

@section('pageContent')
    <div class="no-print" id="wrapper">
        <!-- Page Content -->
        <div id="page-content-wrapper" class="main-wrapper">

            <!-- Navbar -->
            @if($header == 'block')
                @include('layouts.frontend.header-block')
            @else
                @include('layouts.frontend.header')
            @endif

            <!-- <div class="container-fluid p-3"> -->
            <div class="body-wrapper">
                <main>
                    @include('layouts.frontend.renders', ['content' => $content]) 
                </main>
            </div>

            @include('layouts.frontend.footer')
        </div>
    </div>

<!-- Modal -->

<!-- Modal -->
<div class="modal fade download-modal" id="myModal" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <!-- <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div> -->
            <div class="modal-body">
                <ul class="list-language row">
                    <li class="common-col col-md-6 col-lg-4">
                        <div class="language-wrapper">
                            <h1>Spanish</h1>
                            <a href="./PDF/White Paper - Spanish.pdf" download> Download</a>
                        </div>
                    </li>
                    <li class="common-col col-md-6 col-lg-4">
                        <div class="language-wrapper">
                            <h1>Indonesian</h1>
                            <a href="./PDF/White Paper - Indonesian.pdf" download> Download</a>
                        </div>
                    </li>
                    <li class="common-col col-md-6 col-lg-4">
                        <div class="language-wrapper">
                            <h1>Hindi</h1>
                            <a href="PDF/White Paper - Hindi.pdf" download> Download</a>
                        </div>
                    </li>
                    <li class="common-col col-md-6 col-lg-4">
                        <div class="language-wrapper">
                            <h1>Filipino</h1>
                            <a href="./PDF/White Paper - Filipino.pdf" download> Download</a>
                        </div>
                    </li>
                    <li class="common-col col-md-6 col-lg-4">
                        <div class="language-wrapper">
                            <h1>French</h1>
                            <a href="./PDF/White Paper - French.pdf" download> Download</a>
                        </div>
                    </li>
                    <li class="common-col col-md-6 col-lg-4">
                        <div class="language-wrapper">
                            <h1>Portuguese</h1>
                            <a href="./PDF/White Paper - Portuguese.pdf" download> Download</a>
                        </div>
                    </li>
                    <li class="common-col col-md-6 col-lg-4">
                        <div class="language-wrapper">
                            <h1>Turkish</h1>
                            <a href="./PDF/White Paper - Turkish.pdf" download> Download</a>
                        </div>
                    </li>
                    <li class="common-col col-md-6 col-lg-4">
                        <div class="language-wrapper">
                            <h1>Chinese</h1>
                            <a href="PDF/White Paper - Chinese.pdf" download> Download</a>
                        </div>
                    </li>
                    <li class="common-col col-md-6 col-lg-4">
                        <div class="language-wrapper">
                            <h1>English</h1>
                            <a href="./PDF/whitepaper_28112020(Eng).pdf" download> Download</a>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
@endsection

@push('after-scripts')
@endpush
