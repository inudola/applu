<?php

use yii\db\Migration;

/**
 * Class m181115_090914_create_column_auth_key_user
 */
class m181115_090914_create_column_auth_key_user extends Migration
{

    public function up()
    {
        $this->addColumn('user', 'auth_key', $this->string(60)->notNull()->unique()->after('contact_phone'));
    }
    public function down()
    {
        $this->dropColumn('user', 'auth_key');
    }
    /*
// Use safeUp/safeDown to run migration code within a transaction
public function safeUp()
{
}
public function safeDown()
{
}
 */
}
