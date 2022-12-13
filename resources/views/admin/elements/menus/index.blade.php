@extends('admin.layouts.app')
@section('title', 'Menus')
@section('content')
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">
                <span class="page-title-icon bg-gradient-primary text-white me-2">
                    <i class="mdi mdi-menu"></i>
                </span> Menus
            </h3>
        </div>
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Position</th>
                                        <th class='text-center'>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($datas as $key => $item)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ $item->title }}</td>
                                            <td>{{ $item->location == 0 ? 'CMS' : ($item->location == 1 ? 'Header' : 'Footer') }}</td>
                                            <td class='text-center'>
                                                <a class="btn btn-outline-success btn-sm"
                                                    href="{{ route('admin.menus.builder', $item->id) }}">
                                                    <i class="mdi mdi-settings"></i>
                                                    <span>Setting</span>
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- content-wrapper ends -->
    <!-- partial:partials/_footer.html -->
@endsection
@push('js')
@endpush
