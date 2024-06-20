<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller

{
    public function index()
    {
        $products = [
            ['name' => 'Spirited Away'],

            ['name' => 'Your Name'],

            ['name' => 'A Silent Voice'],
        ];


        return view('products.index', compact('products'));

    }

}