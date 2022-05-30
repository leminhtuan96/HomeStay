<?php

namespace App\Http\Controllers;

use App\Models\City;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Repositories\CityRepository;

class CityController extends Controller
{
    public $city;
    public function __construct(CityRepository $cityrepository)
    {
        $this->city = $cityrepository;
    }

    public function index()
    {
        $cities = $this->city->getAll();
        return view("backend.city.list", compact("cities"));
    }

    public function create()
    {
        return view("backend.city.create");
    }

    public function store(Request $request)
    {
        if ($request->hasFile('image')) {
            $fileName = time() . '_' . $request->file('image')->getClientOriginalName();
            $path = $request->file('image')->storeAs("images", $fileName, "public");
        } else {
            $path = "images/default.jpg";
        }
        $valition=$request->validate([
            'name'=>'required'
        ]);

        $city = new City();
        $city->name = $request["name"];
        $city->image = $path;
        $city->save();
        return redirect()->route("city.list");
    }

    public function edit($id)
    {
        $city = $this->city->getById($id);
        return view("backend.city.update", compact("city"));
    }

    public function update(Request $request, $id)
    {
        if ($request->hasFile('image')) {
            $fileName = time() . '_' . $request->file('image')->getClientOriginalName();
            $path = $request->file('image')->storeAs("images", $fileName, "public");
        } else {
            $path = "images/default.jpg";
        }
        $city = City::findOrFail($id);
        $city->name = $request["name"] ?? $city->name;
        $city->image = $path ?? $city->image;
        $city->save();
        return redirect()->route("city.list");
    }

    public function destroy($id)
    {
        DB::table('rooms')->where("city_id", $id)->delete();
        $this->city->deleteById($id);
        return redirect()->route("city.list");
    }
}
