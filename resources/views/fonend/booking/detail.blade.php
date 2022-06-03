@extends('fonend.nav')
@section('content')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <form action="{{ route('booking.store') }}" method="post">
        @csrf

        <input type="hidden" name="price" />
        <input type="hidden" name="room_id" value="{{$booking->id}}"/>

        <div class="container mt-4">
            <h1 style="text-align: center">Đặt Phòng</h1>
            <div class="row no-gutters">
                <div class="col-md-3">
                    <h3 class="card-title ml-5" style="font-size:35px; color: #915229">{{ $booking->name }}</h3>
                    <img src="{{ asset('storage/' . $booking->image) }}" alt="" width="350" height="350">
                </div>

                <div class="col-md-9" style="padding-top: 60px">
                    <div class="card-body"
                        style="font-size: 25px; font-family:'Comic Sans MS'; padding-right:0px; padding-left:80px; padding-bottom: 200px">
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="startDay"><b>Ngày bắt đầu</b></label>
                                <input type="date" class="form-control" id="startDay" name="startDay" value="Mark" />
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="EndDay"><b>Ngày trả phòng</b></label>
                                <input type="date" class="form-control" id="endDay" name="endDay" value="Otto" />
                            </div>
                        </div>
                        <p><b>Giá: </b>{{ $booking->price }}$ /ngày</p>
                        <p><b>Thể Loại: </b>{{ $booking->categoryname }}</p>
                        <p><b>Phòng Tắm: </b>{{ $booking->bathroom }} <i class="fa fa-bath text-primary me-2"></i></p>
                        <p><b>Phòng Ngủ: </b>{{ $booking->bedroom }} <i class="fa fa-bed text-primary me-2"></i></p>
                        <button style="margin-right: 100px" id="booking-confirm" type="button" class="btn btn-primary"
                            data-toggle="modal" data-target="#exampleModal">
                            Booking
                        </button>
                        <a href="{{ route('home.detail', $booking->id) }}" class="btn btn-danger">Cancel</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal -->
        <div style="top: 100px" class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div id="date-booking"></div>
                        <div id="price-total-booking">

                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Ènd Modal -->
        <script>
            $(document).ready(function() {
                $('#booking-confirm').on('click', function(e) {
                    let start = $('#startDay').val();
                    let end = $('#endDay').val();

                    const date1 = new Date(start);
                    const date2 = new Date(end);
                    const diffTime = date2 - date1;
                    if (!start || !end || diffTime < 0) {
                        alert('Hay chon ngay den va ngay di!');
                        e.stopPropagation();
                        return;
                    }
                    const diffDays = Math.ceil(diffTime / (1000 * 60 * 60 * 24));
                    const priceTotal = {{ $booking->price }} * (diffDays + 1);

                    let dateBookingHtml = '<span>Date: </span>' +
                        '<span>' + (diffDays + 1) + '</span>';
                    $('#date-booking').html(dateBookingHtml);


                    let priceTotalHtml = '<span>Total: </span>' +
                        '<span>' + priceTotal + '</span>';
                    $('#price-total-booking').html(priceTotalHtml);

                    $('input[name="price"]').val(priceTotal);
                })
            });
        </script>

    </form>



    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js"
        integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous">
    </script>
@endsection
