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

class Controller_Admin_Form extends Controller_Admin 
{

	public function action_index()
	{
		$data['forms'] = Model_Form::find(
				'all',
				array('order_by' => array('created_at' => 'desc'))
		);
		$this->template->title = "問い合わせ";
		$this->template->content = View::forge('admin/form/index', $data);

	}

	public function action_view($id = null)
	{
		$data['form'] = Model_Form::find($id);

		$this->template->title = "問い合わせ";
		$this->template->content = View::forge('admin/form/view', $data);

	}

	public function action_create()
	{
		throw new HttpNotFoundException;
		
		if (Input::method() == 'POST')
		{
			$val = Model_Form::validate('create');
			
			if ($val->run())
			{
				$form = Model_Form::forge(array(
					'name' => Input::post('name'),
					'email' => Input::post('email'),
					'comment' => Input::post('comment'),
					'ip_address' => Input::post('ip_address'),
					'user_agent' => Input::post('user_agent'),
				));

				if ($form and $form->save())
				{
					Session::set_flash('success', 'Added form #'.$form->id.'.');

					Response::redirect('admin/form');
				}

				else
				{
					Session::set_flash('error', 'Could not save form.');
				}
			}
			else
			{
				Session::set_flash('error', $val->show_errors());
			}
		}

		$this->template->title = "Forms";
		$this->template->content = View::forge('admin/form/create');

	}

	public function action_edit($id = null)
	{
		throw new HttpNotFoundException;
		
		$form = Model_Form::find($id);
		$val = Model_Form::validate('edit');

		if ($val->run())
		{
			$form->name = Input::post('name');
			$form->email = Input::post('email');
			$form->comment = Input::post('comment');
			$form->ip_address = Input::post('ip_address');
			$form->user_agent = Input::post('user_agent');

			if ($form->save())
			{
				Session::set_flash('success', 'Updated form #' . $id);

				Response::redirect('admin/form');
			}

			else
			{
				Session::set_flash('error', 'Could not update form #' . $id);
			}
		}

		else
		{
			if (Input::method() == 'POST')
			{
				$form->name = $val->validated('name');
				$form->email = $val->validated('email');
				$form->comment = $val->validated('comment');
				$form->ip_address = $val->validated('ip_address');
				$form->user_agent = $val->validated('user_agent');

				Session::set_flash('error', $val->show_errors());
			}
			
			$this->template->set_global('form', $form, false);
		}

		$this->template->title = "Forms";
		$this->template->content = View::forge('admin/form/edit');

	}

	public function action_delete($id = null)
	{
		throw new HttpNotFoundException;
		
		if ($form = Model_Form::find($id))
		{
			$form->delete();

			Session::set_flash('success', 'Deleted form #'.$id);
		}

		else
		{
			Session::set_flash('error', 'Could not delete form #'.$id);
		}

		Response::redirect('admin/form');

	}


}
