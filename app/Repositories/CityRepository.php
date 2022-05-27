<?php

namespace App\Repositories;

use App\Models\City;
use Illuminate\Support\Facades\DB;
use App\Repositories\BaseRepository;

class CityRepository extends BaseRepository
{
   public function getTable()
   {
       return "cities";
   }

   public function getModel()
   {
       return City::class;
   }

    public function createCity($data)
    {
        $city = new City();
        $city -> name = $data["name"];
        $city -> image = $data["image"];
        $city -> save();
    }

    public function updateCity($data,$id)
    {
        $city = City::findOrFail($id);
        $city -> name = $data["name"] ?? $city->name;
        $city -> image = $data["image"] ?? $city->image;
        $city -> save();
    }

    public function deleteById($id)
    {
        // Db::table("rooms")->where("city_id",$id)->delete();
        DB::table($this->table)->where('id',$id)->delete();
    }
}