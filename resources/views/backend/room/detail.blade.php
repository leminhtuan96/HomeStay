@extends("backend.index")
@section("content")
<h1 style="text-align: center; font-size: 2.8rem">Chi tiết phòng {{$room->name}}</h1>
<table class="table table-bordered table-hover" style="text-align: center">
      <tr>
        <th>STT</th>
        <th>Tên Phòng</th>
        <th>Địa Chỉ</th>
        <th>Mô Tả</th>
        <th>Phòng Ngủ</th>
        <th>Phòng Tắm</th>
        <th>Ảnh</th>
        <th>Tình Trạng</th>
        <th>Thành Phố</th>
        <th>Loại Phòng</th>
        <th>Người Thuê</th>
      </tr>
      <tr data-widget="expandable-table" aria-expanded="false">
        <td>{{$room->id}}</td>
        <td>{{$room->name}}</td>
        <td>{{$room->address}}</td>
        <td>{{$room->description}}</td>
        <td>{{$room->bedroom}}</td>
        <td>{{$room->bathroom}}</td>
        <td><img src="{{asset('storage/' . $room->image)}}" width="100px" height="70" alt=""></td>
        <td>{{$room->statusname}}</td>
        <td>{{$room->cityname}}</td>
        <td>{{$room->categoryname}}</td>
        <td>{{Auth::user()->name ?? ""}}</td>
      </tr>
  </table>
@endsection


