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


// PHPのmail()関数をオーバーライド
namespace Email;

function mail($to, $subject, $message, $additional_headers, $additional_parameters)
{
	$data = array(
		'to'                    => $to,
		'subject'               => $subject,
		'message'               => $message,
		'additional_headers'    => $additional_headers,
		'additional_parameters' => $additional_parameters,
	);
	
	\Config::set('_tests.mail.data', $data);
	
	return true;
}
