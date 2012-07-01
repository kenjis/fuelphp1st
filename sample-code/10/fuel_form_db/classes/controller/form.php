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


class Controller_Form extends Controller_Public
{
	public function action_index()
	{
		$form = $this->get_form();
		
		if (Input::method() === 'POST')
		{
			$form->repopulate();
		}
		
		$this->template->title = 'コンタクトフォーム';
		$this->template->content = View::forge('form/index');
		$this->template->content->set_safe('html_form', $form->build('form/confirm'));
	}
	
	// フォームの定義
	public function get_form()
	{
		$form = Fieldset::forge();
		
		$form->add('name', '名前')
			->add_rule('trim')
			->add_rule('required')
			->add_rule('no_tab_and_newline')
			->add_rule('max_length', 50);
		
		$form->add('email', 'メールアドレス')
			->add_rule('trim')
			->add_rule('required')
			->add_rule('no_tab_and_newline')
			->add_rule('max_length', 100)
			->add_rule('valid_email');
		
		$form->add('comment', 'コメント', 
					array('type' => 'textarea', 'cols' => 70, 'rows' => 6))
			->add_rule('required')
			->add_rule('max_length', 400);
		
		$form->add('submit', '', array('type'=>'submit', 'value' => '確認'));
		
		return $form;
	}
	
	public function action_confirm()
	{
		$form = $this->get_form();
		$val  = $form->validation()->add_callable('MyValidationRules');
		
		if ($val->run())
		{
			$data['input'] = $val->validated();
			$this->template->title = 'コンタクトフォーム: 確認';
			$this->template->content = View::forge('form/confirm', $data);
		}
		else
		{
			$form->repopulate();
			$this->template->title = 'コンタクトフォーム: エラー';
			$this->template->content = View::forge('form/index');
			$this->template->content->set_safe('html_error', $val->show_errors());
			$this->template->content->set_safe('html_form', $form->build('form/confirm'));
		}
	}
	
	public function action_send()
	{
		// CSRF対策
		if ( ! Security::check_token())
		{
			return 'ページ遷移が正しくありません。';
		}
		
		$form = $this->get_form();
		$val  = $form->validation()->add_callable('MyValidationRules');
		
		if ( ! $val->run())
		{
			$form->repopulate();
			$this->template->title = 'コンタクトフォーム: エラー';
			$this->template->content = View::forge('form/index');
			$this->template->content->set_safe('html_error', $val->show_errors());
			$this->template->content->set_safe('html_form', $form->build('form/confirm'));
			return;
		}
		
		$post = $val->validated();
		$post['ip_address'] = Input::ip();
		$post['user_agent'] = Input::user_agent();
		unset($post['submit']);
		
		// データベースへ保存
		$model_form = Model_Form::forge()->set($post);
		list($id, $rows) = $model_form->save();
		
		if ($rows != 1)
		{
			Log::error('データベース保存エラー', __METHOD__);
			
			$form->repopulate();
			$this->template->title = 'コンタクトフォーム: サーバエラー';
			$this->template->content = View::forge('form/index');
			$html_error = '<p>サーバでエラーが発生しました。</p>';
			$this->template->content->set_safe('html_error', $html_error);
			$this->template->content->set_safe('html_form', $form->build('form/confirm'));
			return;
		}
		
		// メールの送信
		try
		{
			$mail = new Model_Mail();
			$mail->send($post);
			$this->template->title = 'コンタクトフォーム: 送信完了';
			$this->template->content = View::forge('form/send');
			return;
		}
		catch (EmailValidationFailedException $e)
		{
			Log::error(
				'メール検証エラー: ' . $e->getMessage(), __METHOD__
			);
			$html_error = '<p>メールアドレスに誤りがあります。</p>';
		}
		catch (EmailSendingFailedException $e)
		{
			Log::error(
				'メール送信エラー: ' . $e->getMessage(), __METHOD__
			);
			$html_error = '<p>メールを送信できませんでした。</p>';
		}
		
		$form->repopulate();
		$this->template->title = 'コンタクトフォーム: 送信エラー';
		$this->template->content = View::forge('form/index');
		$this->template->content->set_safe('html_error', $html_error);
		$this->template->content->set_safe('html_form', $form->build('form/confirm'));
	}
}
