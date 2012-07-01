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

<?php if ($username == 'kodaka'): ?>
<h3>kodakaさん、こんにちは</h3>
<?php elseif ($username == 'kobato'): ?>
<h3>kobatoさん、こんにちは</h3>
<?php else: ?>
<h3>名無しさん、こんにちは</h3>
<?php endif; ?>
