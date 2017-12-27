<?php

use yii\db\Migration;

/**
 * Class m171227_092554_tabla_rol
 */
class m171227_092554_tabla_rol extends Migration
{
    /**
     * @inheritdoc
     */
   /* public function safeUp()
    {

    }
    */
    /**
     * @inheritdoc
     */
   /* public function safeDown()
    {
        echo "m171227_092554_tabla_rol cannot be reverted.\n";

        return false;
    }
    */
    
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

        $tableOptions = null;
        if($this->db->driverName === 'mysql'){
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }
        
        $this->createTable('rol',[
            'id' => 'INT(10) unsigned auto_increment PRIMARY KEY',
            'nombre' => 'VARCHAR(32) ',
            
        ],$tableOptions);
        
         
    }

    public function down()
    {
        $this->dropTable('rol');
    }
    
}
