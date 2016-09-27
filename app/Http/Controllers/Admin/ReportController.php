<?php

namespace App\Http\Controllers\admin;

use App\Http\Model\Moxing;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;

class ReportController extends Controller
{
    public function index()
    {
        $data = Moxing::all();
        return view('admin/Commodity_management',compact('data'));
    }


    public function update($id = '')
    {
        $data = Moxing::find($id);
        return view('admin/Commodity_management_update',compact('data'));
    }

    public function add()
    {
        return view('admin/Commodity_management_add');
    }
}
