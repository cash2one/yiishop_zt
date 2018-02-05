<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7"/>
    <link rel="canonical" href="/"/>
    <title>文章内容页</title>
    <meta name="description" content=""/>
    <meta name="keywords" content=""/>
    <link rel="stylesheet" href="/css/common.css">
    <link rel="stylesheet" href="/css/article.css">
    <script src="https://cdn.bootcss.com/jquery/2.2.4/jquery.js"></script>
</head>
<body>
    <div class="web-content">
       <!-- <div class="top-banner"><img src="/images/article_banner.png" alt=""></div>-->
        <main class="site-main">
            <!--<nav class="breadcrumb"><i></i><span>当前位置</span>：<a href="">网站首页</a> / <a href="">试管婴儿</a> / 美国试管婴儿多少钱</nav>-->
            <div class="site-content">
                <div class="left-box">
              <!--      <div class="category">
                        <div class="li-title">试管婴儿 <i></i></div>
                        <ul>
                            <li><a href="#">美国试管婴儿多少钱</a> </li>
                            <li><a href="#">美国试管婴儿多少钱</a> </li>
                            <li><a href="#">美国试管婴儿多少钱</a> </li>
                            <li><a href="#">美国试管婴儿多少钱</a> </li>
                            <li><a href="#">美国试管婴儿多少钱</a> </li>
                        </ul>
                    </div>-->
                   <!-- <div class="category">
                        <div class="li-title">试管婴儿 <i></i></div>
                        <ul>
                            <li><a href="#">美国试管婴儿多少钱</a> </li>
                            <li><a href="#">美国试管婴儿多少钱</a> </li>
                            <li><a href="#">美国试管婴儿多少钱</a> </li>
                            <li><a href="#">美国试管婴儿多少钱</a> </li>
                            <li><a href="#">美国试管婴儿多少钱</a> </li>
                        </ul>
                    </div>
                    <div class="category">
                        <div class="li-title">试管婴儿 <i></i></div>
                        <ul>
                            <li><a href="#">美国试管婴儿多少钱</a> </li>
                            <li><a href="#">美国试管婴儿多少钱</a> </li>
                            <li><a href="#">美国试管婴儿多少钱</a> </li>
                            <li><a href="#">美国试管婴儿多少钱</a> </li>
                            <li><a href="#">美国试管婴儿多少钱</a> </li>
                        </ul>
                    </div>-->
                </div>
                <div class="right-box">
                    <div class="top-title">
                        <h1 class="entry-title"><?=$title->title?></h1>
                        <div class="single_info">
                            <span class="date info-ico">2017-10-18</span>
                            <span class="views info-ico">694</span>
                            <span class="note info-ico">10</span>
                        </div>
                    </div>
                    <div class="entry-content">
                        <div class="single-content">
                          <?=$detail->content?>
                            <div class="single-share">分享到：</div>
                        </div>
                    </div>
                    <div class="other-view">
                        <div class="other-view-tit">相关阅读</div>
                        <ul>
                            <?php foreach ($programmes as $programme):?>
                            <li><a href="#"><img src="<?=$programme->logo?>" alt=""></a><p><a href="#">
                                        <?=$programme->programe_name?></a></p></li>
                            <?php endforeach;?>
                        </ul>
                    </div>
                    <div class="comments">
                        <div class="comments-tit">我有话说<span>共<i></i>条500评论</span></div>
                        <div class="input-comment"></div>
                        <div class="comment-li">
                            <ul>
                                <?php foreach ($member_comments as $member_comment):?>
                                <li>
                                    <div class="user-info"><a href=""><img src="<?=$member_comment->logo?>" alt=""><span><?=$member_comment->name?></span></a></div>
                                    <div class="content-text">
                                        <span class="hour"><?=rand(1,10)?>小时前</span>
                                        <span class="operation">
                                            <span class="comment-operate-item comment-operate-reply">回复</span>
                                            <span class="comment-operate-item comment-operate-up operate-visited">赞<i><?=rand(50,100)?></i></span>
                                        </span>
                                        <p><?=$member_comment->discuss?></p>
                                    </div>
                                </li>
                             <?php endforeach;?>
                            </ul>
                        </div>
                      <!--  <div class="more-load">加载更多</div>-->
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>
</html>