<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;
use App\Repositories\BookingRepository;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\DB;

class BookingController extends Controller
{

    public $booking;
    public function __construct(BookingRepository $bookingRepository)
    {
        $this->booking = $bookingRepository;
    }

    public function index()
    {
        $bookings = $this->booking->getAll();
        return view('fonend.booking.list', compact('bookings'));
    }

    public function showBooking()
    {
        if (Auth::check()) {
            $bookings = $this->booking->getAll();
            return view('fonend.booking.history', compact('bookings'));
        }else{
            return redirect()->route('formlogin');
        }
    }


    public function booking($id)
    {
        $booking = DB::table('rooms')
            ->join('categories', "categories.id", "=", "rooms.category_id")
            ->where('rooms.id', $id)
            ->select("rooms.*", "categories.name as categoryname", "categories.price as price")
            ->first();
        return view("fonend.booking.detail", compact("booking"));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {

        $booking = new Booking();
        $booking->startDay = $request['startDay'];
        $booking->endDay = $request['endDay'];
        $booking->bookingDay = date("Y-m-d");
        $booking->price = $request['price'];
        $booking->status_id = 2;
        $booking->user_id = Auth::user()->id;
        $booking->room_id = $request['room_id'];
        $booking->save();
        return  redirect()->route('booking.history');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        $booking = Booking::findOrFail($id);
        $booking->startDay = $request['startDay'] ?? $request->startDay;
        $booking->endDay = $request['endDay'] ?? $request->endDay;
        $booking->bookingDay = $request['bookingDay'] ?? $request->bookingDay;
        $booking->price = $request['price'] ?? $request->price;
        $booking->status_id = $request['status_id'] ?? $request->status_id;
        $booking->user_id = $request['user_id'] ?? $request->user_id;
        $booking->room_id = $request['room_id'] ?? $request->room_id;
        $booking->save();
        return  redirect()->route('booking.list');
    }

    public function destroy($id)
    {
        $this->booking->deleteById($id);
        return redirect()->route('booking.history');
    }
}
