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
$app->get('issuance/self', ['uses' => 'IssuanceController@self', 'as' => 'issuance.self']);
// 自分の証明書発行Or更新
$app->post('issuance/self', ['uses' => 'IssuanceController@commit', 'as' => 'issuance.commit']);
// 証明書発行関連Restful API
$app->get('issuance', ['uses' => 'IssuanceController@index', 'as' => 'issuance.index']);
$app->get('issuance/create', ['uses' => 'IssuanceController@create', 'as' => 'issuance.create']);
$app->post('issuance', ['uses' => 'IssuanceController@store', 'as' => 'issuance.store']);
$app->get('issuance/{id}', ['uses' => 'IssuanceController@show', 'as' => 'issuance.show']);
$app->get('issuance/{id}/edit', ['uses' => 'IssuanceController@edit', 'as' => 'issuance.edit']);
$app->put('issuance/{id}', ['uses' => 'IssuanceController@update', 'as' => 'issuance.update']);
$app->patch('issuance/{id}', ['uses' => 'IssuanceController@update', 'as' => 'issuance.update']);
$app->delete('issuance/{id}', ['uses' => 'IssuanceController@destroy', 'as' => 'issuance.destroy']);

// 設定
$app->get('config', function() use ($app) {
    return view('config');
});
// 設定更新
$app->post('config', function() use ($app) {
    // 更新処理

    return redirect('config');
});