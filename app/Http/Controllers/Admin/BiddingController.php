<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class BiddingController extends Controller
{
    public function index(){
        return view('admin/Bidding_report');
    }
}