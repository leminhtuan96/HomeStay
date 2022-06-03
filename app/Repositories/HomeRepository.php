<?php

namespace App\Repositories;

use App\Models\Home;
use Illuminate\Support\Facades\DB;
use App\Repositories\BaseRepository;

class HomeRepository extends BaseRepository
{
    public function getTable()
    {
        return "homes";
    }

    public function getModel()
    {
        return Home::class;
    }

    public function createHome($data)
    {
        $home = new Home();
        $home->name = $data["name"];
        $home->address = $data["address"];
        $home->description = $data["description"];
        $home->bedroom = $data["bedroom"];
        $home->bathroom = $data["bathroom"];
        $home->image=$data["image"];
        $home->status_id = $data["status_id"];
        $home->city_id = $data["city_id"];
        $home->category_id = $data["category_id"];
        $home->user_id = $data["user_id"];
        $home->save();
    }

    public function updateHome($data,$id)
    {
        $home = Home::findOrFail($id);
        $home->name = $data["name"] ?? $home->name;
        $home->address = $data["address"] ?? $home->address;
        $home->description = $data["description"] ?? $home->description;
        $home->bedroom = $data["bedroom"] ?? $home->bedroom;
        $home->bathroom = $data["bathroom"] ?? $home->bathroom;
        $home->image=$data["image"]??$home->image;
        $home->status_id = $data["status_id"] ?? $home->status_id;
        $home->city_id = $data["city_id"] ?? $home->city_id;
        $home->category_id = $data["category_id"] ?? $home->category_id;
        $home->user_id = $data["user_id"] ?? $home->user_id;
        $home->save();
    }

    public function getById($id)
    {
        return DB::table("rooms")
        ->join("categories","categories.id","=","rooms.category_id")
        ->join("cities","cities.id","=","rooms.city_id")
        ->join("status","status.id","=","rooms.status_id")
        ->where("rooms.id",$id)
        ->select("rooms.*","cities.name as cityname","status.name as statusname","categories.name as categoryname","categories.price as categoryprice")
        ->first();
    }

    public function getAll()
    {
        return DB::table("rooms")
        ->join("users","users.id","=","rooms.user_id")
        ->join("categories","categories.id","=","rooms.category_id")
        ->join("cities","cities.id","=","rooms.city_id")
        ->join("status","status.id","=","rooms.status_id")
        ->orderByDesc('rooms.id')
        ->select("rooms.*","cities.name as cityname","categories.name as categoryname","users.username as username","status.name as statusname","categories.price as categoryprice")
        ->get();
    }

    public function search()
    {
        return DB::table('homes')
        ->join("users","users.id","=","homes.user_id")
        ->join("categories","categories.id","=","homes.category_id")
        ->join("cities","cities.id","=","homes.city_id")

        ->select("rooms.*","cities.name as cityname","categories.name as categoryname","users.username as username")
        ->get();
    }
}
