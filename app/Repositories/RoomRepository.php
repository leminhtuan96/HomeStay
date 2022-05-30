<?php

namespace App\Repositories;

use App\Models\Room;
use App\Repositories\BaseRepository;
use Illuminate\Support\Facades\DB;

class RoomRepository extends BaseRepository
{
    public function getTable()
    {
        return "rooms";
    }

    public function getModel()
    {
        return Room::class;
    }

    public function createRoom($data)
    {
        $room = new Room();
        $room -> name = $data["name"];
        $room -> address = $data["address"];
        $room -> description = $data["description"];
        $room -> bedroom = $data["bedroom"];
        $room -> bathroom = $data["bathroom"];
        $room -> image = $data["image"];
        $room -> status_id = $data["status_id"];
        $room -> city_id = $data["city_id"];
        $room -> category_id = $data["category_id"];
        $room -> user_id = $data["user_id"];
        $room ->save();
    }

    public function updateRoom($data,$id)
    {
        $room = Room::findOrFail($id);
        $room -> name = $data["name"] ?? $room -> name;
        $room -> address = $data["address"] ?? $room -> address;
        $room -> description = $data["description"] ?? $room -> description;
        $room -> bedroom = $data["bedroom"] ?? $room -> bedroom;
        $room -> bathroom = $data["bathroom"] ?? $room -> bathroom;
        $room -> image = $data["image"] ?? $room -> image;
        $room -> status_id = $data["status_id"] ?? $room -> status_id;
        $room -> city_id = $data["city_id"] ?? $room -> city_id;
        $room -> category_id = $data["category_id"] ?? $room -> category_id;
        $room -> user_id = $data["user_id"] ?? $room -> user_id;
        $room -> save();
    }
    public function getById($id){
        return DB::table("rooms")
        ->join("users","users.id","=","rooms.user_id")
        ->join("categories", "categories.id","=","rooms.category_id")
        ->join("cities","cities.id","=","rooms.city_id")
        ->join("status","status.id","=","rooms.status_id")
        ->where("rooms.id",$id)
        ->select("rooms.*","cities.name as cityname","categories.name as categoryname","users.username as username","status.name as statusname","categories.price as categoryprice")
        ->first();
    }

    public function getAll()
    {
        return DB::table("rooms")
        ->join("users","users.id","=","rooms.user_id")
        ->join("categories", "categories.id","=","rooms.category_id")
        ->join("cities","cities.id","=","rooms.city_id")
        ->join("status","status.id","=","rooms.status_id")
        ->orderByDesc('rooms.id')
        ->select("rooms.*","cities.name as cityname","categories.name as categoryname","users.username as username","status.name as statusname")
        ->get();
    }

    public function search()
    {
        return DB::table('rooms')
        ->join("users","users.id","=","rooms.user_id")
        ->join("categories","categories.id","=","rooms.category_id")
        ->join("cities","cities.id","=","rooms.city_id")

        ->select("rooms.*","cities.name as cityname","categories.name as categoryname","users.username as username")
        ->get();
    }
}


