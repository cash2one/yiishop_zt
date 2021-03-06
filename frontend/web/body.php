

<div class="user fl">
    <dl>
        <dt>
            <em></em>
            <a href="">用户中心</a>
            <b></b>
        </dt>
        <dd>
            <?php if (\Yii::$app->user->isGuest){?>
            <div class="prompt">

                您好，请<a href="<?=\yii\helpers\Url::to(["login/index"])?>">登录</a>
            </div>
            <div class="uclist mt10">
                <ul class="list1 fl">
                    <li><a href="">用户信息></a></li>
                    <li><a href="">我的订单></a></li>
                    <li><a href="<?=\yii\helpers\Url::to(["login/index"])?>">收货地址></a></li>
                    <li><a href="">我的收藏></a></li>
                </ul>

                <ul class="fl">
                    <li><a href="">我的留言></a></li>
                    <li><a href="">我的红包></a></li>
                    <li><a href="">我的评论></a></li>
                    <li><a href="">资金管理></a></li>
                </ul>

            </div>
            <div style="clear:both;"></div>
            <div class="viewlist mt10">
                <h3>最近浏览的商品：</h3>
                <ul>
                    <li><a href=""><img src="/images/view_list1.jpg" alt="" /></a></li>
                    <li><a href=""><img src="/images/view_list2.jpg" alt="" /></a></li>
                    <li><a href=""><img src="/images/view_list3.jpg" alt="" /></a></li>
                </ul>
            </div>
            <?php }else{?>
            <div class="prompt">

               您好，<a><?=\Yii::$app->user->identity->username?></a>
            </div>
            <div class="uclist mt10">
                <ul class="list1 fl">
                    <li><a href="">用户信息></a></li>
                    <li><a href="">我的订单></a></li>
                    <li><a href="<?=\yii\helpers\Url::to(["address/index"])?>">收货地址></a></li>
                    <li><a href="">我的收藏></a></li>
                </ul>

                <ul class="fl">
                    <li><a href="">我的留言></a></li>
                    <li><a href="">我的红包></a></li>
                    <li><a href="">我的评论></a></li>
                    <li><a href="">资金管理></a></li>
                </ul>

            </div>
            <div style="clear:both;"></div>
            <div class="viewlist mt10">
                <h3>最近浏览的商品：</h3>
                <ul>
                    <li><a href=""><img src="/images/view_list1.jpg" alt="" /></a></li>
                    <li><a href=""><img src="/images/view_list2.jpg" alt="" /></a></li>
                    <li><a href=""><img src="/images/view_list3.jpg" alt="" /></a></li>
                </ul>
            </div>
            <?php };?>
        </dd>
    </dl>
</div>
<!-- 用户中心 end-->

<!-- 购物车 start -->
<div class="cart fl">
    <dl>
        <dt>
            <a href="<?=\yii\helpers\Url::to(["cart/cart"])?>">去购物车结算</a>
            <b></b>
        </dt>
        <dd>
            <div class="prompt">
                购物车中还没有商品，赶紧选购吧！
            </div>
        </dd>
    </dl>
</div>