<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller

{
    public function index()
    {
        $products = [
            ['name' => 'Anime', 'price' => 100],

            ['name' => 'Anime', 'price' => 150],

            ['name' => 'Anime', 'price' => 200],
        ];


        return view('products.index', compact('products'));

    }

}