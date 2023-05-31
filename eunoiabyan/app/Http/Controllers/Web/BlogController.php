<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        return view ('Web.blog.new');
    }

    public function moreNew()
    {
        return view('Web.blog.moreNew');
    }
    
}