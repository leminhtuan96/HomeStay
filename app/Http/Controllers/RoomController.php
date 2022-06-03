<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Repositories\RoomRepository;

class RoomController extends Controller
{
    public $roomRepository;

    public function __construct(RoomRepository $roomRepository)
    {
        $this->roomRepository = $roomRepository;
    }

    public function index()
    {
        $rooms = $this->roomRepository->getAll();
        return view("backend.room.list", compact("rooms"));
    }

    public function create()
    {
        $cities = DB::table('cities')->get();
        $categories = DB::table('categories')->get();
        $statuses = DB::table('status')->get();
        return view("backend.room.create", compact(['cities', 'categories', 'statuses']));
    }

    public function store(Request $request)
    {
        if ($request->hasFile('image')) {
            $fileName = time() . '_' . $request->file('image')->getClientOriginalName();
            $path = $request->file('image')->storeAs("images", $fileName, "public");
        } else {
            $path = "images/anh.jpg";
        }

        $valition = $request->validate([
            "name"=>"required|min:6",
            "address"=>"required",
            "description"=>"required",
        ],[
            'name.required'=>'không được để trống',
            'name.min'=>'tối thiểu :min ký tự',
            'address.required'=>'không được để trống',
            'description.required'=>'không được để trống',
        ]);


        $room = new Room();
        $room->name = $request["name"];
        $room->address = $request["address"];
        $room->description = $request["description"];
        $room->bedroom = $request["bedroom"];
        $room->bathroom = $request["bathroom"];
        $room->image = $path;
        $room->status_id = $request["status_id"];
        $room->city_id = $request["city_id"];
        $room->category_id = $request["category_id"];
        $room->user_id = $request["user_id"];
        $room->save();
        return redirect()->route("room.list");
    }

    public function show($id)
    {
        $room = $this->roomRepository->getById($id);
        return view("backend.room.detail", compact("room"));
    }

    public function edit($id)
    {
        $room = $this->roomRepository->getById($id);
        $cities = DB::table('cities')->get();
        $categories = DB::table('categories')->get();
        $statuses = DB::table('status')->get();
        return view("backend.room.update", compact(['cities', 'categories', 'statuses','room']));
    }


    public function update(Request $request,$id)
    {
        if ($request->hasFile('image')) {
            $fileName = time() . '_' . $request->file('image')->getClientOriginalName();
            $path = $request->file('image')->storeAs("images", $fileName, "public");
        } else {
            $path = "images/anh.jpg";
        }

        $room = Room::findOrFail($id);
        $room -> name = $request -> name ?? $room->name;
        $room -> address = $request -> address ?? $room->address;
        $room -> description = $request -> description ?? $room->description;
        $room -> bedroom = $request -> bedroom ?? $room->bedroom;
        $room -> bathroom = $request -> bathroom ?? $room->bathroom;
        $room -> image = $path ?? $room->image;
        $room -> status_id = $request -> status_id ?? $room->status_id;
        $room -> city_id = $request -> city_id ?? $room->city_id;
        $room -> category_id = $request -> category_id ?? $room->category_id;
        $room -> user_id = $request -> user_id ?? $room->user_id;
        $room -> save();
        return redirect()-> route("room.list");
    }


    public function destroy($id)
    {
        DB::table("bookings")->where("room_id",$id)->delete();
        $this->roomRepository->deleteById($id);
        return redirect()->route("room.list");
    }

    public function search(Request $request){
        $search = $request->input('search');
        $rooms = Room::query()
        ->join("users","users.id","=","rooms.user_id")
        ->join("categories", "categories.id","=","rooms.category_id")
        ->join("cities","cities.id","=","rooms.city_id")
        ->join("status","status.id","=","rooms.status_id")
        ->orderByDesc('rooms.id')
        ->select("rooms.*","cities.name as cityname","categories.name as categoryname","users.username as username","status.name as statusname")
        ->where('rooms.name','LIKE',"%{$search}%")->get();
        return view("backend.room.list", compact("rooms"));
    }
}
