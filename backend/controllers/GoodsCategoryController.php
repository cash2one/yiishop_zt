<?php
namespace backend\controllers;



use backend\models\GoodsCategory;
use yii\data\Pagination;
use yii\helpers\Json;
use yii\web\Controller;
use yii\web\Request;

class GoodsCategoryController extends Controller{

    /**
     * 显示列表首页
     *
     */
    public function actionIndex(){
        //获取表中所有的数据
        $query=GoodsCategory::find();
        //设定页数
        $pager=new Pagination([
            "defaultPageSize"=>9,
            "totalCount"=>$query->count(),

        ]);
        //获取列表显示的记录
        $rows=$query->limit($pager->limit)->offset($pager->offset)->all();
        //将id和name对应关系保存在数组中
        $arr=[];
        foreach ($rows as $row){
            $arr[$row->id]=$row->name;
        }

        //显示页面
        return $this->render("index",["rows"=>$rows,"arr"=>$arr,"pager"=>$pager]);

    }



    //添加数据
    public function actionAdd(){
        //实列化Request
        $request=new Request();
        //实列化Goods_category
       $model = new GoodsCategory();
        //判断是否是post提交
        if ($request->isPost){
            //加载数据
            $model->load($request->post());
           //判断是否是创建父类
            if ($model->parent_id==0){
                $model->makeRoot();

            }else{
                //获取父类的模型
                $parent=GoodsCategory::findOne(["id"=>$model->parent_id]);
                $model->appendTo($parent);
            }
            //验证数据
            if ($model->validate()){
                //保存数据
                $model->save();
                //提示成功信息
                \Yii::$app->session->setFlash("success","添加成功");
                //跳转
                return $this->redirect(["goods-category/index"]);


            }

        }
        //显示添加页面
        return $this->render("add",["model"=>$model]);
    }

    /**
     * 修改数据
     */

    public function actionEdit($id){
        //实列化Request类
        $request=new Request();
        //实列化GoodsCategory
        $model=GoodsCategory::findOne(["id"=>$id]);
        //获取没修改之前的父id
        $parent_id=$model->parent_id;
        //判断是否是post提交
        if ($request->post()){
            //加载数据
            $model->load($request->post());

            //验证数据
            if ($model->validate()){
                //判断是否是创建父类
                if ($model->parent_id==0){
                    //顶级分类不能修改为顶级分类
                    if ($parent_id!=0){
                        $model->makeRoot();
                    }
                }else{
                    //获取父类的模型
                    $parent=GoodsCategory::findOne(["id"=>$model->parent_id]);
                    $model->appendTo($parent);
                }
                //保存数据
                $model->save();
                //提示成功信息
                \Yii::$app->session->setFlash("success","修改成功");
                //跳转
                return $this->redirect(["goods-category/index"]);


            }



        }
        //显示修改页面
        return $this->render("edit",["model"=>$model]);
    }

    /**
     * 删除数据
     */

    public function actionDelete($id){
             //根据id获取数据
        $model=GoodsCategory::findOne(["id"=>$id]);
        //判断该记录下是不是有子分类
        if (GoodsCategory::findOne(["parent_id"=>$id])){
             echo Json::encode(["msg"=>"此分类有子类,请先删除子分类"]);
        }else{
            $model->delete();
            //返回首页
            return $this->redirect(["goods-category/index"]);
        };


    }
    /**
     * 测试zTree
     */
    public function actionShow(){

        return $this->renderPartial("show");

    }


}