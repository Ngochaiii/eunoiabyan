<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CollectionController extends Controller
{
    public function index()
    {
        return view ('Web.collections.bst_nangtho');
    }
    public function more()
    {
        return view('Web.collections.bst_black');
    }
    public function all()
    {
        return view('Web.collections.all_product');
    }
    
}