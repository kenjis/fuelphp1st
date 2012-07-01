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


/**
 * Model Form class Tests
 * 
 * @group App
 */
class Test_Model_Form extends DbTestCase
{

	protected $tables = array(
					// テーブル名 => YAMLファイル名
					'form' => 'form',
				);
	
	public function test_find_one_by_id()
	{
		foreach ($this->form_fixt as $row)
		{
			$form = Model_Form::find_one_by_id($row['id']);
			
			foreach ($row as $field => $value)
			{
				$test = $form->$field;
				$expected = $row[$field];
				$this->assertEquals($expected, $test);
			}
		}
	}
}
