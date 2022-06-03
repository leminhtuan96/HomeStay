@extends('fonend.nav')
@section('content')

<style>


.table th {
    font-weight: 500;
    color: #827fc0;
}
.table thead {
    background-color: #f3f2f7;
}
.table>tbody>tr>td, .table>tfoot>tr>td, .table>thead>tr>td {
    padding: 14px 12px;
    vertical-align: middle;
}
.table tr td {
    color: #8887a9;
}

</style>
<h1 style="text-align: center; font-size: 2.8rem">Lịch sử đặt phòng</h1>
<div class="container">
    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover mb-0">
                            <thead>
                                <tr class="align-self-center">
                                    <th scope="col">STT</th>
                                    <th scope="col">StartDay</th>
                                    <th scope="col">EndDay</th>
                                    <th scope="col">BookingDay</th>
                                    <th scope="col">Price</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">User</th>
                                    <th scope="col">Room</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($bookings as $booking)
                                <tr>
                                <th scope="row">{{ $booking->id }}</th>
                                <td>{{ $booking->startDay }}</td>
                                <td>{{ $booking->endDay }}</td>
                                <td>{{ $booking->bookingDay }}</td>
                                <td>{{ $booking->price }}</td>
                                <td>{{ $booking->statusname }}</td>
                                <td>{{ $booking->username }}</td>
                                <td>{{ $booking->roomname }}</td>
                                <td><a onclick="return confirm('Bạn có muốn xóa sản phẩm này không ???')"
                                    href="{{ route('booking.delete', $booking->id) }}" type="button" class="btn btn-danger">Delete</a></td>
                              </tr>
                              @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

