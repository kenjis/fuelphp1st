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


class Controller_DebugSample extends Controller
{
	public function action_index()
	{
		$output = '';
		
		for ($i = 0; $i < 10; $i++) {
			$output .= $this->process($i);
		}
		
		return $output;
	}

	public function process($arg)
	{
		$val = 2 * $arg;
		return '2×' . $arg . ' は ' . $val . ' です。<br />';
	}
}
