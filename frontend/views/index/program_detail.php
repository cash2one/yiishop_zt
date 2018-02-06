<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7"/>
    <link rel="canonical" href="/"/>
    <title>解决方案详情页</title>
    <meta name="description" content=""/>
    <meta name="keywords" content=""/>
    <link href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/common.css">
    <link rel="stylesheet" href="/css/project.css">
    <link rel="stylesheet" type="text/css" href="//at.alicdn.com/t/font_553222_2iohiqkoy0wo2yb9.css"/>
    <link rel="stylesheet" type="text/css" href="/css/shopcar.css"/>
    <link rel="stylesheet" type="text/css" href="//at.alicdn.com/t/font_553222_gksnpj5zdd7psyvi.css"/>
    <script src="https://cdn.bootcss.com/jquery/2.2.4/jquery.js"></script>
</head>
<body>
<header>
    <div class="top-wrap">
        <div class="top-nav">
            <p class="site-profile">7X24小时客服！任何问题，轻松解决</p>
            <ul class="user-profile">
                <li class="top-li-menu">
                    <span class="login"><a href="">注册</a><a href="">登录</a>
                    </span>
                </li>
                <li class="top-li-pipe">|</li>
                <li class="top-li-menu qrcode">
                    <i class="top-icon top-phone-icon"></i>
                    <span class="site-type">手机版</span>
                    <div class="top-qrcode">
                        <img src="http://www.trecare.com/statics/img/wx_fw.png" width="100" alt="">
                        扫描二维码关注微信公众号
                    </div>
                </li>
                <li class="top-nav-pipe">|</li>
                <li class="top-li-menu wxmp">
                    <i class="top-icon top-wx-icon"></i>
                    <span class="site-type">微信</span>
                    <div class="top-qrcode">
                        <img src="http://www.trecare.com/statics/img/wx_fw.png" width="100" alt="">
                        扫描二维码关注微信公众号
                    </div>
                </li>
                <li class="top-nav-pipe">|</li>
                <li class="top-li-menu">
                    <span class="site-type">服务热线：02865473811</span>
                </li>
            </ul>
        </div>
    </div>
    <div class="menu-box">
        <div class="top-menu">
            <hgroup class="logo-site">
                <a href="#">
                    <img src="/images/logo.png"  alt="" title="">
                    <h1>网站名称</h1>
                </a>
            </hgroup>
            <nav class="site-nav-wrap">
                <ul class="navbar-menu">
                    <li class="navbar-list"><a href="<?=\yii\helpers\Url::to(['index/index'])?>">首页</a></li>
                    <li class="navbar-list"><a href="">试管婴儿<i class="site-nav-arrow"></i></a></li>
                    <li class="navbar-list"><a href="<?=\yii\helpers\Url::to(['index/search'])?>">找方案</a></li>
                </ul>
                <span class="top-menu-seach"><i></i></span>
            </nav>
        </div>
        <div class="site-nav-part">
            <ul class="sub-menu"></ul>
            <ul class="sub-menu">
                <li class="sub-list"><img src="/images/menu-ico.png"><a href="">11111</a></li>
                <li class="sub-list"><img src="/images/menu-ico.png"><a href="">美国试管婴儿</a></li>
                <li class="sub-list"><img src="/images/menu-ico.png"><a href="">美国试管婴儿</a></li>
                <li class="sub-list"><img src="/images/menu-ico.png"><a href="">美国试管婴儿</a></li>
                <li class="sub-list"><img src="/images/menu-ico.png"><a href="">美国试管婴儿</a></li>
            </ul>
            <ul class="sub-menu">
                <li class="sub-list"><img src="/images/menu-ico.png"><a href="">22222</a></li>
                <li class="sub-list"><img src="/images/menu-ico.png"><a href="">美国试管婴儿</a></li>
                <li class="sub-list"><img src="/images/menu-ico.png"><a href="">美国试管婴儿</a></li>
                <li class="sub-list"><img src="/images/menu-ico.png"><a href="">美国试管婴儿</a></li>
                <li class="sub-list"><img src="/images/menu-ico.png"><a href="">美国试管婴儿</a></li>
            </ul>
            <ul class="sub-menu">
                <li class="sub-list"><img src="/images/menu-ico.png"><a href="">33333</a></li>
                <li class="sub-list"><img src="/images/menu-ico.png"><a href="">美国试管婴儿</a></li>
                <li class="sub-list"><img src="/images/menu-ico.png"><a href="">美国试管婴儿</a></li>
                <li class="sub-list"><img src="/images/menu-ico.png"><a href="">美国试管婴儿</a></li>
                <li class="sub-list"><img src="/images/menu-ico.png"><a href="">美国试管婴儿</a></li>
            </ul>
        </div>
    </div>
</header>
<div class="web-content">
    <div class="w1190" style="position: relative;">
        <div class="white-common">
            <div class="kbxq-top-box">
                <div class="slide-img">
                	<img src="<?=$program->logo?>"/>
                	<div class="collect">
                		<span><i class="iconfont icon-buoumaotubiao44"></i> 收藏方案</span>
                		<span>已有<em><?=$program->collect_num?></em>人收藏此方案</span>
                	</div>
                	<div class="suit">
                		<img src="/images/project/frq.png" />
                		<div class="suit_text">
                			<div><span>试管次数：</span><?=$crowd->A1?>　<?=$crowd->A2?>　<?=$crowd->A3?>　<?=$crowd->A4?>　<?=$crowd->A5?></div>
                			<div><span>试管原因：</span><?=$crowd->B1?>&emsp;<?=$crowd->B2?>&emsp;<?=$crowd->B3?>&emsp;<?=$crowd->B4?>&emsp;<?=$crowd->B5?>&emsp;<?=$crowd->B6?>&emsp;<?=$crowd->B7?>&emsp;<?=$crowd->B8?>&emsp;<?=$crowd->B9?>&emsp;<?=$crowd->B10?>&emsp;</div>
                			<div><span>适合年龄：</span><?=$crowd->C1?>&emsp;<?=$crowd->C2?>&emsp;<?=$crowd->C3?>&emsp;<?=$crowd->C4?>&emsp;<?=$crowd->C5?>&emsp;</div>
                			<div><span>价格要求：</span><?=$crowd->D1?>&emsp;<?=$crowd->D2?>&emsp;<?=$crowd->D3?>&emsp;<?=$crowd->D4?>&emsp;<?=$crowd->D5?>&emsp;</div>
                			<div><span>服务体验：</span><?=$crowd->service_experice?></div>
                			<div><span>技术要求：</span><?=$crowd->tech_require?></div>
                		</div>
	                	<div class="recommend">
	                		<img src="/images/project/tjly.png" />
	                		<div><?=$program->intro?></div>
	                	</div>
                	</div>
                </div>
                <div class="choose">
                    <div class="single-info">
                        <h3 class="single-title"><?=$program->programe_name?> <em class="mark-1"></em></h3>
                        <span class="score-value-no interval">方案综合指数：<em class="star-<?=$program->commend?>"></em></span>
                        <span class="interval">预定量：<i><?=$program->reserve_num?></i></span>
                        <span class="interval">好评率：<i><?=$program->good_opinion?></i></span>
                        <span class="interval">热度：<i><?=$program->hot?></i></span>
                    </div>
                    <div class="buy_choose">
	                    <div class="row">
						  <div class="col-xs-2 col-md-2 choose_left">方案总价</div>
						  <div class="col-xs-10 col-md-10 choose_right">
						  	<span class="price_num"><em>￥</em><?=$program->total_price?></span>
						  	<p class="price_details"> 包括：
						  		<span style="margin-right: 15px;"><em>1</em>&ensp;医疗机构费用：<i>￥100000</span></span>
						  		<span><em>2</em>&ensp;服务商套餐费用：<i>￥10000</span></span>
						  	</p>
						  </div>
						</div>
						<div class="row">
						  <div class="col-xs-2 col-md-2 choose_left">特色服务</div>
						  <div class="col-xs-10 col-md-10 choose_right oper">
						  	<span><img src="/images/project/dpfx.png"/>点评返现</span>
						  	<span><img src="/images/project/rzyj.png"/>写日志有奖</span>
						  </div>
						</div>
						<div class="row">
						  <div class="col-xs-2 col-md-2 choose_left">服务套餐</div>
						  <div class="col-xs-10 col-md-10 choose_right program">
                              <?php foreach($packages as $package):?>
						  	<div class="choice">
						  		<span><?=$package->name?></span>
						  		<em>￥<?=$package->total_price?></em>
						  	</div>
						  	    <?php endforeach;?>
						  </div>
						</div>
						<div class="row">
						  <div class="col-xs-2 col-md-2 choose_left doc_name">选择医生</div>
						  <div class="col-xs-10 col-md-10 choose_right doc_pic">
                              <?php foreach($doctors as $doctor):?>
						  	<img src="<?=$doctor->logo?>" class="doc_choice"/>
                              <?php endforeach;?>
						  	<!--<img src="/images/project/Doctor.png"/>
						  	<img src="/images/project/Doctor.png"/>
						  	<img src="/images/project/Doctor.png"/>-->
						  	<!--<div class="gou">X</div>-->
						  </div>
						</div>
						<div class="row">
						  <div class="col-xs-2 col-md-2 choose_left">预约金额</div>
						  <div class="col-xs-10 col-md-10 choose_right">
						  	<div class="reserve_money">
						  		<span class="reserve_num">￥<em><?=$program->reserve_money?></em></span>
						  		<span class="reserve_text">
						  			<p><i>惠</i>预约金1.5倍抵押合同款</p>
						  			<p>（预定金额 = 服务商套餐费用<em>￥10000 x 20%</em></span>）</p>
						  		</span>
						  		<p class="reserve_remark">您提交订单时只需在线支付人民币<em>2000</em>元，7天内任意取消全额退款</p>
						  	</div>
						  	<div class="btn_buy">
						  		<button type="button" class="btn-info reserve_btn"><i class="iconfont icon-emichenggong"></i>立即预定</button>
                                <a href="<?=\yii\helpers\Url::to(['index/cart','id'=>$program->id])?>"><button type="button"  class="btn-info shop_btn"><i class="iconfont icon-iconset0308"></i>加入购物车
                                    </button></a>
						  	</div>
						  </div>
						</div>
                    </div>
                </div>
                
                <div class="store_info">
                	<img height="150px" src="<?=$facilitator->logo?>" class="title_img"/>
                	<h3><?=$facilitator->property_name?></h3>
                	<p class="passway"><img src="/images/merchant/home-12.png" width="26px" height="26px" style="vertical-align: middle;margin-right: 8px;"/><a href="#">官方资质详情></a></p>
                	<div class="ensure">
                		<p><em></em>平台权威认证</p>
                		<p><em></em>第三方服务保证</p>
                		<p><em></em>7天退款保证</p>
                		<p><em></em>平台先行赔付</p>
                	</div>
                	<div class="consult">
						<div class="consult_way">
							<span>
								<img src="/images/merchant/home-10.png"/>
							</span>
							<span>
								<p>联系服务商</p>
								<p>09:00-21:00</p>
							</span>
						</div>
                	</div>
                </div>
            </div>
        </div>
        <!--<div class="kbxq-common-box">
            <div class="box-title">医疗机构</div>
            <div class="box-content">
                <div class="img-box">
                    <img src="" width="300" height="210" alt="">
                </div>
                <div class="single-info">
                    <h3><a href="">美国梅奥诊所-肺癌治疗中心</a></h3>
                    <h3><a href="">MayoClinic</a></h3>

                </div>
            </div>
        </div>
        <div class="kbxq-common-box">
            <div class="box-title">医疗机构</div>
            <div class="box-content">
                <div class="img-box">
                    <img src="" width="300" height="210" alt="">
                </div>
                <div class="single-info">
                    <h3><a href="">美国梅奥诊所-肺癌治疗中心</a></h3>
                    <h3><a href="">MayoClinic</a></h3>

                </div>
            </div>
        </div>-->
        <div class="process_pic">
        	<img src="/images/project/htlc.png"/>
        </div>
        
        <ul class="kbxq_nav">
        	<li>医疗机构</li>
        	<li>服务商</li>
        	<li>套餐详情</li>
        	<li>方案流程</li>
        	<li>费用说明</li>
        	<li>服务说明</li>
        	<li>用户分享<em> 42</em></li>
        	<li>用户评论<em> 36</em></li>
        </ul>
        
        <div class="order">
        	<div class="order_box">
	        	<div class="order_top">
	        		<span>方案总费用</span>
	        		<span>￥<em><?=$program->total_price?></em></span>
	        	</div>
	        	<div class="order_content">
	        		<div class="order_details">
	        			<span>医疗机构</span>----------------
	        			<span>￥100000</span>
	        		</div>
	        		
	        		<div class="order_details">
	        			<span>服务商套餐</span>--------------
	        			<span>￥10000</span>
	        		</div>
	        	</div>
	        	<div class="order_bottom">
	        		<div class="order_details">
	        			<span>合计费用</span>
	        			<span>￥110000</span>
	        		</div>
	        		
	        		<div class="order_money">
	        			<span>预定金额</span>
	        			<span>￥<em><?=$program->reserve_money?></em></span>
	        		</div>
	        		
	        		<div class="order_choose">
	        			<button type="button" class="btn btn-danger" id="shop">加入购物车</button>
	        			<button type="button" class="btn btn-danger" id="reserve">立即预定</button>
	        		</div>
	        	</div>
        	</div>
        	
        	
        	<div class="plan">
	        	<img src="/images/project/gx.png"/>
	        	<p>个性化定制出国医疗方案</p>
	        	<span>依据您的需求，个性化搭配您最满意的方案</span>
        	</div>
        </div>
        
        <div class="hospital model_common">
        	<span class="title">医疗机构</span>
        	<div class="hos_info">
        		<img class="hos_img" src="<?=$hospital->logo?>"/>
        		<div class="hos_text">
        			<h2><?=$hospital->short_name?></h2>
        			<h3><?=$hospital_detail->English_name?></h3>
        			<div class="info_about">
        				<span>推荐指数：<i><?=$hospital_detail->recomend_index?></i></span>
        				<span>预定量：<em><?=$hospital_detail->reserve_num?></em></span>
        				<span>好评率：<em><?=$hospital_detail->parise_rate?></em></span>
        				<span>热度：<em><?=$hospital_detail->hot?></em></span>
        				<span>收藏量：<em><?=$hospital_detail->collect_num?></em></span>
        			</div>
	        		<ul class="info_about2">
	        			<li>
	        				<span>所在地区：<?=$hospital->country?>&nbsp;<?=$hospital->city?></span>
	        				<span>医院性质：<?=$type->hospital_property?></span>
	        				<span>医院等级：<?=$level->level?></span>
	        				<span>医院成立时间：<?=$hospital_detail->create_time?></span>
	        				<span>区域综合排名：TOP<?=$hospital_detail->area_rank?></span>
	        			</li>
	        			
	        			<li>
	        				<span>分院数量：<?=$hospital_detail->branch_num?></span>
	        				<span>科室排名：TOP<?=$hospital_detail->class_num?></span>
	        				<span>医生排名：TOP<?=$hospital_detail->doctor_rank?></span>
	        				<span>服务项目数量：<?=$hospital_detail->project_num?></span>
	        				<span>成功率/治愈率：<?=$hospital_detail->success_rate?></span>
	        			</li>
	        		</ul>
        		</div>
        	</div>
        	<div class="doctor_list">
        		<span class="doc_left"><i class="iconfont icon-xiangzuo"></i></span>
        		<span class="doc_right"><i class="iconfont icon-xiangyou"></i></span>
                <?php foreach ($doctors as $doctor):?>
        		<div class="doctor_info">
        			<span>专家详情</span>
        			<img src="<?=$doctor->logo?>"/>
        			<div class="info_name">
        				<p>Bruce&nbsp;Shapiro</p>
        				<p><?=$doctor->name?><span><?=$doctor->department?></span></p>
        				<p><span><?=$doctor->position?></span></p>
        			</div>
        			<div class="info_prize">
        				<p>
        					<i class="iconfont icon-jiangbei"></i>
							<span>医生排名：TOP<?=$doctor->sort?></span>
        				</p>
        				<p>
        					<i class="iconfont icon-jiangbei"></i>
							<span>从业年限：<?=$doctor->praise_reate?>年</span>
        				</p>
        				<p>
        					<i class="iconfont icon-jiangbei"></i>
							<span>预定数量：<?=$doctor->yuding_num?></span>
        				</p>
        			</div>
        		</div>
        		<?php endforeach;?>
        	</div>
        </div>

		<div class="provider model_common">
			<div class="title">服务商</div>
			<div class="pro_info">
				<img class="pro_img" src="<?=$facilitator->logo?>"/>
        		<div class="hos_text">
        			<h2><?=$facilitator->property_name?></h2>
        			<h3><?=$facilitator->e_name?></h3>
        			<div class="info_about">
        				<span>推荐指数：<i><?=$facilitator->recommend_num?></i></span>
        				<span>预定量：<em><?=$facilitator->reserve_num?>万</em></span>
        				<span>好评率：<em><?=$facilitator->good_opinion_rate?></em></span>
        				<span>热度：<em><?=$facilitator->hot_rate?>万</em></span>
        				<span>收藏量：<em><?=$facilitator->collect_num?>万</em></span>
        			</div>
	        		<ul class="info_about2">
	        			<li>
	        				<span>机构城市：<?=$facilitator->agency_city?></span>
	        				<span>机构成立时间：<?=$facilitator->agency_create_at?></span>
	        				<span>分制机构数量：<?=$facilitator->agency_branch?></span>
	        				<span>机构从业人员：<?=$facilitator->agency_member_num?></span>
	        				<span>机构反馈速度：<?=$facilitator->agency_response_speed?></span>
	        			</li>
	        			
	        			<li>
	        				<span>服务商性质：<?=$facilitator->Service_quotient?></span>
	        				<span>机构信用等级：<?=$facilitator->agency_credit_level?></span>
	        				<span>合作医院数量：<?=$facilitator->cooperate_hospital_num?></span>
	        				<span>机构是否通过认证：<?=$facilitator->agency_identify==1?'已通过':'未通过'?></span>
	        				<span>机构是否加入保障计划：<?=$facilitator->agency_safeguard==1?'已加入':'未加入'?></span>
	        			</li>
	        		</ul>
        		</div>
			</div>
		</div>
		
		<div class="package model_common">
			<div class="title">套餐详情
				<span class="title_right"><i class="iconfont icon-zaixianduibijihuo"></i>套餐对比</span>
			</div>
			<div>
				<div class="package_type">
                    <?php foreach($packages as $package):?>
					<span class="type_num">
						<img src="/images/project/<?=$package->level?>.png"/>
						<span class="active"><?=$package->name?></span>
					</span>
                    <?php endforeach;?>
				</div>
			</div>
			<div class="type_img">
				<img src="/images/project/f1.png"/>
				<span class="type_price">经济实惠自助套餐<span>￥</span><em>10000</em></span>
			</div>
			<div class="type_text">
				<p>套餐包含项目有:</p>
				<div class="all_text">
					<div>
						<span><i class="iconfont icon-gou"></i>早起肺癌检测</span>
						<span><i class="iconfont icon-gou"></i>早起肺癌检测</span>
						<span><i class="iconfont icon-gou"></i>早起肺癌检测</span>
						<span><i class="iconfont icon-gou"></i>早起肺癌检测</span>
					</div>
					<div>
						<span><i class="iconfont icon-gou"></i>早起肺癌检测</span>
						<span><i class="iconfont icon-gou"></i>早起肺癌检测</span>
						<span><i class="iconfont icon-gou"></i>早起肺癌检测</span>
						<span><i class="iconfont icon-gou"></i>早起肺癌检测</span>
					</div>
					<div>
						<span><i class="iconfont icon-gou"></i>早起肺癌检测</span>
						<span><i class="iconfont icon-gou"></i>早起肺癌检测</span>
						<span><i class="iconfont icon-gou"></i>早起肺癌检测</span>
						<span><i class="iconfont icon-gou"></i>早起肺癌检测</span>
					</div>
				</div>
			</div>
		</div>
		
		<div class="process model_common">
			<div class="title">方案流程
				<span class="title_right"><i class="iconfont icon-dayin"></i>打印方案流程</span>
			</div>
			<div class="process_content">
				<span class="step_icon icon1">1</span>
				<span class="step_icon icon2">2</span>
				<span class="step_icon icon3">3</span>
				<div class="process_step">
					<div class="step_num" style="margin: 0;">
						国内服务阶段
                        <?php foreach($domesticStep as $d):?>
						<div class="demand">
							<p class="demand_text">
								<em><?=$d->level?></em><?=$d->domistic_title?>
                                <span class="demand_color"><?php
                                    $id = unserialize($d->package_id);
                                    $a='（';
                                    $end = '套餐自费）';
                                    if($id){
                                        foreach ($id as $p){
                                            $a.='套餐'.$p.',';
                                        }
                                        echo $a.$end;
                                    }

                                    ?></span>
								<span><?=$d->domestic_explain?></span>
							</p>
						</div>
						<?php endforeach;?>
					</div>
					
					<div class="step_num">
						国外服务阶段
                        <?php foreach($foreignSteps as $foreignStep):?>
						<div class="demand">
							<p class="demand_text">
                                <em><?=$foreignStep->level?></em><?=$foreignStep->foreign_title?>
                                <span class="demand_color"><?php
                                    $id = unserialize($foreignStep->package_id);
                                    $a='（';
                                    $end = '套餐自费）';
                                    if($id){
                                        foreach ($id as $p){
                                            $a.='套餐'.$p.',';
                                        }
                                        echo $a.$end;
                                    }

                                    ?></span>
                                <span><?=$foreignStep->foreign_explain?></span>
							</p>
						</div>
                        <?php endforeach;?>
					</div>
					
					<div class="step_num" style="margin-top: 40px;">
						回国服务阶段
                        <?php foreach ($backSteps as $backStep):?>
                            <div class="demand">
                                <p class="demand_text">
                                    <em><?=$backStep->level?></em><?=$backStep->back_title?>
                                    <span class="demand_color"><?php
                                        $id = unserialize($backStep->package_id);
                                        $a='（';
                                        $end = '套餐自费）';
                                        if($id){
                                            foreach ($id as $p){
                                                $a.='套餐'.$p.',';
                                            }
                                            echo $a.$end;
                                        }

                                        ?></span>
                                    <span><?=$backStep->back_explain?></span>
                                </p>
                            </div>
                        <?php endforeach;?>
					</div>
				</div>
			</div>
		</div>
		
		<div class="cost_explain model_common">
			<div class="title">费用说明
			</div>
			<div class="box_content">
				<div class="content_title">费用说明</div>
				<div class="content_text">
					<p>
                        <?php foreach ($costs as $k=> $cost):?>
						<?=$k+1?>.<?=$cost->cost_title?>:<?=$cost->cost_explain?><br />
                        <?php endforeach;?>
					</p>


				</div>
			<!--	<div class="content_title">费用不包含</div>
				<div class="content_text">
					<p>
						1.单房差:单房差（依照具体团期为准）。<br />
						2.门票:行程中注明需要另行支付的自费景点（）。 <br />
						3.补充:出入境个人物品海关征税，超重行李的托运费、保管费。,因交通延阻、战争、政变、罢工、天气、飞机机器故障、航班取消或更改时间等不可抗力原因所引致的额外费用。,酒店内洗衣、理发、电话、传真、收费电视、饮品、烟酒等个人消费。当地参加的自费以及以上“费用包含”中不包含的其它项目。<br /> 
						4.旅游意外险:旅游人身意外保险 5.签证:落地签证费550/人，境外机场现付
					</p>
				</div>
				<div class="content_title">特殊限制</div>
				<div class="content_text">
					<p>
						1.为了确保旅游顺利出行，防止旅途中发生人身意外伤害事故，请旅游者在出行前做一次必要的身体检查，  如存在下列情况，因服务能力所限无法接待：<br />  
						（1）传染性疾病患者，如传染性肝炎、活动期肺结核、伤寒等传染病人；<br />  
						（2）心血管疾病患者，如严重高血压、心功能不全、心肌缺氧、心肌梗塞等病人；<br />  
						（3）脑血管疾病患者，如脑栓塞、脑出血、脑肿瘤等病人；<br />  
						（4）呼吸系统疾病患者，如肺气肿、肺心病等病人；  <br />
						（5）精神病患者，如癫痫及各种精神病人；  <br />
						（6）严重贫血病患者，如血红蛋白量水平在50克/升以下的病人； <br />
						（7）大中型手术的恢复期病患者；<br />
						（8）孕妇及行动不便者。   <br />
						<span>
							1.70周岁以上老年人预订出游，须与我司签订《健康证明》并有家属或朋友（因服务能力所限无法接待及限制接待的人除外）陪同方可出游。<br />
							2. 因服务能力所限，无法接待80周岁以上的旅游者报名出游，敬请谅解。<br />  
							3. 因服务能力所限，不受理65周岁（含65周岁）以上老年人预订云南跟团产品。<br /> 
							4. 因服务能力所限，不受理70周岁（含70周岁）以上老年人预订四川跟团产品。<br />
						</span>
						<span>
							1.未满18周岁的旅游者请由家属（因服务能力所限无法接待及限制接待的人除外）陪同参团。 <br />
							2.因服务能力所限，无法接待18周岁以下旅游者单独报名出游，敬请谅解。 
						</span>
						<span>
							本产品网上报价适用持有大陆居民身份证的游客。如您持有其他国家或地区的护照，请在预订过程中注明。
						</span>
					</p>
				</div>-->
			</div>
		</div>
		
		<div class="service_explain model_common">
			<div class="title">服务说明
			</div>
			<div class="box_content">
				<div class="content_title">服务说明</div>
				<div class="content_text">
                    <?php foreach ($service_explain as $server):?>
					<p>
                        <?=$server->explain_desc?>
					</p>
                    <?php endforeach;?>
				</div>
			</div>
		</div>
		
		<div class="user_sharing model_common">
			<div class="title">用户分享
				<span>（200位用户参与分享）</span>
				<a href="#">
					<button type="button" class="btn btn-info btn_right">全部分享</button>
				</a>
			</div>
			<div class="album">
				<div class="flip">
					<span><i class="iconfont icon-xiangzuo"></i></span>
					<span><i class="iconfont icon-xiangyou"></i></span>
				</div>
                <?php foreach ($memberShares as $membershare):?>
				<div class="album_comment">
					<div class="comment_top">
						<img src="<?=$membershare->img?>"/>
						<div class="comment_show">
							<!--<span class="show_left"><em>12</em> 天</span>-->
							<span class="show_right">
								<p><?=$membershare->date?></p>
								<p>地点：<?=$membershare->route_intro?></p>
							</span>
						</div>
					</div>
					<div class="comment_bottom">
						<div class="comment_text"><?=$membershare->intro?></div>
						<div class="comment_info">
							<span><i class="iconfont icon-101" style="color: #666;"></i>会飞的鱼</span>
							<span>
								<i class="iconfont icon-dianzan" style="color: #f40f64;"></i><em class="interval">24</em>
								<i class="iconfont icon-icon--"></i><em>10</em>
							</span>
						</div>
					</div>
				</div>
                <?php endforeach;?>
			</div>
		</div>
		
		<div class="service_explain model_common">
			<div class="title">用户评论
				<span class="user_right">100%真实用户点评</span>
			</div>
			<div class="evaluate">
				<div class="row evaluate_info">
					<div class="col-xs-2 col-md-2 evaluate_left">
						<p><em>4.8</em>分</p>
						<span class="star_1"></span>
					</div>
				  	<div class="col-xs-10 col-md-10 evaluate_right">
				  		<p><em>425</em>位用户参与评论</p>
				  		<div class="all_publish">
				  			<p><span>全部评价（425）</span><span>晒图（150）</span><span>追评（50）</span></p>
				  			<p><span>五星（50）</span><span>四星（50）</span><span>三星（50）</span><span>二星（50）</span><span>一星（50）</span></p>
				  		</div>
				   </div>
				</div>
			</div>
            <?php foreach($memberComments as $memberComment):?>
			<div class="row user_list">
				<div class="col-xs-2 col-md-2 user_left">
				  	<img src="<?=$memberComment->logo?>"/>
				  	<p><?=$memberComment->name?></p>
				</div>
			  	<div class="col-xs-10 col-md-10 user_right">
				  	<div class="user_evaluate">
				  		<span>
				  			<span>方案评分&nbsp;</span>
				  			<em></em>
				  		</span>
				  		<span>
				  			<span>服务商评分&nbsp;</span>
				  			<em></em>
				  		</span>
				  		<span>
				  			<span>医院评分&nbsp;</span>
				  			<em></em>
				  		</span>
				  		<span class="user_evaluate_data">
				  			<i><?=$memberComment->date?></i>
				  		</span>
				  	</div>
			  		<p><?=$memberComment->discuss?></p>
			   </div>
			</div>
            <?php endforeach;?>
			<p class="user_bottom">
				<button type="button" class="btn btn-info next_btn">下一页</button>
			</p>
    	</div>
	</div>
    <div class="help_nav">
        <div class="nav_icon">
            <ul>
                <li>
                    <i class="iconfont icon-dianhua"></i>
                    <p>服务电话</p>
                </li>
                <li>
                    <i class="iconfont icon-yonghutouxiang"></i>
                    <p>个人中心</p>
                </li>
                <li>
                    <i class="iconfont icon-ERP_gouwuche"></i>
                    <p>购物车</p>
                    <span>8</span>
                </li>
                <li>
                    <i class="iconfont icon-liaotian"></i>
                    <p>我的消息</p>
                    <span>...</span>
                </li>
                <li>
                    <i class="iconfont icon-fanhuidingbu36px"></i>
                    <p><a href="<?=\yii\helpers\Url::to(['index/search'])?>">返回上一页</a></p>
                </li>
            </ul>
        </div>
        <div class="shopcar">
            <p class="shopcar_head">
			<span class="head_left">
				<i class="iconfont icon-ERP_gouwuche"></i>
				<span>购物车</span>
			</span>
                <span class="head_right">
				<i class="iconfont icon-chahao"></i>
			</span>
            </p>
            <?php foreach ($cart_programs as $cart_program):?>
            <div class="shop_list">
               <!-- <div class="list_coupon">
                    <img src="/images/youhui.png"/>
                    &nbsp;支付预约金，可1.5倍抵扣合同款
                </div>-->

                <div class="row car_list">
                    <div class="col-xs-2 col-md-2 list_left">
                        <input type="checkbox" name="" id="" value="" />
                    </div><!--total_price   reserve_money    programe_name doctor_id-->
                    <div class="col-xs-10 col-md-10 list_right">
                        <img width="88px" height="62px" src="<?=$cart_program->logo?>"/>
                        <div class="right_info">
                            <p class="info_name"><?=$cart_program->programe_name?></p>
                            <em>￥<?=$cart_program->total_price*$cart_program->num?></em>
                            <p class="info_num">
                                <span>￥<?=$cart_program->reserve_money?> x<em> <?=$cart_program->num?></em></span>
                                <span class="delete"><a href="<?=\yii\helpers\Url::to(['index/delete-cart','id'=>$cart_program->id])?>">删除</a></span>
                            </p>
                        </div>
                        <div class="detail">
                            <p><?=$cart_program->package->name?></p>
                            <p><?=$cart_program->doc->name?></p>
                        </div>
                    </div>
                </div>

            </div>
            <?php endforeach;?> <!--<div class="shop_list">
                <div class="row car_list">
                    <div class="col-xs-2 col-md-2 list_left">
                        <input type="checkbox" name="" id="" value="" />
                    </div>
                    <div class="col-xs-10 col-md-10 list_right">
                        <img src="/images/baby-case.png"/>
                        <div class="right_info">
                            <p class="info_name">哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈</p>
                            <em>￥110000</em>
                            <p class="info_num">
                                <span>￥6000 x<em> 1</em></span>
                                <span class="delete">删除</span>
                            </p>
                        </div>
                        <div class="detail">
                            <p>2131232</p>
                            <p>2131232</p>
                        </div>
                    </div>
                </div>
            </div>-->

        </div>
    </div>
<footer class="footer">
    <div class="server">
        <img src="/upload/5a790c53324b1.png" alt="">
    </div>
    <div class="bottom">
    	<div class="bottom_nav bottom_nav2">
    		<div><img src="/images/bottomlogo.png"/></div>
    		<div>
    			<p>服务项目</p>
    			<a href="#">试管婴儿</a>
    			<a href="#">海外医疗</a>
    			<a href="#">出国体检</a>
    			<a href="#">出国看病</a>
    		</div>
    		<div>
    			<p>论坛</p>
    			<a href="#">试管婴儿</a>
    			<a href="#">海外医疗</a>
    			<a href="#">出国体检</a>
    			<a href="#">出国看病</a>
    		</div>
    		<div style="border: 0;">
    			<p>商务合作</p>
    			<a href="#">QQ：1972129891</a>
    			<a href="#">电话：028-65473811</a>
    			<a href="#">邮箱：1972129891@qq.com</a>
    			<a href="#">服务商入驻</a>
    			<a href="#">医院入驻</a>
    		</div>
    		<div class="bottom_code" style="border: 0;">
    			<span>
    				<img src="/images/mcode.png"/>
    			</span>
    			<span>
    				<img src="/images/mcode.png" style="margin-left: 20px;"/>
    			</span>
    		</div>
    	</div>
    	<div class="bottom_info">
    		<p>
    			友情链接：
    			<span>美国试管婴儿</span>
    			<span>泰国试管婴儿</span>
    			<span>宁德妇产医院</span>
    			<span>出国看病</span>
    			<span>青岛最好的整形医院</span>
    			<span>家政服务联盟</span>
    			<span>广州不孕不育医院</span>
    			<span>香港验血</span>
    			<span>厦门代驾价格</span>
    			<span>美国试管婴儿费用</span>
    		</p>
    		<p>四川瑞可优医疗管理有限公司 蜀ICP 备 15005296 号 网站地图</p>
    	</div>
    </div>
</footer>
</body>
</html>