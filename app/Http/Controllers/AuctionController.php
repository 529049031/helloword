<?php

namespace App\Http\Controllers;

use App\Model\Moxing;
use Illuminate\Http\Request;

use App\Http\Requests;

class AuctionController extends Controller
{
    //竞拍详情
    public function index($id = ''){
        if(!empty($id)){
            $xq = Moxing::find($id);
            return view('Auction_Details',compact('xq'));
        }
    }

    //本期竞拍
    public function current(){
        $data = Moxing::all();
        return view('Current_Auction',compact('data'));
    }

    //我的竞拍
    public function my(){
        return view('My_Auction');
    }

}
