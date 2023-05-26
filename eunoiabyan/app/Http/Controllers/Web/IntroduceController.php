<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IntroduceController extends Controller
{
    public function index()
    {
        return view ('Web.introduce.index');
    }

    
}