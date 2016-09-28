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
//前台
Route::group(['namespace'=>'Home'],function(){
    //首页
    Route::get('/', 'AuctionController@shouye');
    Route::get('auction/{id}', 'AuctionController@index')->where('id','[0-9]+');
    //Current_Auction.blade.php
    Route::get('current', 'AuctionController@current');
    //我的竞拍
    Route::get('my', 'AuctionController@my');
    //收藏
    Route::post('collect', 'AuctionController@collect');
});

//��ַѡ��
Route::get('address', 'AddressController@index');
//��ַ���
Route::get('addressadd', 'AddressController@add');
//��ַ�޸�
Route::get('addressupdate', 'AddressController@update');
//��������
Route::get('order', 'OrderController@index');

/*
 * ��̨����ϵͳ
 */
Route::any('admin/login', 'Admin\LoginController@login');
Route::get('admin/code', 'Admin\LoginController@code');

Route::group(['prefix'=>'admin','namespace'=>'Admin'], function () {
    //��̨��ҳ ����Ʒ����
    Route::get('index',  'IndexController@index');
    //��Ʒ����
    Route::get('Report', 'ReportController@index');
    //��Ʒ�޸�
    Route::get('update/{id}', 'ReportController@update');
    //��Ʒ���
    Route::match(['get','post'],'add', 'ReportController@add');
    //商品删除
    Route::post('delete', 'ReportController@delete');
    //�ϴ�ͼƬ
    Route::post('upload', 'UploadController@upload');
    //ɾ��ͼƬ
    Route::post('del', 'UploadController@delFile');
    //�б궩��
    Route::get('order', 'OrderController@index');
    //���۱���
    Route::get('bidding', 'BiddingController@index');
    //系统设置
    Route::match(['get','post'],'list', 'ReportController@alist');

    //�޸�����
    Route::get('pass', 'PassController@index');
});
