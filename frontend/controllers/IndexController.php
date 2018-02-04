<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/24
 * Time: 19:15
 */
namespace frontend\controllers;
use frontend\model\LifeProvice;
use frontend\models\ArticleBirth;
use frontend\models\ArticleBirthData;
use frontend\models\ArticleHealthcheck;
use frontend\models\ArticleHealthcheckData;
use frontend\models\ArticleOversea;
use frontend\models\ArticleOverseaData;
use frontend\models\Country;
use frontend\models\Doctor;
use frontend\models\DomesticStep;
use frontend\models\Experience;
use frontend\models\HospitalDetails;
use frontend\models\HospitalLevel;
use frontend\models\HospitalProperty;
use frontend\models\HospitalProvice;
use frontend\models\MemberComment;
use frontend\models\MemberFacilitator;
use frontend\models\MemberHospital;
use frontend\models\MemberShare;
use frontend\models\ProgramCost;
use frontend\models\Programme;
use frontend\models\ServerExplain;
use frontend\models\ServerType;
use frontend\models\TestForm;
use frontend\models\TubeAge;
use frontend\models\TubeArticle;
use frontend\models\TubeArticleData;
use frontend\models\TubeBudget;
use frontend\models\TubeCount;
use frontend\models\TubeCrowd;
use frontend\models\TubePakege;
use frontend\models\TubeReason;
use frontend\models\TubeSkill;
use yii\data\Pagination;
use yii\db\Transaction;
use yii\web\Controller;
use yii\web\Cookie;

class IndexController extends Controller{
    public $enableCsrfValidation=false;
    //>>首页
    public function actionIndex(){
        //>>查询方案
            //>>试管婴儿所有方案
        $tube = ServerType::find()->where(['ser_pro_id'=>1])->all();
            //>>试管婴儿适合用户年龄
        $age = TubeAge::find()->all();
            //>>曾经试管婴儿次数
        $count = TubeCount::find()->all();
            //>>试管婴儿原因
        $reason =TubeReason::find()->all();
            //>>试管婴儿技术要求
        $skill = TubeSkill::find()->all();
            //>>国家
        $country = Country::find()->where(['ser_pro_id'=>1])->all();
            //>>预算
        $budget =TubeBudget::find()->all();
       // var_dump($age);
        $experience = Experience::find()->all();
        //>>试管婴儿文章列表
        $tube_article = TubeArticle::find()->orderBy('id desc')->limit(6)->offset(0)->all();
        //>>出国看病文章列表
        $article_oversea = ArticleOversea::find()->orderBy('id desc')->limit(6)->offset(0)->all();
        //>>出国体检文章列表
        $article_check = ArticleHealthcheck::find()->orderBy('id desc')->limit(6)->offset(0)->all();
        //>>出国生子文章列表
        $article_birth = ArticleBirth::find()->orderBy('id desc')->limit(6)->offset(0)->all();
        return $this->render('index',['tubes'=>$tube,'ages'=>$age,'counts'=>$count,'reasons'=>$reason,'skills'=>$skill,'countrys'=>$country,'budgets'=>$budget,'experiences'=>$experience,'tubeArticles'=>$tube_article,'article_overseas'=>$article_oversea,'article_checks'=>$article_check,'article_births'=>$article_birth]);
    }
    //>>项目搜索结果页
    public function actionSearch(){
        $p = [];
        $request = \Yii::$app->request;
          //==================================================================

        //====================================================================
           if ($request->isPost){
                $get = $request->post();
               //>>适合试管婴儿的人群
               $query = TubeCrowd::find();
               // $tube_type = isset($get['tube_type'])?$get['tube_type']:1;
               $A = empty($get['A'])?'':$get['A'];
               $B = empty($get['B'])?'':$get['B'];
               $C = empty($get['C'])?'':$get['C'];
               $D = empty($get['D'])?'':$get['D'];
               $country = empty($get['country'])?'':$get['country'];
               $experice = empty($get['experience'])?'':$get['experience'];
               $tech_require = empty($get['tube_skill'])?'':$get['tube_skill'];
               $tube_type = empty($get['tube_type'])?'':$get['tube_type'];
               if($A){
                   $query->where(['A'.$A=>$A]);
               }
               if($B){
                   $query->andWhere(['B'.$B=>$B]);
               }
               if($C){
                   $query->andWhere(['C'.$C=>$C]);
               }
               if($D){
                   $query->andWhere(['D'.$D=>$D]);
               }
               if($country){
                   $query->andWhere(['country_id'=>$country]);
               }
               if($experice){
                   $query->andWhere(['service_experice'=>$experice]);
               }
               if($tech_require){
                   $query->andWhere(['tech_require'=>$tech_require]);
               }
               if($tube_type){
                   $query->andWhere(['tube_type'=>$tube_type]);
               }
               $count = $query->count();
               $pagetool = new Pagination([
                   'pageSize'=>5,
                   'totalCount'=>$count,
               ]);
               $tubeCrowds = $query->limit($pagetool->limit)->offset($pagetool->offset)->all();


           }
           else{
                  //如果get中没有参数,代表直接点找方案提交
                  if ($request->get()){
                      $cookies = \Yii::$app->request->cookies;
                      if ($cookies->has("search")){
                          $arr=$cookies->getValue("search");
                          $arr=unserialize($arr);
                          //var_dump($arr);
                          foreach ($request->get() as $k=>$v){
                              $arr[$k]=$v;
                              $cookies = \Yii::$app->response->cookies;
                              $cookie = new Cookie();
                              $cookie->name='search';
                              $cookie->value=serialize($arr);
                              $cookies->add($cookie);
                          }
                          $arr=$cookies->getValue("search");
                          $arr=unserialize($arr);

                          //>>get搜索条件$arr
                          //将更新的数据保存
                      }else{
                          $id=[];//a=>1   b=>2
                          $cookies = \Yii::$app->response->cookies;
                          $cookie = new Cookie();
                          foreach ($request->get() as $k=>$v){
                              $id[$k]=$v;
                          }
                          $cookie->name='search';
                          $cookie->value=serialize($id);
                          $cookies->add($cookie);
                          $arr=$id;
                      }

                      //根据cookie条件搜索
                      //>>适合试管婴儿的人群
                      $query = TubeCrowd::find();
                      // $tube_type = isset($get['tube_type'])?$get['tube_type']:1;
                      $A = empty($arr['A'])?'':$arr['A'];
                      $B = empty($arr['B'])?'':$arr['B'];
                      $C = empty($arr['C'])?'':$arr['C'];
                      $D = empty($arr['D'])?'':$arr['D'];
                      $country = empty($arr['country'])?'':$arr['country'];
                      $experice = empty($arr['experience'])?'':$arr['experience'];
                      $tech_require = empty($arr['tube_skill'])?'':$arr['tube_skill'];
                      $tube_type = empty($arr['tube_type'])?'':$arr['tube_type'];
                      if($A){
                          $query->where(['A'.$A=>$A]);
                      }
                      if($B){
                          $query->andWhere(['B'.$B=>$B]);
                      }
                      if($C){
                          $query->andWhere(['C'.$C=>$C]);
                      }
                      if($D){
                          $query->andWhere(['D'.$D=>$D]);
                      }
                      if($country){
                          $query->andWhere(['country_id'=>$country]);
                      }
                      if($experice){
                          $query->andWhere(['service_experice'=>$experice]);
                      }
                      if($tech_require){
                          $query->andWhere(['tech_require'=>$tech_require]);
                      }
                      if($tube_type){
                          $query->andWhere(['tube_type'=>$tube_type]);
                      }
                      $count = $query->count();
                      $pagetool = new Pagination([
                          'pageSize'=>5,
                          'totalCount'=>$count,
                      ]);
                      $tubeCrowds = $query->limit($pagetool->limit)->offset($pagetool->offset)->all();


                  }else{
                      $cookies = \Yii::$app->response->cookies;
                      $cookies->remove('search');
                      $count = TubeCrowd::find()->count();
                      $pagetool = new Pagination([
                          'pageSize'=>5,
                          'totalCount'=>$count,
                      ]);
                      $tubeCrowds = TubeCrowd::find()->limit($pagetool->limit)->offset($pagetool->offset)->all();
                  }

           }

        if($tubeCrowds){

            foreach($tubeCrowds as $tube){
                //>>获得所有方案的id
                $program =Programme::find()->where(['id'=>$tube->programe_id])->one();
                $p[] = $program;
                /* $doctor_ids = unserialize($program->doctor_id);
                 foreach($doctor_ids as $doctor_id){
                     $doc = Doctor::find()->where(['id'=>$doctor_id])->asArray()->one();
                     $d[$program->id]=$doc;
                 }*/
            }
        }

       /* }else {
            $count = TubeCrowd::find()->count();
            $pagetool = new Pagination([
            'pageSize'=>5,
            'totalCount'=>$count,
            ]);
            $tubeCrowds = TubeCrowd::find()->limit($pagetool->limit)->offset($pagetool->offset)->all();

            if ($tubeCrowds) {
                foreach ($tubeCrowds as $tube) {
                    //>>获得所有方案的id
                    $p[] = Programme::find()->where(['id' => $tube->programe_id])->one();
                }

            }
       }*/

        return $this->render('search_result', ['models' => $p,'pageTool'=>$pagetool]);
    }
    //>>方案详情页
    public function actionProgramDetail($id){
        //>>基本信息
        $tube = ServerType::find()->where(['ser_pro_id'=>1])->all();
        //>>试管婴儿适合用户年龄
        $age = TubeAge::find()->all();
        //>>曾经试管婴儿次数
        $count = TubeCount::find()->all();
        //>>试管婴儿原因
        $reason =TubeReason::find()->all();
        //>>试管婴儿技术要求
        $skill = TubeSkill::find()->all();
        //>>国家
        $country = Country::find()->where(['ser_pro_id'=>1])->all();
        //>>预算
        $budget =TubeBudget::find()->all();
        // var_dump($age);
        $experience = Experience::find()->all();
        //>>方案
        $program = Programme::find()->where(['id'=>$id])->one();
        //>>适合人群
        $crowd = TubeCrowd::find()->where(['programe_id'=>$id])->one();
        foreach ($count as $c){
            $A = 'A'.($c->id);
            $crowd->$A = $c->count_name;
        }
        foreach ($reason as $r){
            $B = 'B'.($r->id);
            $crowd->$B = $r->reason;
        }
        foreach($age as $ag){
            $C = 'C'.$ag->id;
            $crowd->$C = $ag->age_range;
        }
        foreach($budget as $b){
            $D ='D'.$b->id;
            $crowd->$D = $b->budget_range;
        }
        //>>服务体验
        $crowd->service_experice =  Experience::find()->where(['id'=>$crowd->service_experice])->one()->ser_experience;
        //>>技术需求
        $crowd->tech_require = TubeSkill::find()->where(['id'=>$crowd->tech_require])->one()->skill_req;
        //>>套餐信息
        $tubePackage = TubePakege::find()->where(['programe_id'=>$program->id])->all();
        //>>医生信息
        $doc_ids = unserialize($program->doctor_id);
        $doctors = Doctor::find()->where(['in','id',$doc_ids])->all();
        //>>服务商信息
        $facilitator = MemberFacilitator::find()->where(['id'=>$program->service_provid_id])->one();
        //>>医院信息
        $hospital = MemberHospital::find()->where(['hid'=>$program->hospital_id])->one();
        //>>医院详细信息
        $hospital_detail = HospitalDetails::find()->where(['hospital_id'=>$program->hospital_id])->one();
        //>>医院性质
        $type_h = HospitalProperty::find()->where(['id'=>$hospital->type])->one();
        //>>医院等级
        $level_h = HospitalLevel::find()->where(['id'=>$hospital->level])->one();
        //>>方案流程
        $domesticStep = DomesticStep::find()->where(['program_id'=>1])->all();
        //>>费用包含
        $costs = ProgramCost::find()->where(['program_id'=>1])->all();
        //>>服务说明
        $service_explain = ServerExplain::find()->where(['program_id'=>1])->all();
        //>>日志分享
        $memberShare = MemberShare::find()->where(['pragram_id'=>$program->id])->all();
        //>>用户评论
        $memberComment = MemberComment::find()->where(['program_id'=>$program->id])->all();
        /*foreach ($domesticStep as $d){
            //var_dump();die;
            foreach (unserialize($d->package_id) as $v){
                var_dump($v);die;
            }
        }*/
        //var_dump($domesticStep);die;
        return $this->render('program_detail',['program'=>$program,'crowd'=>$crowd,'packages'=>$tubePackage,'doctors'=>$doctors,'facilitator'=>$facilitator,'hospital'=>$hospital,'hospital_detail'=>$hospital_detail,'type'=>$type_h,'level'=>$level_h,'domesticStep'=>$domesticStep,'costs'=>$costs,'service_explain'=>$service_explain,'memberShares'=>$memberShare,'memberComments'=>$memberComment]);
    }
    //>>找医院
    public function actionSearchHospital(){
        return $this->render('search_hospital');
    }
    //>>试管婴儿文章详情页
    public function actionTubeDetail($id)
    {
        $detail = TubeArticleData::find()->where(['id'=>$id])->one();
        $title = TubeArticle::find()->where(['id'=>$id])->one();
        return $this->renderPartial('article_detail',['detail'=>$detail,'title'=>$title]);
    }
    //>>出国看病文章详情页
    public function actionOverseaDetail($id){
        $title =  ArticleOversea::find()->where(['id'=>$id])->one();
        $detail = ArticleOverseaData::find()->where(['id'=>$id])->one();
        return $this->renderPartial('article_detail',['detail'=>$detail,'title'=>$title]);
    }
    //>>出国体检文章详情页
    public function actionCheckDetail($id)
    {
        $title = ArticleHealthcheck::find()->where(['id'=>$id])->one();
        $detail = ArticleHealthcheckData::find()->where(['id'=>$id])->one();
        return $this->renderPartial('article_detail',['detail'=>$detail,'title'=>$title]);
}
    //>>出国生子文章详情页
    public function actionBirthDetail($id){
        $title = ArticleBirth::find()->where(['id'=>$id])->one();
        $detail = ArticleBirthData::find()->where(['id'=>$id])->one();
        return $this->renderPartial('article_detail',['detail'=>$detail,'title'=>$title]);
    }
    //>>方案加入对比
    public function actionAddCompareProject($id){
        $cookie_read = \Yii::$app->request->cookies;
        $cookie_write = \Yii::$app->response->cookies;
        //>>是否添加该方案
        if($cookie_read->has('project')){
            //>>将id存入cookie
            $ids=unserialize($cookie_read->getValue('project'));
            $ids[]=$id;
            //>>跳转到方案对比页
            //var_dump(unserialize($cookie_read->getValue('project')));die;
        }else{
            $ids=[];
            $ids[]=$id;
        }
        $ids = serialize($ids);
        $cookie =new Cookie();
        $cookie->name = 'project';
        $cookie->value =$ids;
        $cookie_write->add($cookie);

        return $this->redirect(['index/compare-detail']);
    }
    //>>对比详情页
    public function actionCompareDetail(){
        $cookie_read = \Yii::$app->request->cookies;
        $ids = unserialize($cookie_read->getValue('project'));
        $program = [];
        $ser_types=[];
        $hospitals=[];
        $hospitals_detail=[];
        $services = [];
        $program_nums=[];
        $hospital_services=[];
        $life_services = [];
        foreach ($ids as $id){
            //>>方案
            $p = Programme::find()->where(['id'=>$id])->one();
            //>>服务类型
            $server_type = ServerType::find()->where(['id'=>$p->sertype_id])->one();
            //>>医院
            $hospital = MemberHospital::find()->where(['hid'=>$p->hospital_id])->one();
            //>>医院详情
            $hospital_detail = HospitalDetails::find()->where(['hospital_id'=>$p->hospital_id])->one();
            //>>服务商
            $service = MemberFacilitator::find()->where(['id'=>$p->service_provid_id])->one();
            //>>服务商项目数量
            $program_num = Programme::find()->where(['service_provid_id'=>$service->id])->count();
            //>>医疗服务
            $hospital_service = TubePakege::find()->where(['programe_id'=>$p->id])->one();
            $service_ids = unserialize($hospital_service->hospital_service) ;
            $hos_services = HospitalProvice::find()->where(['in','id',$service_ids])->all();
            //>>生活服务
            $life_service=TubePakege::find()->where(['programe_id'=>$p->id])->one();
            $life_ids=unserialize($life_service->life_service);
            $lif_services =LifeProvice::find()->where(['in','id',$life_ids])->all();
            $program[]=$p;
            $ser_types[]=$server_type;
            $hospitals[]=$hospital;
            $hospitals_detail[]=$hospital_detail;
            $services[]=$service;
            $program_nums[]=$program_num;
            $hospital_services[]=$hos_services;
            $life_services[] =$lif_services;
        }
       //var_dump($res);die;
        return $this->renderPartial('compare_project',['programs'=>$program,'server_types'=>$ser_types,'hospitals_details'=>$hospitals_detail,'hospitals'=>$hospitals,'services'=>$services,'program_nums'=>$program_nums,'hospital_services'=>$hospital_services,'life_services'=>$life_services]);
    }
    //>>测试函数
    public function actionTest()
    {
        $request = \Yii::$app->request;
        if($request->isPost){


        }
        else{
            if ($request->get()){

                $cookies = \Yii::$app->request->cookies;
                if ($cookies->has("search")){
                    $arr=$cookies->getValue("search");
                    $arr=unserialize($arr);
                    //var_dump($arr);die;
                    foreach ($request->get() as $k=>$v){
                        $arr[$k]=$v;
                        $cookies = \Yii::$app->response->cookies;
                        $cookie = new Cookie();
                        $cookie->name='search';
                        $cookie->value=serialize($arr);
                        $cookies->add($cookie);
                    }
                    $cookie = \Yii::$app->request->cookies;
                    $arr=$cookie->getValue("search");
                    $arr=unserialize($arr);
                    var_dump($arr);
                      $cookies->remove('search');
                    /*   $cookie = \Yii::$app->request->cookies;
                       var_dump($cookie->getValue('search'));*/
                    //>>get搜索条件$arr
                    //将更新的数据保存
                }else{
                    $id=[];//a=>1   b=>2
                    $cookies = \Yii::$app->response->cookies;
                    $cookie = new Cookie();
                    foreach ($request->get() as $k=>$v){
                        $id[$k]=$v;
                    }
                    $cookie->name='search';
                    $cookie->value=serialize($id);
                    $cookies->add($cookie);
                }
            }



        }

          // var_dump($url);


       return $this->render('test');
    }
    public function actionInfo(){
        phpinfo();
    }
    public function actionRedis(){

    }
}