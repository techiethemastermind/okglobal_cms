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
                        Navigations
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
            <!-- Button -->
            <div class="card card-header">

                <!-- Title -->
                <h4 class="card-header-title">
                    Navigations
                </h4>

                <button class="btn btn-sm btn-primary" data-toggle="modal" data-target="#modalnew">
                    Create New Navigation
                </button>

            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-6 col-lg-6 col-xl-6">
            <!-- Menus -->
            <div id="menu_wrap">
                @foreach($data as $menu)
                    @include('layouts.backend.portial.menu', ['menu' => $menu])
                @endforeach
            </div>
        </div>
    </div>

</div>

<!-- New Nav Modal -->
<div class="modal fade" id="modalnew" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <form action="{{ route('admin.menu.store') }}" method="post"> @csrf
                <div class="modal-header">
                    <h5 class="modal-title">New Menu</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="">Navigation Title</label>
                        <input type="text" class="form-control" name="title" placeholder="Navigation Title" value="">
                    </div>

                    <div class="form-group">
                        <label for="">Navigation Link</label>
                        <input type="text" class="form-control" name="link" placeholder="Navigation Link" value="">
                    </div>

                    <div class="form-group">
                        <label for="">Menu Type</label>
                        <select name="type" class="form-control">
                            <option value="0">Default</option>
                            <option value="1">Dropdown</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="">Parent</label>
                        <select name="parent" class="form-control">
                            @foreach($data as $item)
                                @if($item->type == '0')
                                <option value="{{ $item->id }}">{{ $item->title }}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" onclick="newMenu(this)">Save changes</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Edit Nav Modal -->
<!-- New Nav Modal -->
<div class="modal fade" id="modaledit" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <form action="" method="post"> @csrf
                <div class="modal-header">
                    <h5 class="modal-title">Edit Menu</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <input type="hidden" name="id" value="">
                    <div class="form-group">
                        <label for="">Navigation Title</label>
                        <input type="text" class="form-control" name="title" placeholder="Navigation Title" value="">
                    </div>

                    <div class="form-group">
                        <label for="">Navigation Link</label>
                        <input type="text" class="form-control" name="link" placeholder="Navigation Link" value="">
                    </div>

                    <div class="form-group">
                        <label for="">Menu Type</label>
                        <select name="type" class="form-control">
                            <option value="0">Default</option>
                            <option value="1">Dropdown</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="">Parent</label>
                        <select name="parent" class="form-control">
                            @foreach($data as $item)
                                @if($item->type == '0')
                                <option value="{{ $item->id }}">{{ $item->title }}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" onclick="updateMenu(this)">Save changes</button>
                </div>
            </form>
        </div>
    </div>
</div>

@push('after-scripts')
<script>

    $(document).ready(function() {
        $('#menu_wrap').sortable({
            containerSelector: 'div#menu_wrap',
            itemSelector: 'div[data-type=menuItem]',
            placeholder: '<div data-type="itemPlaceholder" class="placeholder card card-header" />'
        });

        $('#menu_wrap').on('click', 'button[data-action=edit]', function() {
            $('#modaledit').find('input[name=id]').val($(this).attr('data-id'));
            $('#modaledit').find('input[name=title]').val($(this).attr('data-title'));
            $('#modaledit').find('input[name=link]').val($(this).attr('data-link'));
            $('#modaledit').find('select[name=type]').val($(this).attr('data-type')).change();
            $('#modaledit').find('select[name=parent]').val($(this).attr('data-parent')).change();
            $('#modaledit').modal('toggle');
        });
    });

    function newMenu(ele) {
        $(ele).closest('form').ajaxSubmit({
            success: function(res) {
                if(res.success) {
                    $('#menu_wrap').append(res.html);
                    $('#modalnew').modal('toggle');
                }
            },
            error: function(err) {
                console.log(err);
            }
        });
    }

    function updateMenu(ele) {
        var form = $(ele).closest('form');
        var id = form.find('input[name=id]').val();
        var title = form.find('input[name=title]').val();
        var route = '/dashboard/menu/update/';
        form.attr('action', route);

        form.ajaxSubmit({
            success: function(res) {
                if(res.success) {
                    $('#menu_wrap').find('div[data-menu='+ id +']').find('h4.card-header-title').text(title);
                    $('#modaledit').modal('toggle');
                }
            },
            error: function(err) {
                console.log(err);
            }
        });
    }

</script>
@endpush

@endsection