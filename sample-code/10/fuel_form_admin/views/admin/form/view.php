<h2>表示 #<?php echo $form->id; ?></h2>

<p>
	<strong>日時:</strong>
	<?php echo Date::forge($form->created_at)->format('mysql'); ?></p>
<p>
	<strong>名前:</strong>
	<?php echo $form->name; ?></p>
<p>
	<strong>メールアドレス:</strong>
	<?php echo $form->email; ?></p>
<p>
	<strong>コメント:</strong>
	<?php echo nl2br($form->comment); ?></p>
<p>
	<strong>IPアドレス:</strong>
	<?php echo $form->ip_address; ?></p>
<p>
	<strong>ブラウザ:</strong>
	<?php echo $form->user_agent; ?></p>

<?php echo Html::anchor('admin/form', '戻る'); ?>
