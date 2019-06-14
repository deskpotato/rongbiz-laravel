<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LianghuaCase;
use App\Models\Lhnew;

class SinglesController extends Controller
{
    //关于我们
    public function about()
    {
        return view('singles.about');    
    }

    //智能工厂
    public function intelligenFactory()
    {
        return view('singles.intelligenFactory'); 
    }
    //仿人型机器人
    public function humanoidRobot()
    {
        return view('singles.humanoidRobot');
        
    }
    //两化融合
    public function twoIntegration()
    {
        $cases = LianghuaCase::orderby('created_at','DESC')->get();
        
        $zhengce = Lhnew::orderby('created_at','DESC')->where('category',1)->limit(9)->get();


        $dongtai_recommend = Lhnew::orderby('created_at','DESC')->where('isRecommend',1)->first();


        $dongtai = Lhnew::orderby('created_at','DESC')->where('category',2)->where('id','!=',$dongtai_recommend['id'])->limit(9)->get();


        return view('singles.twoIntegration',compact('cases','zhengce','dongtai','dongtai_recommend'));    
    }

    //畅销无忧
    public function bestSelling()
    {
        return view('singles.bestSelling');
    }

    //企业转型升级
    public function  transformation()
    {
        return view('singles.transformation');
    }

    //工业机器人
    public function industryRobot()
    {
        return view('singles.industryRobot');    
    }

    //消防救援机器人
    public function fireRescue()
    {
        return view('singles.fireRescue');    
    }
    //静模式智能改造
    public function silentReform()
    {
        return view('singles.silentReform');    
    }
    //industrialBrain

    public function industrialBrain()
    {
        return view('singles.industrialBrain'); 
    }

    public function wlGate()
    {
        return view('singles.wlGate');
    }

    //协作机器人
    public function  cooperationRobot()
    {
        return view('singles.cooperationRobot');
    }

}
