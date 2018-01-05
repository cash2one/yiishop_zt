<div class="topnav">
    <div class="topnav_bd w1210 bc">
        <div class="topnav_left">

        </div>
        <div class="topnav_right fr">
            <ul>
                <li>您好，欢迎来到福鑫商城！
                    <?php if (\Yii::$app->user->isGuest){ ?>
                    [<a href="<?=\yii\helpers\Url::to(["login/index"])?>">登录</a>]
                    [<a href="<?=\yii\helpers\Url::to(["site/regist"])?>">免费注册</a>] </li>
                <?php }else{
                    ?>
                [<a href="<?=\yii\helpers\Url::to(["login/logout"])?>">注销(<?=\Yii::$app->user->identity->username?>)</a>]
                    <li class="line">|</li>
                    <li>我的订单</li>
                    <li class="line">|</li>
                    <li>客户服务</li>
                <?php };?>


            </ul>
        </div>
    </div>
</div>