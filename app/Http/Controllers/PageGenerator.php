<?php

namespace App\Http\Controllers;

use App\Models\Page;
use Illuminate\Http\Request;

use App\Http\Requests;

class PageGenerator extends Controller
{

    public function index(){
        $pages = Page::paginate(1);
        return view('templates.StichtingHomepage')->withPosts($pages);
    }

    public function generatePage($slug) {
    	$page = Page::where('slug','=', $slug)->first();
    	return view('templates.stichting')->withPage($page);
    }
}
