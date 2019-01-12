<?php

use yii\db\Migration;

/**
 * Handles the creation of table `comment`.
 */
class m190108_092641_create_comment_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('comment', [
            'id' => $this->primaryKey(),
            'text' => $this->string(),
            'user_id' => $this->integer(),
            'article_id' => $this->integer(),
            'status' => $this->integer(),
        ]);
        
        $this->createIndex(
            'idx-post-user-id',
            'comment',
            'user_id'
        );
        
        $this->addForeignKey(
            'fk-post-user-id',
            'comment',
            'user_id',
            'user',
            'id',
            'CASCADE'
        );
        
        $this->createIndex(
            'idx-article-id',
            'comment',
            'article_id'
        );
        
        $this->addForeignKey(
            'fk-article-id',
            'comment',
            'article_id',
            'article',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('comment');
    }
}
