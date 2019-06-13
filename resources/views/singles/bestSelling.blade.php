@extends('common.app')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('static/css/style-bestSelling.css') }}"/>
@endsection

@section('title','畅销无忧')

@section('content')

<!--大背景图-->
<div class="big-bg">
    <div class="w1200">
        <!--顶部图片文字叙述-->
        <div class="tc titimg">
            <!--<img src="{{ asset('static/images/bestSelling/yingxiao-wenzi.png') }}"/>-->
            <p class="f45 cfff letter-space" ><b><span class="red">营销</span>, 靠的不是<span class="red">时间</span>和<span class="red">精力</span>，而是<span class="red">方法</span>和<span class="red">策略</span>！</p>
            <p class="f45 cfff mt30 letter-space" style="letter-spacing:5px;">找对<span class="red">渠道</span>，选对<span class="red">方法</span>，用对<span class="red">工具</span>，才能......</b></p>
            <img src="{{ asset('static/images/bestSelling/cxwy-wenzi.png') }}" alt="" class="mt30"/>
        </div>
        <!--公共模块头部-->
        <div class="common-tit w1200 tc">
            <h1 class="f36" style="margin-top: 160px;">
                <b>
                    营销渠道 &nbsp; 畅销无忧
                    <div class="tit-line">
                        <span class="b-bline"></span>
                        <span class="b-rline"></span>
                        <span class="b-bline"></span>
                    </div>
                </b>
            </h1>
            <p class="f30 mt50"><b>身边的人脉，掌中的手机，就是你是营销渠道</b></p>
        </div>
        
        <!--手机模块分类-->
        <div class="mobie-type-box mt20">
            <ul class="mobie-produce">
                <li>
                    <h4 class="f20 tc"><b>好友群</b></h4>
                    <p class="f13">Maecenas dui tellus, bibendum a aliquet in, malesuada nec sapien. Ut </p>
                </li>
                <li>
                    <h4 class="f20 tc"><b>社交平台</b></h4>
                    <p class="f13">Maecenas dui tellus, bibendum a aliquet in, malesuada nec sapien. Ut </p>
                </li>
                <li>
                    <h4 class="f20 tc"><b>全平台网站</b></h4>
                    <p class="f13">Maecenas dui tellus, bibendum a aliquet in, malesuada nec sapien. Ut </p>
                </li>
            </ul>
            <ul class="mobie-line">
                <li></li>
                <li></li>
                <li></li>
            </ul>
            <ul class="mobie">
                <img src="{{ asset('static/images/bestSelling/shouji.png') }}" alt="" />
            </ul>
            <ul class="mobie-line2 ">
                <li></li>
                <li></li>
                <li></li>
            </ul>
            <ul class="mobie-produce2">
                <li>
                    <h4 class="f20 tc"><b>朋友圈</b></h4>
                    <p class="f13">Maecenas dui tellus, bibendum a aliquet in, malesuada nec sapien. Ut </p>
                </li>
                <li>
                    <h4 class="f20 tc"><b>全功能商城</b></h4>
                    <p class="f13">Maecenas dui tellus, bibendum a aliquet in, malesuada nec sapien. Ut </p>
                </li>
                <li>
                    <h4 class="f20 tc"><b>智能名片</b></h4>
                    <p class="f13">Maecenas dui tellus, bibendum a aliquet in, malesuada nec sapien. Ut </p>
                </li>
            </ul>
            <div class="clear"></div>
        </div>
    
        <!--公共模块头部-->
        <div class="common-tit w1200 tc">
            <h1 class="f36" style="margin-top:320px;">
                <b>
                    营销方法   &nbsp; 畅销无忧
                    <div class="tit-line">
                        <span class="b-bline"></span>
                        <span class="b-rline"></span>
                        <span class="b-bline"></span>
                    </div>
                </b>
            </h1>
            <p class="f30 mt50"><b>多&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;快&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;好&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;省</b></p>
        </div>
        
        <!--营销方法 1-->
        <div class="methods ">
            <div class="lt tright mt70 methods-left">
                <p class="f46 cfff ">
                    <b>
                    <span class="c-fbd">全平台</span>营销&nbsp;&nbsp;&nbsp;&nbsp;提高<span class="c-fbd">曝光量</span>  
                        </b>
                </p>
                <p class=" c88ae f36 mt35 mb20 methods-content"> 
                    一次发布，全网营销<br />
                    产品曝光量指数级增长
                </p>
                <p class="c-fbd f24">微信、微博、头条、官网、商城、名片…都是你的营销舞台</p>
            </div>
            <div class="rt methods-right-img">
                <img src="{{ asset('static/images/bestSelling/duo.png') }}" alt="" />
            </div>
            <div class="clear"></div>
        </div>
        <!--营销方法 2-->
        <div class="methods">
            <div class="rt tleft mt70 methods-left-special">
                <p class="f46 cfff ">
                    <b>
                    <span class="c-fbd">裂变式</span>营销&nbsp;&nbsp;&nbsp;&nbsp;提高<span class="c-fbd">点击量</span>  
                        </b>
                </p>
                <p class=" c88ae f36 mt35 mb20 methods-content">  没人会拒绝熟人的推荐<br />你推送的不再是广告，而是信任</p>
                <p class="c-fbd f24">亲友、同事、同学、员工、客户…就是你的营销团队</p>
            </div>
            <div class="lt methods-left-img">
                <img src="{{ asset('static/images/bestSelling/kuai.png') }}" alt="" />
            </div>
            <div class="clear"></div>
        </div>
        
        <!--营销方法3-->
        <div class="methods">
            <div class="lt tright mt70 methods-left">
                <p class="f46 cfff ">
                    <b>
                    <span class="c-fbd">人人</span>营销&nbsp;&nbsp;&nbsp;&nbsp;提高<span class="c-fbd">购买量</span>  
                        </b>
                </p>
                <p class=" c88ae f36 mt35 mb20 methods-content"> 你的产品，个个有口碑<br />你的团队，人人想开单</p>
                <p class="c-fbd f24">分享就能返佣  躺着都能赚钱</p>
            </div>
            <div class="rt " >
                <img src="{{ asset('static/images/bestSelling/hao.png') }}" alt="" />
            </div>
            <div class="clear"></div>
        </div>
    
        <!--营销方法 4-->
        <div class="methods">
            <div class="rt tleft mt70 ">
                <p class="f46 cfff ">
                    <b>
                    <span class="c-fbd">智能</span>营销&nbsp;&nbsp;&nbsp;&nbsp;降低<span class="c-fbd">营销成本</span>  
                        </b>
                </p>
                <p class=" c88ae f36 mt35 mb20 methods-content">  不花费时间，不消耗精力<br />无营销成本，无额外投入 </p>
                <p class="c-fbd f24">不必养团队、投广告   一部手机，坐等开单</p>
            </div>
            <div class="lt methods-left">
                <img src="{{ asset('static/images/bestSelling/sheng.png') }}" alt="" />
            </div>
            <div class="clear"></div>
        </div>
        
        <!--公共模块头部-->
        <div class="common-tit w1200 tc">
            <h1 class="f36" style="margin-top:200px;">
                <b>
                      营销工具   &nbsp; 畅销无忧
                    <div class="tit-line">
                        <span class="b-bline"></span>
                        <span class="b-rline"></span>
                        <span class="b-bline"></span>
                    </div>
                </b>
            </h1>
            <p class="f30 mt50"><b>工欲善其事，必先利其器。</b></p>
        </div>
        
        <!--营销工具-->
        <ul class="tool ov">
            <li>
                <div class="tool-bg">
                    <img src="{{ asset('static/images/bestSelling/ksh-icon.png') }}" alt="" class="tool-bg-img"/>
                </div>
                <p class="cbcd f24 mt20 mb20 ">可视化编辑</p>
                <p class="c4a7 f18 tleft">Lorem ipsum dolor sit amet, consectetur </p>
            </li>
            <li>
                <div class="tool-bg">
                    <img src="{{ asset('static/images/bestSelling/khgj-icon.png') }}" alt="" class="tool-bg-img" style="right: 34px;"/>
                </div>
                <p class="cbcd f24 mt20 mb20 ">客户跟进</p>
                <p class="c4a7 f18 tleft">Lorem ipsum dolor sit amet, consectetur </p>
            </li>
            <li>
                <div class="tool-bg">
                    <img src="{{ asset('static/images/bestSelling/yjjj-icon.png') }}" alt="" class="tool-bg-img" />
                </div>
                <p class="cbcd f24 mt20 mb20 ">一键交接</p>
                <p class="c4a7 f18 tleft">Lorem ipsum dolor sit amet, consectetur adipiscing elit.  </p>
            </li>
            <li>
                <div class="tool-bg">
                    <img src="{{ asset('static/images/bestSelling/yxhd-icon.png') }}" alt="" class="tool-bg-img" style="right: 34px;"/>
                </div>
                <p class="cbcd f24 mt20 mb20 ">营销活动</p>
                <p class="c4a7 f18 tleft">Lorem ipsum dolor sit amet, consectetur adipiscing elit.  </p>
            </li>
            <li>
                <div class="tool-bg">
                    <img src="{{ asset('static/images/bestSelling/AIfx-icon.png') }}" alt="" class="tool-bg-img" style="    top: 35px;right: 27px;"/>
                </div>
                <p class="cbcd f24 mt20 mb20 ">AI分析</p>
                <p class="c4a7 f18 tleft">Lorem ipsum dolor sit amet, consectetur adipiscing elit.  </p>
            </li>
            <li>
                <div class="tool-bg">
                    <img src="{{ asset('static/images/bestSelling/sjld-icon.png') }}" alt="" class="tool-bg-img" />
                </div>
                <p class="cbcd f24 mt20 mb20 ">商机雷达</p>
                <p class="c4a7 f18 tleft">Lorem ipsum dolor sit amet, consectetur adipiscing elit.  </p>
            </li>
            <li>
                <div class="tool-bg">
                    <img src="{{ asset('static/images/bestSelling/khhx-icon.png') }}" alt="" class="tool-bg-img" style="right: 37px;top: 44px;"/>
                </div>
                <p class="cbcd f24 mt20 mb20 ">客户画像</p>
                <p class="c4a7 f18 tleft">Lorem ipsum dolor sit amet, consectetur adipiscing elit.  </p>
            </li>
            <li>
                <div class="tool-bg">
                    <img src="{{ asset('static/images/bestSelling/jxfx-icon.png') }}" alt="" class="tool-bg-img" style="right: 40px;top: 48px;"/>
                </div>
                <p class="cbcd f24 mt20 mb20 ">绩效分析</p>
                <p class="c4a7 f18 tleft">Lorem ipsum dolor sit amet, consectetur adipiscing elit.  </p>
            </li>
            <li>
                <div class="tool-bg">
                    <img src="{{ asset('static/images/bestSelling/zxkf-icon.png') }}" alt="" class="tool-bg-img" />
                </div>
                <p class="cbcd f24 mt20 mb20 ">在线客服</p>
                <p class="c4a7 f18 tleft">Lorem ipsum dolor sit amet, consectetur adipiscing elit.  </p>
            </li>
        </ul>
    
        <!--公共模块头部-->
        <div class="common-tit w1200 tc">
            <h1 class="f36" style="margin-top:150px;">
                <b style="width: 400px;">
                     立刻开启畅销无忧之旅！
                    <div class="tit-line">
                        <span class="b-bline" style="width: 150px;"></span>
                        <span class="b-rline"></span>
                        <span class="b-bline" style="width: 150px;"></span>
                    </div>
                </b>
            </h1>
        </div>
        
        <!--开启畅销无忧-->
        <div class="opening">
            <table border="" cellspacing="" cellpadding="">
                <tr>
                    <th width="400"></th>
                    <th width="400">基础版</th>
                    <th width="400">高级版</th>
                </tr>
                <tr>
                    <td>分享佣金</td>
                    <td><span class="tr-blue"></span></td>
                    <td><span class="tr-org"></span></td>
                </tr>
                <tr>
                    <td>订单管理</td>
                    <td><span class="tr-blue"></span></td>
                    <td><span class="tr-org"></span></td>
                </tr>
                <tr>
                    <td>购物车</td>
                    <td><span class="tr-blue"></span></td>
                    <td><span class="tr-org"></span></td>
                </tr>
                <tr>
                    <td>智能名片</td>
                    <td><span class="tr-blue"></span></td>
                    <td><span class="tr-org"></span></td>
                </tr>
                <tr>
                    <td>营销统计</td>
                    <td><span class="tr-blue"></span></td>
                    <td><span class="tr-org"></span></td>
                </tr>
                <tr>
                    <td>商品管理</td>
                    <td></td>
                    <td><span class="tr-org"></span></td>
                </tr>
                <tr>
                    <td>店铺</td>
                    <td></td>
                    <td><span class="tr-org"></span></td>
                </tr>
                <tr>
                    <td>官网</td>
                    <td></td>
                    <td><span class="tr-org"></span></td>
                </tr>
                <tr>
                    <td>营销活动</td>
                    <td></td>
                    <td><span class="tr-org"></span></td>
                </tr>
                <tr>
                    <td>AI分析</td>
                    <td></td>
                    <td><span class="tr-org"></span></td>
                </tr>
                <tr>
                    <td>商机雷达</td>
                    <td></td>
                    <td><span class="tr-org"></span></td>
                </tr>
                <tr>
                    <td>财务管理</td>
                    <td></td>
                    <td><span class="tr-org"></span></td>
                </tr>
                <tr>
                    <td>团队管理</td>
                    <td></td>
                    <td><span class="tr-org"></span></td>
                </tr>
                <tr style="height: 270px;">
                    <td></td>
                    <td>
                        <img src="{{ asset('static/images/bestSelling/erweim.png') }}" alt="" />
                        <p style="color: #fff;" class="f20 mt20">扫码立即使用</p>
                    </td>
                    <td></td>
                </tr>
            </table>
        </div>
    </div>
</div>
    
@endsection