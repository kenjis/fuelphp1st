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


class DbFixture
{
	// フィクスチャファイルの形式
	protected static $file_type = 'yaml';
	protected static $file_ext  = 'yml';
	
	public static function load($table, $file)
	{
		$fixt_name = $file . '_fixt';
		$file_name = $fixt_name . '.' . static::$file_ext;
		$fixt_file = APPPATH . 'tests/fixture/' . $file_name;
		
		if ( ! file_exists($fixt_file))
		{
			exit('No such file: ' . $fixt_file . PHP_EOL);
		}
		
		// フィクスチャファイルを読み込んで配列に変換
		$data = file_get_contents($fixt_file);
		$data = Format::forge($data, static::$file_type)->to_array();
		
		// テーブルのデータを削除
		static::empty_table($table);
		
		// フィクスチャデータの挿入
		foreach ($data as $row)
		{
			list($insert_id, $rows_affected) = 
				DB::insert($table)->set($row)->execute();
		}
		
		$ret = Log::info(
			'Table Fixture ' . $file_name . ' -> ' . $fixt_name . ' loaded',
			__METHOD__
		);
		
		return $data;
	}
	
	// テーブルのデータを削除
	protected static function empty_table($table)
	{
		if (DBUtil::table_exists($table))
		{
			DBUtil::truncate_table($table);
		}
		else
		{
			exit('No such table: ' . $table . PHP_EOL);
		}
	}
}
