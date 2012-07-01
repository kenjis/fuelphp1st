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

<?php echo $html_error; ?>
<?php endif; ?>

<?php echo Form::open('form/confirm'); ?>
<p>
	<?php echo Form::label('名前', 'name'); ?>(*) :
	<?php echo Form::input('name', Input::post('name')); ?>
</p>
<p>
	<?php echo Form::label('メールアドレス', 'email'); ?>(*) :
	<?php echo Form::input('email', Input::post('email')); ?>
</p>
<p>
	<?php echo Form::label('コメント', 'comment'); ?>(*) :
	<?php echo Form::textarea('comment', Input::post('comment'), 
		array('rows' => 6, 'cols' => 70)); ?>
</p>
<div class="actions">
	<?php echo Form::submit('submit', '確認'); ?>
</div>
<?php echo Form::close(); ?>
