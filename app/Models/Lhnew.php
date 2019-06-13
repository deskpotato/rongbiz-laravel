<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Lhnew extends Model
{
    protected $fillable = [
        'title','thumb','hits','introduction','content','category'
    ];

    public function getImageUrlAttribute()
    {
        // 如果 image 字段本身就已经是完整的 url 就直接返回
        if (Str::startsWith($this->attributes['thumb'], ['http://', 'https://'])) {
            return $this->attributes['thumb'];
        }
        return env('APP_URL').'/storage/uploads/'.$this->attributes['thumb'];
    }


    //获取器
    public function getCategoryAttribute()
    {
        return  $this->attributes['category'] == 1 ? '政策' :  ($this->attributes['category']==2 ? '动态':'未知');
    }

    //获取器
    public function getisRecommendAttribute()
    {
        return  $this->attributes['isRecommend'] == 1 ? '是':'否';
    }

    public function  getDefaultCategoryAttribute()
    {
        return  $this->attributes['category'];
    }

}
