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

class Model_Form extends \Orm\Model
{
	protected static $_properties = array(
		'id',
		'name',
		'email',
		'comment',
		'ip_address',
		'user_agent',
		'created_at',
		'updated_at',
	);

	protected static $_observers = array(
		'Orm\Observer_CreatedAt' => array(
			'events' => array('before_insert'),
			'mysql_timestamp' => false,
		),
		'Orm\Observer_UpdatedAt' => array(
			'events' => array('before_save'),
			'mysql_timestamp' => false,
		),
	);

	public static function validate($factory)
	{
		$val = Validation::forge($factory);
		$val->add_field('name', 'Name', 'required|max_length[50]');
		$val->add_field('email', 'Email', 'required|valid_email|max_length[100]');
		$val->add_field('comment', 'Comment', 'required|max_length[400]');
		$val->add_field('ip_address', 'Ip Address', 'required|max_length[39]');
		$val->add_field('user_agent', 'User Agent', 'required|max_length[512]');

		return $val;
	}

}
