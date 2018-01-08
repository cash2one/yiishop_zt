<?php

use yii\db\Migration;

/**
 * Handles the creation of table `ddan_goods`.
 */
class m180106_025824_create_ddan_goods_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('ddan_goods', [
            'id' => $this->primaryKey(),
            'order_id'=>$this->integer()->notNull(),
            'goods_id'=>$this->integer()->notNull(),
            'goods_name'=>$this->string(255)->notNull(),
            'logo'=>$this->string(255)->notNull(),
            'price'=>$this->decimal(20,2)->notNull(),
            'amount'=>$this->integer()->notNull(),
            'total'=>$this->decimal(20,2)->notNull(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('ddan_goods');
    }
}
