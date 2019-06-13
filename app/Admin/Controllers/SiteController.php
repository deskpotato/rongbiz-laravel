<?php

namespace App\Admin\Controllers;

use App\Models\Site;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\HasResourceActions;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Layout\Content;
use Encore\Admin\Show;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    use HasResourceActions;


    /**
     * Edit interface.
     *
     * @param mixed $id
     * @param Content $content
     * @return Content
     */
    public function edit(Site $site, Content $content)
    {
        return $content
            ->header('Site')
            ->description('Site Configuration')
            ->body(view('laravel-admin.site.edit',['site'=>$site]));
    }


    public function update(Site $site , Request $request)
    {
        $site->update($request->all());
        return redirect()->route('site.edit',$site->id);
    }
    

}
