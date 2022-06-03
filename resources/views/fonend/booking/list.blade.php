@extends('backend.index')
@section('content')

<h1 style="text-align: center; font-size: 2.8rem">Danh sách đặt phòng</h1>
<table class="table" style="text-align: center">
    <thead class="thead-dark">
      <tr>
        <th scope="col">STT</th>
        <th scope="col">StartDay</th>
        <th scope="col">EndDay</th>
        <th scope="col">BookingDay</th>
        <th scope="col">Price</th>
        <th scope="col">Status</th>
        <th scope="col">User</th>
        <th scope="col">Room</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($bookings as $key => $booking)
      <tr>
        <th scope="row">{{ $key + 1 }}</th>
        <td>{{ $booking->startDay }}</td>
        <td>{{ $booking->endDay }}</td>
        <td>{{ $booking->bookingDay }}</td>
        <td>{{ $booking->price }}</td>
        <td>{{ $booking->statusname }}</td>
        <td>{{ $booking->username }}</td>
        <td>{{ $booking->roomname }}</td>
      </tr>
      @endforeach
    </tbody>
  </table>

@endsection

