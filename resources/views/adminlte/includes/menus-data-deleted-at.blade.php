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
            @foreach($menusDeleteAt as $menu)
                <tr>
                    <td scope="row">{{ $menu->id }}</td>
                    <td>{{ $menu->name }}</td>
                    <td>{{ $menu->slug }}</td>
                    <td>
                        <a class="btn btn-success"
                            href="{{ route('menus.enable', ['id' => $menu->id]) }}"
                            role="button">Kích hoạt</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
