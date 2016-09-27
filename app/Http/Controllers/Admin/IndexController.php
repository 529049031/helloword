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
     * 更改管理员密码
     */
    public function pass()
    {
        return view('admin/pass');
    }
}
