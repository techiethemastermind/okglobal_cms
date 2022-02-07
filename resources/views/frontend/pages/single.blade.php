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
@endsection

@push('after-scripts')
<script>
    $(document).ready(function() {
        if('{{ $slug }}' == 'thank-you') {
            $('header').addClass('active_bg');
        }
    });
</script>
@endpush
