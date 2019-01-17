<?php

use yii\db\Migration;

/**
 * Handles the creation of table `article`.
 */
class m190108_091947_create_article_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('article', [
            'id' => $this->primaryKey(),
            'title' => $this->string()->notNull(),
            'description' => $this->text(),
            'content' => $this->text()->notNull(),
            'date' => $this->date(),
            'image' => $this->string(),
            'viewed' => $this->integer()->notNull()->defaultValue(0),
            'user_id' => $this->integer(),
            'status' => $this->integer(),
            'category_id' => $this->integer(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('article');
    }
}
