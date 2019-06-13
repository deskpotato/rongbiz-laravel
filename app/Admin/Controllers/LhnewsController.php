<?php

namespace App\Admin\Controllers;

use App\Models\Lhnew;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\HasResourceActions;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Layout\Content;
use Encore\Admin\Show;

class LhnewsController extends Controller
{
    use HasResourceActions;

    /**
     * Index interface.
     *
     * @param Content $content
     * @return Content
     */
    public function index(Content $content)
    {
        return $content
            ->header('Index')
            ->description('description')
            ->body($this->grid());
    }

    /**
     * Show interface.
     *
     * @param mixed $id
     * @param Content $content
     * @return Content
     */
    public function show($id, Content $content)
    {
        return $content
            ->header('Detail')
            ->description('description')
            ->body($this->detail($id));
    }

    /**
     * Edit interface.
     *
     * @param mixed $id
     * @param Content $content
     * @return Content
     */
    public function edit($id, Content $content)
    {
        return $content
            ->header('Edit')
            ->description('description')
            ->body($this->form()->edit($id));
    }

    /**
     * Create interface.
     *
     * @param Content $content
     * @return Content
     */
    public function create(Content $content)
    {
        return $content
            ->header('Create')
            ->description('description')
            ->body($this->form());
    }

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Lhnew);

        $grid->id('Id');
        $grid->title('标题');
        $grid->thumb('图片')->display(function($img){
            return "<img src='".$this->image_url."'  width='200'/>";
        });
        $grid->hits('浏览量');
        $grid->category('所属分类');
        $grid->isRecommend('是否推荐')->display(function($recomend){
            return $recomend == 1? '是':'否';
        });

        $grid->address('地址');
        $grid->author('来源');

        $grid->created_at('Created at');
        $grid->updated_at('Updated at');

        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(Lhnew::findOrFail($id));

        $show->id('Id');
        $show->title('标题');
        $show->image_url('图片')->setEscape(false)->as(function($img){
            return "<img src='".$this->image_url."'  width='200'/>";
        }); 
        $show->hits('浏览量');
        $show->introduction('简介');
        $show->content('内容')->setEscape(false);
        $show->category('所属分类');
        $show->isRecommend('推荐');

        $show->address('地址');
        $show->author('来源');

        $show->created_at('Created at');
        $show->updated_at('Updated at');

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Lhnew);

        $form->text('title', '标题');
        $form->text('introduction', '简介');
        $form->cropper('thumb', '图片')->uniqueName();
        $form->number('hits', '浏览量');
        $form->UEditor('content', '内容');

        $default= 1;
        $parameters =  request()->route()->parameters();
        if(!empty($parameters)){
            $one = Lhnew::find($parameters['lhnews']);
            $default = $one->default_category;
        }
        
        $method = request()->method();
        if($method == 'GET'){
            $form->ignore('category')->select('category', '所属分类')->options(['1'=>'政策','2'=>'动态'])->default($default);
        }else{
            $form->select('category', '所属分类')->options(['1'=>'政策','2'=>'动态'])->default($default);
        }
        
        $form->switch('isRecommend','是否推荐')->default(0);
        $form->text('address','地址');
        $form->text('author','来源');
        return $form;
    }

 
}
