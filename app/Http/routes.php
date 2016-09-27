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
//��ҳͼ
Route::get('/', function () {
    return view('welcome');
});


/*
 * ǰ̨���ĳ���
 */

//��������
Route::get('auction/{id}', 'AuctionController@index');
//���ھ���
Route::get('current', 'AuctionController@current');
//�ҵľ���
Route::get('my', 'AuctionController@my');
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
    //�ϴ�ͼƬ
    Route::post('upload', 'UploadController@upload');
    //ɾ��ͼƬ
    Route::post('del', 'UploadController@delFile');
    //�б궩��
    Route::get('order', 'OrderController@index');
    //���۱���
    Route::get('bidding', 'BiddingController@index');
    //ϵͳ����
    Route::get('list', 'ListController@index');
    //�޸�����
    Route::get('pass', 'PassController@index');
});
