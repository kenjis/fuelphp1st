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


class Controller_SampleBefore extends Controller
{
	public function before()
	{
		// 例えば、認証済みでなかったらログインページへ飛ばす
		// 認証済みなら、ユーザ名をプロパティにセットする
		$this->current_user = 'Yui';
	}
	
	public function action_index()
	{
		$output = $this->current_user . 'さん、' .
					__METHOD__ . 'が実行されました。<br />';
		return $output;
	}
	
	public function action_test()
	{
		$output = $this->current_user . 'さん、' .
					__METHOD__ . 'が実行されました。<br />';
		return $output;
	}
}
