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
		// 実行時間の計測ポイント 
		Profiler::mark('indexアクションの開始');
		
		$file = DOCROOT . 'show_file.php';
		$content = file_get_contents($file);
		
		$title = 'ファイル表示プログラム';
		
		$view = View::forge('showfile');
		$view->set('title', $title);
		$view->set('content', $content);
		
		// 実行時間の計測ポイント
		Profiler::mark('indexアクションの終了');
		
		return $view;
	}
}
