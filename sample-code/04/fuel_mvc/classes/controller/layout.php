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


class Controller_Layout extends Controller_Template
{
	public function before()
	{
		// 必ず親クラスのbefore()メソッドを実行する
		parent::before();
		
		$this->current_user = 'Sawako';
	}
	
	public function action_index()
	{
		// ビューファイル全体に$titleをセットする
		$this->template->set_global('title', 'レイアウト機能のサンプル');
		
		$data = array('user' => $this->current_user);
		
		$this->template->content = View::forge('layout/index', $data);
		$this->template->footer  = View::forge('layout/footer');
	}
}
