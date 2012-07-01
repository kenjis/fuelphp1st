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
* MyValidationRules class Tests
*
* @group App
*/
class Test_MyValidationRules extends TestCase
{
	public function test_validation_no_tab_and_newline_valid()
	{
		$input = 'タブも改行も含まない文字列です。';
		$test = MyValidationRules::_validation_no_tab_and_newline($input);
		$expected = true;
		
		$this->assertEquals($expected, $test);		
	}
	
	/**
	* @dataProvider invalid_data_provider
	*/
	public function test_validation_no_tab_and_newline_invalid($input)
	{
		$test = MyValidationRules::_validation_no_tab_and_newline($input);
		$expected = false;
		
		$this->assertEquals($expected, $test);		
	}
	
	public function invalid_data_provider()
	{
		return array(
			array("改行を含む\n文字列です。"),
			array("改行を含む\r文字列です"),
			array("改行を含む\r\n文字列です。"),
			array("タブを含む\t文字列です。"),
			array("改行と\rタブを含む\t文字列\nです。"),
		);
	}
}
