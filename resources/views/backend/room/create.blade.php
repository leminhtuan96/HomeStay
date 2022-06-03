@extends('backend.index')
@section('content')

    <h1 style="text-align: center; font-size: 2.8rem">Create room</h1>
    <form action="" method="post" enctype="multipart/form-data">
        @csrf
        @error('msg')
            <div class="alert alert-danger text-center">{{ $message }}</div>
        @enderror
        <div class="card card-default">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">

                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">Name</span>
                            </div>
                            <input name="name" value="{{ old('name') }}" type="text" class="form-control"
                                placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                        </div>
                        <p style="color: red">{{ $errors->has('name') ? $errors->first('name') : '' }}</p>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">Address</span>
                            </div>
                            <input name="address" value="{{ old('address') }}" type="text" class="form-control"
                                placeholder="Address" aria-label="Username" aria-describedby="basic-addon1">
                        </div>
                        <p style="color: red">{{ $errors->has('address') ? $errors->first('address') : '' }}</p>

                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Description</span>
                            </div>
                            <textarea name="description" value="{{ old('description') }}" class="form-control" aria-label="With textarea"
                                placeholder="Description"></textarea>
                        </div>
                        <p style="color: red">{{ $errors->has('description') ? $errors->first('description') : '' }}</p>

                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <button class="btn btn-outline-secondary" type="button">BedRoom</button>
                            </div>
                            <select name="bedroom" class="custom-select" id="inputGroupSelect03">
                                <option selected value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                            </select>
                        </div>

                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <button class="btn btn-outline-secondary" type="button">BathRoom</button>
                            </div>
                            <select name="bathroom" class="custom-select" id="inputGroupSelect03">
                                <option selected value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="exampleFormControlFile1">Chọn ảnh</label>
                            <input type="file" name="image" class="form-control-file" id="exampleFormControlFile1">
                        </div>

                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <button class="btn btn-outline-secondary" type="button">Category</button>
                            </div>
                            <select name="category_id" class="custom-select" id="inputGroupSelect03">
                                @foreach ($categories as $category)
                                    <option selected="selected" value="{{ $category->id }}">
                                        {{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <button class="btn btn-outline-secondary" type="button">Status</button>
                            </div>
                            <select name="status_id" class="custom-select" id="inputGroupSelect03">
                                @foreach ($statuses as $status)
                                    <option selected="selected" value="{{ $status->id }}">{{ $status->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <button class="btn btn-outline-secondary" type="button">City</button>
                            </div>
                            <select name="city_id" class="custom-select" id="inputGroupSelect03">
                                @foreach ($cities as $city)
                                    <option selected="selected" value="{{ $city->id }}">{{ $city->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <input type="text" name="user_id" value="{{ Auth::user()->id ?? 1 }}" hidden>

                        <button type="submit" class="btn btn-primary">Cretae</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection
