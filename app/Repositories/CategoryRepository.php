<?php

namespace App\Repositories;

use App\Models\Category;
use App\Repositories\BaseRepository;
use Illuminate\Support\Facades\DB;

class CategoryRepository extends BaseRepository
{
    public function getTable()
    {
        return "categories";
    }

    public function getModel()
    {
        return Category::class;
    }


    public function createCategory($data)
    {
        $category = new Category();
        $category -> name = $data["name"];
        $category -> name = $data["price"];
        $category -> save();
    }

    public function updateCategory($data,$id)
    {
        $category = Category::findOrFail($id);
        $category -> name = $data["name"] ?? $category->name;
        $category -> price = $data["price"] ?? $category->price;
        $category -> save();
    }

    public function deleteById($id)
    {
        // DB::table("rooms")->where("category_id",$id)->delete();
        DB::table($this->table)->where("id",$id)->delete();
    }
}