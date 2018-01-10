<?php
namespace frontend\controllers;

use backend\models\User;
use frontend\models\Goods;
use frontend\models\GoodsCategory;
use frontend\models\GoodsGallery;
use Yii;
use yii\base\InvalidParamException;
use yii\helpers\ArrayHelper;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use frontend\models\SignupForm;
use frontend\models\ContactForm;
use yii\web\Request;

/**
 * Site controller
 */
class SiteController extends Controller
{
    public $enableCsrfValidation = false;
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout', 'signup'],
                'rules' => [
                    [
                        'actions' => ['signup'],
                        'allow' => true,
                        'roles' => ['?'],
                    ],
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
                'minLength'=>3,
                'maxLength'=>4,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return mixed
     */
    public function actionIndex()
    {

         $content= $this->render('index');
        file_put_contents("./index.html",$content);
        echo "已经生成静态页面";
        //return $this->render('index');
    }
        //判断用户是否登陆，返回相应的静态页面信息
    public function actionSouye(){
        //判断用户是否登陆
        if (!\Yii::$app->user->isGuest){
            $result=[
                "result"=>true,
                "username"=>\Yii::$app->user->identity->username,
            ];
            //返回给页面
            return  \yii\helpers\Json::encode($result);

        }




    }
    /**
     * 显示商品页面
     *
     */
    public function actionList($id=null){
        //获取收索条件
        $name=\Yii::$app->request->get("name");
        $ss_id=\Yii::$app->request->get("id");
        //根据id获取商品信息
         $rows=Goods::find()->where(['goods_category_id'=>$id])->all();
         if ($name&&$ss_id){
             $rows=Goods::find()->where(['goods_category_id'=>$ss_id])->andWhere(["like","name",$name])->all();
         }

        //加载商品列表页
        return $this->render("list",["rows"=>$rows,"id"=>$id]);

    }

    /**
     * 展示商品详情
     */
    public function actionContent($id){
        //获取商品的信息
        $goods=Goods::findOne(["id"=>$id]);
        $goods::updateAllCounters(["view_times"=>1],["id"=>$id]);
        //根据id获取商品的相册
        $rows=GoodsGallery::find()->where(["goods_id"=>$id])->all();
        //遍历获取第一张图片
        $arr=[];
        foreach ($rows as $row){
            $arr[]=$row;
            break;
        }

        //展示商品详情页面
        return $this->render("content",["rows"=>$rows,"arr"=>$arr[0],"goods"=>$goods]);
    }
    /**
     * 显示第二级分类
     */
    public function actionShowTwo($id=null){
        //获取收索条件
        $name=\Yii::$app->request->get("name");
        $ss_id=\Yii::$app->request->get("id");
        //根据id获取所有的三级分类
        $cate=\backend\models\GoodsCategory::findOne(["id"=>$id]);
        //如果有搜索条件
        if ($ss_id){
            $cate=\backend\models\GoodsCategory::findOne(["id"=>$ss_id]);
        }

        //判断搜索条件是否存在
        if ($cate->depth==1){
            //获取一级分类的子分类
            //$category=$cate->children()->select("id")->andWhere(["depth"=>2])->asArray->all();
            $category= $cate->children()->select('id')->andWhere(['depth'=>2])->asArray()->all();
            //
            $ids=ArrayHelper::map($category,"id","id");
        }else{
            //顶级分类
            //$category=$cate->children()->select("id")->andWhere(["depth"=>2])->asArray->all();
            $category= $cate->children()->select('id')->asArray()->all();
            //
            $ids=ArrayHelper::map($category,"id","id");
        }
        $rows=\backend\models\Goods::find()->where(["in","goods_category_id",$ids])->all();
        //再根据id获取相应的商品,定义一个数组保存所有符合条件的商品
        //加入搜索条件
        if ($name){
            $rows=\backend\models\Goods::find()->where(["in","goods_category_id",$ids])->andWhere(["like","name",$name])->all();
        }
        //优化方法,可以使用嵌套集合里面的children方法进行查询


        //加载显示页面
        return $this->render("showtwo",["rows"=>$rows,"id"=>$id]);
    }

    /**
     * 显示第一级分类
     *
     */
    public function actionShowOne($id=null){

    }

    /**
     * 用户注册
     */
    public function actionCheck($username){
        //判断是否用户名存在
        $row=\frontend\models\User::findOne(["username"=>$username]);
        if ($row){
            echo "false";
        }else{
            echo "true";
        }
    }
     public function actionRegist(){
          //实力化Request
         $request=new Request();
         //实列化User
         $model=new \frontend\models\User();
         if ($request->isPost){
             $model->load($request->post(),"");
             if ($model->validate()){
                 $password=$model->password_hash;
                 $model->password_hash=\Yii::$app->security->generatePasswordHash($password);
                 //给auth_key赋值随机数,用作自动登录
                 $arr=["a","b","c",1,2,3,4,5];
                 shuffle($arr);
                 $str="";
                 for($i=1;$i<=3;++$i){
                     $str.=$arr[$i];
                 }
                 $model->auth_key=$str;
                 $model->created_at=time();
                 //保存
                 $model->save(false);
                 $redis=new \Redis();
                 $redis->connect("127.0.0.1");
               /*  //等会儿清除验证码
                 $name=$model->tel;
                 $name="code_".$name;
                 $code=$redis->del();*/
                 //跳转到登录页面
                 return $this->redirect(["login/index"]);


             }

         }

         //加载注册页面
         return $this->render("regist");
     }
     //添加首页搜索条件
     public function actionSousuo(){
         //接收get传过来的数据
         $name=\Yii::$app->request->get("name");
         //根据搜索条件获取数据
         $rows=\backend\models\Goods::find()->where(["like","name",$name])->all();
         //加载显示页面
         return $this->render("sousuo",["rows"=>$rows]);

     }
     //添加浏览次数
    public function actionLiu($id){
         $id=\Yii::$app->request->get("id");
        //根据id找到该商品记录
        $model=\backend\models\Goods::findOne(["id"=>$id]);
         //开启redis
        $redis=new \Redis();
        $redis->connect("127.0.0.1");
        $click=$redis->get("click".$id);
        if ($click){
            $click=$click+1;
            $redis->set("click".$id,$click,24*3600);
            //更新数据库点击数
            $model::updateAll(["view_times"=>$click],["id"=>$id]);
        }else{
            $click=$model->view_times;
            $click=$click+1;
            $redis->set("click".$id,$click,24*3600);
            //更新数据库点击数
            $model::updateAll(["view_times"=>$click],["id"=>$id]);
        }

    }

    /**
     * Logs in a user.
     *
     * @return mixed
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        } else {
            return $this->render('login', [
                'model' => $model,
            ]);
        }
    }

    //跟新点击数
    public function actionClick(){
        $id=\Yii::$app->request->get("id");
        $goods=Goods::findOne(["id"=>$id]);
        $goods::updateAllCounters(["view_times"=>1],["id"=>$id]);
        return \yii\helpers\Json::encode($goods->view_times);

    }


    /**
     * Logs out the current user.
     *
     * @return mixed
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return mixed
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail(Yii::$app->params['adminEmail'])) {
                Yii::$app->session->setFlash('success', 'Thank you for contacting us. We will respond to you as soon as possible.');
            } else {
                Yii::$app->session->setFlash('error', 'There was an error sending your message.');
            }

            return $this->refresh();
        } else {
            return $this->render('contact', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Displays about page.
     *
     * @return mixed
     */
    public function actionAbout()
    {
        return $this->render('about');
    }

    /**
     * Signs user up.
     *
     * @return mixed
     */
    public function actionSignup()
    {
        $model = new SignupForm();
        if ($model->load(Yii::$app->request->post())) {
            if ($user = $model->signup()) {
                if (Yii::$app->getUser()->login($user)) {
                    return $this->goHome();
                }
            }
        }

        return $this->render('signup', [
            'model' => $model,
        ]);
    }

    /**
     * Requests password reset.
     *
     * @return mixed
     */
    public function actionRequestPasswordReset()
    {
        $model = new PasswordResetRequestForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail()) {
                Yii::$app->session->setFlash('success', 'Check your email for further instructions.');

                return $this->goHome();
            } else {
                Yii::$app->session->setFlash('error', 'Sorry, we are unable to reset password for the provided email address.');
            }
        }

        return $this->render('requestPasswordResetToken', [
            'model' => $model,
        ]);
    }

    /**
     * Resets password.
     *
     * @param string $token
     * @return mixed
     * @throws BadRequestHttpException
     */
    public function actionResetPassword($token)
    {
        try {
            $model = new ResetPasswordForm($token);
        } catch (InvalidParamException $e) {
            throw new BadRequestHttpException($e->getMessage());
        }

        if ($model->load(Yii::$app->request->post()) && $model->validate() && $model->resetPassword()) {
            Yii::$app->session->setFlash('success', 'New password saved.');

            return $this->goHome();
        }

        return $this->render('resetPassword', [
            'model' => $model,
        ]);
    }
}
