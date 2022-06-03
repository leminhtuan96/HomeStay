@extends('backend.index')
@section('title', 'create')
@section('content')
    <h1 style="text-align: center; font-size: 2.8rem">Create Category</h1>
    <form action="" method="post">
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
                            <label>Price</label>
                            <input name="price" class="form-control" placeholder="Enter price">
                            <p style="color: red">{{($errors->has('price'))?$errors->first('price'):''}}</p>
                        </div>
                        <button type="submit" class="btn btn-primary">Create</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection
