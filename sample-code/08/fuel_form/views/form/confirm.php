<p>
	名前:
	<?php echo $input['name']; ?>
</p>
<p>
	メールアドレス:
	<?php echo $input['email']; ?>
</p>
<p>
	コメント:
	<?php echo nl2br($input['comment']); ?>
</p>

<?php
echo Form::open('form/');
echo Form::hidden('name',    $input['name']);
echo Form::hidden('email',   $input['email']);
echo Form::hidden('comment', $input['comment']);
?>
<div class="actions">
	<?php echo Form::submit('submit1', '修正'); ?>
</div>
<?php echo Form::close(); ?>

<?php
echo Form::open('form/send');

// CSRF対策
echo Form::hidden(Config::get('security.csrf_token_key'), Security::fetch_token());

echo Form::hidden('name',    $input['name'],    array('id' => 'name'));
echo Form::hidden('email',   $input['email'],   array('id' => 'email'));
echo Form::hidden('comment', $input['comment'], array('id' => 'comment'));
?>
<div class="actions">
	<?php echo Form::submit('submit2', '送信'); ?>
</div>
<?php echo Form::close(); ?>
