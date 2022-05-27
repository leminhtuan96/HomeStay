@extends('backend.index')
@section('title', 'create')
@section('content')
    <h1 style="text-align: center">Update City</h1>
    <form action="" method="post" enctype="multipart/form-data">
        @csrf
        <div class="card card-default">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Name</label>
                            <input name="name" class="form-control" required value="{{$city->name}}" value="{{ old('name') }}" placeholder="Enter name">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlFile1">Chọn ảnh</label>
                            <input type="file" name="image" class="form-control-file" id="exampleFormControlFile1" value="{{asset('storage/'.$city->image)}}">
                        </div>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection
