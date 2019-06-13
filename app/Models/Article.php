<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Article extends Model
{
    protected $fillable = ['title','description','image','content','hits'];

    public function getImageUrlAttribute()
    {
        // 如果 image 字段本身就已经是完整的 url 就直接返回
        if (Str::startsWith($this->attributes['image'], ['http://', 'https://'])) {
            return $this->attributes['image'];
        }
        return env('APP_URL').'/storage/uploads/'.$this->attributes['image'];
    }

    //获取器
    public function getCategoryAttribute()
    {
        return  $this->attributes['category'] == 1 ? '集团新闻' :  ($this->attributes['category']==2 ? '行业资讯':'未知');
    }

    public function  getDefaultCategoryAttribute()
    {
        return  $this->attributes['category'];
    }
}
