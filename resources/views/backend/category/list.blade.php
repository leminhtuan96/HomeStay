@extends('backend.index')
@section('content')
    <h1 style="text-align: center">Danh sách thể loại phòng</h1>
    <table class="table table-bordered table-hover" style="text-align: center">
        <thead>
            <tr>
                <th>STT</th>
                <th>Name</th>
                <th>Price</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $key => $category)
                <tr>
                    <td>{{ $key + 1 }}</td>
                    <td>{{ $category->name }}</td>
                    <td>{{ $category->price }}</td>
                    <td><a href="{{ route('category.edit', $category->id) }}" type="button" class="btn btn-info">Update</a></td>
                    <td><a onclick="return confirm('Bạn có muốn xóa sản phẩm này không ???')"
                            href="{{ route('category.delete', $category->id) }}" type="button" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
