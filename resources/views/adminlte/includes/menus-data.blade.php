{{-- Start: HoaiPX 2020/07/05 --}}
<div class="col-md-12">
    <table class="table table-striped table-inverse mt-3">
        <thead class="thead-inverse">
            <tr>
                <th>#</th>
                <th>Tên danh mục sản phẩm</th>
                <th>Tên danh mục thân thiện</th>
                <th>Hành động</th>
            </tr>
        </thead>
        <tbody>
            @foreach($menus as $menu)
                <tr>
                    <td scope="row">{{ $menu->id }}</td>
                    <td>{{ $menu->name }}</td>
                    <td>{{ $menu->slug }}</td>
                    <td>
                        <a class="btn btn-warning"
                            href="{{ route('menus.edit', ['id' => $menu->id]) }}"
                            role="button">Sữa</a>
                        <a class="btn btn-danger"
                            href="{{ route('menus.destroy', ['id' => $menu->id]) }}"
                            role="button">Xoá</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
<div class="col-md-12">
    {{ $menus->links() }}
</div>
{{-- End: HoaiPX 2020/07/05 --}}
