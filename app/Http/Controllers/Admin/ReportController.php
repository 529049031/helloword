<?php

namespace App\Http\Controllers\admin;

use App\Http\Model\Moxing;


use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Response;

class ReportController extends Controller
{
    public function index()
    {
        $data = DB::table('collection')
            ->join('sources', 'collection.coll_id', '=', 'sources.cid')
            ->select('collection.*', 'sources.content')
            ->get();
        return view('admin/Commodity_management', compact('data'));
    }

    public function update($id)
    {
        $data = DB::table('collection')
            ->join('sources', 'collection.coll_id', '=', 'sources.cid')
            ->where('collection.coll_id', '=', $id)
            ->get();
        $data[0]->content = unserialize($data[0]->content);

        //拼接商品详情和图片
        $lb_arr = [];
        foreach (explode('#', unserialize($data[0]->sources)) as $k => $v) {
            if ($k == 0) {
                $data[0]->fm_img = $v;
            } else {
                array_push($lb_arr, $v);
            }
        }
        $data[0]->lb_img = $lb_arr;
        $tag = 'update';
        return view('admin/Commodity_management_add', compact('data', 'tag'));
    }

    public function add(Request $request)
    {
        //保存
        if ($request->isMethod('post')) {
            $input = $request->except('_token');
            DB::beginTransaction();
            switch ($input['method']) {
                case 'add':
                    $id = DB::table('collection')
                        ->insertGetId(['name' => $input['name'], 'status' => intval($input['status']), 'time' => time()]);
                    if ($id) {
                        $res = DB::table('sources')
                            ->insertGetId(['cid' => $id, 'content' => serialize($input['content']), 'sources' => serialize($input['sources'])]);
                        if (!$res) {
                            DB::rollBack();
                            return;
                        } else {
                            DB::commit();
                            return Response::json(['status' => 0, 'msg' => '保存成功!']);
                        }
                    }
                    break;
                case 'update':
                    $id = DB::table('collection')
                        ->where('coll_id', $input['id'])
                        ->update(['name' => $input['name'], 'status' => intval($input['status']), 'time' => time()]);
                    if ($id) {
                        $res = DB::table('sources')
                            ->where('cid', $input['id'])
                            ->update(['content' => serialize($input['content']), 'sources' => serialize($input['sources'])]);
                        if (!$res) {
                            DB::rollBack();
                        } else {
                            DB::commit();
                        }
                        return Response::json(['status' => 0, 'msg' => '保存成功!']);
                    }
                    break;
            }
        }
        $data = null;
        $tag = null;
        return view('admin/Commodity_management_add', compact('data', 'tag'));
    }

    public function delete(Request $request)
    {
        if ($request->isMethod('post')) {
            $input = $request->except('_token');
            DB::beginTransaction();
            if (DB::table('collection')->where('coll_id', '=', $input['coll_id'])->delete()) {
                if (DB::table('sources')->where('cid', '=', $input['coll_id'])->delete()) {
                    DB::commit();
                    return Response::json(['status' => 0, 'msg' => '删除成功!']);
                }
                DB::rollBack();
                return Response::json(['status' => 1, 'msg' => '删除失败!']);
            }
        }
    }

    public function alist(Request $request)
    {
        $table = DB::table('config');

        if ($request->isMethod('get')) {
            $data = $table->select('start_time', 'end_time', 'overtop_price', 'img')->first();
            if ($data) {
                $data->img = explode('#', substr(unserialize($data->img), 0, -1));
            }
            return view('admin/list', compact('data'));
        }
        if ($request->isMethod('post')) {
            $input = $request->except('_token');
            $input['img'] = serialize($input['img']);
            $input['overtop_price'] = intval($input['overtop_price']);

            if (!$table->select('create_time')->get()) {
                $input['create_time'] = time();
                return Response::json($table->insert($input) ? ['status' => 0, 'msg' => '保存成功!'] : ['status' => 1, 'msg' => '保存失败!']);
            } else {
                $input['update_time'] = time();
                return Response::json($table->update($input) ? ['status' => 0, 'msg' => '修改成功!'] : ['status' => 1, 'msg' => '修改失败!']);
            };
        }
    }
}
