<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class link extends Model
{
    protected $fillable = ['title','image','url','sort'];

    protected function getImageUrlAttribute()
    {
         // 如果 image 字段本身就已经是完整的 url 就直接返回
         if (Str::startsWith($this->attributes['image'], ['http://', 'https://'])) {
            return $this->attributes['image'];
        }
        return $this->attributes['image'] ? env('APP_URL').'/storage/uploads/'.$this->attributes['image'] : '';
    }
    
}
