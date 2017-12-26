<?php

/* @var $this \yii\web\View */
/* @var $content string */

use backend\assets\AppAsset;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <?php
    NavBar::begin([
        'brandLabel' => '福鑫商城',
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    $menuItems = [
        ['label' => '品牌列表', 'url' => ['brand/index'],
            'items'=>[['label' => '品牌列表', 'url' => ['brand/index']],
                ['label' => '品牌添加', 'url' => ['brand/add']]]
          ],

        ['label' => '商品列表', 'url' => ['goods/index'],
            'items'=>[['label' => '商品列表', 'url' => ['goods/index']],
                ['label' => '商品添加', 'url' => ['goods/add']],
                ['label' => '分类列表', 'url' => ['goods-category/index']],
                ['label' => '添加分类', 'url' => ['goods-category/add']]
                ]
        ],

        ['label' => '文章列表', 'url' => ['article/index'],
            'items'=>[['label' => '文章列表', 'url' => ['article/index']],
                ['label' => '文章添加', 'url' => ['article/add']],
                ]
            ],

        ['label'=>"注销",'url'=>["login/logout"]]

    ];
    if (Yii::$app->user->isGuest) {


        $menuItems[] = ['label' =>'登录', 'url' => ['login/index']];
    } else {
        $menuItems[] = '<li>'
            . Html::beginForm(['/site/logout'], 'post')
            . Html::submitButton(
                'Logout (' . Yii::$app->user->identity->username . ')',
                ['class' => 'btn btn-link logout']
            )
            . Html::endForm()
            . '</li>';
    }

    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => $menuItems,
    ]);
    NavBar::end();
    ?>

    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; My Company <?= date('Y') ?></p>

        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
