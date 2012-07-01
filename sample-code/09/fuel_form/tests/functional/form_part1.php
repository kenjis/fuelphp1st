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
* Contact Form Functional Tests
*
* @group Functional
*/
class Test_Functional_Form extends FunctionalTestCase
{	
	public function test_入力ページにアクセス()
	{
		try
		{
			static::$crawler = static::$client->request('GET', static::open('form'));
		}
		catch (Exception $e)
		{
			echo $e->getMessage(), PHP_EOL, 'Error: レスポンスエラーです。', PHP_EOL;
			exit;
		}
		
		//var_dump(static::$client->getResponse()->getContent());
		//exit;
		
		$this->assertNotNull(static::$crawler);
	}
}
