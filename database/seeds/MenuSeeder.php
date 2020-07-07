<?php

use App\Menu;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $array = [
            ['name' => 'HOME', 'parent_id' => 0, 'slug' => Str::of('HOME')->slug('-')],
            ['name' => 'SHOP', 'parent_id' => 0, 'slug' => Str::of('SHOP')->slug('-')],
            ['name' => 'SERVICES', 'parent_id' => 0, 'slug' => Str::of('SERVICES')->slug('-')],
            ['name' => 'COLLECTION', 'parent_id' => 0, 'slug' => Str::of('COLLECTION')->slug('-')],
            ['name' => 'PLANT LIFE', 'parent_id' => 0, 'slug' => Str::of('PLANT LIFE')->slug('-')],
            ['name' => 'ABOUT US', 'parent_id' => 0, 'slug' => Str::of('ABOUT US')->slug('-')],
            ['name' => 'MY ACCOUNT', 'parent_id' => 0, 'slug' => Str::of('MY ACCOUNT')->slug('-')],
            ['name' => 'CÂY NỘI THẤT', 'parent_id' => 2, 'slug' => Str::of('CÂY NỘI THẤT')->slug('-')],
            ['name' => 'TIỂU CẢNH TERRARIUM', 'parent_id' => 2, 'slug' => Str::of('TIỂU CẢNH TERRARIUM')->slug('-')],
            ['name' => 'CHẬU - LỌ', 'parent_id' => 2, 'slug' => Str::of('CHẬU - LỌ')->slug('-')],
            ['name' => 'PHỤ KIỆN TERRARIUM', 'parent_id' => 2, 'slug' => Str::of('PHỤ KIỆN TERRARIUM')->slug('-')],
            ['name' => 'BÌNH THUỶ TINH', 'parent_id' => 10, 'slug' => Str::of('BÌNH THUỶ TINH')->slug('-')],
            ['name' => 'CÂY ĐỂ BÀN - KỆ', 'parent_id' => 8, 'slug' => Str::of('CÂY ĐỂ BÀN - KỆ')->slug('-')],
            ['name' => 'CÂY ĐỂ SÀN', 'parent_id' => 8, 'slug' => Str::of('CÂY ĐỂ SÀN')->slug('-')],
            ['name' => 'CÂY TERRARIUM', 'parent_id' => 8, 'slug' => Str::of('CÂY TERRARIUM')->slug('-')],
            ['name' => 'TERRARIUM WORKSHOP', 'parent_id' => 3, 'slug' => Str::of('TERRARIUM WORKSHOP')->slug('-')],
            ['name' => 'PLANT WIKI', 'parent_id' => 5, 'slug' => Str::of('PLANT WIKI')->slug('-')],
            ['name' => 'OUR STORY', 'parent_id' => 6, 'slug' => Str::of('OUR STORY')->slug('-')],
            ['name' => 'LIÊN HỆ', 'parent_id' => 6, 'slug' => Str::of('LIÊN HỆ')->slug('-')],
            ['name' => 'CỬA HÀNG', 'parent_id' => 6, 'slug' => Str::of('CỬA HÀNG')->slug('-')],
            ['name' => 'FAQ', 'parent_id' => 6, 'slug' => Str::of('FAQ')->slug('-')],
            ['name' => 'CART', 'parent_id' => 7, 'slug' => Str::of('CART')->slug('-')],
            ['name' => 'CHECKOUT', 'parent_id' => 7, 'slug' => Str::of('CHECKOUT')->slug('-')],
            ['name' => 'ORDER TRACKING', 'parent_id' => 7, 'slug' => Str::of('ORDER TRACKING')->slug('-')],
            
        ];

        foreach ($array as $item) {
            $menu = new Menu($item);
            $menu->save();
        }
    }
}
