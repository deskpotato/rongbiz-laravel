<?php

use Illuminate\Routing\Router;

Admin::registerAuthRoutes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
], function (Router $router) {

    $router->get('/', 'HomeController@index')->name('admin.home');
    $router->resource('users', UsersController::class);
    $router->resource('products', ProductsController::class);

    //站点管理
     $router->put('site/{site}','SiteController@update')->name('site.update');
     $router->get('site/{site}/edit','SiteController@edit')->name('site.edit');

     //两化cases管理
     $router->resource('cases',LianghuaCasesController::class);
     //两化融合政策和动态管理
     $router->resource('lhnews',LhnewsController::class);
     //友情链接
     $router->resource('links',LinksController::class);
    //子公司管理
     $router->resource('otherCompanys',OtherCompanysController::class);
    //新闻管理
    $router->resource('articles',ArticlesController::class);
    //热门搜索词管理
    $router->resource('hotwords',HotwordsController::class);




});
