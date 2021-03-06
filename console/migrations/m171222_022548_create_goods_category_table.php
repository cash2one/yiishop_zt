<?php

use yii\db\Migration;

/**
 * Handles the creation of table `goods-category`.
 */
class m171222_022548_create_goods_category_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('goods-category', [
            'id' => $this->primaryKey(),
            'tree'=>$this->integer()->comment("树id"),
            'lft'=>$this->integer()->comment("左值"),
            'rgt'=>$this->integer()->comment("右值"),
            'depth'=>$this->integer()->comment("层级"),
            'name'=>$this->string(50)->comment("名称"),
            'parent_id'=>$this->integer()->comment("父id"),
            'intro'=>$this->text()->comment("简介"),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('goods-category');
    }
}
