<?php

use App\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $array = [
            ['name' => 'CÂY NỘI THẤT', 'parent_id' => 0, 'slug' => Str::of('CÂY NỘI THẤT')->slug('-')],
            ['name' => 'TIỂU CẢNH TERRARIUM', 'parent_id' => 0, 'slug' => Str::of('TIỂU CẢNH TERRARIUM')->slug('-')],
            ['name' => 'CHẬU - LỌ', 'parent_id' => 0, 'slug' => Str::of('CHẬU - LỌ')->slug('-')],
            ['name' => 'PHỤ KIỆN TERRARIUM', 'parent_id' => 0, 'slug' => Str::of('PHỤ KIỆN TERRARIUM')->slug('-')],
            ['name' => 'CÂY ĐỂ BÀN - KỆ', 'parent_id' => 1, 'slug' => Str::of('CÂY ĐỂ BÀN - KỆ')->slug('-')],
            ['name' => 'CÂY ĐỂ SÀN', 'parent_id' => 1, 'slug' => Str::of('CÂY ĐỂ SÀN')->slug('-')],
            ['name' => 'CÂY TERRARIUM', 'parent_id' => 1, 'slug' => Str::of('CÂY TERRARIUM')->slug('-')],
            ['name' => 'BÌNH THUỶ TINH', 'parent_id' => 3, 'slug' => Str::of('BÌNH THUỶ TINH')->slug('-')],
        ];

        foreach ($array as $item) {
            $category = new Category($item);
            $category->save();
        }
    }
}
