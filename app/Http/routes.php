<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
//首页图
Route::get('/', function () {
    return view('welcome');
});


/*
 * 前台竞拍程序
 */

//竞拍详情
Route::get('auction/{id}', 'AuctionController@index');
//本期竞拍
Route::get('current', 'AuctionController@current');
//我的竞拍
Route::get('my', 'AuctionController@my');
//地址选择
Route::get('address', 'AddressController@index');
//地址添加
Route::get('addressadd', 'AddressController@add');
//地址修改
Route::get('addressupdate', 'AddressController@update');
//订单详情
Route::get('order', 'OrderController@index');

/*
 * 后台管理系统
 */
Route::any('admin/login', 'Admin\LoginController@login');
Route::get('admin/code', 'Admin\LoginController@code');

Route::group(['prefix'=>'admin','namespace'=>'Admin'], function () {
    //后台主页 （商品管理）
    Route::get('index',  'IndexController@index');
    //商品管理
    Route::get('Report', 'ReportController@index');
    //商品修改
    Route::get('update/{id}', 'ReportController@update');
    //商品添加
    Route::match(['get','post'],'add', 'ReportController@add');
    //上传图片
    Route::post('upload', 'UploadController@upload');
    //删除图片
    Route::post('del', 'UploadController@delFile');
    //中标订单
    Route::get('order', 'OrderController@index');
    //竞价报表
    Route::get('bidding', 'BiddingController@index');
    //系统设置
    Route::get('list', 'ListController@index');
    //修改密码
    Route::get('pass', 'PassController@index');
});
