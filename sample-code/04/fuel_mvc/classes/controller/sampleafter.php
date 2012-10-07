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


class Controller_SampleAfter extends Controller
{
	public function after($response)
	{
		$response .= __METHOD__ . 'が実行されました。<br />';
		return parent::after($response);
	}
	
	public function action_index()
	{
		return __METHOD__ . 'が実行されました。<br />';
	}
	
	public function action_test()
	{
		return __METHOD__ . 'が実行されました。<br />';
	}
}
