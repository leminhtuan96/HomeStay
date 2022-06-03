<?php
namespace App\Repositories;

use App\Models\Booking;
use Illuminate\Support\Facades\DB;
use App\Repositories\BaseRepository;

class BookingRepository extends BaseRepository
{
    public function getTable()
    {
        return 'bookings';
    }

    public function getModel()
    {
        return Booking::class;
    }

    public function createBooking($data)
    {
        $booking=new Booking();
        $booking->startDay=$data['startDay'];
        $booking->endDay=$data['endDay'];
        $booking->bookingDay=$data['bookingDay'];
        $booking->price=$data['price'];
        $booking->status_id=$data['status_id'];
        $booking->user_id=$data['user_id'];
        $booking->room_id=$data['room_id'];
        $booking->save();
    }

    public function updataBooking($data,$id)
    {
        $booking=Booking::findOrFail($id);
        $booking->startDay=$data['startDay']??$booking->startDay;
        $booking->endDay=$data['endDay']??$booking->endDay;
        $booking->bookingDay=$data['bookingDay']??$booking->bookingDay;
        $booking->price=$data['price']??$booking->price;
        $booking->status_id=$data['status_id']??$booking->status_id;
        $booking->user_id=$data['user_id']??$booking->user_id;
        $booking->room_id=$data['room_id']??$booking->room_id;
        $booking->save();
    }

    public function getById($id)
    {
        return DB::table('bookings')
        ->join('status','status.id','=','bookings.status_id')
        ->join('users','users.id','=','bookings.user_id')
        ->join('rooms','rooms.id','=','bookings.room_id')
        ->where('bookings.id',$id)
        ->select('bookings.*','status.name as statusname','users.name as username','rooms.name as roomname')
        ->get();
    }

    public function getAll()
    {
        return DB::table('bookings')
        ->join('status','status.id','=','bookings.status_id')
        ->join('users','users.id','=','bookings.user_id')
        ->join('rooms','rooms.id','=','bookings.room_id')
        ->where('bookings.user_id', auth()->id())
        ->orderByDesc('bookings.id')
        ->select('bookings.*','status.name as statusname','users.username as username','rooms.name as roomname')
        ->get();
    }

}



