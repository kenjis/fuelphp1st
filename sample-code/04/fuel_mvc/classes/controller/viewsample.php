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


class Controller_ViewSample extends Controller
{
	public function action_index()
	{
		// ビューに渡す変数
		$data = array();
		
		$data['title']    = 'ビューのサンプル';
		$data['username'] = 'Ritsu';
		
		// Viewオブジェクトを生成して返す
		return View::forge('viewsample', $data);
	}
}
