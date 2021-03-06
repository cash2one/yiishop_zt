<?php

use yii\db\Migration;

/**
 * Handles the creation of table `article-category`.
 */
class m171220_102042_create_article_category_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('article-category', [
            'id' => $this->primaryKey(),
            'name'=>$this->string(50)->notNull()->comment("文章类型"),
            'intro'=>$this->text()->comment("类型介绍"),
            'sort'=>$this->integer(11)->comment("排序"),
            'status'=>$this->integer(2)->comment("状态")
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('article-category');
    }
}
