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


require './person.php';

// テストケースクラスはPHPUnit_Framework_TestCaseを継承する
class Person_Test extends PHPUnit_Framework_TestCase
{
	// テストメソッド名はtestで始める
	public function test_get_gender()
	{
		$person = new Person('Rintaro', 'male', '1991/12/14');
		
		$test = $person->get_gender();
		$expected = 'male';
		
		// 期待される結果とテスト結果が一致するか
		$this->assertEquals($expected, $test);
	}
}
