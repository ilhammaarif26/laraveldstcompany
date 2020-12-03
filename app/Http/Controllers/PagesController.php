<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        $products = Book::all();
        return view('home', ['products' => $products]);
    }

    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }


    public function login()
    {
        return view('login');
    }
}
