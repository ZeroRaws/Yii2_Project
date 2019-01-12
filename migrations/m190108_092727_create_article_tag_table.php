<?php

use yii\db\Migration;

/**
 * Handles the creation of table `article_tag`.
 */
class m190108_092727_create_article_tag_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('article_tag', [
            'id' => $this->primaryKey(),
            'article_id' => $this->integer(),
            'tag_id' => $this->integer(),
        ]);
        
        $this->createIndex(
            'tag_article_article_id',
            'article_tag',
            'article_id'
        );
        
        $this->addForeignKey(
            'tag_article_article_id',
            'article_tag',
            'article_id',
            'article',
            'id',
            'CASCADE'
        );
        
        $this->createIndex(
            'idx-tag-id',
            'article_tag',
            'tag_id'
        );
        
        $this->addForeignKey(
            'fk-tag-id',
            'article_tag',
            'tag_id',
            'tag',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('article_tag');
    }
}
