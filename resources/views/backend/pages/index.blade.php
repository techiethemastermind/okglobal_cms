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
                        Pages
                    </h1>

                </div>
            </div> <!-- / .row -->
        </div> <!-- / .header-body -->

    </div>
</div> <!-- / .header -->

<!-- Container -->
<div class="container-fluid">

    <div class="row">
        <div class="col-12">

            <!-- Pages -->
            <div class="card" data-list="{&quot;valueNames&quot;: [&quot;name&quot;]}">
                <div class="card-header">

                    <!-- Title -->
                    <h4 class="card-header-title">
                        Pages
                    </h4>

                    <!-- Button -->
                    <a href="{{ route('admin.page.create') }}" class="btn btn-sm btn-primary">
                        Create New Page
                    </a>

                </div>

                <div class="card-header">

                    <!-- Form -->
                    <form>
                        <div class="input-group input-group-flush input-group-merge">

                            <!-- Input -->
                            <input type="search" class="form-control form-control-prepended search"
                                placeholder="Search">

                            <!-- Prepend -->
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <span class="fe fe-search"></span>
                                </div>
                            </div>

                        </div>
                    </form>

                </div>
                <div class="card-body">

                    <!-- List -->
                    <ul class="list-group list-group-lg list-group-flush list my-n4">
                        @foreach($data as $page)
                        <li class="list-group-item">
                            <div class="row align-items-center">
                                <div class="col-auto">

                                    <!-- Avatar -->
                                    <div class="avatar avatar-lg">
                                        <span class="avatar-title rounded">P</span>
                                    </div>

                                </div>
                                <div class="col ml-n2">

                                    <!-- Title -->
                                    <h4 class="mb-1 name">
                                        <a href="#!">{{ $page->title }}</a>
                                    </h4>

                                    <!-- Text -->
                                    <p class="card-text small text-muted mb-1">
                                        {{ $page->slug }}
                                    </p>

                                    <!-- Time -->
                                    <p class="card-text small text-muted">
                                        {{ Carbon\Carbon::parse($page->updated_at)->diffForHumans() }}
                                    </p>

                                </div>

                                <div class="col-auto">
                                    @if($page->published == 1)
                                    <span class="badge badge-soft-primary">Published</span>
                                    @else
                                    <span class="badge badge-soft-secondary">Draft</span>
                                    @endif
                                </div>
                                <div class="col-auto">

                                    <!-- Dropdown -->
                                    <div class="dropdown">
                                        <a href="#" class="dropdown-ellipses dropdown-toggle" role="button"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fe fe-more-vertical"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a href="{{ route('admin.page.edit', $page->id) }}" class="dropdown-item">
                                                Edit
                                            </a>
                                            <a href="#!" class="dropdown-item">
                                                View
                                            </a>
                                            <a href="javascript:void(0)" data-type="delete" data-action="{{ route('admin.page.delete', $page->id) }}" class="dropdown-item">
                                                Delete
                                            </a>
                                        </div>
                                    </div>

                                </div>
                            </div> <!-- / .row -->
                        </li>
                        @endforeach
                    </ul>

                </div>
            </div>

            {!! $data->links() !!}

        </div>
    </div>
</div>

@endsection

@push('after-scripts')
<script>

    $(document).on('click', 'a[data-type=delete]', function(e) {

        var route = $(this).attr('data-action');

        swal({
            title: 'Delete page',
            text: "Please click confirm to delet page",
            type: 'success',
            showCancelButton: false,
            showConfirmButton: true,
            confirmButtonText: "Confirm",
            cancelButtonText: "Cancel",
            dangerMode: false,

        }, function(val) {
            if (val) {
                $.ajax({
                    method: 'GET',
                    url: route,
                    success: function(res) {
                        if(res.success) {
                            window.location.reload();
                        }
                    }
                });
            }
        });
    });
</script>
@endpush