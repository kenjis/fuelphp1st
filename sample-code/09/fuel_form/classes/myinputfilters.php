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


class MyInputFilters
{
	// 文字エンコーディングの検証フィルタ
	public static function check_encoding($value)
	{
		// 配列の場合は再帰的に処理
		if (is_array($value))
		{
			array_map(array('MyInputFilters', 'check_encoding'), $value);
			return $value;
		}
		
		// 文字エンコーディングを検証
		if (mb_check_encoding($value, Fuel::$encoding))
		{
			return $value;
		}
		else
		{
			// エラーの場合はログに記録
			static::log_error('Invalid character encoding', $value);
			// エラーを表示して終了
			throw new HttpInvalidInputException('Invalid input data');
		}
	}
	
	// 改行コードとタブを除く制御文字が含まれないかの検証フィルタ
	public static function check_control($value)
	{
		// 配列の場合は再帰的に処理
		if (is_array($value))
		{
			array_map(array('MyInputFilters', 'check_control'), $value);
			return $value;
		}
		
		// 改行コードとタブを除く制御文字が含まれないか
		if (preg_match('/\A[\r\n\t[:^cntrl:]]*\z/u', $value) === 1)
		{
			return $value;
		}
		else
		{
			// 含まれている場合はログに記録
			static::log_error('Invalid control characters', $value);
			// エラーを表示して終了
			throw new HttpInvalidInputException('Invalid input data');
		}
	}
	
	// エラーをログに記録
	public static function log_error($msg, $value)
	{
		Log::error(
			$msg . ': ' . Input::uri() . ' ' . urlencode($value) . ' ' .
			Input::ip() . ' "' . Input::user_agent() . '"'
		);
	}
}
