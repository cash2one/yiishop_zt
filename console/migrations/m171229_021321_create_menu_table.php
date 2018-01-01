<?php

use yii\db\Migration;

/**
 * Handles the creation of table `menu`.
 */
class m171229_021321_create_menu_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('menu', [
            'id' => $this->primaryKey(),
            'name'=>$this->string(50)->notNull()->comment("菜单名称"),
            'menu'=>$this->string(50)->notNull()->comment("上级菜单"),
            'url'=>$this->string(50)->notNull()->comment("路由"),
            'sn'=>$this->string(50)->notNull()->comment("排序"),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('menu');
    }
}
