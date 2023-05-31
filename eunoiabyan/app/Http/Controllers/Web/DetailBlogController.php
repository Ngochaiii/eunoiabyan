<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DetailBlogController extends Controller
{
    public function Maika()
    {
        return view('Web.blog.newdetail.maika');
    }
    public function kidmodel()
    {
        return view('Web.blog.newdetail.kidmodel');
    }
}