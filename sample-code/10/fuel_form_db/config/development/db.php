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

/**
 * The development database settings.
 */

return array(
	'default' => array(
		'connection'  => array(
			'hostname'   => 'localhost',
			'port'       => '3306',
			'database'   => 'fuel_db_devel',
			'username'   => 'username',
			'password'   => 'password',
		),
	),
);
