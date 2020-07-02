<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%user}}`.
 */
class m200702_183122_create_user_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%user}}', [
            'id' => $this->primaryKey(),
            'username' => $this->string(),
            'auth_key' => $this->string(),
            'password_hash' => $this->string(),
            'password_reset_token' => $this->string(),
            'email' => $this->string(),
            'status' => $this->integer(),
            'created_at' => $this->datetime(),
            'updated_at' => $this->datetime()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%user}}');
    }
}
