<?php

use yii\db\Migration;

/**
 * Handles the creation of table `atricle_tag`.
 */
class m190118_130710_create_atricle_tag_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('atricle_tag', [
            'id' => $this->primaryKey(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('atricle_tag');
    }
}
