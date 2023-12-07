<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create(
            [
                'name'=> 'Luxurious Watch',
                'slug'=>  'luxurious_watch',
                'description'=> '  <li><i class=" text-sky-600 fa-solid fa-check"></i> Crown Protector</li>
                <li><i class=" text-sky-600 fa-solid fa-check"></i> Water Resistance</li>
                <li><i class=" text-sky-600 fa-solid fa-check"></i> Movement Button</li>
                <li><i class=" text-sky-600 fa-solid fa-check"></i> 1 Year Guarantee</li>',
                'image_name'=> 'watch-1.png',
                'price' => 250.00,
                'sale_price' => 120.00,
            ]
        );

        Product::create(
            [
                'name'=> 'Pink Torex Watch',
                'slug'=>  'pink_torex_watch',
                'description'=> '           <li><i class=" text-sky-600 fa-solid fa-check"></i> Stainless Steel</li>
                <li><i class=" text-sky-600 fa-solid fa-check"></i> High Quality Glass</li>
                <li><i class=" text-sky-600 fa-solid fa-check"></i> 3 Step Protection</li>
                <li><i class=" text-sky-600 fa-solid fa-check"></i> 2 Year Guarantee</li>',
                'image_name'=> 'watch-2.png',
                'price' => 370.00,
                'sale_price' => 320.00,
            ]
        );

        Product::create(
            [
                'name'=> 'New Yellow Watch',
                'slug'=>  'new_yellow_watch',
                'description'=> '<li><i class=" text-sky-600 fa-solid fa-check"></i> 2 Step Protection Glass</li>
                <li><i class=" text-sky-600 fa-solid fa-check"></i> PVD Coating</li>
                <li><i class=" text-sky-600 fa-solid fa-check"></i> Clear Super Glass</li>
                <li><i class=" text-sky-600 fa-solid fa-check"></i> 3 Year Guarantee</li>',
                'image_name'=> 'watch-3.png',
                'price' => 250.00,
                'sale_price' => 120.00,
            ]
        );

        Product::create(
            [
                'name'=> 'Brand New Black',
                'slug'=>  'brand_new_watch',
                'description'=> ' <li><i class=" text-sky-600 fa-solid fa-check"></i> Lifetime Battery</li>
                <li><i class=" text-sky-600 fa-solid fa-check"></i> Awesome Color</li>
                <li><i class=" text-sky-600 fa-solid fa-check"></i> Water Resistance</li>
                <li><i class=" text-sky-600 fa-solid fa-check"></i> 1 Year Guarantee</li>',
                'image_name'=> 'watch-4.png',
                'price' => 450.00,
                'sale_price' => 420.00,
            ]
        );
    }
}
