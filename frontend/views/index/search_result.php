<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7"/>
    <link rel="canonical" href="/"/>
    <title></title>
    <meta name="description" content=""/>
    <meta name="keywords" content=""/>
    <script src="/js/jquery-3.2.1.min.js"></script>
    <link rel="stylesheet" type="text/css" href="//at.alicdn.com/t/font_553222_r96qcro3b7rv0a4i.css"/>
    <link href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/common.css">
    <link rel="stylesheet" href="/css/member.css">
    <link rel="stylesheet" href="/css/merchant.css">
</head>
<body>

<script>
    $(function(){
        $(".memberOrder3-5").hover(function(){
            $(".memberOrder3-4").css("display", 'block');
            $(".memberOrder3-4").css("left", event.clientX);
            $(".memberOrder3-4").css("top", event.clientY);
        },function(){
            $(".memberOrder3-4").css("display", 'none');
        })
    });

</script>
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
                    <img src="/images/logo.png" alt="" title="">
                    <h1>网站名称</h1>
                </a>
            </hgroup>
            <nav class="site-nav-wrap">
                <ul class="navbar-menu">
                    <li class="navbar-list"><a href="<?= \yii\helpers\Url::to(['index/index']) ?>">首页</a></li>
                    <li class="navbar-list"><a href="">试管婴儿<i class="site-nav-arrow"></i></a></li>
                    <li class="navbar-list"><a href="">出国看病<i class="site-nav-arrow"></i></a></li>
                    <li class="navbar-list"><a href="">出国体检<i class="site-nav-arrow"></i></a></li>
                    <li class="navbar-list"><a href="">出国生子<i class="site-nav-arrow"></i></a></li>
                    <li class="navbar-list"><a href="javascript:;">找医院</a></li>
                    <li class="navbar-list"><a href="">找机构</a></li>
                    <li class="navbar-list"><a href="">话题圈子</a></li>
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
<div class="banner">
	<a href=""></a>
</div>
<div class="store-crumb" style="height: 100%;">
    <div class="storeMsg w1190">
    <div class="filter">
    	<form action="" method="post" id="">
            <input type="hidden" name="type" value="self">
    		<div class="choose">
    			<span class="t_name">服务项目：</span>
    			<!--<label class="checkbox_label">
  		  			<input type="radio" value="1" name="once1"/>
  		  			<span class="active1">全部</span>
    			</label>-->
    			<label class="checkbox_label">
  		  			<input  type="radio" value="1" name="once1"/>
  		  			<span class="active1">试管婴儿</span>
    			</label>
    			<label class="checkbox_label">
  		  			<input type="radio" value="1" name="once1"/>
  		  			<span>海外医疗</span>
    			</label>
    			<label class="checkbox_label">
  		  			<input type="radio" value="1" name="once1"/>
  		  			<span>出国体检</span>
    			</label>
    			<label class="checkbox_label">
  		  			<input type="radio" value="1" name="once1"/>
  		  			<span>出国生子</span>
    			</label>
    		</div>
    		<div class="choose">
    			<span class="t_name">类&ensp;&ensp;&ensp;&ensp;型：</span>
    			<!--<label class="checkbox_label">
  		  			<input type="radio" value="" name="tube_type"/>
  		  			<span class="active1">全部</span>
    			</label>-->
    			<label class="checkbox_label">
  		  			<input type="radio"  value="1" name="tube_type"/>
  		  			<span class="active1">试管婴儿</span>
                    <a href="<?=\yii\helpers\Url::to(['index/search','tube_type'=>1])?>">试管婴儿</a>
    			</label>
                <label class="checkbox_label">
  		  			<input type="radio" value="2" name="tube_type"/>
  		  			<span><a href="<?=\yii\helpers\Url::to(['index/search','tube_type'=>2])?>">试管婴儿+捐精</a></span>

    			</label>
    			<label class="checkbox_label">
  		  			<input type="radio" value="3" name="tube_type"/>
  		  			<span>试管婴儿+捐卵</span>
    			</label>
    			<label class="checkbox_label">
  		  			<input type="radio" value="4" name="tube_type"/>
  		  			<span>试管婴儿+代孕</span>
    			</label>
    			<label class="checkbox_label">
  		  			<input type="radio" value="5" name="tube_type"/>
  		  			<span>试管婴儿+捐卵+代孕</span>
    			</label>
    			<label class="checkbox_label">
  		  			<input type="radio" value="6" name="tube_type"/>
  		  			<span>冷冻卵子</span>
    			</label>
    		</div>
    		<div class="choose">
    			<span class="t_name">国&ensp;&ensp;&ensp;&ensp;家：</span>
    			<!--<label class="checkbox_label">
  		  			<input type="radio" value="1" name="country"/>
  		  			<span class="active1">全部</span>
    			</label>-->
    			<label class="checkbox_label">
  		  			<input type="radio"  value="1" name="country"/>
  		  			<span class="active1">美国</span>
    			</label>
    			<label class="checkbox_label">
  		  			<input type="radio" value="1" name="country"/>
  		  			<span>泰国</span>
    			</label>
    			<label class="checkbox_label">
  		  			<input type="radio" value="1" name="country"/>
  		  			<span>俄罗斯</span>
    			</label>
    			<label class="checkbox_label">
  		  			<input type="radio" value="1" name="country"/>
  		  			<span>马来西亚</span>
    			</label>
    			<label class="checkbox_label">
  		  			<input type="radio" value="1" name="country"/>
  		  			<span>柬埔寨</span>
    			</label>
    			<label class="checkbox_label">
  		  			<input type="radio" value="1" name="country"/>
  		  			<span>新加坡</span>
    			</label>
    			<label class="checkbox_label">
  		  			<input type="radio" value="1" name="country"/>
  		  			<span>日本</span>
    			</label>
    			<label class="checkbox_label">
  		  			<input type="radio" value="1" name="country"/>
  		  			<span>台湾</span>
    			</label>
    			<label class="checkbox_label">
  		  			<input type="radio" value="1" name="country"/>
  		  			<span>英国</span>
    			</label>
    			<label class="checkbox_label">
  		  			<input type="radio" value="1" name="country"/>
  		  			<span>以色列</span>
    			</label>
    		</div>
    		<div class="choose">
    			<span class="t_name">试管次数：</span>
    			<!--<label class="checkbox_label">
  		  			<input type="radio" value="0" name="A"/>
  		  			<span class="active1">全部</span>
    			</label>-->
    			<label class="checkbox_label">
  		  			<input type="radio" value="1" name="A"/>
  		  			<span class="active1">未做过</span>
    			</label>
    			<label class="checkbox_label">
  		  			<input type="radio" value="2" name="A"/>
  		  			<span>做过1次</span>
    			</label>
    			<label class="checkbox_label">
  		  			<input type="radio" value="3" name="A"/>
  		  			<span>做过2次</span>
    			</label>
    			<label class="checkbox_label">
  		  			<input type="radio" value="4" name="A"/>
  		  			<span>做过3次</span>
    			</label>
    			<label class="checkbox_label">
  		  			<input type="radio" value="5" name="A"/>
  		  			<span>做过多次</span>
    			</label>
    		</div>
    		<div class="choose" style="border: 0;">
    			<span class="t_name">试管原因：</span>
    			<!--<label class="checkbox_label">
  		  			<input type="radio" value="" name="B"/>
  		  			<span class="active1">全部</span>
    			</label>-->
    			<label class="checkbox_label">
  		  			<input type="radio" value="1" name="B"/>
  		  			<span class="active1">男方原因</span>
    			</label>
    			<label class="checkbox_label">
  		  			<input type="radio" value="2" name="B"/>
  		  			<span>子宫原因</span>
    			</label>
    			<label class="checkbox_label">
  		  			<input type="radio" value="3" name="B"/>
  		  			<span>卵巢原因</span>
    			</label>
    			<!--<label class="checkbox_label">
  		  			<input type="radio" value="4" name="B"/>
  		  			<span>年龄偏大</span>
    			</label>-->
    			<label class="checkbox_label">
  		  			<input type="radio" value="4" name="B"/>
  		  			<span>遗传因素</span>
    			</label>
    			<label class="checkbox_label">
  		  			<input type="radio" value="5" name="B"/>
  		  			<span>同性爱人</span>
    			</label>
    			<label class="checkbox_label">
  		  			<input type="radio" value="6" name="B"/>
  		  			<span>性别选择</span>
    			</label>
    			<label class="checkbox_label">
  		  			<input type="radio" value="7" name="B"/>
  		  			<span>生多胞胎</span>
    			</label>
    		</div>
    		
    		<button type="submit" class="btn btn-info">立即筛选</button>
    	</form>

    </div>
        <?php foreach($models as $p):?>
    	<div class="solution">
    		<!--方案金额  定位-->
    		<div class="earnest">
    			<span class="discount">惠</span>
    			<span class="ear_num">预定金￥<span><?=$p->reserve_money?></span></span>
    		</div>
    		<div class="programme">
                <?php
                    if($p->total_price){
                        echo '<span style="margin: 5px 0 0 40px;">方案总费用包括：'.$p->total_price.'</span>';
                    }else{
                        echo '<span class="pro_num" style="margin-top: 5px;"><span>1</span>&nbsp;医疗机构费用:￥100000</span>
    			<span class="pro_num"><span>2</span>&nbsp;服务商套餐费用:￥10000</span>
    			<span class="pro_num"><span>3</span>&nbsp;其他套餐费用:￥10000</span>';
                    }
                ?>


    		</div>
    		
    		<div class="solution_title">
    			<p class="title_text"><a href="<?=\yii\helpers\Url::to(['index/program-detail','id'=>$p->id])?>"><?=$p->programe_name?></a></p>
    			<p class="title_num">
    				<span>方案推荐指数：<?=$p->commend?> &nbsp;</span>
    				<span>预定量：<em><?=$p->reserve_num?></em> &nbsp;</span>
    				<span>好评率：<em><?=$p->good_opinion?></em> &nbsp;</span>
    				<span>热度：<em><?=$p->hot?></em> &nbsp;</span>
    				<span>收藏量：<em><?=$p->collect_num?></em> &nbsp;</span>
    			</p>
    		</div>
    		<div class="solution_info">
    			<div class="info_left">
                    <?php
                    $hos = \frontend\models\MemberHospital::find()->where(['hid'=>$p->hospital_id])->one();
                    ?>
    				<div>
    					<img src="<?=$hos->logo?>" width="290" height="203"/>
    				</div>
    				<div class="info_present">

    					<p class="hos_name"><?=$hos->short_name?></p>
    					<div class="hos_info">

    						<div>
    							<span>所在地区：<?=$hos->city?></span>
    							<span>区域排名：<?=$hos->area_rank?></span>
                                <?php
                                    $type = \frontend\models\HospitalProperty::find()->where(['id'=>$hos->type])->one();
                                ?>
    							<span>医院性质：<?=$type->hospital_property?></span>
    						</div>
    						<div>
    							<span>成立时间：<?=$hos->create_time?></span>
    							<span>成功率/治愈率：<?=$hos->success_rate?></span>
    							<span>好评率：<?=$hos->success_rate?></span>
    						</div>
    					</div>
    					<div class="hos_doc">
                            <?php $docs = \frontend\models\Doctor::find()->where(['hospital_id'=>$hos->hid])->all();
                            foreach($docs as $doc):?>
    						<img height="80px" width="80px" src="<?=$doc->logo?>"/>
<?php endforeach;?>
    					</div>
    				</div>
    			</div>
    			<div class="info_right">
    				<div class="service">
                        <?php
                        $service = \frontend\models\MemberFacilitator::find()->where(['id'=>$p->service_provid_id])->one();
                        ?>
    					<img width="200px" src="<?=$service->logo?>"/>

    					<span>
    						<p><?=$service->property_name?></p>
    						<span>所在地区：<?=$service->agency_city?></span>
    						<span>成立时间：<?=$service->agency_create_at?></span>
    						<span>服务商热度：<?=$service->hot_rate?></span>
    						<span>好评率：<?=$service->good_opinion_rate?></span>
    					</span>
    				</div>
    				<div class="choose_btn">
    					<span><i class="iconfont icon-buoumaotubiao44"></i>加入收藏</span>
    					<span><i class="iconfont icon-07_tongjifenxi"></i><a href="<?=\yii\helpers\Url::to(['index/add-compare-project','id'=>$p->id])?>">加入对比</a></span>
    					<span><i class="iconfont icon-duihua"></i>立即咨询</span>
    				</div>
    			</div>
    		</div>
    	</div>
        <?php endforeach;?>

    </div>

</div>
<nav aria-label="Page navigation" class="paging">
  <!--<ul class="pagination">
    <li>
      <a href="#" aria-label="Previous">
        <span class="glyphicon glyphicon-triangle-left" aria-hidden="true"></span>
      </a>
    </li>
    <li><a href="#">1</a></li>
    <li><a href="#">2</a></li>
    <li><a href="#">3</a></li>
    <li><a href="#">4</a></li>
    <li><a href="#">5</a></li>
    <li>
      <a href="#" aria-label="Next">
        	下一页	
        <span class="glyphicon glyphicon-triangle-right" aria-hidden="true"></span>
      </a>
    </li>
  </ul>-->
    <?=\yii\widgets\LinkPager::widget([
        'pagination'=>$pageTool,
        'maxButtonCount'=>5,
        'firstPageLabel' => '首页',
        'lastPageLabel' => '尾页',
    ])?>
</nav>
<footer class="footer">
    <div class="server">
        <ul class="server-list">
            <li class="server-item">
                <i></i><div>平台权威认证</div>
            </li>
            <li class="server-item">
                <i></i><div>第三方服务保障</div>
            </li>
            <li class="server-item">
                <i></i><div>14天退款保证</div>
            </li>
            <li class="server-item">
                <i></i><div>平台先行赔付</div>
            </li>
            <li class="server-item">
                <i></i><div>机构信用评价体系</div>
            </li>
            <li class="server-item">
                <i></i><div>平安保险合作</div>
            </li>
        </ul>
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

<script src="/js/index.js"></script>

<script>
	$(".checkbox_label").on('click','span',function(){
		$(this).addClass("active1").siblings().removeClass('active1');
	})
</script>
  </body>
  </html>