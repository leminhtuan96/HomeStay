@extends('backend.index')
@section('content')
<h1 style="text-align: center; font-size: 2.8rem">Danh sách thành phố</h1>
<table class="table" style="text-align: center">
    <thead>
      <tr>
        <th scope="col">STT</th>
        <th scope="col">Name</th>
        <th scope="col">Image</th>
        <th scope="col" colspan="3">Action</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($cities as $key => $city)
      <tr>
        <th scope="row">{{ $key + 1 }}</th>
        <td>{{ $city->name }}</td>
        <td><img src="{{ asset('storage/' . $city->image) }}" width="100px" height="70" alt=""></td>
        <td><a href="{{ route('city.edit', $city->id) }}" type="button" class="btn btn-info">Update</a></td>
        <td><a onclick="return confirm('Bạn có muốn xóa sản phẩm này không ???')"
                href="{{ route('city.delete', $city->id) }}" type="button" class="btn btn-danger">Delete</a>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
    {{-- <table class="table table-bordered table-hover" style="text-align: center">
        <thead>
            <tr>
                <th>STT</th>
                <th>Name</th>
                <th>Image</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($cities as $key => $city)
                <tr>
                    <td>{{ $key + 1 }}</td>
                    <td>{{ $city->name }}</td>
                    <td><img src="{{ asset('storage/' . $city->image) }}" width="100px" height="70" alt=""></td>
                    <td><a href="{{ route('city.edit', $city->id) }}" type="button" class="btn btn-info">Update</a></td>
                    <td><a onclick="return confirm('Bạn có muốn xóa sản phẩm này không ???')"
                            href="{{ route('city.delete', $city->id) }}" type="button" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table> --}}
@endsection
