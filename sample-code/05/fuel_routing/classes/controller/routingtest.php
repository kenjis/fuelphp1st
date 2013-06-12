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


class Controller_RoutingTest extends Controller
{
	public function router($resource, $arguments)
	{
		// Debug::dump()の表示をはじめから開く
		Debug::$js_toggle_open = true;
		
		// ルート情報を表示
		Debug::dump($this->request->route);
		// 名前付きパラメータの一覧を表示
		Debug::dump($this->params());
		
		return '';
	}
}
