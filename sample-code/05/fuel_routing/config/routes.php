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

return array(
	'_root_'  => 'welcome/index',  // The default route
	'_404_'   => 'welcome/404',    // The main 404 route
	
	//'hello(/:name)?' => array('welcome/hello', 'name' => 'hello'),
	
	// 正規表現によるルーティング
	'blog/(:any)'       => 'routingtest/entry/$1',  // (1)
	'(:segment)/about'  => 'routingtest/about/$1',  // (2)
	'([0-9]{3})/detail' => 'routingtest/id/$1',     // (3)
	
	// 名前付きパラメータによるルーティング
	'cal/:year/:month/:day/:any' => 'welcome/404',      // (4)
	'cal/:year/:month/:day'      => 'routingtest/cal',  // (5)
	'cal/:year/:month'           => 'routingtest/cal',  // (6)
	'cal/:year'                  => 'routingtest/cal',  // (7)
	
	// HTTPメソッドによるルーティング
	'api/(:any)' => array(
		array('GET',  new Route('routingtest/get/$1')),
		array('POST', new Route('routingtest/post/$1'))
	),  // (8)
	
	// 名前付きルート
	'dashboard' => array('admin/index', 'name' => 'admin'),  // (9)
);
