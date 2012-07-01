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


class Controller_Showfile extends Controller
{
	public function action_index()
	{
		// ファイル名を指定
		$file = DOCROOT . 'show_file.php';
		
		// ファイルの中身を代入
		$content = file_get_contents($file);
		
		// Viewオブジェクトを生成
		$view = View::forge('showfile');
		
		// ビューにtitleをセット
		$view->set('title', 'ファイル表示プログラム');
		// ビューにcontentをセット
		$view->set('content', $content);
		
		// Viewオブジェクトを返す
		return $view;
	}
}
