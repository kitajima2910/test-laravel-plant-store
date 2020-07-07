{{-- Start: HoaiPX 2020/07/05 --}}
@extends('adminlte.layouts.master')
@section('title', 'CATEGORY | EDIT')
@section('content')
<div class="content-wrapper">

    @include('adminlte.includes.content-header', ['name' => 'Menu', 'key' => 'Sửa'])

    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="container">
                        <form action="{{ route('menus.update', ['id' => $menu->id]) }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label>Tên menu:</label>
                                <input type="text" class="form-control" name="name" placeholder="Nhập tên menu"
                                    value="{{ $menu->name }}">
                                @error('name')
                                    <x-error-span>{{ $errors->first('name') }}</x-error-span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Chọn menu cha:</label>
                                <select class="custom-select" name="parent_id">
                                    <option value="0">Hãy chọn menu cha</option>
                                    {!! $htmlOptions !!}
                                </select>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Cập nhật</button>
                                <a class="btn btn-dark" href="{{ route('menus.index') }}" role="button">BACK</a>
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
