<?php

use yii\db\Migration;

/**
 * Handles the creation of table `ddan`.
 */
class m180106_024044_create_ddan_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('ddan', [
            'id' => $this->primaryKey(),
            'member_id'=>$this->integer()->notNull(),
            'name'=>$this->string(50)->notNull(),
            'province'=>$this->string(20)->notNull(),
            'city'=>$this->string(20)->notNull(),
            'area'=>$this->string(20)->notNull(),
            'address'=>$this->string(255)->notNull(),
            'tel'=>$this->string(11)->notNull(),
            'delivery_id'=>$this->integer()->notNull(),
            'delivery_name'=>$this->string()->notNull(),
            'delivery_price'=>$this->float()->notNull(),
            'payment_id'=>$this->integer()->notNull(),
            'payment_name'=>$this->string()->notNull(),
            'total'=>$this->decimal()->notNull(),
            'status'=>$this->integer()->notNull(),
            'trade_no'=>$this->string()->notNull(),
            'create_time'=>$this->integer()->notNull(),

        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('ddan');
    }
}
