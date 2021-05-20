<?php

namespace Fuel\Migrations;

class Create_okashis
{
	public function up()
	{
		\DBUtil::create_table('okashis', array(
			'id' => array('type' => 'int', 'unsigned' => true, 'null' => false, 'auto_increment' => true, 'constraint' => '11'),
			'name1' => array('constraint' => '255', 'null' => false, 'type' => 'varchar'),
			'img1' => array('constraint' => '255', 'null' => false, 'type' => 'varchar'),
			'name2' => array('constraint' => '255', 'null' => false, 'type' => 'varchar'),
			'img2' => array('constraint' => '255', 'null' => false, 'type' => 'varchar'),
			'taste' => array('constraint' => '11', 'null' => false, 'type' => 'int'),
			'price' => array('constraint' => '11', 'null' => false, 'type' => 'int'),
			'surprise' => array('constraint' => '11', 'null' => false, 'type' => 'int'),
			'comment' => array('type' => 'text'),
			'created_at' => array('constraint' => '11', 'null' => true, 'type' => 'int', 'unsigned' => true),
			'updated_at' => array('constraint' => '11', 'null' => true, 'type' => 'int', 'unsigned' => true),
		), array('id'));
	}

	public function down()
	{
		\DBUtil::drop_table('okashis');
	}
}
