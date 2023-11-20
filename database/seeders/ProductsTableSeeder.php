<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $products = [
            ['name' => 'Iphone 11 pro', 'img' => 'https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-shopping-carts/img1.webp', 'price' => 900],
            ['name' => 'Samsung galaxy Note 10', 'img' => 'https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-shopping-carts/img2.webp', 'price' => 900],
            ['name' => 'Canon EOS M50', 'img' => 'https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-shopping-carts/img3.webp', 'price' => 1199],
            ['name' => 'MacBook Pro', 'img' => 'https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-shopping-carts/img4.webp', 'price' => 1799],
        ];

        foreach ($products as $product) {
            Product::create($product);
        }
    }
}
