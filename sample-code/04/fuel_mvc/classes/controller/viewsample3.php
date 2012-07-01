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


class Controller_ViewSample3 extends Controller
{
	public function action_index()
	{
		// Viewオブジェクトを生成する
		$view = View::forge('viewsample');
		
		// Viewに変数をセットする
		$view->set('title', 'ビューのサンプル3');
		$view->set_safe('username', '<del>Azunyan</del>Azusa');
		
		// Viewオブジェクトを返す
		return $view;
	}
}
