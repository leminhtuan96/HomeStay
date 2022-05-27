<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = new Category;
        $category->name = 'Biệt Thự';
        $category->price = '600';
        $category->save();

        $category = new Category;
        $category->name = 'Resort';
        $category->price = '500';
        $category->save();

        $category = new Category;
        $category->name = 'Khách sạn';
        $category->price = '1000';
        $category->save();

        $category = new Category;
        $category->name = 'Căn hộ';
        $category->price = '1200';
        $category->save();


        $category = new Category;
        $category->name = 'Nhà trọ';
        $category->price = '5500';
        $category->save();

        $category = new Category;
        $category->name = 'Nhà nghỉ mát';
        $category->price = '5500';
        $category->save();

        $category = new Category;
        $category->name = 'Glamping';
        $category->price = '5500';
        $category->save();

        $category = new Category;
        $category->name = 'Nhà nhỏ';
        $category->price = '5500';
        $category->save();

        $category = new Category;
        $category->name = 'Nhà nghỉ nông thôn';
        $category->price = '5500';
        $category->save();

        $category = new Category;
        $category->name = 'Nhà thuyền';
        $category->price = '5500';
        $category->save();
    }
}
