@extends('admin.layouts.app')
@section('title', 'Menus Builder')
@section('content')
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">
                <span class="page-title-icon bg-gradient-primary text-white me-2">
                    <i class="mdi mdi-settings"></i>
                </span> Menus Builder
            </h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('admin.menus.index') }}">Trở về danh sách</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{ $data->title }}</li>
                </ol>
            </nav>
        </div>
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        @if ($menuitems)
                            <div class="form-group">
                                <ul class="menu ui-sortable" id="menuitems">
                                    @foreach ($menuitems as $key => $item)
                                        <li data-id="{{ $item->id }}">
                                            <span class="menu-item-bar">
                                                {{ $item->title }}
                                                <a href="#collapseMenu{{ $item->id }}" data-toggle="collapse"
                                                    aria-controls="collapseMenu{{ $item->id }}"
                                                    data-target="#collapseMenu{{ $item->id }}" style="color: #aaaaaa;">
                                                    <i class="fas fa-caret-down" id="caret-menu-0-{{ $item->id }}"
                                                        onclick="changeIconCaret('menu-0-{{ $item->id }}')"></i></a>
                                            </span>
                                            <div class="collapse" id="collapseMenu{{ $item->id }}">
                                                <div class="input-box">
                                                    <form method="post"
                                                        {{-- action="{{ route('app.updateMenuItem', $item->id) }}" --}}
														>
                                                        {{ csrf_field() }}
                                                        <div class="form-group">
                                                            <label><i>Nhãn điều hướng:</i></label>
                                                            <input type="text" name="title"
                                                                value="@if (empty($item->name)) {{ $item->title }} @else {{ $item->name }} @endif"
                                                                class="form-control" />
                                                        </div>
                                                        @if ($item->type == 'custom')
                                                            <div class="form-group">
                                                                <label><i>URL:</i></label>
                                                                <input type="text" name="slug"
                                                                    value="{{ $item->slug }}" class="form-control" />
                                                            </div>
                                                        @else
                                                            <div class="form-group">
                                                                <label><i>Gốc:
                                                                        {{ $item->category_origin }}</i></label>
                                                            </div>
                                                        @endif
                                                        <div class="form-group">
                                                            <button class="btn btn-sm btn-outline-primary">
                                                                Save
                                                            </button>
                                                            <button type="button" class="btn btn-sm btn-outline-danger"
                                                                onclick="deleteDataMenuItem({{ $item->id }})">Delete
                                                            </button>
                                                        </div>
                                                    </form>
                                                    {{-- <form id="delete-item-form-{{ $item->id }}"
                                                        action="{{ route('app.deleteMenuItem', ['id' => $item->id, 'key' => $key]) }}"
                                                        method="POST" style="display: none;">
                                                        @csrf()
                                                        @method('DELETE')
                                                    </form> --}}
                                                </div>
                                            </div>
                                            <ul>
                                                @if (isset($item->children))
                                                    @foreach ($item->children[0] as $key1 => $children)
                                                        <li data-id="{{ $children->id }}">
                                                            <span class="menu-item-bar">
                                                                {{ $children->title }}
                                                                <a href="#collapseChild1{{ $children->id }}"
                                                                    class="pull-right" data-toggle="collapse"
                                                                    style="color: #aaaaaa;"><i class="fas fa-caret-down"
                                                                        id="caret-menu-1-{{ $children->id }}"
                                                                        onclick="changeIconCaret('menu-1-{{ $children->id }}')"></i></a>
                                                            </span>
                                                            <div class="collapse" id="collapseChild1{{ $children->id }}">
                                                                <div class="input-box">
                                                                    <form method="post"
                                                                        {{-- action="{{ route('app.updateMenuItem', $children->id) }}" --}}
																		>
                                                                        {{ csrf_field() }}
                                                                        <div class="form-group">
                                                                            <label><i>Nhãn điều
                                                                                    hướng:</i></label>
                                                                            <input type="text" name="name"
                                                                                value="@if (empty($children->name)) {{ $children->title }} @else {{ $children->name }} @endif"
                                                                                class="form-control" />
                                                                        </div>
                                                                        @if ($children->type == 'custom')
                                                                            <div class="form-group">
                                                                                <label><i>URL:</i></label>
                                                                                <input type="text" name="slug"
                                                                                    value="{{ $children->slug }}"
                                                                                    class="form-control" />
                                                                            </div>
                                                                        @else
                                                                            <div class="form-group">
                                                                                <label><i>Gốc:
                                                                                        {{ $children->category_origin }}</i></label>
                                                                            </div>
                                                                        @endif
                                                                        <div class="form-group">
                                                                            <button class="btn btn-sm btn-outline-primary">
                                                                                Save
                                                                            </button>
                                                                            <button type="button"
                                                                                class="btn btn-sm btn-outline-danger"
                                                                                onclick="deleteDataMenuItem({{ $children->id }})">
                                                                                Delete
                                                                            </button>
                                                                        </div>
                                                                    </form>
                                                                    {{-- <form id="delete-item-form-{{ $children->id }}"
                                                                        action="{{ route('app.deleteMenuItem', ['id' => $children->id, 'key' => $key, 'key1' => $key1]) }}"
                                                                        method="POST" style="display: none;">
                                                                        @csrf()
                                                                        @method('DELETE')
                                                                    </form> --}}
                                                                </div>
                                                            </div>
                                                            <ul>
                                                                @if (isset($children->children))
                                                                    @foreach ($children->children[0] as $key2 => $child)
                                                                        <li data-id="{{ $child->id }}">
                                                                            <span class="menu-item-bar">
                                                                                {{ $child->title }}
                                                                                <a href="#collapseChild2{{ $child->id }}"
                                                                                    class="pull-right"
                                                                                    data-toggle="collapse"
                                                                                    style="color: #aaaaaa;"><i
                                                                                        class="fas fa-caret-down"
                                                                                        id="caret-menu-2-{{ $child->id }}"
                                                                                        onclick="changeIconCaret('menu-2-{{ $child->id }}')"></i></a>
                                                                            </span>
                                                                            <div class="collapse"
                                                                                id="collapseChild2{{ $child->id }}">
                                                                                <div class="input-box">
                                                                                    <form method="post"
                                                                                        {{-- action="{{ route('app.updateMenuItem', $child->id) }}" --}}
																						>
                                                                                        {{ csrf_field() }}
                                                                                        <div class="form-group">
                                                                                            <label><i>Nhãn điều
                                                                                                    hướng:</i></label>
                                                                                            <input type="text"
                                                                                                name="name"
                                                                                                value="@if (empty($child->name)) {{ $child->title }} @else {{ $child->name }} @endif"
                                                                                                class="form-control" />
                                                                                        </div>
                                                                                        @if ($child->type == 'custom')
                                                                                            <div class="form-group">
                                                                                                <label><i>URL:</i></label>
                                                                                                <input type="text"
                                                                                                    name="slug"
                                                                                                    value="{{ $child->slug }}"
                                                                                                    class="form-control" />
                                                                                            </div>
                                                                                        @else
                                                                                            <div class="form-group">
                                                                                                <label><i>Gốc:
                                                                                                        {{ $child->category_origin }}</i></label>
                                                                                            </div>
                                                                                        @endif
                                                                                        <div class="form-group">
                                                                                            <button
                                                                                                class="btn btn-sm btn-outline-primary">
                                                                                                Save
                                                                                            </button>
                                                                                            <button type="button"
                                                                                                class="btn btn-sm btn-outline-danger"
                                                                                                onclick="deleteDataMenuItem({{ $child->id }})">
                                                                                                Delete
                                                                                            </button>
                                                                                        </div>
                                                                                    </form>
                                                                                    {{-- <form
                                                                                        id="delete-item-form-{{ $child->id }}"
                                                                                        action="{{ route('app.deleteMenuItem', ['id' => $child->id, 'key' => $key, 'key1' => $key1, 'key2' => $key2]) }}"
                                                                                        method="POST"
                                                                                        style="display: none;">
                                                                                        @csrf()
                                                                                        @method('DELETE')
                                                                                    </form> --}}
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                    @endforeach
                                                                @endif
                                                            </ul>
                                                        </li>
                                                    @endforeach
                                                @endif
                                            </ul>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- content-wrapper ends -->
    <!-- partial:partials/_footer.html -->
@endsection
@push('js')
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/jquery-sortable/0.9.13/jquery-sortable-min.js"></script> --}}
    <script src="{{ asset('/admin_templates/js-page/menus/index.js') }}"></script>
    @if ($desiredMenu)
        <script>
            $('#saveMenu').click(function() {
                var menuid = '<?php echo $desiredMenu->id; ?>';
                var location = $('input[name="location"]:checked').val();
                var newText = $("#serialize_output").text();
                var data = JSON.parse(newText);
                $.ajax({
                    type: "get",
                    data: {
                        menuid: menuid,
                        data: data,
                        location: location
                    },
                    url: "{{ url('app/update-menu') }}",
                    success: function(res) {
                        window.location.reload();
                    }
                })
            })
            $('#add-categories').click(function() {
                var menuid = '<?php echo $desiredMenu->id; ?>';
                var n = $('input[name="select-category[]"]:checked').length;
                var array = $('input[name="select-category[]"]:checked');
                var ids = [];
                for (i = 0; i < n; i++) {
                    ids[i] = array.eq(i).val();
                }
                if (ids.length == 0) {
                    return false;
                }
                $.ajax({
                    type: "get",
                    data: {
                        menuid: menuid,
                        ids: ids
                    },
                    url: "{{ url('app/add-categories-to-menu') }}",
                    success: function(res) {
                        location.reload();
                    }
                })
            })

            $("#add-custom-link").click(function() {
                var menuid = '<?php echo $desiredMenu->id; ?>';
                var url = $('#url').val();
                var link = $('#linktext').val();
                if (url.length > 0 && link.length > 0) {
                    $.ajax({
                        type: "get",
                        data: {
                            menuid: menuid,
                            url: url,
                            link: link
                        },
                        url: "{{ url('app/add-custom-link') }}",
                        success: function(res) {
                            location.reload();
                        }
                    })
                }
            })
        </script>
    @endif
@endpush
