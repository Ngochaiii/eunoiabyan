<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SupportController extends Controller
{
    public function index()
    {
        return view('Web.support.size');
    }
    public function privacyPolicy()
    {
        return view('Web.support.PrivacyPolicy');
    }
    public function paymentPolicy(){
        return view('Web.support.paymentPolicy');
    }
    public function shippingPolicy()
    {
        return view('Web.support.shippingPolicy');
    }
    public function returnPolicy()
    {
        return view('Web.support.returnPolicy');
    }
    public function termsOfService()
    {
        return view('Web.support.termsOfService');
    }
}