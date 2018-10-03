<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;
use App\Http\Requests;
use Illuminate\View\View;

class HomePageController extends Controller
{
    public function index()
    {
        return view('homepage');
    }

}
