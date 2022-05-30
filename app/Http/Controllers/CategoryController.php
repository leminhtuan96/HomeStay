<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Repositories\CategoryRepository;

class CategoryController extends Controller
{
    public $category;
    public function __construct(CategoryRepository $categoryRepository)
    {
        $this->category = $categoryRepository;
    }

    public function index()
    {
        $categories=$this->category->getAll();
        return view("backend.category.list",compact("categories"));
    }

    public function create()
    {
        return view("backend.category.create");
    }

    public function store(Request $request)
    {
        $valition=$request->validate([
            'name'=>'required',
            'price'=>'required'
        ]);

        $category = new Category();
        $category->name = $request["name"];
        $category->price = $request["price"];
        $category->save();
        return redirect()->route("category.list");
    }

    public function edit($id)
    {
        $category = $this->category->getById($id);
        return view("backend.category.update",compact("category"));
    }

    public function update(Request $request, $id)
    {
        $category = Category::findOrFail($id);
        $category->name = $request["name"] ?? $request->name;
        $category->price = $request["price"] ?? $request->price;
        $category->save();
        return redirect()->route("category.list");
    }

    public function destroy($id)
    {
        DB::table('rooms')->where("category_id",$id)->delete();
        $this->category->deleteById($id);
        return redirect()->route("category.list");    }
}
