<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
		<link rel="canonical" href="/" />
		<title>方案对比页面</title>
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link rel="stylesheet" type="text/css" href="//at.alicdn.com/t/font_553222_2iohiqkoy0wo2yb9.css"/>
		<link href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" href="/css/common.css">
		<link rel="stylesheet" href="/css/contrast.css" />
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
								<img src="http://www.trecare.com/statics/img/wx_fw.png" width="100" alt=""> 扫描二维码关注微信公众号
							</div>
						</li>
						<li class="top-nav-pipe">|</li>
						<li class="top-li-menu wxmp">
							<i class="top-icon top-wx-icon"></i>
							<span class="site-type">微信</span>
							<div class="top-qrcode">
								<img src="http://www.trecare.com/statics/img/wx_fw.png" width="100" alt=""> 扫描二维码关注微信公众号
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
							<img src="/images/logo.png" alt="" title="">
							<h1>网站名称</h1>
						</a>
					</hgroup>
					<nav class="site-nav-wrap">
						<ul class="navbar-menu">
							<li class="navbar-list">
								<a href="">首页</a>
							</li>
							<li class="navbar-list">
								<a href="">试管婴儿<i class="site-nav-arrow"></i></a>
							</li>
							<li class="navbar-list">
								<a href="">出国看病<i class="site-nav-arrow"></i></a>
							</li>
							<li class="navbar-list">
								<a href="">出国体检<i class="site-nav-arrow"></i></a>
							</li>
							<li class="navbar-list">
								<a href="">出国生子<i class="site-nav-arrow"></i></a>
							</li>
							<li class="navbar-list">
								<a href="">找医院</a>
							</li>
							<li class="navbar-list">
								<a href="">找机构</a>
							</li>
							<li class="navbar-list">
								<a href="">话题圈子</a>
							</li>
						</ul>
						<span class="top-menu-seach"><i></i></span>
					</nav>
				</div>
				<div class="site-nav-part">
					<ul class="sub-menu"></ul>
					<ul class="sub-menu">
						<li class="sub-list"><img src="/images/menu-ico.png">
							<a href="">11111</a>
						</li>
						<li class="sub-list"><img src="/images/menu-ico.png">
							<a href="">美国试管婴儿</a>
						</li>
						<li class="sub-list"><img src="/images/menu-ico.png">
							<a href="">美国试管婴儿</a>
						</li>
						<li class="sub-list"><img src="/images/menu-ico.png">
							<a href="">美国试管婴儿</a>
						</li>
						<li class="sub-list"><img src="/images/menu-ico.png">
							<a href="">美国试管婴儿</a>
						</li>
					</ul>
					<ul class="sub-menu">
						<li class="sub-list"><img src="/images/menu-ico.png">
							<a href="">22222</a>
						</li>
						<li class="sub-list"><img src="/images/menu-ico.png">
							<a href="">美国试管婴儿</a>
						</li>
						<li class="sub-list"><img src="/images/menu-ico.png">
							<a href="">美国试管婴儿</a>
						</li>
						<li class="sub-list"><img src="/images/menu-ico.png">
							<a href="">美国试管婴儿</a>
						</li>
						<li class="sub-list"><img src="/images/menu-ico.png">
							<a href="">美国试管婴儿</a>
						</li>
					</ul>
					<ul class="sub-menu">
						<li class="sub-list"><img src="/images/menu-ico.png">
							<a href="">33333</a>
						</li>
						<li class="sub-list"><img src="/images/menu-ico.png">
							<a href="">美国试管婴儿</a>
						</li>
						<li class="sub-list"><img src="/images/menu-ico.png">
							<a href="">美国试管婴儿</a>
						</li>
						<li class="sub-list"><img src="/images/menu-ico.png">
							<a href="">美国试管婴儿</a>
						</li>
						<li class="sub-list"><img src="/images/menu-ico.png">
							<a href="">美国试管婴儿</a>
						</li>
					</ul>
				</div>
			</div>
		</header>

		<div class="comparison-banner">
			<img src="/images/comparison_page.png" alt="">
		</div>
		<div class="container">
			<div class="contrast_list">
				
				<div class="list_title">
					<span class="title_img">
						<img src="/images/duibi.png"/>
					</span>
					<ul>
                        <?php foreach($programs as $program):?>
						<li>
							<img src="/images/quxiao.png" class="cancel"/>
							<div class="title_top">
								<div class="title_info">
									<div>
										<img width="186px" height="130px" src="<?=$program->logo?>" />
									</div>
									<p>
										<span><?=$program->programe_name?></span>
									</p>
								</div>
							</div>
							<div class="title_bottom">
								<div class="bottom_btn">
									<span class="shopcar active_btn">加入购物车</span>
									<span class="reserved active_btn">立即预定</span>
								</div>
							</div>
						</li>
                        <?php endforeach;?>
					</ul>
				</div>
				
				<div class="programme_table">
					<h2 class="head_info">
						<i class="iconfont icon-shousuo" style="display: none;"></i>
						<i class="iconfont icon-zhankai"></i>
						<span>&nbsp;方案信息</span>	
					</h2>
					<table class="table table-bordered table-hover">
						<tbody>
								<tr class="bc_w">
									<th class="contrast_name bc_b">方案综合得分</th>
                                    <?php foreach($programs as $program):?>
									<td><em><?=$program->total_score?></em>分</td>
									<?php endforeach;?>
								</tr>
								<tr>
									<th class="contrast_name">推荐指数</th>
                                    <?php foreach ($programs as $program):?>
									<td>
                                        <?php
                                        for($i=0;$i<$program->commend;$i++){
                                            echo '<i class="iconfont icon-star"></i>';
                                        }
                                        ?>
                                    </td>
                                    <?php endforeach;?>
								</tr>
								<tr class="bc_w">
									<th class="contrast_name bc_b">方案项目</th>
                                    <?php foreach ($server_types as $server_type):?>
									<td><?=$server_type->type_name?></td>
                                    <?php endforeach;?>
								</tr>
								<tr>
									<th class="contrast_name">方案总价</th>
                                    <?php foreach($programs as $program):?>
									<td>￥<em><?=$program->total_price?></em></td>
                                    <?php endforeach;?>
								</tr>
								<tr class="bc_w">
									<th class="contrast_name bc_b">预约金</th>
                                    <?php foreach($programs as $program):?>
									<td>￥<em><?=$program->reserve_money?></em></td>
                                    <?php endforeach;?>
								</tr>
								<tr class="bc_w">
									<th class="contrast_name bc_b">优惠</th>
                                    <?php foreach($programs as $program):?>
									<td><em>1.5</em>倍</td>
                                    <?php endforeach;?>
								</tr>
								<tr class="bc_w" >
									<th class="contrast_name bc_b">方案预定量</th>
                                    <?php foreach($programs as $program):?>
									<td><?=$program->reserve_num?></td>
									<?php endforeach;?>
								</tr>
								<tr>
									<th class="contrast_name">方案评价量</th>
                                    <?php foreach($programs as $program):?>
									<td>300</td>
                                    <?php endforeach;?>
								</tr>
								<tr class="bc_w">
									<th class="contrast_name bc_b">方案好评率</th>
                                    <?php foreach($programs as $program):?>
									<td><?=$program->good_opinion?></td>
								    <?php endforeach;?>
								</tr>
								<tr>
									<th class="contrast_name">方案日志量</th>
                                    <?php foreach($programs as $program):?>
									<td>300</td>
                                    <?php endforeach;?>
								</tr>
								<tr class="bc_w">
									<th class="contrast_name bc_b">方案热度</th>
                                    <?php foreach($programs as $program):?>
									<td><?=$program->hot?></td>
                                    <?php endforeach;?>
								</tr>
								<tr>
									<th class="contrast_name">方案收藏量</th>
                                    <?php foreach($programs as $program):?>
									<td><?=$program->collect_num?></td>
									<?php endforeach;?>
								</tr>
						</tbody>
					</table>
				</div>
				
				<div class="hos_table">
					<h2 class="head_info">
						<i class="iconfont icon-shousuo" style="display: none;"></i>
						<i class="iconfont icon-zhankai"></i>
						<span>&nbsp;医院信息</span>
					</h2>
					<table class="table table-bordered table-hover">
						<tbody>
								<tr>
									<th class="contrast_name">推荐指数</th>
                                    <?php foreach ($hospitals_details as $hospitals_detail):?>
									<td>
                                        <?php
                                        for($i=0;$i<$hospitals_detail->recomend_index;++$i){
                                                echo '<i class="iconfont icon-star"></i>';
                                        }
                                        ?>
                                    </td>
                                    <?php endforeach;?>
								</tr>
								<tr>
									<th class="contrast_name">医院国家</th>
                                    <?php foreach ($hospitals as $hospital):?>
									<td><?=$hospital->country?></td>
                                    <?php endforeach;?>
								</tr>
								<tr>
									<th class="contrast_name">医院城市</th>
                                    <?php foreach ($hospitals as $hospital):?>
									<td><?=$hospital->city?></td>
                                    <?php endforeach;?>
								</tr>
								<tr>
									<th class="contrast_name">医院性质</th>
                                    <?php foreach ($hospitals_details as $hospitals_detail):?>
									<td><?=$hospitals_detail->hospital_property?></td>
                                    <?php endforeach;?>
								</tr>
								<tr>
									<th class="contrast_name">医院等级</th>
                                    <?php foreach ($hospitals_details as $hospitals_detail):?>
									<td><?=$hospitals_detail->level?></td>
                                    <?php endforeach;?>
								</tr>
								<tr>
									<th class="contrast_name">医院成立时间</th>
                                    <?php foreach ($hospitals_details as $hospitals_detail):?>
									<td><?=$hospitals_detail->create_time?></td>
									<?php endforeach;?>
								</tr>
								<tr>
									<th class="contrast_name">医院科室数量</th>
                                    <?php foreach ($hospitals_details as $hospitals_detail):?>
									<td><?=$hospitals_detail->class_num?></td>
                                    <?php endforeach;?>
								</tr>
								<tr>
									<th class="contrast_name">医生数量</th>
                                    <?php foreach ($hospitals as $hospital):?>
									<td><?=$hospital->doctor_num?></td>
                                    <?php endforeach;?>
								</tr>
								<tr>
									<th class="contrast_name">床位数量</th>
                                    <?php foreach ($hospitals as $hospital):?>
									<td><?=$hospital->bed_num?>张</td>
                                    <?php endforeach;?>
								</tr>
								<tr>
									<th class="contrast_name">分院数量</th>
                                    <?php foreach ($hospitals_details as $hospitals_detail):?>
									<td><?=$hospitals_detail->branch_num?>家</td>
                                    <?php endforeach;?>
								</tr>
								<tr>
									<th class="contrast_name">医院区域排名</th>
                                    <?php foreach ($hospitals_details as $hospitals_detail):?>
									<td>TOP<?=$hospitals_detail->area_rank?></td>
                                    <?php endforeach;?>
								</tr>
								<tr>
									<th class="contrast_name">医院科室排名</th>
                                    <?php foreach ($hospitals_details as $hospitals_detail):?>
									<td><?=$hospitals_detail->class_num?></td>
                                    <?php endforeach;?>
								</tr>
								<tr>
									<th class="contrast_name">医生排名</th>
                                    <?php foreach ($hospitals_details as $hospitals_detail):?>
									<td>TOP<?=$hospitals_detail->doctor_rank?></td>
                                    <?php endforeach;?>
								</tr>
								<tr>
									<th class="contrast_name">医生从业时间</th>
                                    <?php foreach ($hospitals_details as $hospitals_detail):?>
									<td>2015年</td>
                                    <?php endforeach;?>
								</tr>
								<tr>
									<th class="contrast_name">医生预定量</th>
                                    <?php foreach ($hospitals_details as $hospitals_detail):?>
									<td>300</td>
                                    <?php endforeach;?>
								</tr>
								<tr>
									<th class="contrast_name">服务项目数量</th>
                                    <?php foreach ($hospitals_details as $hospitals_detail):?>
									<td><?=$hospitals_detail->project_num?>个</td>
                                    <?php endforeach;?>
								</tr>
								<tr>
									<th class="contrast_name">成功率/治愈率</th>
                                    <?php foreach ($hospitals_details as $hospitals_detail):?>
									<td><?=$hospitals_detail->success_rate?></td>
									<?php endforeach;?>
								</tr>
								<tr>
									<th class="contrast_name">医院预定量</th>
                                    <?php foreach ($hospitals_details as $hospitals_detail):?>
									<td><?=$hospitals_detail->reserve_num?></td>
                                    <?php endforeach;?>
								</tr>
								<tr>
									<th class="contrast_name">医院评论量</th>
                                    <?php foreach ($hospitals_details as $hospitals_detail):?>
									<td>300</td>
                                    <?php endforeach;?>
								</tr>
								<tr>
									<th class="contrast_name">医院好评率</th>
                                    <?php foreach ($hospitals_details as $hospitals_detail):?>
									<td><?=$hospitals_detail->parise_rate?></td>
									<?php endforeach;?>
								</tr>
								<tr>
									<th class="contrast_name">医院日志量</th>
                                    <?php foreach ($hospitals_details as $hospitals_detail):?>
									<td>300</td>
                                    <?php endforeach;?>
								</tr>
								<tr>
									<th class="contrast_name">医院热度</th>
                                    <?php foreach ($hospitals_details as $hospitals_detail):?>
									<td><?=$hospitals_detail->hot?></td>
                                    <?php endforeach;?>
								</tr>
								<tr>
									<th class="contrast_name">医院收藏量</th>
                                    <?php foreach ($hospitals_details as $hospitals_detail):?>
									<td><?=$hospitals_detail->collect_num?></td>
                                    <?php endforeach;?>
								</tr>
								<tr>
									<th class="contrast_name">是否通过认证</th>
                                    <?php foreach ($hospitals_details as $hospitals_detail):?>
									<td>是</td>
                                    <?php endforeach;?>
								</tr>
								<tr>
									<th class="contrast_name">医院信用等级</th>
                                    <?php foreach ($hospitals_details as $hospitals_detail):?>
									<td><em>99.8</em>分</td>
                                    <?php endforeach;?>
								</tr>
								<tr>
									<th class="contrast_name">服务流程引导</th>
									<td><em>99.7</em>分</td>
									<td><em>98.7</em>分</td>
									<td><em>99.8</em>分</td>
									<td><em>97.9</em>分</td>
									<td><em>95.9</em>分</td>
								</tr>
								<tr>
									<th class="contrast_name">医院反馈速度</th>
									<td><em>98.6</em>分</td>
									<td><em>99.6</em>分</td>
									<td><em>97.9</em>分</td>
									<td><em>98.8</em>分</td>
									<td><em>97.6</em>分</td>
								</tr>
								
						</tbody>
					</table>
				</div>
				
				<div class="server_table">
					<h2 class="head_info">
						<i class="iconfont icon-shousuo" style="display: none;"></i>
						<i class="iconfont icon-zhankai"></i>
						<span>&nbsp;服务商信息</span>
					</h2>
					<table class="table table-bordered table-hover">
						<tbody>
								<tr>
									<th class="contrast_name">推荐指数</th>
                                    <?php foreach ($services as $service):?>
									<td>
                                        <?php
                                        for($i=0;$i<$service->recommend_num;++$i){
                                                echo ' <i class="iconfont icon-star"></i>';
                                        }
                                        ?>
                                    </td>
                                    <?php endforeach;?>
 								</tr>
								<tr>
									<th class="contrast_name">服务商国家
                                    <?php foreach($services as $service):?>
                                        </th><td>中国</td>
									<?php endforeach;?>
								</tr>
								<tr>
									<th class="contrast_name">服务商城市</th>
                                    <?php foreach($services as $service):?>
                                        <td><?=$service->agency_city?></td>
                                    <?php endforeach;?>

								</tr>
								<tr>
									<th class="contrast_name">服务商性质</th>
                                    <?php foreach($services as $service):?>
                                        <td><?=$service->Service_quotient?></td>
                                    <?php endforeach;?>
								</tr>
								<tr>
									<th class="contrast_name">成立时间</th>
                                    <?php foreach($services as $service):?>
                                        <td><?=$service->agency_create_at?>年</td>
                                    <?php endforeach;?>
								</tr>
								<tr>
									<th class="contrast_name">方案预定量</th>
                                    <?php foreach($services as $service):?>
                                        <td><?=$service->reserve_num?>万</td>
                                    <?php endforeach;?>
								</tr>
								<tr>
									<th class="contrast_name">注册资本</th>
                                    <?php foreach($services as $service):?>
                                        <td>500万</td>
                                    <?php endforeach;?>
								</tr>
								<tr>
									<th class="contrast_name">从业员工</th>
                                    <?php foreach($services as $service):?>
                                        <td><?=$service->agency_member_num?></td>
                                    <?php endforeach;?>
								</tr>
								<tr>
									<th class="contrast_name">分公司数量</th>
                                    <?php foreach($services as $service):?>
                                        <td><?=$service->agency_branch?></td>
                                    <?php endforeach;?>
								</tr>
								<tr>
									<th class="contrast_name">合作医院数量</th>
                                    <?php foreach($services as $service):?>
                                        <td><?=$service->cooperate_hospital_num?></td>
                                    <?php endforeach;?>
								</tr>
								<tr>
									<th class="contrast_name">服务项目数量</th>
                                    <?php foreach($program_nums as $num):?>
									<td><?=$num?>个</td>
                                    <?php endforeach;?>
								</tr>
								<tr>
									<th class="contrast_name">服务商预定量</th>
                                    <?php foreach($services as $service):?>
                                        <td><?=$service->reserve_num?>万</td>
                                    <?php endforeach;?>
								</tr>
								<tr>
									<th class="contrast_name">服务商评论量</th>
                                    <?php foreach($services as $service):?>
                                        <td><?=$service->collect_num?>万</td>
                                    <?php endforeach;?>
								</tr>
								<tr>
									<th class="contrast_name">服务商好评率</th>
                                    <?php foreach($services as $service):?>
                                        <td><?=$service->good_opinion_rate?></td>
                                    <?php endforeach;?>
								</tr>
								<tr>
									<th class="contrast_name">服务商日志量</th>
                                    <?php foreach($services as $service):?>
                                        <td><?=$service->reserve_num?>万</td>
                                    <?php endforeach;?>
								</tr>
								<tr>
									<th class="contrast_name">服务商热度</th>
                                    <?php foreach($services as $service):?>
                                        <td><?=$service->hot_rate?>万</td>
                                    <?php endforeach;?>
								</tr>
								<tr>
									<th class="contrast_name">服务商收藏量</th>
                                    <?php foreach($services as $service):?>
                                        <td><?=$service->collect_num?>万</td>
                                    <?php endforeach;?>
								</tr>
								<tr>
									<th class="contrast_name">是否通过认证</th>
                                    <?php foreach($services as $service):?>
                                        <td><?=$service->agency_identify==1?"是":'否'?></td>
                                    <?php endforeach;?>
								</tr>
								<tr>
									<th class="contrast_name">服务商信用等级</th>
                                    <?php foreach($services as $service):?>
                                        <td><em><?=$service->agency_credit_level?></em>分</td>
                                    <?php endforeach;?>
								</tr>
								<tr>
									<th class="contrast_name">服务流程引导</th>
									<td><em>99.8</em>分</td>
									<td><em>99.8</em>分</td>
									<td><em>99.8</em>分</td>
									<td><em>99.8</em>分</td>
									<td><em>99.8</em>分</td>
								</tr>
								<tr>
									<th class="contrast_name">服务商反馈速度</th>
                                    <?php foreach($services as $service):?>
                                        <td><em><?=$service->agency_response_speed?></em>分</td>
                                    <?php endforeach;?>
								</tr>
						</tbody>
					</table>
				</div>
				
				<div class="medical_table">
					<h2 class="head_info">
						<i class="iconfont icon-shousuo" style="display: none;"></i>
						<i class="iconfont icon-zhankai"></i>
						<span>&nbsp;医疗服务</span>
					</h2>
					<table class="table table-bordered table-hover">
						<tbody>
								<tr>
									<th class="contrast_name">国内检查</th>
                                    <?php foreach($hospital_services as $k=>$hospital_service):?>
									<td><?=$hospital_service[$k]->service_project_id==1?'<i class="iconfont icon-duigou1"></i>':'--无数据--'?></td>
									<?php endforeach;?>
 								</tr>
								<tr>
									<th class="contrast_name">病历翻译</th>
                                    <?php foreach($hospital_services as $k=>$hospital_service):?>
                                        <td><?=$hospital_service[$k]->service_project_id=='1'?'<i class="iconfont icon-duigou1"></i>':'--无数据--'?></td>
                                    <?php endforeach;?>
								</tr>
								<tr>
									<th class="contrast_name">成功率预估</th>
                                    <?php foreach($hospital_services as $k=>$hospital_service):?>
                                        <td><?=$hospital_service[$k]->service_project_id=='1'?'<i class="iconfont icon-duigou1"></i>':'--无数据--'?></td>
                                    <?php endforeach;?>
								</tr>
								<tr>
									<th class="contrast_name">视频问诊</th>
                                    <?php foreach($hospital_services as $k=>$hospital_service):?>
                                        <td><?=$hospital_service[$k]->service_project_id=='1'?'<i class="iconfont icon-duigou1"></i>':'--无数据--'?></td>
                                    <?php endforeach;?>
								</tr>
								<tr>
									<th class="contrast_name">调理指导</th>
                                    <?php foreach($hospital_services as $k=>$hospital_service):?>
                                        <td><?=$hospital_service[$k]->service_project_id=='1'?'<i class="iconfont icon-duigou1"></i>':'--无数据--'?></td>
                                    <?php endforeach;?>
								</tr>
								<tr>
									<th class="contrast_name">用药指导</th>
                                    <?php foreach($hospital_services as $k=>$hospital_service):?>
                                        <td><?=$hospital_service[$k]->service_project_id=='1'?'<i class="iconfont icon-duigou1"></i>':'--无数据--'?></td>
                                    <?php endforeach;?>
								</tr>
								<tr>
									<th class="contrast_name">医院预约</th>
                                    <?php foreach($hospital_services as $k=>$hospital_service):?>
                                        <td><?=$hospital_service[$k]->service_project_id=='1'?'<i class="iconfont icon-duigou1"></i>':'--无数据--'?></td>
                                    <?php endforeach;?>
								</tr>
								<tr>
									<th class="contrast_name">就医手续办理</th>
                                    <?php foreach($hospital_services as $k=>$hospital_service):?>
                                        <td><?=$hospital_service[$k]->service_project_id=='1'?'<i class="iconfont icon-duigou1"></i>':'--无数据--'?></td>
                                    <?php endforeach;?>
								</tr>
								<tr>
									<th class="contrast_name">就诊陪同</th>
                                    <?php foreach($hospital_services as $k=>$hospital_service):?>
                                        <td><?=$hospital_service[$k]->service_project_id=='1'?'<i class="iconfont icon-duigou1"></i>':'--无数据--'?></td>
                                    <?php endforeach;?>
								</tr>
								<tr>
									<th class="contrast_name">医疗翻译</th>
                                    <?php foreach($hospital_services as $k=>$hospital_service):?>
                                        <td><?=$hospital_service[$k]->service_project_id=='1'?'<i class="iconfont icon-duigou1"></i>':'--无数据--'?></td>
                                    <?php endforeach;?>
								</tr>
								<tr>
									<th class="contrast_name">后期指导</th>
                                    <?php foreach($hospital_services as $k=>$hospital_service):?>
                                        <td><?=$hospital_service[$k]->service_project_id=='1'?'<i class="iconfont icon-duigou1"></i>':'--无数据--'?></td>
                                    <?php endforeach;?>
								</tr>
								<tr>
									<th class="contrast_name">出国看病咨询</th>
                                    <?php foreach($hospital_services as $k=>$hospital_service):?>
                                        <td><?=$hospital_service[$k]->service_project_id=='1'?'<i class="iconfont icon-duigou1"></i>':'--无数据--'?></td>
                                    <?php endforeach;?>
								</tr>
								<tr>
									<th class="contrast_name">医疗报告整理</th>
                                    <?php foreach($hospital_services as $k=>$hospital_service):?>
                                        <td><?=$hospital_service[$k]->service_project_id=='1'?'<i class="iconfont icon-duigou1"></i>':'--无数据--'?></td>
                                    <?php endforeach;?>
								</tr>
								<tr>
									<th class="contrast_name">医疗报告翻译</th>
                                    <?php foreach($hospital_services as $k=>$hospital_service):?>
                                        <td><?=$hospital_service[$k]->service_project_id=='1'?'<i class="iconfont icon-duigou1"></i>':'--无数据--'?></td>
                                    <?php endforeach;?>
								</tr>
								<tr>
									<th class="contrast_name">海外医院预约</th>
                                    <?php foreach($hospital_services as $k=>$hospital_service):?>
                                        <td><?=$hospital_service[$k]->service_project_id=='1'?'<i class="iconfont icon-duigou1"></i>':'--无数据--'?></td>
                                    <?php endforeach;?>
								</tr>
								<tr>
									<th class="contrast_name">远程会诊</th>
                                    <?php foreach($hospital_services as $k=>$hospital_service):?>
                                        <td><?=$hospital_service[$k]->service_project_id=='1'?'<i class="iconfont icon-duigou1"></i>':'--无数据--'?></td>
                                    <?php endforeach;?>
								</tr>
								<tr>
									<th class="contrast_name">治疗费用/时间预估</th>
                                    <?php foreach($hospital_services as $k=>$hospital_service):?>
                                        <td><?=$hospital_service[$k]->service_project_id=='1'?'<i class="iconfont icon-duigou1"></i>':'--无数据--'?></td>
                                    <?php endforeach;?>
								</tr>
								<tr>
									<th class="contrast_name">财务指导协助</th>
                                    <?php foreach($hospital_services as $k=>$hospital_service):?>
                                        <td><?=$hospital_service[$k]->service_project_id=='1'?'<i class="iconfont icon-duigou1"></i>':'--无数据--'?></td>
                                    <?php endforeach;?>
								</tr>
								<tr>
									<th class="contrast_name">就医报告翻译</th>
                                    <?php foreach($hospital_services as $k=>$hospital_service):?>
                                        <td><?=$hospital_service[$k]->service_project_id=='1'?'<i class="iconfont icon-duigou1"></i>':'--无数据--'?></td>
                                    <?php endforeach;?>
								</tr>
								<tr>
									<th class="contrast_name">回国复诊协助</th>
                                    <?php foreach($hospital_services as $k=>$hospital_service):?>
                                        <td><?=$hospital_service[$k]->service_project_id=='1'?'<i class="iconfont icon-duigou1"></i>':'--无数据--'?></td>
                                    <?php endforeach;?>
								</tr>
								<tr>
									<th class="contrast_name">体检事前说明</th>
                                    <?php foreach($hospital_services as $k=>$hospital_service):?>
                                        <td><?=$hospital_service[$k]->service_project_id=='1'?'<i class="iconfont icon-duigou1"></i>':'--无数据--'?></td>
                                    <?php endforeach;?>
								</tr>
								<tr>
									<th class="contrast_name">体检手续办理</th>
                                    <?php foreach($hospital_services as $k=>$hospital_service):?>
                                        <td><?=$hospital_service[$k]->service_project_id=='1'?'<i class="iconfont icon-duigou1"></i>':'--无数据--'?></td>
                                    <?php endforeach;?>
								</tr>
								<tr>
									<th class="contrast_name">体检翻译</th>
                                    <?php foreach($hospital_services as $k=>$hospital_service):?>
                                        <td><?=$hospital_service[$k]->service_project_id=='1'?'<i class="iconfont icon-duigou1"></i>':'--无数据--'?></td>
                                    <?php endforeach;?>
								</tr>
								<tr>
									<th class="contrast_name">体检报告翻译</th>
                                    <?php foreach($hospital_services as $k=>$hospital_service):?>
                                        <td><?=$hospital_service[$k]->service_project_id=='1'?'<i class="iconfont icon-duigou1"></i>':'--无数据--'?></td>
                                    <?php endforeach;?>
								</tr>
								<tr>
									<th class="contrast_name">体检报告解读</th>
                                    <?php foreach($hospital_services as $k=>$hospital_service):?>
                                        <td><?=$hospital_service[$k]->service_project_id=='1'?'<i class="iconfont icon-duigou1"></i>':'--无数据--'?></td>
                                    <?php endforeach;?>
								</tr>
								<tr>
									<th class="contrast_name">体检后续服务</th>
                                    <?php foreach($hospital_services as $k=>$hospital_service):?>
                                        <td><?=$hospital_service[$k]->service_project_id=='1'?'<i class="iconfont icon-duigou1"></i>':'--无数据--'?></td>
                                    <?php endforeach;?>
								</tr>
								<tr>
									<th class="contrast_name">产检预约</th>
                                    <?php foreach($hospital_services as $k=>$hospital_service):?>
                                        <td><?=$hospital_service[$k]->service_project_id=='1'?'<i class="iconfont icon-duigou1"></i>':'--无数据--'?></td>
                                    <?php endforeach;?>
								</tr>
								<tr>
									<th class="contrast_name">生产医院预约</th>
                                    <?php foreach($hospital_services as $k=>$hospital_service):?>
                                        <td><?=$hospital_service[$k]->service_project_id=='1'?'<i class="iconfont icon-duigou1"></i>':'--无数据--'?></td>
                                    <?php endforeach;?>
								</tr>
								<tr>
									<th class="contrast_name">宝宝儿科检查预约</th>
                                    <?php foreach($hospital_services as $k=>$hospital_service):?>
                                        <td><?=$hospital_service[$k]->service_project_id=='1'?'<i class="iconfont icon-duigou1"></i>':'--无数据--'?></td>
                                    <?php endforeach;?>
								</tr>
						</tbody>
					</table>
				</div>
				
				<div class="life_table">
					<h2 class="head_info">
						<i class="iconfont icon-shousuo" style="display: none;"></i>
						<i class="iconfont icon-zhankai"></i>
						<span>&nbsp;生活服务</span>
					</h2>
					<table class="table table-bordered table-hover">
						<tbody>
								<tr>
									<th class="contrast_name">签证办理</th>
									<td><i class="iconfont icon-duigou1"></i></td>
									<td><i class="iconfont icon-duigou1"></i></td>
									<td><i class="iconfont icon-duigou1"></i></td>
									<td><i class="iconfont icon-duigou1"></i></td>
									<td><i class="iconfont icon-duigou1"></i></td>
 								</tr>
								<tr>
									<th class="contrast_name">机票服务</th>
									<td><i class="iconfont icon-duigou1"></i></td>
									<td><i class="iconfont icon-duigou1"></i></td>
									<td><i class="iconfont icon-duigou1"></i></td>
									<td><i class="iconfont icon-duigou1"></i></td>
									<td><i class="iconfont icon-duigou1"></i></td>
								</tr>
								<tr>
									<th class="contrast_name">住宿服务</th>
									<td><i class="iconfont icon-duigou1"></i></td>
									<td><i class="iconfont icon-duigou1"></i></td>
									<td><i class="iconfont icon-duigou1"></i></td>
									<td><i class="iconfont icon-duigou1"></i></td>
									<td><i class="iconfont icon-duigou1"></i></td>
								</tr>
								<tr>
									<th class="contrast_name">交通服务</th>
									<td><i class="iconfont icon-duigou1"></i></td>
									<td><i class="iconfont icon-duigou1"></i></td>
									<td><i class="iconfont icon-duigou1"></i></td>
									<td><i class="iconfont icon-duigou1"></i></td>
									<td><i class="iconfont icon-duigou1"></i></td>
								</tr>
								<tr>
									<th class="contrast_name">保险购买</th>
									<td><i class="iconfont icon-duigou1"></i></td>
									<td><i class="iconfont icon-duigou1"></i></td>
									<td><i class="iconfont icon-duigou1"></i></td>
									<td><i class="iconfont icon-duigou1"></i></td>
									<td><i class="iconfont icon-duigou1"></i></td>
								</tr>
								<tr>
									<th class="contrast_name">出行礼包</th>
									<td><i class="iconfont icon-duigou1"></i></td>
									<td><i class="iconfont icon-duigou1"></i></td>
									<td><i class="iconfont icon-duigou1"></i></td>
									<td><i class="iconfont icon-duigou1"></i></td>
									<td><i class="iconfont icon-duigou1"></i></td>
								</tr>
								<tr>
									<th class="contrast_name">行前指导</th>
									<td><i class="iconfont icon-duigou1"></i></td>
									<td><i class="iconfont icon-duigou1"></i></td>
									<td><i class="iconfont icon-duigou1"></i></td>
									<td><i class="iconfont icon-duigou1"></i></td>
									<td><i class="iconfont icon-duigou1"></i></td>
								</tr>
								<tr>
									<th class="contrast_name">海外接送机</th>
									<td><i class="iconfont icon-duigou1"></i></td>
									<td><i class="iconfont icon-duigou1"></i></td>
									<td><i class="iconfont icon-duigou1"></i></td>
									<td><i class="iconfont icon-duigou1"></i></td>
									<td><i class="iconfont icon-duigou1"></i></td>
								</tr>
								<tr>
									<th class="contrast_name">生活翻译</th>
									<td><i class="iconfont icon-duigou1"></i></td>
									<td><i class="iconfont icon-duigou1"></i></td>
									<td><i class="iconfont icon-duigou1"></i></td>
									<td><i class="iconfont icon-duigou1"></i></td>
									<td><i class="iconfont icon-duigou1"></i></td>
								</tr>
								<tr>
									<th class="contrast_name">餐食服务</th>
									<td><i class="iconfont icon-duigou1"></i></td>
									<td><i class="iconfont icon-duigou1"></i></td>
									<td><i class="iconfont icon-duigou1"></i></td>
									<td><i class="iconfont icon-duigou1"></i></td>
									<td><i class="iconfont icon-duigou1"></i></td>
								</tr>
								<tr>
									<th class="contrast_name">旅游服务</th>
									<td><i class="iconfont icon-duigou1"></i></td>
									<td><i class="iconfont icon-duigou1"></i></td>
									<td><i class="iconfont icon-duigou1"></i></td>
									<td><i class="iconfont icon-duigou1"></i></td>
									<td><i class="iconfont icon-duigou1"></i></td>
								</tr>
								<tr>
									<th class="contrast_name">宝宝满月party</th>
									<td><i class="iconfont icon-duigou1"></i></td>
									<td><i class="iconfont icon-duigou1"></i></td>
									<td><i class="iconfont icon-duigou1"></i></td>
									<td><i class="iconfont icon-duigou1"></i></td>
									<td><i class="iconfont icon-duigou1"></i></td>
								</tr>
						</tbody>
					</table>
				</div>
				
				<div class="other_table">
					<h2 class="head_info">
						<i class="iconfont icon-shousuo" style="display: none;"></i>
						<i class="iconfont icon-zhankai"></i>
						<span>&nbsp;其他服务</span>
					</h2>
					<table class="table table-bordered table-hover">
						<tbody>
								<tr>
									<th class="contrast_name">筛选捐卵者</th>
									<td><i class="iconfont icon-duigou1"></i></td>
									<td><i class="iconfont icon-duigou1"></i></td>
									<td><i class="iconfont icon-duigou1"></i></td>
									<td><i class="iconfont icon-duigou1"></i></td>
									<td><i class="iconfont icon-duigou1"></i></td>
 								</tr>
								<tr>
									<th class="contrast_name">捐卵检查评估</th>
									<td><i class="iconfont icon-duigou1"></i></td>
									<td><i class="iconfont icon-duigou1"></i></td>
									<td><i class="iconfont icon-duigou1"></i></td>
									<td><i class="iconfont icon-duigou1"></i></td>
									<td><i class="iconfont icon-duigou1"></i></td>
								</tr>
								<tr>
									<th class="contrast_name">捐卵合同协助</th>
									<td><i class="iconfont icon-duigou1"></i></td>
									<td><i class="iconfont icon-duigou1"></i></td>
									<td><i class="iconfont icon-duigou1"></i></td>
									<td><i class="iconfont icon-duigou1"></i></td>
									<td><i class="iconfont icon-duigou1"></i></td>
								</tr>
								<tr>
									<th class="contrast_name">捐卵医疗协助</th>
									<td><i class="iconfont icon-duigou1"></i></td>
									<td><i class="iconfont icon-duigou1"></i></td>
									<td><i class="iconfont icon-duigou1"></i></td>
									<td><i class="iconfont icon-duigou1"></i></td>
									<td><i class="iconfont icon-duigou1"></i></td>
								</tr>
								<tr>
									<th class="contrast_name">筛选代孕者</th>
									<td><i class="iconfont icon-duigou1"></i></td>
									<td><i class="iconfont icon-duigou1"></i></td>
									<td><i class="iconfont icon-duigou1"></i></td>
									<td><i class="iconfont icon-duigou1"></i></td>
									<td><i class="iconfont icon-duigou1"></i></td>
								</tr>
								<tr>
									<th class="contrast_name">代孕检查评估</th>
									<td><i class="iconfont icon-duigou1"></i></td>
									<td><i class="iconfont icon-duigou1"></i></td>
									<td><i class="iconfont icon-duigou1"></i></td>
									<td><i class="iconfont icon-duigou1"></i></td>
									<td><i class="iconfont icon-duigou1"></i></td>
								</tr>
								<tr>
									<th class="contrast_name">代孕合同协助</th>
									<td><i class="iconfont icon-duigou1"></i></td>
									<td><i class="iconfont icon-duigou1"></i></td>
									<td><i class="iconfont icon-duigou1"></i></td>
									<td><i class="iconfont icon-duigou1"></i></td>
									<td><i class="iconfont icon-duigou1"></i></td>
								</tr>
								<tr>
									<th class="contrast_name">代孕医疗协助</th>
									<td><i class="iconfont icon-duigou1"></i></td>
									<td><i class="iconfont icon-duigou1"></i></td>
									<td><i class="iconfont icon-duigou1"></i></td>
									<td><i class="iconfont icon-duigou1"></i></td>
									<td><i class="iconfont icon-duigou1"></i></td>
								</tr>
								<tr>
									<th class="contrast_name">产检结果反馈</th>
									<td><i class="iconfont icon-duigou1"></i></td>
									<td><i class="iconfont icon-duigou1"></i></td>
									<td><i class="iconfont icon-duigou1"></i></td>
									<td><i class="iconfont icon-duigou1"></i></td>
									<td><i class="iconfont icon-duigou1"></i></td>
								</tr>
								<tr>
									<th class="contrast_name">协助亲子关系判定</th>
									<td><i class="iconfont icon-duigou1"></i></td>
									<td><i class="iconfont icon-duigou1"></i></td>
									<td><i class="iconfont icon-duigou1"></i></td>
									<td><i class="iconfont icon-duigou1"></i></td>
									<td><i class="iconfont icon-duigou1"></i></td>
								</tr>
								<tr>
									<th class="contrast_name">孕母关怀服务</th>
									<td><i class="iconfont icon-duigou1"></i></td>
									<td><i class="iconfont icon-duigou1"></i></td>
									<td><i class="iconfont icon-duigou1"></i></td>
									<td><i class="iconfont icon-duigou1"></i></td>
									<td><i class="iconfont icon-duigou1"></i></td>
								</tr>
								<tr>
									<th class="contrast_name">宝宝出生服务</th>
									<td><i class="iconfont icon-duigou1"></i></td>
									<td><i class="iconfont icon-duigou1"></i></td>
									<td><i class="iconfont icon-duigou1"></i></td>
									<td><i class="iconfont icon-duigou1"></i></td>
									<td><i class="iconfont icon-duigou1"></i></td>
								</tr>
								<tr>
									<th class="contrast_name">亲子鉴定服务</th>
									<td><i class="iconfont icon-duigou1"></i></td>
									<td><i class="iconfont icon-duigou1"></i></td>
									<td><i class="iconfont icon-duigou1"></i></td>
									<td><i class="iconfont icon-duigou1"></i></td>
									<td><i class="iconfont icon-duigou1"></i></td>
								</tr>
								<tr>
									<th class="contrast_name">宝宝证件办理</th>
									<td><i class="iconfont icon-duigou1"></i></td>
									<td><i class="iconfont icon-duigou1"></i></td>
									<td><i class="iconfont icon-duigou1"></i></td>
									<td><i class="iconfont icon-duigou1"></i></td>
									<td><i class="iconfont icon-duigou1"></i></td>
								</tr>
								<tr>
									<th class="contrast_name">宝宝回国后服务</th>
									<td><i class="iconfont icon-duigou1"></i></td>
									<td><i class="iconfont icon-duigou1"></i></td>
									<td><i class="iconfont icon-duigou1"></i></td>
									<td><i class="iconfont icon-duigou1"></i></td>
									<td><i class="iconfont icon-duigou1"></i></td>
								</tr>
								<tr>
									<th class="contrast_name">法律支持</th>
									<td><i class="iconfont icon-duigou1"></i></td>
									<td><i class="iconfont icon-duigou1"></i></td>
									<td><i class="iconfont icon-duigou1"></i></td>
									<td><i class="iconfont icon-duigou1"></i></td>
									<td><i class="iconfont icon-duigou1"></i></td>
								</tr>
						</tbody>
					</table>
				</div>
				
			</div>
		</div>
	
		<footer class="footer">
			<div class="server">
				<ul class="server-list">
					<li class="server-item">
						<i></i>
						<div>平台权威认证</div>
					</li>
					<li class="server-item">
						<i></i>
						<div>第三方服务保障</div>
					</li>
					<li class="server-item">
						<i></i>
						<div>14天退款保证</div>
					</li>
					<li class="server-item">
						<i></i>
						<div>平台先行赔付</div>
					</li>
					<li class="server-item">
						<i></i>
						<div>机构信用评价体系</div>
					</li>
					<li class="server-item">
						<i></i>
						<div>平安保险合作</div>
					</li>
				</ul>
			</div>
			<div class="bottom">
				<div class="bottom_nav bottom_nav2">
					<div><img src="/images/bottomlogo.png" /></div>
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
		<script>
		</script>
	</body>

</html>