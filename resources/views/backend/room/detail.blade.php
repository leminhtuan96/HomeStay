@extends("backend.index")
@section("content")
<table class="table table-bordered table-hover">
      <tr>
        <th>STT</th>
        <th>Name</th>
        <th>Address</th>
        <th>Description</th>
        <th>Bedroom</th>
        <th>Bathroom</th>
        <th>Image</th>
        <th>Status</th>
        <th>City</th>
        <th>Category</th>
        <th>User</th>
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


