<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class OtherCompany extends Model
{
    protected $fillable = ['title','image','description'];

    public function getImageAttribute()
    {
        // 如果 image 字段本身就已经是完整的 url 就直接返回
        if (Str::startsWith($this->attributes['image'], ['http://', 'https://'])) {
            return $this->attributes['image'];
        }
        return env('APP_URL').'/storage/uploads/'.$this->attributes['image'];
    }
    //image_white
    public function getImageWhiteAttribute()
    {
        // 如果 image 字段本身就已经是完整的 url 就直接返回
        if (Str::startsWith($this->attributes['image_white'], ['http://', 'https://'])) {
            return $this->attributes['image_white'];
        }
        return env('APP_URL').'/storage/uploads/'.$this->attributes['image_white'];
    }

}
