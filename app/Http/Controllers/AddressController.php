<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class AddressController extends Controller
{
    public function index(){
        return view('address');
    }

    public function add(){
            return view('address_add');
        }

    public function update(){
            return view('address_update');
        }
}
