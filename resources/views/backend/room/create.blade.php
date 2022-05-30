@extends('backend.index')
@section('title', 'Create')
@section('content')
    <h1 style="text-align: center">Create room</h1>
    <form action="" method="post" enctype="multipart/form-data">
        @csrf
        <div class="card card-default">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Name</label>
                            <input name="name" class="form-control" placeholder="Enter name">
                            <p style="color: red">{{($errors->has('name'))? $errors->first('name') : ""}}</p>
                        </div>
                        <div class="form-group">
                            <label>Address</label>
                            <input name="address" class="form-control" placeholder="Enter Address">
                            <p style="color: red">{{($errors->has('address'))? $errors->first('address') : ""}}</p>
                        </div>
                        <div class="form-group">
                            <label>Description</label>
                            <input name="description" class="form-control" placeholder="Enter Desscription">
                            <p style="color: red">{{($errors->has('description'))? $errors->first('description') : ""}}</p>
                        </div>
                        <div class="row">
                            <div class="col-12 col-sm-6">
                                <div class="form-group">
                                    <label>Bedroom</label>
                                    <select name="bedroom" class="form-control select2 select2-danger"
                                        data-dropdown-css-class="select2-danger" style="width: 100%;">
                                        <option selected="selected" value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
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
                                        <option selected="selected" value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="exampleFormControlFile1">Chọn ảnh</label>
                            <input type="file" name="image" class="form-control-file" id="exampleFormControlFile1">
                        </div>

                        <div class="row">
                            <div class="col-12 col-sm-6">
                                <div class="form-group">
                                    <label>Category</label>
                                    <select name="category_id" class="form-control select2 select2-danger"
                                        data-dropdown-css-class="select2-danger" style="width: 100%;">
                                        @foreach ($categories as $category)
                                            <option selected="selected" value="{{ $category->id }}">
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
                                            <option selected="selected" value="{{ $status->id }}">{{ $status->name }}
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
                                            <option selected="selected" value="{{ $city->id }}">{{ $city->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <input type="text" name="user_id" value="{{ Auth::user()->id ?? 1 }}" hidden>

                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection
