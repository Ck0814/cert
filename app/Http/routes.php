<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$app->get('/', function () use ($app) {
    return view('login');
});

// 自分の証明書情報
$app->get('issuance/self', 'IssuanceController@self');
// 自分の証明書発行Or更新
$app->post('issuance/self', 'IssuanceController@commit');
// 証明書発行関連Restful API
$app->get('issuance', 'IssuanceController@index');
$app->get('issuance/create', 'IssuanceController@create');
$app->post('issuance', 'IssuanceController@store');
$app->get('issuance/{id}', 'IssuanceController@show');
$app->get('issuance/{id}/edit', 'IssuanceController@edit');
$app->put('issuance/{id}', 'IssuanceController@update');
$app->patch('issuance/{id}', 'IssuanceController@update');
$app->delete('issuance/{id}', 'IssuanceController@destroy');

// 設定
$app->get('config', function() use ($app) {
    return view('config');
});
// 設定更新
$app->post('config', function() use ($app) {
    // 更新処理

    return redirect('config');
});