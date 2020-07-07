{{-- Start: HoaiPX 2020/07/05 --}}
@extends('adminlte.layouts.master')
@section('title', 'CATEGORY')
@section('content')
<div class="content-wrapper">

    @include('adminlte.includes.content-header', ['name' => 'Danh mục', 'key' => 'Danh sách'])

    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-6">
                            <input type="text" class="form-control float-left" id="txtSearchCategories"
                                placeholder="Nhập tìm kiếm hoạt động">
                        </div>
                        <div class="col-md-6">
                            <a class="btn btn-primary float-right"
                                href="{{ route('categories.create') }}" role="button">Thêm danh
                                mục</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <nav class="mt-1">
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                            <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab"
                                aria-controls="nav-home" aria-selected="true">Đang hoạt động</a>
                            <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab"
                                aria-controls="nav-profile" aria-selected="false">Ngưng hoạt động</a>
                        </div>
                    </nav>
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                            <div id="admin-categories-table">
                                @include('adminlte.includes.categories-data')
                            </div>
                        </div>
                        <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                            @include('adminlte.includes.categories-data-deleted-at')
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>

</div>
@endsection
{{-- End: HoaiPX 2020/07/05 --}}
