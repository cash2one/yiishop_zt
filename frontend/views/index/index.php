<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <META HTTP-EQUIV="pragma" CONTENT="no-cache">
    <META HTTP-EQUIV="Cache-Control" CONTENT="no-cache, must-revalidate">
    <META HTTP-EQUIV="expires" CONTENT="0">
    <title>首页</title>
    <meta name="description" content=""/>
    <meta name="keywords" content=""/>
    <link href="https://cdn.bootcss.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/ext/moveline/css/toast.css">
    <link rel="stylesheet" href="/css/common.css">
    <link rel="stylesheet" href="/css/index.css">
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
                    <span class="site-type">服务热线：400-625-6025</span>
                </li>
            </ul>
        </div>
    </div>
    <div class="menu-box">
        <div class="top-menu">
            <hgroup class="logo-site">
                <a href="#">
                    <img src="/upload/5a795433db032.png"  alt="" title="">
                    <h1>网站名称</h1>
                </a>
            </hgroup>
            <nav class="site-nav-wrap">
                <ul class="navbar-menu" style="margin-right: 80px;">
                    <li class="navbar-list"><a href="">首页</a></li>
                    <!--<li class="navbar-list"><a href="">试管婴儿<i class="site-nav-arrow"></i></a></li>-->
                    <li class="navbar-list"><a href="<?=\yii\helpers\Url::to(['index/search'])?>">找方案</a></li>
                    <!--<li class="navbar-list"><a href="">出国看病<i class="site-nav-arrow"></i></a></li>
                    <li class="navbar-list"><a href="">出国体检<i class="site-nav-arrow"></i></a></li>
                    <li class="navbar-list"><a href="">出国生子<i class="site-nav-arrow"></i></a></li>-->
                    <!--<li class="navbar-list"><a href="<?=\yii\helpers\Url::to(['index/search-hospital'])?>">找医院</a></li>
                    <li class="navbar-list"><a href="">找机构</a></li>-->
                  <!--  <li class="navbar-list"><a href="">话题圈子</a></li>-->
                </ul>
                <span class="top-menu-seach"><i></i></span>
            </nav>
        </div>
        <!--<div class="site-nav-part">
            <ul class="sub-menu"></ul>
            <ul class="sub-menu">
                <li class="sub-list"><img src="/images/America.png"><a href="">美国试管婴儿</a></li>
                <li class="sub-list"><img src="/images/Thailand.png"><a href="">泰国试管婴儿</a></li>
                <li class="sub-list"><img src="/images/Russia.png"><a href="">俄罗斯试管婴儿</a></li>
            </ul>
        </div>-->
    </div>
</header>
<main>
    <div class="site-top-banner">
        <div class="w1190">
            <div class="field-filter">
                <h3>一键定制您的医疗解决方案</h3>
                <p><span>一键生成更省心&emsp;</span>/<span>&emsp;自主选择更安心&emsp;</span>/<spanpost>&emsp;多方比较更放心</spanpost></p>
                <div class="filter-type-li">
                    <ul>
                        <li class="active1">试管婴儿</li>
                        <!--<li>出国看病</li>
                        <li>出国体检</li>
                        <li>出国生子</li>-->
                    </ul>
                </div>
                <div class="filter-type">
                    <div class="filter-input-content">
                        <form id="search" action="<?=\yii\helpers\Url::to(['index/search'])?>" method="post">
                            <input type="hidden" name="type" value="index">
                            <div>
                                <span style="padding-left: 28px;">类型</span>
                                <select name="tube_type">
                                    <?php foreach($tubes as $tube):?>
                                    <option value="<?=$tube->id?>"><?=$tube->type_name?></option>

                                    <?php endforeach;?>
                                </select>
                            </div>
                            <div>
                                <span>国家</span>
                                <select name="country">
                                    <?php foreach($countrys as $country):?>
                                    <option value="<?=$country->id?>"><?=$country->name?></option>
                                    <?php endforeach;?>
                                    <!--<option value="">美国</option>-->
                                </select>
                            </div>
                            <div>
                                <span>试管次数</span>
                                <select name="A">
                                    <?php foreach($counts as $count):?>
                                    <option value="<?=$count->id?>"><?=$count->count_name?></option>
                                    <?php endforeach;?>
                                    <!--<option value="">多次</option>-->
                                </select>
                            </div>
                            <div>
                                <span>试管原因</span>
                                <select name="B">
                                    <?php foreach($reasons as $reason):?>
                                    <option value="<?=$reason->id?>"><?=$reason->reason?></option>
                                    <?php endforeach;?>
                                </select>
                            </div>
                            <div>
                                <span style="padding-left: 28px;">年龄</span>
                                <select name="C">
                                    <?php foreach($ages as $age):?>
                                    <option value="<?=$age->id?>"><?=$age->age_range?></option>
                                    <?php endforeach;?>
                                </select>
                            </div>
                            <div>
                                <span>预算区间</span>
                                <select name="D">
                                    <?php foreach($budgets as $budget):?>
                                    <option value="<?=$budget->id?>"><?=$budget->budget_range?></option>
                                    <?php endforeach;?>
                                </select>
                            </div>
                            <div>
                                <span>技术要求</span>
                                <select name="tube_skill">
                                    <?php foreach($skills as $skill):?>
                                    <option value="<?=$skill->id?>"><?=$skill->skill_req?></option>
                                    <?php endforeach;?>
                                    <!--<option value="">第四代</option>-->
                                </select>
                            </div>
                            <div>
                                <span>服务体验</span>
                                <select name="experience">
                                    <?php foreach($experiences as $experience):?>
                                    <option value="<?=$experience->id?>"><?=$experience->ser_experience?></option>
                                    <?php endforeach;?>
                                    <!--<option value="">体验度</option>-->
                                </select>
                            </div>
                            <button type="submit" class="btn btn-info">立即制定</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="top-slide">
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide"><a href=""><img class="swiper-lazy" data-src="/images/index-banenr.png"></a></div>
                    <div class="swiper-slide"><a href=""><img class="swiper-lazy" data-src="/images/index-banenr.png"></a></div>
                    <div class="swiper-slide"><a href=""><img class="swiper-lazy" data-src="/images/index-banenr.png"></a></div>
                </div>
                <div class="swiper-pagination"></div>
                <!--<div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>-->
            </div>
        </div>
    </div>
    <div class="news-box">
        <div class="container-warp">
            <div class="container-title">
                <i class="index-icon icon_tools_1"></i>
                <h3>热点新闻</h3>
                <p>甄选海外医疗行业热点新闻</p>
            </div>
            <div class="container-list">
                <div class="hot-news">
                    <div class="hot-news-title">热点新闻 <a href="">更多>></a></div>
                    <ul>
                        <?php foreach ($hot_article_lefts as $k=>$hot_article_left):?>
                        <li>
                            <div class="accordion-item <?=$k==0?'active':''?>" style="background-image: url('<?=$hot_article_left->thumb?>');background-size: 590px 350px">
                                <div class="cover_bg">
                                    <a href="<?=\yii\helpers\Url::to(['index/tube-detail','id'=>$hot_article_left->id])?>"><?=$hot_article_left->title?></a>
                                </div>
                            </div>
                        </li>
                        <?php endforeach;?>
                    </ul>
                </div>
                <div class="newslist">
                    <div class="true-pic">
                        <img src="/images/true-pic.png" alt="" />
                        <div class="cover_bg">
                            <a href="" title="">艰难求子路，瑞可优见证小公举的到来</a>
                        </div>
                    </div>
                    <div class="news-li">
                        <ul>
                            <?php foreach ($hot_article_rights as $hot_article_right):?>
                            <li><span><a href="<?=\yii\helpers\Url::to(['index/tube-detail','id'=>$hot_article_right->id])?>" title=""><?=$hot_article_right->title?></a></span></li>
                            <?php endforeach;?>
                        </ul>
                    </div>
                </div>
                <div class="site-service">
                    <div class="service-title">找您需要的服务</div>
                    <div class="service-li">
                        <ul>
                            <li><span>找医生</span><p> 你的健康，我的责任。</p></li>
                            <li><span>找医院</span><p>承载希望，健康起航。</p></li>
                            <li><span>找服务机构</span><p>省心、安心、放心的医疗服务</p></li>
                            <li><span>我要租车</span><p>有租必驾，有诚必达。</p></li>
                            <li><span>我要翻译</span><p>专业医疗翻译，交流无障碍</p></li>
                            <li><span>我要住宿</span><p>不同的城市,一样的家</p></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div style="clear:both;"></div>
    </div>
    <!--试管婴儿-->
    <div class="baby-box">
        <div class="container-warp">
            <div class="container-title">
                <i class="index-icon icon_tools_2"></i>
                <h3>试管婴儿</h3>
                <p>以爱之名 预约生命</p>
            </div>
            <div class="container-list">
                <div class="success-rate">
                    <div class="rate-title baby-box-title">试管婴儿成功率测试</div>
                    <div class="rate-container">
                        <img src="/images/baby-rate.png">
                    </div>
                </div>
                <div class="member-log">
                    <div class="log-title baby-box-title">用户日志分享</div>
                    <div class="log-container">
                        <ul class="swiper-wrapper">
                            <?php foreach ($member_coment1 as $member_comment):?>
                            <li class="swiper-slide">
                                <div class="avatar">
                                    <a href="">
                                        <img src="<?=$member_comment->logo?>" >
                                    </a>
                                </div>
                                <div class="body">
                                    <div class="meta">
                                        <a href=""><?=$member_comment->name?></a>
                                    </div>
                                    <div class="message">
                                        <a href=""><?=mb_substr($member_comment->discuss,0,10)?>...</a>
                                    </div>
                                </div>
                            </li>
                            <?php endforeach; ?>
                            <!--<li class="swiper-slide">
                                <div class="avatar">
                                    <a href="">
                                        <img src="https://imgcdn1.zuzuche.com/user_icon/129/12920494da5f1eb1772ca7c3b973dce1f7ac076_200.jpg!/both/34x34/quality/75/format/jpg" >
                                    </a>
                                </div>
                                <div class="body">
                                    <div class="meta">
                                        <a href="">苏珊小鱼</a>
                                    </div>
                                    <div class="message">
                                        <a href="">非常棒的体验，一家人顺便出去旅游一圈，我们也终于有了...</a>
                                    </div>
                                </div>
                            </li>
                            <li class="swiper-slide">
                                <div class="avatar">
                                    <a href="">
                                        <img src="https://imgcdn1.zuzuche.com/user_icon/129/12920494da5f1eb1772ca7c3b973dce1f7ac076_200.jpg!/both/34x34/quality/75/format/jpg" >
                                    </a>
                                </div>
                                <div class="body">
                                    <div class="meta">
                                        <a href="">苏珊小鱼</a>
                                    </div>
                                    <div class="message">
                                        <a href="">非常棒的体验，一家人顺便出去旅游一圈，我们也终于有了...</a>
                                    </div>
                                </div>
                            </li>-->
                        </ul>
                        <p class="title">13000<span class="desc">人在分享日志</span></p>
                    </div>
                </div>
                <div class="company">
                    <div class="company-title">
                        <ul class="baby-company-nav">
                            <li class="active"><a href="javascript:void(0)">医院</a></li>
                            <li><a href="javascript:void(0)">服务机构</a></li>
                            <li><a href="javascript:void(0)">国家</a></li>
                        </ul>
                    </div>
                    <div class="company-container">
                        <div class="">
                            <ul>
                                <?php foreach ($hospitals as $k=>$hospital):?>
                                <li>
                                    <div class="accordion-item <?=$k==0?'active':''?>" style="background-image: url('<?=$hospital->logo?>');">
                                        <div class="cover_bg">
                                            <a href="/"><?=$hospital->short_name?></a>
                                        </div>
                                    </div>
                                </li>
                                <?php endforeach;?>
                            </ul>
                        </div>
                        <div class="none">
                            <ul>
                                <li>
                                    <div class="accordion-item act" style="background-image: url('images/hot-news.png');">
                                        <div class="cover_bg">
                                            <a href="/">美国试管婴儿中需要补充哪些营养哪些营养哪些营养</a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="accordion-item active" style="background-image: url('images/hot-news.png');">
                                        <div class="cover_bg">
                                            <a href="/">美国试管婴儿中需要补充哪些营养哪些营养哪些营养</a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="accordion-item" style="background-image: url('images/hot-news.png');">
                                        <div class="cover_bg">
                                            <a href="/">美国试管婴儿中需要补充哪些营养哪些营养哪些营养</a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="accordion-item" style="background-image: url('images/hot-news.png');">
                                        <div class="cover_bg">
                                            <a href="/">美国试管婴儿中需要补充哪些营养哪些营养哪些营养</a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="site-case">
                    <div class="case-title">
                        <ul class="baby-case-nav common-right-list">
                            <li class="active"><a href="javascript:void(0)">案例</a></li>
                            <li><a href="javascript:void(0)">攻略</a></li>
                        </ul>
                    </div>
                    <div class="case-container">
                        <div class="case-li-index">
                            <div class="pictrue"><img src="/d/file/content/2017/12/5a38873a23c5a.jpg"/></div>
                            <div class="case-li">
                                <ul>
                                    <?php foreach($tubeArticles as $tubeArticle):?>
                                    <li><span><a href="<?=\yii\helpers\Url::to(['index/tube-detail','id'=>$tubeArticle->id])?>" title=""><?=mb_substr($tubeArticle->title,0,15,'utf-8').'...'?></a></span></li>
                                    <?php endforeach;?>
                                </ul>
                            </div>
                        </div>
                        <div class="case-li-index" style="display: none">
                            <div class="pictrue"><img src="/images/baby-case.png"/></div>
                            <div class="case-li">
                                <ul>
                                    <?php foreach($tube_article_r as $v):?>
                                    <li><span><a href="" title=""><?=mb_substr($v->title,0,15).'...'?></a></span></li>
                                    <?php endforeach;?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="common-ad-90">
                <a href=""><img src="/images/ad_1190_90.png"></a>
            </div>
        </div>
        <div style="clear:both;"></div>
    </div>
    <!--出国看病-->
    <div class="patient-box">
        <div class="container-warp">
            <div class="container-title">
                <i class="index-icon icon_tools_3"></i>
                <h3>出国看病</h3>
                <p>精心严选适合您的就医方案</p>
            </div>
            <div class="container-list">
                <div class="success-rate">
                    <div class="rate-title patient-box-title">选择适合您的就医方案</div>
                    <div class="rate-container">
                        <img src="/upload/5a790c859003b.png">
                    </div>
                </div>
                <div class="member-log">
                    <div class="log-title patient-box-title">用户日志分享</div>
                    <div class="log-container">
                        <ul class="swiper-wrapper">
                            <?php foreach ($member_coment2 as $member_comment):?>
                                <li class="swiper-slide">
                                    <div class="avatar">
                                        <a href="">
                                            <img src="<?=$member_comment->logo?>" >
                                        </a>
                                    </div>
                                    <div class="body">
                                        <div class="meta">
                                            <a href=""><?=$member_comment->name?></a>
                                        </div>
                                        <div class="message">
                                            <a href=""><?=mb_substr($member_comment->discuss,0,10)?>...</a>
                                        </div>
                                    </div>
                                </li>
                            <?php endforeach; ?>
                           <!-- <li class="swiper-slide">
                                <div class="avatar">
                                    <a href="">
                                        <img src="https://imgcdn1.zuzuche.com/user_icon/129/12920494da5f1eb1772ca7c3b973dce1f7ac076_200.jpg!/both/34x34/quality/75/format/jpg" >
                                    </a>
                                </div>
                                <div class="body">
                                    <div class="meta">
                                        <a href="">苏珊小鱼</a>
                                    </div>
                                    <div class="message">
                                        <a href="">非常棒的体验，一家人顺便出去旅游一圈，我们也终于有了...</a>
                                    </div>
                                </div>
                            </li>
                            <li class="swiper-slide">-->
                         <!--       <div class="avatar">
                                    <a href="">
                                        <img src="https://imgcdn1.zuzuche.com/user_icon/129/12920494da5f1eb1772ca7c3b973dce1f7ac076_200.jpg!/both/34x34/quality/75/format/jpg" >
                                    </a>
                                </div>
                                <div class="body">
                                    <div class="meta">
                                        <a href="">苏珊小鱼</a>
                                    </div>
                                    <div class="message">
                                        <a href="">非常棒的体验，一家人顺便出去旅游一圈，我们也终于有了...</a>
                                    </div>
                                </div>
                            </li>-->
                        </ul>
                        <p class="title">12200<span class="desc">人在分享日志</span></p>
                    </div>
                </div>
                <div class="company">
                    <div class="company-title">
                        <ul class="patient-company-nav">
                            <li class="active"><a href="javascript:void(0)">医院</a></li>
                            <li><a href="javascript:void(0)">服务机构</a></li>
                            <li><a href="javascript:void(0)">国家</a></li>
                        </ul>
                    </div>
                    <div class="company-container">
                        <div class="">
                            <ul>
                                <?php foreach($hospital_oversea as $k=>$oversea):?>
                                <li>
                                    <div class="accordion-item <?=$k==0?'active':''?>" style="background-image: url('<?=$oversea->description_img?>');">
                                        <div class="cover_bg">
                                            <a href="/"><?=$oversea->short_name?></a>
                                        </div>
                                    </div>
                                </li>
                               <?php endforeach;?>
                            </ul>
                        </div>
                        <div class="none">
                            <ul>
                                <li>
                                    <div class="accordion-item act" style="background-image: url('images/hot-news.png');">
                                        <div class="cover_bg">
                                            <a href="/">美国试管婴儿中需2222222要补充哪些营养哪些营养哪些营养</a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="accordion-item active" style="background-image: url('images/hot-news.png');">
                                        <div class="cover_bg">
                                            <a href="/">美国试管婴儿中需要补充哪些营养哪些营养哪些营养</a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="accordion-item" style="background-image: url('images/hot-news.png');">
                                        <div class="cover_bg">
                                            <a href="/">美国试管婴儿中需要补充哪些营养哪些营养哪些营养</a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="accordion-item" style="background-image: url('images/hot-news.png');">
                                        <div class="cover_bg">
                                            <a href="/">美国试管婴儿中需要补充哪些营养哪些营养哪些营养</a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="site-case">
                    <div class="case-title">
                        <ul class="patient-case-nav common-right-list">
                            <li class="active"><a href="javascript:void(0)">案例</a></li>
                            <li><a href="javascript:void(0)">攻略</a></li>
                        </ul>
                    </div>
                    <div class="case-container">
                        <div class="case-li-index">
                            <div class="pictrue"><img src="/d/file/content/2017/12/5a435a25f2c6c.png"/></div>
                            <div class="case-li">
                                <ul>
                                    <?php foreach($article_overseas as $article_oversea):?>
                                    <li><span><a href="<?=\yii\helpers\Url::to(['index/oversea-detail','id'=>$article_oversea->id])?>" title=""><?=strlen($article_oversea->title)>48?substr($article_oversea->title,'0',48).'...':$article_oversea->title?></a></span></li>
                                    <?php endforeach;?>
                                </ul>
                            </div>
                        </div>
                        <div class="case-li-index" style="display: none">
                            <div class="pictrue"><img src="/d/file/content/2017/12/5a435a25f2c6c.png"/></div>
                            <div class="case-li">
                                <ul>
                                    <?php foreach($article_oversea_r as $oversea):?>
                                    <li><span><a href="" title=""><?=mb_substr($oversea->title,0,15).'...'?></a></span></li>
                                    <?php endforeach;?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="common-ad-90">
                <a href=""><img src="/images/ad_1190_90.png"></a>
            </div>
        </div>
        <div style="clear:both;"></div>
    </div>
    <!--出国体检-->
    <div class="inspect-box">
        <div class="container-warp">
            <div class="container-title">
                <i class="index-icon icon_tools_4"></i>
                <h3>出国体检</h3>
                <p>完善的体检方案让您早日安心</p>
            </div>
            <div class="container-list">
                <div class="success-rate">
                    <div class="rate-title index-title-box">美食美景</div>
                    <div class="rate-container rate_img_food">
                        <img src="/upload/5a790ce982848.png">
                        <img src="/upload/5a790cfba2c0d.png">
                    </div>
                </div>
                <div class="member-log">
                    <div class="log-title index-title-box">用户日志分享</div>
                    <div class="log-container">
                        <ul class="swiper-wrapper">
                            <?php foreach ($member_coment3 as $member_comment):?>
                                <li class="swiper-slide">
                                    <div class="avatar">
                                        <a href="">
                                            <img src="<?=$member_comment->logo?>" >
                                        </a>
                                    </div>
                                    <div class="body">
                                        <div class="meta">
                                            <a href=""><?=$member_comment->name?></a>
                                        </div>
                                        <div class="message">
                                            <a href=""><?=mb_substr($member_comment->discuss,0,10)?>...</a>
                                        </div>
                                    </div>
                                </li>
                            <?php endforeach; ?>

                        </ul>
                        <p class="title">14000<span class="desc">人在分享日志</span></p>
                    </div>
                </div>
                <div class="company">
                    <div class="company-title">
                        <ul class="inspect-box-company-nav">
                            <li class="active"><a href="javascript:void(0)">医院</a></li>
                            <li><a href="javascript:void(0)">服务机构</a></li>
                            <li><a href="javascript:void(0)">国家</a></li>
                        </ul>
                    </div>
                    <div class="company-container">
                        <div class="">
                            <ul>
                                <?php foreach ($hospital_check as $k=>$check):?>
                                <li>
                                    <div class="accordion-item <?=$k==0?'active':''?>" style="background-image: url('<?=$check->description_img?>');">
                                        <div class="cover_bg">
                                            <a href="/"><?=$check->short_name?></a>
                                        </div>
                                    </div>
                                </li>
                                <?php endforeach;?>
                            </ul>
                        </div>
                        <div class="none">
                            <ul>
                                <li>
                                    <div class="accordion-item act" style="background-image: url('images/hot-news.png');">
                                        <div class="cover_bg">
                                            <a href="/">美国试管婴儿中需要补充哪些营养哪些营养哪些营养</a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="accordion-item active" style="background-image: url('images/hot-news.png');">
                                        <div class="cover_bg">
                                            <a href="/">美国试管婴儿中需要补充哪些营养哪些营养哪些营养</a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="accordion-item" style="background-image: url('images/hot-news.png');">
                                        <div class="cover_bg">
                                            <a href="/">美国试管婴儿中需要补充哪些营养哪些营养哪些营养</a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="accordion-item" style="background-image: url('images/hot-news.png');">
                                        <div class="cover_bg">
                                            <a href="/">美国试管婴儿中需要补充哪些营养哪些营养哪些营养</a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="site-case">
                    <div class="case-title">
                        <ul class="inspect-box-case-nav common-right-list">
                            <li class="active"><a href="javascript:void(0)">案例</a></li>
                            <li><a href="javascript:void(0)">攻略</a></li>
                        </ul>
                    </div>
                    <div class="case-container">
                        <div class="case-li-index">
                            <div class="pictrue"><img src="/d/file/content/2017/12/5a45dc9d5aeb8.png"/></div>
                            <div class="case-li">
                                <ul>
                                    <?php foreach($article_checks as $article_check):?>
                                    <li><span><a href="<?=\yii\helpers\Url::to(['index/check-detail','id'=>$article_check->id])?>" title=""><?=strlen($article_check->title)>48?substr($article_check->title,'0',48).'...':$article_check->title?></a></span></li>
                                    <?php endforeach;?>
                                </ul>
                            </div>
                        </div>
                        <div class="case-li-index" style="display: none">
                            <div class="pictrue"><img src="/images/baby-case.png"/></div>
                            <div class="case-li">
                                <ul>
                                    <?php foreach ($article_check_r as $check):?>
                                    <li><span><a href="" title=""><?=mb_substr($check->title,0,15).'...'?></a></span></li>
                                   <?php endforeach;?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="common-ad-90">
                <a href=""><img src="/images/ad_1190_90.png"></a>
            </div>
        </div>
        <div style="clear:both;"></div>
    </div>
    <!--出国生子-->
    <div class="birth-box">
        <div class="container-warp">
            <div class="container-title">
                <i class="index-icon icon_tools_5"></i>
                <h3>出国生子</h3>
                <p>贴心每一步只为您有个健康的宝宝</p>
            </div>
            <div class="container-list">
                <div class="success-rate">
                    <div class="rate-title index-title-box">美食美景</div>
                    <div class="rate-container rate_img_food">
                        <img src="/upload/5a790ca5baf1b.png">
                        <img src="/upload/5a790cd156f79.png">
                    </div>
                </div>
                <div class="member-log">
                    <div class="log-title index-title-box">用户日志分享</div>
                    <div class="log-container">
                        <ul class="swiper-wrapper">
                            <?php foreach ($member_coment4 as $member_comment):?>
                                <li class="swiper-slide">
                                    <div class="avatar">
                                        <a href="">
                                            <img src="<?=$member_comment->logo?>" >
                                        </a>
                                    </div>
                                    <div class="body">
                                        <div class="meta">
                                            <a href=""><?=$member_comment->name?></a>
                                        </div>
                                        <div class="message">
                                            <a href=""><?=mb_substr($member_comment->discuss,0,10)?>...</a>
                                        </div>
                                    </div>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                        <p class="title">12500<span class="desc">人在分享日志</span></p>
                    </div>
                </div>
                <div class="company">
                    <div class="company-title">
                        <ul class="birth-box-company-nav">
                            <li class="active"><a href="javascript:void(0)">医院</a></li>
                            <li><a href="javascript:void(0)">服务机构</a></li>
                            <li><a href="javascript:void(0)">国家</a></li>
                        </ul>
                    </div>
                    <div class="company-container">
                        <div class="">
                            <ul>
                                <?php foreach ($hospital_birth as $k=>$hos_birth):?>
                                <li>
                                    <div class="accordion-item <?=$k==0?'active':''?>" style="background-image: url('<?=$hos_birth->description_img?>');">
                                        <div class="cover_bg">
                                            <a href="/"><?=$hos_birth->short_name?></a>
                                        </div>
                                    </div>
                                </li>
                                <?php endforeach;?>
                            </ul>
                        </div>
                        <div class="none">
                            <ul>
                                <li>
                                    <div class="accordion-item act" style="background-image: url('images/hot-news.png');">
                                        <div class="cover_bg">
                                            <a href="/">美国试管婴儿中需要补充哪些营养哪些营养哪些营养</a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="accordion-item active" style="background-image: url('images/hot-news.png');">
                                        <div class="cover_bg">
                                            <a href="/">美国试管婴儿中需要补充哪些营养哪些营养哪些营养</a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="accordion-item" style="background-image: url('images/hot-news.png');">
                                        <div class="cover_bg">
                                            <a href="/">美国试管婴儿中需要补充哪些营养哪些营养哪些营养</a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="accordion-item" style="background-image: url('images/hot-news.png');">
                                        <div class="cover_bg">
                                            <a href="/">美国试管婴儿中需要补充哪些营养哪些营养哪些营养</a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="site-case">
                    <div class="case-title">
                        <ul class="birth-box-case-nav common-right-list">
                            <li class="active"><a href="javascript:void(0)">案例</a></li>
                            <li><a href="javascript:void(0)">攻略</a></li>
                        </ul>
                    </div>
                    <div class="case-container">
                        <div class="case-li-index">
                            <div class="pictrue"><img src="/d/file/content/2017/12/5a447f409a43f.png"/></div>
                            <div class="case-li">
                                <ul>
                                    <?php foreach($article_births as $article_birth):?>
                                    <li><span><a href="<?=\yii\helpers\Url::to(['index/birth-detail','id'=>$article_birth->id])?>" title=""><?=strlen($article_birth->title)>48?substr($article_birth->title,'0',48).'...':$article_birth->title?></a></span></li>
                                    <?php endforeach;?>
                                </ul>
                            </div>
                        </div>
                        <div class="case-li-index" style="display: none">
                            <div class="pictrue"><img src="/images/baby-case.png"/></div>
                            <div class="case-li">
                                <ul>
                                    <?php foreach($article_birth_r as $birth):?>
                                    <li><span><a href="" title=""><?=mb_substr($birth->title,0,15).'...'?></a></span></li>
                                    <?php endforeach;?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="common-ad-90">
                <a href=""><img src="/images/ad_1190_90.png"></a>
            </div>
        </div>
        <div style="clear:both;"></div>
    </div>
    <!--入驻医院-->
    <div class="hospital-box" style="float: left; width: 100%">
        <div class="container-warp">
            <div class="container-title">
                <i class="index-icon icon_tools_6"></i>
                <h3>已入驻医院</h3>
                <p>海外知名医院强势入驻</p>
            </div>
            <div class="container-list">
                <div class="hospital-list">
                    <div class="swiper-wrapper">
                        <?php foreach($hospital_footer as $footer):?>
                        <div class="swiper-slide">
                            <div class="hospital-list2">
                                <a href="#" alt="">
                                    <img width="288px" height="193px" class="hospital-list2-img1" src="<?=$footer->description_img?>" title="<?=$footer->short_name?>">
                                </a>
                                <span class="hospital-list2-span1"><a href=""><?=$footer->short_name?></a></span>
                                <p class="hospital-list2-p1"><?=strlen($footer->description)>90?mb_substr($footer->description,'0',40).'...':$footer->description?></p>
                                <div class="hospital-list2-pic">
                                    <p class="hospital-list2-p2"><span><?=$footer->country?>　<?=$footer->city?></span></p>
                                </div>
                            </div>
                        </div>
                        <?php endforeach;?>
                    </div>
                    <a href="javascirpt:void(0)"><div class="hospital-button-next"></div></a>
                    <a href="javascirpt:void(0)"><div class="hospital-button-prev"></div></a>
                    <div class="hospital-pagination"></div>
                </div>
            </div>
        </div>
        <div style="clear: both;"></div>
    </div>
    <!--入驻机构-->
    <div class="company-box">
        <div class="container-warp">
            <div class="container-title">
                <i class="index-icon icon_tools_7"></i>
                <h3>已入驻服务机构</h3>
                <p>多家服务机构给您更多的选择</p>
            </div>
            <div class="container-list">
                <div class="company-list">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide company-border">
                            <ul>
                                <?php foreach($service_footer1 as $service):?>
                                <li><a href="#"><img src="<?=$service->images?>"></a></li>
                                <?php endforeach;?>
                            </ul>
                        </div>
                        <div class="swiper-slide company-border">
                            <ul>
                                <?php foreach($service_footer2 as $service):?>
                                    <li><a href="1"><img src="<?=$service->images?>"></a></li>
                                <?php endforeach;?>
                            </ul>
                        </div>
                        <div class="swiper-slide company-border">
                            <ul>
                                <?php foreach($service_footer3 as $service):?>
                                    <li><a href="1"><img src="<?=$service->images?>"></a></li>
                                <?php endforeach;?>
                            </ul>
                        </div>
                    </div>
                    <a href="javascirpt:void(0)"><div class="company-button-next"></div></a>
                    <a href="javascirpt:void(0)"><div class="company-button-prev"></div></a>
                    <div class="company-pagination"></div>
                </div>
            </div>
        </div>
    </div>
</main>
<footer class="footer">
    <div class="server">
        <!--<ul class="server-list">
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
        </ul>-->
        <img src="/upload/5a790c53324b1.png"/>
    </div>
    <div class="bottom">
        <div class="bottom_nav">
            <div><img src="/upload/5a795433db032.png"/></div>
            <div>
                <p>使用指南</p>
                <a href="#">用户注册</a>
                <a href="#">会员认证</a>
                <a href="#">充值提现</a>
                <a href="#">购物流程</a>
            </div>
            <div>
                <p>售后服务</p>
                <a href="#">售后政策</a>
                <a href="#">退款说明</a>
                <a href="#">订单状态</a>
                <a href="#">取消订单</a>
                <a href="#">平台保障</a>
                <a href="#">发票规则</a>
                <a href="#">佩服规则</a>
            </div>
            <div>
                <p>用户条款</p>
                <a href="#">隐私条款</a>
                <a href="#">用户协议</a>
                <a href="#">免责条款</a>
                <a href="#">服务说明</a>
            </div>
            <div>
                <p>业务合作</p>
                <a href="#">广告业务</a>
                <a href="#">入驻条款</a>
                <a href="#">服务商入驻</a>
                <a href="#">医院入驻</a>
            </div>
            <div>
                <p>关于我们</p>
                <a href="#">平台简介</a>
                <a href="#">联系方式</a>
                <a href="#">加入我们</a>
                <a href="#">投诉建议</a>
                <a href="#">常见问题</a>
                <a href="#">联系客服</a>
            </div>
            <div class="bottom_code" style="border: 0;">
    			<span>
    				<img src="/images/mcode.png"/>
    				<p>扫描下载手机版</p>
    			</span>
                <span>
    				<img src="/images/mcode.png" style="margin-left: 20px;"/>
    				<p style="text-indent: 20px;">扫描下载手机版</p>
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
<style>
    .swiper-pagination {
        position: absolute;
        z-index: 20;
        bottom: 10px;
        width: 100%;
        text-align: center;
    }
    .swiper-pagination-bullet {
        display: inline-block;
        width: 10px;
        height: 10px;
        border-radius: 8px;
        background: #fff;
        margin: 0 5px;
        opacity: 0.8;
        border: 1px solid #fff;
        cursor: pointer;
    }
    .swiper-pagination-bullet-active {
        background: #258bf4;
    }

</style>

<link href="https://cdn.bootcss.com/Swiper/3.4.2/css/swiper.min.css" rel="stylesheet">
<script src="https://cdn.bootcss.com/Swiper/3.4.2/js/swiper.jquery.min.js"></script>
<script src="https://cdn.bootcss.com/Swiper/3.4.2/js/swiper.jquery.umd.min.js"></script>
<script src="/ext/moveline/js/jquery.easing.js"></script>
<script src="/ext/moveline/js/toast.js"></script>
<script src="/ext/moveline/js/moveline.js"></script>
<script src="/js/index.js"></script>
<script>
    var mySwiper = new Swiper ('.hospital-list', {
        loop: true,
        pagination: '.hospital-pagination',
        paginationClickable :true,
        slidesPerView : 4,
        slidesPerGroup : 4,
        spaceBetween:10,
        prevButton:'.hospital-button-prev',
        nextButton:'.hospital-button-next',
    });
    var mySwiper = new Swiper ('.company-list', {
        loop: true,
        pagination: '.company-pagination',
        paginationClickable :true,
        slidesPerView : 1,
        slidesPerGroup : 1,
        spaceBetween:10,
        prevButton:'.company-button-prev',
        nextButton:'.company-button-next',
    });
    $('.navbar-menu').moveline({
        color:'#2db4df',height:4,
        click:function(ret){
            ret.ele.addClass('active').siblings().removeClass('active');
        }
    });
</script>
</body>
</html>