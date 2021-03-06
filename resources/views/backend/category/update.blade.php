@extends('backend.index')
@section('title', 'create')
@section('content')
    <h1 style="text-align: center; font-size: 2.8rem">Update Category</h1>
    <form action="" method="post">
        @csrf
        <div class="card card-default">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Name</label>
                            <input name="name" class="form-control" required placeholder="Enter name" value="{{$category->name}}" value="{{ old('name') }}">
                        </div>
                        <div class="form-group">
                            <label>Price</label>
                            <input name="price" class="form-control" required placeholder="Enter price" value="{{$category->price}}" value="{{ old('price') }}">
                        </div>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection
