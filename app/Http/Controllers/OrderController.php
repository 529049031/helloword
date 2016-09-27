<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class OrderController extends Controller
{
    public function index(){
        return view('Order_Details');
    }

    public function a(){
           return view('Receipt_Address');
       }
}
