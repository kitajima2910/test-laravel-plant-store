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
            @foreach($categories as $category)
                <tr>
                    <td scope="row">{{ $category->id }}</td>
                    <td>{{ $category->name }}</td>
                    <td>{{ $category->slug }}</td>
                    <td>
                        <a class="btn btn-warning"
                            href="{{ route('categories.edit', ['id' => $category->id]) }}"
                            role="button">Sữa</a>
                        <a class="btn btn-danger"
                            href="{{ route('categories.destroy', ['id' => $category->id]) }}"
                            role="button">Xoá</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
<div class="col-md-12">
    {{ $categories->links() }}
</div>
{{-- End: HoaiPX 2020/07/05 --}}
