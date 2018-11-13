<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Products;

class IndexPageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //acquired featured products from the database
        $featured = Products::where('featured', 1)->get();
        //acquired new arrivals products
        $new_arrivals = Products::orderBy('created_at', 'desc')->take(8)->get();

        //$contents = json_decode(file_get_contents('https://newsapi.org/v2/top-headlines?country=tr&category=general&pageSize=6&apiKey=e773f762c809423eae750354d71aaeb7'), true);
        
        return view('index')->with(['featured' => $featured, 'new_arrivals' => $new_arrivals]);
    }

   
}
