<?php

namespace App\Http\Controllers;

use App\Model\Moxing;
use Illuminate\Http\Request;

use App\Http\Requests;

class AuctionController extends Controller
{
    //��������
    public function index($id = ''){
        if(!empty($id)){
            $xq = Moxing::find($id);
            return view('Auction_Details',compact('xq'));
        }
    }

    //���ھ���
    public function current(){
        $data = Moxing::all();
        return view('Current_Auction',compact('data'));
    }

    //�ҵľ���
    public function my(){
        return view('My_Auction');
    }

}
