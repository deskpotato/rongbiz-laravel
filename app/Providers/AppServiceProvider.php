<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\link;
use Illuminate\Support\Facades\View;
use App\Models\Site;
use App\Models\OtherCompany;
use Illuminate\Support\Facades\Route;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //视图共享数据
        //友情链接
        $links = link::orderby('sort','DESC')->get();
        View::share('links',$links);
        //站点配置
        $site = Site::find(1);
        View::share('site',$site);
        //子集团
        $other_companies = OtherCompany::get();
        View::share('otherCompanies',$other_companies);

    }
}
