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


require './hello.php';

function assertTrue($condition)
{
	if ( ! $condition) {
		throw new Exception('Assertion failed.');
	}
}

$test = hello();
$expected = 'Hello World!';
assertTrue($test === $expected);
