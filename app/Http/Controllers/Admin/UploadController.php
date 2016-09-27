<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Response;

class UploadController extends Controller
{
    //上传
    public function upload(Request $request)
    {
        $file = $request->file('upfile');
        if ($file->isValid()) {
            $realPath = $file->getRealPath();
            $entension = $file->getClientOriginalExtension();
            $newName = date('YmdHis') . mt_rand(100, 999) . '.' . $entension;
            $path = $file->move(base_path() . '/uploads/', $newName);
            return 'uploads/' . $newName;
        };
    }

    /*
     * @删除文件
     */
    public function delFile(Request $request)
    {
        $input = $request->except('_token');
        $res = delFiles(ltrim($input['file'], '/'));
        if ($res) {
            return ['status'=>0,'msg'=>'删除成功!'];
        }
        return ['status'=>1,'msg'=>'删除失败!'];
    }
}
