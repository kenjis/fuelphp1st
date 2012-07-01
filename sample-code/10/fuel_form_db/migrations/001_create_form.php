<?php
/**
 * 電子書籍『はじめてのフレームワークとしてのFuelPHP』の一部です。
 *
 * @version    1.0
 * @author     Kenji Suzuki <https://github.com/kenjis>
 * @license    MIT License
 * @copyright  2012 Kenji Suzuki
 * @link       https://github.com/kenjis/fuelphp1st
 */


namespace Fuel\Migrations;

class Create_form
{
	public function up()
	{
		\DBUtil::create_table('form', array(
			'id' => array('constraint' => 11, 'type' => 'int', 'auto_increment' => true),
			'name' => array('constraint' => 50, 'type' => 'varchar'),
			'email' => array('constraint' => 100, 'type' => 'varchar'),
			'comment' => array('constraint' => 400, 'type' => 'varchar'),
			'ip_address' => array('constraint' => 39, 'type' => 'varchar'),
			'user_agent' => array('constraint' => 512, 'type' => 'varchar'),
			'created_at' => array('constraint' => 11, 'type' => 'int'),
			'updated_at' => array('constraint' => 11, 'type' => 'int'),

		), array('id'));
	}

	public function down()
	{
		\DBUtil::drop_table('form');
	}
}
