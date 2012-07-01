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


return array(
	'required'      => ':label 欄は必須です。',
	'min_length'    => ':label 欄は :param:1 文字以上にしてください。',
	'max_length'    => ':label 欄は :param:1 文字を超えないようにしてください。',
	'exact_length'  => 'The field :label must contain exactly :param:1 characters.',
	'match_value'   => 'The field :label must contain the value :param:1.',
	'match_pattern' => 'The field :label must match the pattern :param:1.',
	'match_field'   => 'The field :label must match the field :param:1.',
	'valid_email'   => ':label 欄は有効なメールアドレスを入力してください。',
	'valid_emails'  => 'The field :label must contain a list of valid email addresses.',
	'valid_url'     => 'The field :label must contain a valid URL.',
	'valid_ip'      => 'The field :label must contain a valid IP address.',
	'numeric_min'   => 'The minimum numeric value of :label must be :param:1',
	'numeric_max'   => 'The maximum numeric value of :label must be :param:1',
	'valid_string'  => 'The valid string rule :rule failed for field :label',
);
