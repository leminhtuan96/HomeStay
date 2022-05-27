@extends('backend.index')
@section('content')
<h1 style="text-align: center">Danh sách phòng</h1>
    <table class="table table-bordered table-hover">
        <thead>
            <tr style="text-align: center">
                <th>STT</th>
                <th>Name</th>
                <th>Address</th>
                <th>Description</th>
                <th>Bedroom</th>
                <th>Bathroom</th>
                <th>Status</th>
                <th>City</th>
                <th>Category</th>
                <th>User</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($rooms as $key => $room)
                <tr>
                    <td>{{ $key + 1 }}</td>
                    <td>{{ $room->name }}</td>
                    <td>{{ $room->address }}</td>
                    <td>{{ $room->description }}</td>
                    <td>{{ $room->bedroom }}</td>
                    <td>{{ $room->bathroom }}</td>
                    <td>{{ $room->statusname }}</td>
                    <td>{{ $room->cityname }}</td>
                    <td>{{ $room->categoryname }}</td>
                    <td>{{ $room->username }}</td>
                    <td><a href="{{ route('room.detail', $room->id) }}" type="button" class="btn btn-info">Detail</a>
                    </td>
                    <td><a href="{{ route('room.edit', $room->id) }}" type="button" class="btn btn-info">Update</a></td>
                    <td><a onclick="return confirm('Bạn có muốn xóa sản phẩm này không ???')"
                            href="{{ route('room.delete', $room->id) }}" type="button" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
