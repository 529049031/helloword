<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PassController extends Controller
{
    public function index(){
        return view('admin/Modify_password');
    }
}
