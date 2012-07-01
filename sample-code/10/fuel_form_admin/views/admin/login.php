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


	<?php if (isset($_GET['destination'])): ?>
		<?php echo Form::hidden('destination',$_GET['destination']); ?>
	<?php endif; ?>

	<?php if (isset($login_error)): ?>
		<div class="error"><?php echo $login_error; ?></div>
	<?php endif; ?>

	<div class="row">
		<label for="email">ユーザ名:</label>
		<div class="input"><?php echo Form::input('email', Input::post('email')); ?></div>
		
		<?php if ($val->error('email')): ?>
			<div class="error"><?php echo $val->error('email')->get_message(':label を入力してください'); ?></div>
		<?php endif; ?>
	</div>

	<div class="row">
		<label for="password">パスワード:</label>
		<div class="input"><?php echo Form::password('password'); ?></div>
		
		<?php if ($val->error('password')): ?>
			<div class="error"><?php echo $val->error('password')->get_message(':label を入力してください'); ?></div>
		<?php endif; ?>
	</div>

	<div class="actions">
		<?php echo Form::submit(array('value'=>'ログイン', 'name'=>'submit')); ?>
	</div>

<?php echo Form::close(); ?>
