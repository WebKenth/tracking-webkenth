<?php

namespace App\Http\Controllers;

use App\Tracking;
use Illuminate\Http\Request;

class TrackingController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function shop()
    {
        return view('shop');
    }

    public function product()
    {
        return view('product');
    }
    public function basket()
    {
        return view('basket');
    }
    public function checkout()
    {
        return view('checkout');
    }
    public function receipt()
    {
        return view('receipt');
    }

}
