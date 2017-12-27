<?php

use yii\db\Migration;

class m171225_060935_alter_user_table extends Migration
{
/*    public function safeUp()
    {

    }

    public function safeDown()
    {
        echo "m171225_060935_alter_user_table cannot be reverted.\n";

        return false;
    }*/


    // Use up()/down() to run migration code without a transaction.
    public function up()
    {
           $this->addColumn("user","last_login_time","integer");
           $this->addColumn("user","last_login_ip","string(100)");
    }

    public function down()
    {
        echo "m171225_060935_alter_user_table cannot be reverted.\n";

        return false;
    }

}
