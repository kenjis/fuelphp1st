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


class Controller_Public extends Controller_Template
{
	public function before()
	{
		parent::before();
		$this->response = new Response();
		$this->response->set_header('X-FRAME-OPTIONS', 'SAMEORIGIN');
	}
	
	public function after($response)
	{
		$response = $this->response;
		$response->body = $this->template;
		return parent::after($response);
	}
}
