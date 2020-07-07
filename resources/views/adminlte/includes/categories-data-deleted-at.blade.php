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
            @foreach($categoriesDeleteAt as $category)
                <tr>
                    <td scope="row">{{ $category->id }}</td>
                    <td>{{ $category->name }}</td>
                    <td>{{ $category->slug }}</td>
                    <td>
                        <a class="btn btn-success"
                            href="{{ route('categories.enable', ['id' => $category->id]) }}"
                            role="button">Kích hoạt</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
