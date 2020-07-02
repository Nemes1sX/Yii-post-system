<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%comments}}`.
 */
class m200702_180841_create_comments_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%comments}}', [
            'id' => $this->primaryKey(),
            'user_id' => $this->integer()->notNull(),
            'comment' => $this->text()->notNull(),
            'created_at' => $this->dateTime(),
            'update_at' => $this->dateTime(),
        ]);
        $this->createIndex(
            'idx-comments-user_id',
            'comments',
            'user_id'
        );
        $this->addForeignKey(
            'fk-comments-user_id',
            'comments',
            'user_id',
            'user',
            'id',
            'CASCADE'
        );
    }

   
    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropIndex(
            'idx-post-user_id',
            'comments'
        );

        $this->dropForeignKey(
            'fk-post-user_id',
            'comments'
        );

        $this->dropTable('{{%comments}}');
    }
}
