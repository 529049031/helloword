<?php

namespace App\Http\Controllers\Home;

use App\Http\Model\Moxing;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Response;


class AuctionController extends CommonController
{
    /*
    * 首页
    */
    public function shouye()
    {
        $openid = $this->openid;
        $data = DB::table('config')->select('img')->first();
        $data->img = explode('#', substr(unserialize($data->img), 0, -1));

        //网页静默授权获取用户的openid,更具openid获取用户的详情
        $user_res = DB::table('users')
            ->where('openid', '=', $openid)
            ->first();
        if (!$user_res) {
            DB::table('users')
                ->insert(['openid' => $openid]);
        }
        return view('welcome', compact('data'));
    }

    /*
     * 竞拍详情
     */
    public function index($id)
    {
        $data = DB::table('collection')
            ->join('sources', 'collection.coll_id', '=', 'sources.cid')
            ->where('collection.coll_id', '=', $id)
            ->select('collection.*', 'sources.sources', 'sources.content')
            ->first();

        //处理图片
        $arr = explode('#', unserialize($data->sources));
        foreach ($arr as $k => $v) {
            if ($k != 0) {
                $newArr[] = $v;
            }
        }
        $data->sources = $newArr;

        //获取活动结束时间
        $endTime = DB::table('config')->select('end_time')->first();

        //判断活动结束时间是否大于当前时间
        $tag = strtotime($endTime->end_time) > time() ? true : false;

         //获取用户信息
        $user_res = DB::table('users')
            ->select('user_id')
            ->where('openid', '=', $this->openid)
            ->first();

        //是否收藏
        $a_res = DB::table('auction')
            ->where('uid', '=', $user_res->user_id)
            ->where('cid', '=', $id)
            ->select('focus')
            ->first();
        $focus = $a_res->focus;

        return view('Auction_Details', compact('data', 'endTime', 'tag','focus'));
    }

    /*
     * 本期竞拍
     */
    public function current()
    {
        $data = DB::table('collection')
            ->join('sources', 'collection.coll_id', '=', 'sources.cid')
            ->select('collection.*', 'sources.sources')
            ->get();
        foreach ($data as &$v) {
            $arr = explode('#', unserialize($v->sources));
            $v->sources = $arr[0];
        }

        //获取当前距离活动时间结束的时间戳
        $res = DB::table('config')->select('end_time')->first();
        $endTime = strtotime($res->end_time) - time();

        return view('Current_Auction', compact('data', 'endTime'));
    }

    //我的竞拍
    public function my()
    {
        return view('My_Auction');
    }

    /*
     * 收藏
     */
    public function collect(Request $request)
    {
        if ($request->isMethod('post')) {
            $input = $request->except('_token');

            //获取用户信息
            $user_res = DB::table('users')
                ->select('user_id')
                ->where('openid', '=', $this->openid)
                ->first();
            if ($user_res) {
                $a_res = DB::table('auction')
                    ->where('uid', '=', $user_res->user_id)
                    ->where('cid', '=', $input['coll_id'])
                    ->first();
                if (!$a_res) {
                    return Response::json(DB::table('auction')->insert(['uid' => $user_res->user_id, 'cid' => $input['coll_id'], 'focus' => $input['focus']]) ? ['status' => 0] : ['status' => 1]);
                }
                return Response::json(DB::table('auction')->update(['focus' => $input['focus']]) ? ['status' => 0] : ['status' => 1]);
            }
        }
    }
}
