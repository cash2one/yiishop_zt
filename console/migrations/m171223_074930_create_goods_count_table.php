<?php

use yii\db\Migration;

/**
 * Handles the creation of table `goods_count`.
 */
class m171223_074930_create_goods_count_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('goods_count', [
            'day'=>$this->date()->notNull()->comment("日期"),
            'count'=>$this->integer()->notNull()->defaultValue(0)->comment("添加数量")
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('goods_count');
    }
}
