@extends('common.app')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('static/css/style-IntelligenFactory.css') }}"/>
@endsection

@section('title','智能工厂')

@section('content')
<div class="container-fluid" style="padding: 0;">
		<div class="jumbotron banner-img" style="border-radius: 0;">
		  <div class="container">
		     <h1 class="bdImgTxt_first">智能工厂</h1>
			 <p class="bdImgTxt_sec">
                                     构建智能化生产系统  分布网络化生产设施 <br />
				实现透明化生产制造
            </p>
		  </div>
		</div> 
	</div>
	
	<!--云端驱动智能工厂-->
	<div class="cloud-driven-factory">
		<div class="w1200 cloud-box ov">
			<div class="lt">
				<img src="../../static/images/IntelligenFactory/yjsqd.png" alt="" />
			</div>
			<div class="rt">
				<h1 class="cloud-rt-tit c3 f36">云端驱动智能工厂</h1>
				<p class="c6 f18 mt40 lineh36">以ERP解决信息化问题，搭配MES和智能化设备实现采集、分析、判断与规划，构建自主学习、自主维护的人机交互智能工厂。</p>
			</div>
		</div>
	</div>
	
	<!--智能特征-->
	<div class="intelligent-feature pb100">
		<div class="big-tit f36 w1200">智能特征</div>
		<ul class="intelligent-feature-box ov w1200 pt30">
			<li>
				<div class="intelligent-top">
					<img src="../../static/images/IntelligenFactory/zzxx-icon.png" alt="" class="mt50"/>
					<p class="f24 c0 mt40">自主学习</p>
				</div>
				<div class="intelligent-bottom f18">
                                                       实时采集、科学分析<br />
				                  预测判断、合理规划
				</div>
			</li>
			<li>
				<div class="intelligent-top">
					<img src="../../static/images/IntelligenFactory/zzwh-icon.png" alt="" class="mt50"/>
					<p class="f24 c0 mt40">自主维护 </p>
				</div>
				<div class="intelligent-bottom f18">
                                                通过虚拟仿真技术、准确预测、<br />优化工艺、改进生产过程
				</div>
			</li>
			<li>
				<div class="intelligent-top">
					<img src="../../static/images/IntelligenFactory/rxzz-icon.png" alt="" class="mt50"/>
					<p class="f24 c0 mt40">柔性制造 </p>
				</div>
				<div class="intelligent-bottom f18">
                                               实现小批量定制生产和以消费者<br />为导向的按需生产方式
				</div>
			</li>
		</ul>
	</div>
	
	<!--核心构成-->
	<div class="core-components pb100">
		<div class="big-tit f36 w1200 c3">核心构成</div>
		<ul class="core-components-box ov w1200 pt30">
			<li>
				<img src="../../static/images/IntelligenFactory/erp-image.png" alt="" />
				<div class="core-components-li">
					<h3 class="core-tit f16 c3">企业资源计划（ERP）</h3>
					<p class="f14 c6 lineh24 mt20">将企业所有资源整合集成管理，对企业的物流，资金流，信息流进行全面一体化管理的信息化系统。</p>
				</div>
			</li>
			<li>
				<img src="../../static/images/IntelligenFactory/mes-image.png" alt="" />
				<div class="core-components-li">
					<h3 class="core-tit f16 c3">生产执行（MES）</h3>
					<p class="f14 c6 lineh24 mt20">制造执行系统是企业信息集成的纽带，企业实施敏捷制造战略，实现车间生产透明化的基本手段。</p>
				</div>
			</li>
			<li>
				<img src="../../static/images/IntelligenFactory/wms-image.png" alt="" />
				<div class="core-components-li">
					<h3 class="core-tit f16 c3">智能仓储（WMS）</h3>
					<p class="f14 c6 lineh24 mt20">仓储管理模块是通过出入库、仓库调拨、库存调拨、批次管理和虚仓管理等功能，有效控制并跟踪仓库业务的物流和成本管理全过程，实现完善的企业仓储信息管理。</p>
				</div>
			</li>
			<li>
				<img src="../../static/images/IntelligenFactory/znsb-image.png"/>
				<div class="core-components-li">
					<h3 class="core-tit f16 c3">智能设备</h3>
					<p class="f14 c6 lineh24 mt20">智能设备通过与MES系统对接，实现生产数据实时采集，生产指令即时响应，达到智能设备信息化协同的目标。</p>
				</div>
			</li>
		</ul>
	</div>
	
	<!--主要成效-->
	<div class="main-results" style="margin-bottom: 450px;">
		<div class="big-tit f36 w1200 c3">主要成效</div>
		<ul class="results-box ov w1200 pt30 pb40">
			<li>
				<div class="results-li-tit">增强可追溯性 </div>
				<div class="results-li-content  f18 c3">
					<p><span class="circle"></span> 提升客服速度</p>
					<p><span class="circle"></span> 可追溯产品制造档案</p>
					<p><span class="circle"></span> 降低成产成本</p>
					<p><span class="circle"></span> 提高客户满意度</p>
				</div>
			</li>
			<li>
				<div class="results-li-tit">合理安排生产计划</div>
				<div class="results-li-content  f18 c3">
					<p><span class="circle"></span> 提高交付能力</p>
					<p><span class="circle"></span> 提高产品质量</p>
					<p><span class="circle"></span> 提高生产效率</p>
					<p><span class="circle"></span> 减少库存</p>
				</div>
			</li>                
			<li>
				<div class="results-li-tit">消除现场黑箱</div>
				<div class="results-li-content  f18 c3">
					<p><span class="circle"></span> 实时数据采集</p>
					<p><span class="circle"></span> 实时现场监控</p>
					<p><span class="circle"></span> 设备故障分析/预警</p>
					<p><span class="circle"></span> 掌提生产实况</p>
				</div>
			</li>      
			<li>
				<div class="results-li-tit">优化制造模式</div>
				<div class="results-li-content content2 f18 c3">
					<p><span class="circle"></span> 减少手工提高生产力</p>
					<p><span class="circle"></span> 掌控实况提前消除问题</p>
					<p><span class="circle"></span> 数据共享增强协办公</p>
				</div>
			</li>    
			<li>
				<div class="results-li-tit">规范信息平台</div>
				<div class="results-li-content content2 f18 c3">
					<p><span class="circle"></span> 提高生产的标准化</p>
					<p><span class="circle"></span> 增强生产过程的复现性</p>
					<p><span class="circle"></span> 实现管理层控制层互通</p>
				</div>
			</li>    
			<li>
				<div class="results-li-tit">提高资源利用率</div>
				<div class="results-li-content content2 f18 c3">
					<p><span class="circle"></span> 提高车间资源利率</p>
					<p><span class="circle"></span> 实现数据资源价值</p>
					<p><span class="circle"></span> 减少产品报废</p>
				</div>
			</li>
		</ul>
	</div>
@endsection