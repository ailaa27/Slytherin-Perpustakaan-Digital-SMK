<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{
    public function rak() {
        return view('rak');
    }

    public function index() {
        return view('books');
    }
}
