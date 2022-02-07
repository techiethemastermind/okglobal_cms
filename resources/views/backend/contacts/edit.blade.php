@extends('layouts.backend.app')

@section('content')
<!-- HEADER -->
<div class="header">
    <div class="container-fluid">

        <!-- Body -->
        <div class="header-body">
            <div class="row align-items-end">
                <div class="col">

                    <!-- Title -->
                    <h1 class="header-title">
                        Contact Detail
                    </h1>

                </div>
            </div> <!-- / .row -->
        </div> <!-- / .header-body -->

    </div>
</div> <!-- / .header -->

<!-- Container -->
<div class="container-fluid">

    <div class="row">
        <div class="col-6">
            <div class="form-group">
                <label>Name: </label>
                <input type="text" class="form-control form-control-lg" value="{{ $data->name }}">
            </div>

            <div class="form-group">
                <label>Subject: </label>
                <input type="text" class="form-control form-control-lg" value="{{ $data->subject }}">
            </div>

            <div class="form-group">
                <label>Email: </label>
                <input type="text" class="form-control form-control-lg" value="{{ $data->email }}">
            </div>

            <div class="form-group">
                <label>Message: </label>
                <textarea rows="5" class="form-control">{{ $data->message }}</textarea>
            </div>
        </div>
    </div>

@endsection