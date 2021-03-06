@extends('backend.index')
@section('title', 'create')
@section('content')
    <h1 style="text-align: center; font-size: 2.8rem">Create City</h1>
    <form method="post" enctype="multipart/form-data">
        @csrf
        <div class="card card-default">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Name</label>
                            <input name="name" class="form-control" placeholder="Enter name">
                            <p style="color: red">{{($errors->has('name'))?$errors->first('name'):''}}</p>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlFile1">Chọn ảnh</label>
                            <input type="file" name="image" class="form-control-file" id="exampleFormControlFile1">
                        </div>
                        <button class="btn btn-primary">Create</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection
