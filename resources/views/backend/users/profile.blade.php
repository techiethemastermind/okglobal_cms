@extends('layouts.backend.app')

@section('content')


<!-- HEADER -->
<div class="header">

    <!-- Image -->
    <img src="{{ asset('assets/img/covers/profile-cover-1.jpg') }}" class="header-img-top"
        alt="...">

    <div class="container-fluid">

        <!-- Body -->
        <div class="header-body mt-n5 mt-md-n6">
            <div class="row align-items-end">
                <div class="col-auto">

                    <!-- Avatar -->
                    <div class="avatar avatar-xxl header-avatar-top">
                        <span class="avatar-title rounded-circle">AD</span>
                    </div>

                </div>
                <div class="col mb-3 ml-n3 ml-md-n2">

                    <!-- Pretitle -->
                    <h6 class="header-pretitle">
                        Administrator
                    </h6>

                    <!-- Title -->
                    <h1 class="header-title">
                        {{ $user->name }}
                    </h1>

                </div>
            </div>
        </div> <!-- / .header-body -->
    </div>
</div>

<!-- Container -->
<div class="container-fluid">
    <div class="row">
        <div class="col-8">

        
            @if ($message = Session::get('error'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Error!</strong> {{ $message }}

                    <!-- Button -->
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>

                </div>
            @endif

            @if ($message = Session::get('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Success!</strong> {{ $message }}

                    <!-- Button -->
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>

                </div>
            @endif

            <div class="card">
                <div class="card-body">

                    <form method="POST" action="{{ route('admin.profile.update') }}">@csrf

                        <input type="hidden" name="id" value="{{ $user->id }}">

                        <div class="form-group">
                            <label for="">Name: </label>
                            <input type="text" name="name" class="form-control" placeholder="Your name" value="{{ $user->name }}">
                        </div>

                        <div class="form-group">
                            <label for="">Email: </label>
                            <input type="text" name="email" class="form-control" placeholder="Your Email" value="{{ $user->email }}">
                        </div>

                        <hr>

                        <div class="form-group">
                            <label for="">Old Password</label>
                            <input type="password" class="form-control" name="old_password" placeholder="Old Password">
                        </div>

                        <div class="form-group">
                            <label for="">New Password</label>
                            <input type="password" class="form-control" name="new_password" placeholder="New Password">
                        </div>

                        <div class="form-group">
                            <label for="">Confirm Password</label>
                            <input type="password" class="form-control" name="confirm_password" placeholder="Confirm Password">
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection