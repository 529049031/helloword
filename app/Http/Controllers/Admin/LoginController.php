<?php

namespace App\Http\Controllers\Admin;

use App\Http\Model\User;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Input;

require_once 'app/org/code/Code.class.php';

class LoginController extends CommenController
{
    public function login()
    {
        if ($input = Input::all()) {

            $code = new \Code;
            $_code = $code->get();
            if (strtoupper($input['code']) != $_code) {
                return back()->with('msg', '验证码错误');
            } else {
                //查询管理员信息
                $user = User::first();
                if ($user->user_name != $input['username'] || Crypt::decrypt($user->user_pass) != $input['password']) {
                    return back()->with('msg', '账号或者密码错误');
                } else {
                    session(['user' => $user]);
                    return redirect('admin/index');
                }
            }
        } else {
            return view('admin/login');
        }
    }

    public function code()
    {
        $code = new \code;
        $code->make();
    }

    public function getcode()
    {
        $getcode = new \Code;
        echo $getcode->get();
    }

    public function quit()
    {
        $a = $_POST['username'];
               var_dump($a);die;
      session(['user' => null]);
      return redirect(url('admin/login'));
    }
}
