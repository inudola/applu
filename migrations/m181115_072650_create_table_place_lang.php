<?php

use yii\db\Migration;

/**
 * Class m181115_072650_create_table_place_lang
 */
class m181115_072650_create_table_place_lang extends Migration
{
    // /**
    //  * {@inheritdoc}
    //  */
    // public function safeUp()
    // {

    // }

    // /**
    //  * {@inheritdoc}
    //  */
    // public function safeDown()
    // {
    //     echo "m181115_072650_create_table_place_lang cannot be reverted.\n";

    //     return false;
    // }

    // Use up()/down() to run migration code without a transaction.
    public function up()
    {
        //Membuat tabel dengan nama "place_lang"
        $this->createTable('place_lang', [
            'id' => $this->primaryKey(10)->unsigned(),
            'place_id' => $this->integer(11)->unsigned()->notNull(),
            'locality' => $this->string(45)->notNull(),
            'country' => $this->string(45)->notNUll(),
            'lang' => $this->string(2)->notNUll(),
        ]);
        //Membuat Index
        $this->createIndex(
            'idx_place_lang_place_id_place',
            'place_lang',
            'place_id'
        );
        //Membuat ForeignKey
        $this->addForeignKey(
            'fk_place_lang_place_id_place',
            'place_lang',
            'place_id',
            'place',
            'id',
            'restrict',
            'cascade'
        );
    }

    public function down()
    {
        //Menghapus Table, Index & ForeignKey
        $this->dropForeignKey('fk_place_lang_place_id_place','place_lang');
        $this->dropIndex('idx_place_lang_place_id_place','place_lang');
        $this->dropTable('place_lang');
    }

}
