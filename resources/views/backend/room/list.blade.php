@extends('backend.index')
@section('content')
<h1 style="text-align: center; font-size: 2.8rem">Danh sách phòng</h1>
<table class="table table-striped"  style="text-align: center">
    <thead>
      <tr>
        <th scope="col">STT</th>
        <th scope="col">Name</th>
        <th scope="col">Address</th>
        <th scope="col">Description</th>
        <th scope="col">Bedroom</th>
        <th scope="col">Bathroom</th>
        <th scope="col">Image</th>
        <th scope="col">Status</th>
        <th scope="col">City</th>
        <th scope="col">Category</th>
        <th scope="col">User</th>
        <th scope="col" colspan="3">Action</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($rooms as $key => $room)
      <tr>
        <th scope="row">{{ $key + 1 }}</th>
        <td>{{ $room->name }}</td>
        <td>{{ $room->address }}</td>
        <td>{{ $room->description }}</td>
        <td>{{ $room->bedroom }}</td>
        <td>{{ $room->bathroom }}</td>
        <td><img src="{{asset('storage/' . $room->image)}}" width="100px" height="70" alt=""></td>
        <td>{{ $room->statusname }}</td>
        <td>{{ $room->cityname }}</td>
        <td>{{ $room->categoryname }}</td>
        <td>{{ $room->username }}</td>
        <td><a href="{{ route('room.detail', $room->id) }}" type="button" class="btn btn-info">Detail</a></td>
        <td><a href="{{ route('room.edit', $room->id) }}" type="button" class="btn btn-info">Update</a></td>
        <td><a onclick="return confirm('Bạn có muốn xóa sản phẩm này không ???')"
            href="{{ route('room.delete', $room->id) }}" type="button" class="btn btn-danger">Delete</a></td>
      </tr>
      @endforeach
    </tbody>
  </table>

@endsection
