<?php

use yii\db\Migration;

class m171229_032556_alter_menu_table extends Migration
{
/*    public function safeUp()
    {

    }

    public function safeDown()
    {
        echo "m171229_032556_alter_menu_table cannot be reverted.\n";

        return false;
    }*/


    // Use up()/down() to run migration code without a transaction.
    public function up()
    {
        $this->addColumn("menu","parent_id","integer");
    }

    public function down()
    {
        echo "m171229_032556_alter_menu_table cannot be reverted.\n";

        return false;
    }

}
