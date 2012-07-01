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


class Controller_SampleRouter extends Controller
{
	public function router($method, $params)
	{
		if ($method === 'abc')
		{
			return $this->action_test($params);
		}
		else
		{
			return $this->action_index($params);
		}
	}
	
	public function before()
	{
		$this->current_user = 'Mio';
	}
	
	public function action_index($params)
	{
		$output = $this->current_user . 'さん、';
		$output .= __METHOD__ . 'が実行されました。<br />';
		$output .= var_export($params, true);
		return $output;
	}
	
	public function action_test($params)
	{
		$output = $this->current_user . 'さん、';
		$output .= __METHOD__ . 'が実行されました。<br />';
		$output .= var_export($params, true);
		return $output;
	}
}
