@extends("fonend.nav")
@section('content')

<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-0 gx-5 align-items-end">
            <div id="tab-1" class="tab-pane fade show p-0 active">
                <div class="row g-4">
                    @foreach ($categories as $category)
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="property-item rounded overflow-hidden">
                            <div class="position-relative overflow-hidden">
                                <a href=""><img class="img-fluid" src="{{ asset('home/img/property-1.jpg') }}"
                                        alt=""></a>
                                <div class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">
                                    For Sell</div>
                                <div
                                    class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3"
                                    >
                                    {{$category->categoryname}}
                                    </div>
                            </div>
                            <div class="p-4 pb-0">
                                <h5 class="text-primary mb-3">${{$category->categoryprice}}</h5>
                                <a class="d-block h5 mb-2" href="">{{$category->name}}</a>
                                <p><i class="fa fa-map-marker-alt text-primary me-2"></i>{{$category->cityname}}</p>
                            </div>
                            <div class="d-flex border-top">
                                <small class="flex-fill text-center border-end py-2"><i
                                        class="fa fa-ruler-combined text-primary me-2"></i>1000 Sqft</small>
                                <small class="flex-fill text-center border-end py-2"><i
                                        class="fa fa-bed text-primary me-2"></i>{{$category->bedroom}} Bed</small>
                                <small class="flex-fill text-center py-2"><i class="fa fa-bath text-primary me-2"></i>{{$category->bathroom}} Bath</small>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>

@endsection



