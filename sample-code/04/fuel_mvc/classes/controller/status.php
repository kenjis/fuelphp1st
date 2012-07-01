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


class Controller_Status extends Controller
{
	public function action_index()
	{
		// Statusモデルから結果を取得する
		$results = Model_Status::find_body_by_username('foo');
		
		// $resultsをダンプして確認する
		Debug::dump($results);
		
		return ''; // 返り値がないとエラーになるため
	}
}
