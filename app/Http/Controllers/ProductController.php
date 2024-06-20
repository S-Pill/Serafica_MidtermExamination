<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $anime = array (
            [
                "title" => "Attack on Titan",
                "genre" => "Action, Fantasy",
                "episodes" => 87
            ],
            [
                "title" => "My Hero Academia",
                "genre" => "Action, Adventure",
                "episodes" => 131
            ],
            // Add more anime entries here
        );

        return view('index', compact('anime')); // Pass data to view
    }
}
