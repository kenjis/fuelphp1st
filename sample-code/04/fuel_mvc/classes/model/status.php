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


class Model_Status extends Model
{
	public static function find_body_by_username($username)
	{
		// 本来は、例えば、データベースを検索して結果を返す
		
		$data = array(
			array(
				'date' => '2012/04/08 12:33',
				'body' => 'イースターなう',
			),
			array(
				'date' => '2012/04/08 07:52',
				'body' => '花祭りなう',
			),
		);
		
		return $data;
	}
}
