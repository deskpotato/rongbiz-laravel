<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/','PagesController@root')->name('root');

Auth::routes();

// Email 认证相关路由
Route::get('email/verify', 'Auth\VerificationController@show')->name('verification.notice');
Route::get('email/verify/{id}', 'Auth\VerificationController@verify')->name('verification.verify');
Route::get('email/resend', 'Auth\VerificationController@resend')->name('verification.resend');


//单页路由组
Route::group(['prefix' => 'single','name'=>'single.'], function () {
    //关于我们
    Route::get('about','SinglesController@about')->name('about');
    //智能工厂
    Route::get('intelligenFactory','SinglesController@intelligenFactory')->name('intelligenFactory');
    //仿人型机器人
    Route::get('humanoidRobot','SinglesController@humanoidRobot')->name('humanoidRobot');
    //两化融合
    Route::get('twoIntegration','SinglesController@twoIntegration')->name('twoIntegration');
    //畅销无忧
    Route::get('bestSelling','SinglesController@bestSelling')->name('bestSelling');
    //企业转型升级
    Route::get('transformation','SinglesController@transformation')->name('transformation');
    //工业机器人
    Route::get('industryRobot','SinglesController@industryRobot')->name('industryRobot');
    //消防救援机器人
    Route::get('fireRescue','SinglesController@fireRescue')->name('fireRescue');
    //静模式智能改造
    Route::get('silentReform','SinglesController@silentReform')->name('silentReform');
    //天工开物-工业大脑
    Route::get('industrialBrain','SinglesController@industrialBrain')->name('industrialBrain');
    //天工开物-物联网关
    Route::get('wlGate','SinglesController@wlGate')->name('wlGate');


});

Route::get('news','NewsController@index')->name('news.index');
Route::get('news/{article}','NewsController@show')->name('news.show');
