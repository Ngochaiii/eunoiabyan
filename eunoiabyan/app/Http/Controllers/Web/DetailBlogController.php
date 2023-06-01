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
    public function brand_Eunoia()
    {
        return view('Web.blog.newdetail.brand_Eunoia');
    }
    public function kidmodel_vadete()
    {
        return view('Web.blog.newdetail.kidmodel_vadete');
    }
    public function show_fashition()
    {
        return view('Web.blog.newdetail.show_fashition');
    }
    public function Eunoia_Wonderland()
    {
        return view('Web.blog.newdetail.Eunoia_Wonderland');
    }
    public function ceo_new()
    {
        return view('Web.blog.newdetail.ceo_new');
    }
    public function ceo_VLA()
    {
        return view('Web.blog.newdetail.ceo_VLA');
    }
    public function BST_black()
    {
        return view('Web.blog.newdetail.BST_black');
    }
    public function eunoia_by_AN()
    {
        return view('Web.blog.newdetail.eunoia_by_AN');
    }
}