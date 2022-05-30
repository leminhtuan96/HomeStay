<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\HomeRepository;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public $home;
    public function __construct(HomeRepository $homeRepository)
    {
        $this->home = $homeRepository;
    }
    public function index()
    {
        $homes = $this->home->getAll();
        $cities = DB::table('cities')->get();
        $categories = DB::table('categories')->get();
        return view("fonend.index",compact(["homes",'cities','categories']));
    }

    public function create()
    {

    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        $home=$this->home->getById($id);
        return view("fonend.home.detail",compact("home"));
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }

    public function showCity($id){
        $rooms = DB::table('rooms')->join('cities','cities.id','=','rooms.city_id')
        ->join('categories','categories.id','=','rooms.category_id')
        ->where('rooms.city_id',$id)->select('rooms.*','cities.name as cityname','categories.name as categoryname',"categories.price as categoryprice")
        ->get();
        // dd($cities);
        return view('fonend.iondex',compact('rooms'));
    }

    public function showCategory($id)
    {
        $categories=DB::table('rooms')->join('cities','cities.id','=','rooms.city_id')
        ->join('categories','categories.id','=','rooms.category_id')
        ->where('rooms.category_id',$id)
        ->select('rooms.*','cities.name as cityname','categories.name as categoryname','categories.price as categoryprice')
        ->get();
        return view('fonend.home.detail',compact('categories'));
    }
}

