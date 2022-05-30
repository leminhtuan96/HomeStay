@extends('backend.index')
@section("title","Update")
@section('content')
    <h1 style="text-align: center">Update Room</h1>
    <form action="" method="post" enctype="multipart/form-data">
        @csrf
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                </div>
            </div>
        </div>
        <div class="card card-default">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Name</label>
                            <input name="name" class="form-control" required value="{{$room->name}}" value="{{ old('name') }}" placeholder="Enter name">
                        </div>
                        <div class="form-group">
                            <label>Address</label>
                            <input name="address" class="form-control" required value="{{$room->address}}" value="{{ old('address') }}" placeholder="Enter Address">
                        </div>
                        <div class="form-group">
                            <label>Description</label>
                            <input name="description" class="form-control" required value="{{$room->description}}" value="{{ old('description') }}" placeholder="Enter Desscription">
                        </div>
                        <div class="row">
                            <div class="col-12 col-sm-6">
                                <div class="form-group">
                                    <label>Bedroom</label>
                                    <select name="bedroom" class="form-control select2 select2-danger"
                                        data-dropdown-css-class="select2-danger" style="width: 100%;">
                                        <option selected="selected" value="1" value="{{old('bedroom')}}">1</option>
                                        <option value="2" value="{{old('bedroom')}}">2</option>
                                        <option value="3" value="{{old('bedroom')}}">3</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-sm-6">
                                <div class="form-group">
                                    <label>Bathroom</label>
                                    <select name="bathroom" class="form-control select2 select2-danger"
                                        data-dropdown-css-class="select2-danger" style="width: 100%;">
                                        <option selected="selected" value="1" value="{{old('bathroom')}}">1</option>
                                        <option value="2" value="{{old('bathroom')}}">2</option>
                                        <option value="3" value="{{old('bathroom')}}">3</option>
                                        <option value="4" value="{{old('bathroom')}}">4</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="exampleFormControlFile1">Chọn ảnh</label>
                            <input type="file" name="image" class="form-control-file" id="exampleFormControlFile1" value="{{asset('storage/'.$room->image)}}">
                        </div>

                        <div class="row">
                            <div class="col-12 col-sm-6">
                                <div class="form-group">
                                    <label>Category</label>
                                    <select name="category_id" class="form-control select2 select2-danger"
                                        data-dropdown-css-class="select2-danger" style="width: 100%;">
                                        @foreach ($categories as $category)
                                            <option  value="{{ $category->id }}" {{ $room->category_id == $category->id ? 'selected' : '' }}>
                                                {{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12 col-sm-6">
                                <div class="form-group">
                                    <label>Status</label>
                                    <select name="status_id" class="form-control select2 select2-danger"
                                        data-dropdown-css-class="select2-danger" style="width: 100%;">
                                        @foreach ($statuses as $status)
                                            <option  value="{{ $status->id }}"  {{ $room->status_id == $status->id ? 'selected' : '' }}>{{ $status->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12 col-sm-6">
                                <div class="form-group">
                                    <label>City</label>
                                    <select name="city_id" class="form-control select2 select2-danger"
                                        data-dropdown-css-class="select2-danger" style="width: 100%;">
                                        @foreach ($cities as $city)
                                            <option value="{{ $city->id }}"  {{ $room->city_id == $city->id ? 'selected' : '' }}>{{ $city->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <input type="text" name="user_id" value="{{ Auth::user()->id ?? 1 }}" hidden>

                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection


