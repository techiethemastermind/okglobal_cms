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
                        Subscribers
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
                        Subscribers
                    </h4>
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

                <div class="table-responsive" data-list='{"valueNames": ["tables-row", "tables-name", "tables-email", "tables-handle", "tables-status"]}'>
                    <table class="table table-sm">
                        <thead>
                            <tr>
                                <th scope="col">
                                    <a href="#" class="text-muted list-sort" data-sort="tables-row">#</a>
                                </th>
                                <th scope="col">
                                    <a href="#" class="text-muted list-sort" data-sort="tables-email">Email</a>
                                </th>
                                <th scope="col">
                                    <a href="#" class="text-muted list-sort" data-sort="tables-status">Status</a>
                                </th>
                                <th scope="col">
                                    <a href="#" class="text-muted list-sort">Action</a>
                                </th>
                            </tr>
                        </thead>
                        <tbody class="list">
                            @foreach($data as $item)
                            <tr>
                                <th scope="row" class="tables-row">{{ $loop->iteration }}</th>
                                <td class="tables-email">{{ $item->email }}</td>
                                <td class="tables-status">
                                    @if($item->status == 1)
                                    <span class="badge badge-pill badge-primary">Confirmed</span>
                                    @else
                                    <span class="badge badge-pill badge-info">Pending</span>
                                    @endif
                                </td>
                                <td>
                                    <!-- Dropdown -->
                                    <div class="dropdown">
                                        <a href="#" class="dropdown-ellipses dropdown-toggle" role="button"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fe fe-more-vertical"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a href="javascript:void(0)" data-type="detail" class="dropdown-item">
                                                Detail
                                            </a>
                                            <a href="javascript:void(0)" data-type="delete" class="dropdown-item">
                                                Delete
                                            </a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

            {!! $data->links() !!}

        </div>
    </div>
</div>

@endsection