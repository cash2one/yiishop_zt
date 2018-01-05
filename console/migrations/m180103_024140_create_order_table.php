<?php

use yii\db\Migration;

/**
 * Handles the creation of table `order`.
 */
class m180103_024140_create_order_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('order', [
            'id' => $this->primaryKey(),
            'username'=>$this->string(30)->notNull(),
            'cmbProvince'=>$this->string(30)->notNull(),
            'cmbCity'=>$this->string(30)->notNull(),
            'cmbArea'=>$this->string(30)->notNull(),
            'address'=>$this->string(50)->notNull(),
            'phone'=>$this->string(50)->notNull(),
            'status'=>$this->integer(3)->notNull(),

        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('order');
    }
}
