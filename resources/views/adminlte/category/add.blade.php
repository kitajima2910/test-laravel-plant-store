{{-- Start: HoaiPX 2020/07/05 --}}
@extends('adminlte.layouts.master')
@section('title', 'CATEGORY | ADD')
@section('content')
<div class="content-wrapper">

    @include('adminlte.includes.content-header', ['name' => 'Danh mục', 'key' => 'Thêm'])

    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="container">
                        <form action="{{ route('categories.store') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label>Tên danh mục:</label>
                                <input type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="Nhập tên danh mục">
                                @error('name')
                                    <x-error-span>{{ $errors->first('name') }}</x-error-span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Chọn danh mục cha:</label>
                                <select class="custom-select" name="parent_id">
                                    <option value="0">Hãy chọn danh mục cha</option>
                                    {!! $htmlOptions !!}
                                </select>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Thêm</button>
                                <a class="btn btn-dark" href="{{ route('categories.index') }}" role="button">BACK</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</div>
@endsection
{{-- End: HoaiPX 2020/07/05 --}}
