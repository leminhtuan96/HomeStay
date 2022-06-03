@extends("fonend.nav")
@section('content')


<div class="container mt-4">
    <h1 style="text-align: center">Thông tin sản phẩm</h1>
    <div class="row no-gutters">
        <div class="col-md-3">
            <h3 class="card-title ml-5" style="font-size:35px; color: #915229">{{$home->name}}</h3>
            <img src="{{asset('storage/'.$home->image)}}" alt="" width="350" height="350">
        </div>

        <div class="col-md-9" style="padding-top: 60px">
            <div class="card-body" style="font-size: 25px; font-family:'Comic Sans MS'; padding-right:0px; padding-left:80px; padding-bottom: 200px">

                <p><b>Mô tả: </b>{{$home->description}}</p>
                <p><b>Giá: </b>{{$home->categoryprice}} </p>
                <p><b>Thể Loại: </b>{{$home->categoryname}}</p>
                <p><b>Phòng Tắm: </b>{{$home->bathroom}} <i class="fa fa-bath text-primary me-2"></i></p>
                <p><b>Phòng Ngủ: </b>{{$home->bedroom}} <i class="fa fa-bed text-primary me-2"></i></p>
                <p><i class="fa fa-map-marker-alt text-primary me-2"></i>{{$home->address}}</p>
                <a href="{{route('home.list')}}" type="button" class="btn btn-warning">Back Home</a>
                <a href="{{route('booking',$home->id)}}" type="button" class="btn btn-info">Mua</a>
            </div>
        </div>
    </div>
</div>

@endsection



