<?php

namespace App\Admin\Controllers;

use App\Models\Article;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\HasResourceActions;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Layout\Content;
use Encore\Admin\Show;
use Illuminate\Support\Str;

class ArticlesController extends Controller
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
        $grid = new Grid(new Article);


        $grid->id('Id')->sortable();
        $grid->title('标题');
       
        $grid->image('缩略图')->display(function($img){
            return "<img src='".$this->image_url."'  width='200'/>";
        });
         $grid->description('描述')->display(function($des){
            return Str::limit($des,60,'...');
        });
        $grid->hits('浏览量');
        $grid->author('来源');
        $grid->category('所属分类');

        $grid->created_at('创建时间');
        $grid->updated_at('更新时间');

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
        $show = new Show(Article::findOrFail($id));

        $show->id('Id');
        $show->title('标题');
        $show->description('简介');
        $show->image_url('Image')->setEscape(false)->as(function($img){
            return "<img src='".$img."' width='200'/>";
        });
        $show->content('内容')->unescape();
        $show->hits('浏览量');
        $show->category('所属分类');
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
        $form = new Form(new Article);

        $form->text('title', '标题')->rules('required');
        $form->textarea('description', '描述')->rules('required');
        $form->UEditor('content', '内容')->rules('required');
        // $form->image('image', '图片')->uniqueName()->rules('required|image');
        $form->cropper('image','缩略图');
        $form->number('hits', '浏览量');
        $form->text('author', '来源');

        $default= 1;
        $parameters =  request()->route()->parameters();
        if(!empty($parameters)){
            $one = Article::find($parameters['article']);
            $default = $one->default_category;
        }
        
        $method = request()->method();
        if($method == 'GET'){
            $form->ignore('category')->select('category', '所属分类')->options(['1'=>'集团新闻','2'=>'行业资讯'])->default($default);
        }else{
            $form->select('category', '所属分类')->options(['1'=>'集团新闻','2'=>'行业资讯'])->default($default);
        }

        return $form;
    }
}
