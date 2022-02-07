<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="OK global CMS" />

    <!-- Libs CSS -->
    <link rel="stylesheet" href="{{ asset('assets/fonts/feather/feather.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/libs/flatpickr/dist/flatpickr.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/libs/quill/dist/quill.core.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/libs/highlightjs/styles/vs2015.css') }}" />

    <!-- Theme CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/theme.min.css') }}" id="stylesheetLight">
    <link rel="stylesheet" href="{{ asset('assets/css/theme-dark.min.css') }}" id="stylesheetDark">

    <!-- Sweet Alert -->
    <link type="text/css" href="{{ asset('assets/css/sweetalert.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">

    <style>
      body {
        display: none;
      }
    </style>

    @stack('after-styles')
    
    <!-- Title -->
    <title>{{ config('app.name') }}</title>

    <link rel="icon" type="image/png" href="{{ asset('/storage/logos/' . config('favicon')) }}">

  </head>
  <body>

    <!-- Side bar -->
    @include('layouts.backend.sidebar')

    <!-- Main Content -->
    <div class="main-content">
        @yield('content')
    </div>

    <!-- JAVASCRIPT -->
    <!-- Libs JS -->
    <script src="{{ asset('assets/libs/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/libs/autosize/dist/autosize.min.js') }}"></script>
    <script src="{{ asset('assets/libs/chart.js/dist/Chart.min.js') }}"></script>
    <script src="{{ asset('assets/libs/dropzone/dist/min/dropzone.min.js') }}"></script>
    <script src="{{ asset('assets/libs/flatpickr/dist/flatpickr.min.js') }}"></script>
    <script src="{{ asset('assets/libs/highlightjs/highlight.pack.min.js') }}"></script>
    <script src="{{ asset('assets/libs/jquery-mask-plugin/dist/jquery.mask.min.js') }}"></script>
    <script src="{{ asset('assets/libs/list.js/dist/list.min.js') }}"></script>
    <script src="{{ asset('assets/libs/quill/dist/quill.min.js') }}"></script>
    <script src="{{ asset('assets/libs/select2/dist/js/select2.full.min.js') }}"></script>
    <script src="{{ asset('assets/libs/chart.js/Chart.extension.js') }}"></script>

    <!-- Sweet Alert -->
    <script src="{{ asset('assets/js/sweetalert.min.js') }}"></script>

    <!-- Theme JS -->
    <script src="{{ asset('assets/js/theme.min.js') }}"></script>
    <script src="{{ asset('assets/js/dashkit.min.js') }}"></script>

    <!-- jQuery Form -->
    <script src="{{ asset('assets/js/jquery.form.min.js') }}"></script>

    <script src="{{ asset('assets/js/helper.js') }}"></script>
    <script src="{{ asset('assets/js/sortable.js') }}"></script>
    <script src="{{ asset('assets/js/components.js') }}"></script>
    
    @stack('after-scripts')

  </body>
</html>
