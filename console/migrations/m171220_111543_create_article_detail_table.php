<?php

use yii\db\Migration;

/**
 * Handles the creation of table `article-detail`.
 */
class m171220_111543_create_article_detail_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('article-detail', [
            'article_id' => $this->primaryKey(),
            'content'=>$this->text()->comment("文章详情")
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('article-detail');
    }
}
