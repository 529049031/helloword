<?php

namespace App\Http\Controllers\Admin;

class IndexController extends CommenController
{
    public function index()
    {
        return view('admin/index');
    }

    public function info()
    {
        return view('admin/info');
    }

    /*
     * ���Ĺ���Ա����
     */
    public function pass()
    {
        return view('admin/pass');
    }
}
