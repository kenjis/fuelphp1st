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

class Person_Test3 extends PHPUnit_Framework_TestCase
{
	/**
	* @dataProvider person_provider
	*/
	public function test_gender_age($name, $gender, $birthdate)
	{
		$person = new Person($name, $gender, $birthdate);
		
		$test = $person->get_gender();
		$expected = $gender;
		
		$this->assertEquals($expected, $test);
	}
	
	public function person_provider()
	{
		return array(
			array('Rintaro', 'male',   '1991/12/14'),
			array('Mayuri',  'female', '1994/2/1'),
			array('Suzuha',  'female', '2017/9/27'),
		);
	}
}
