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

$fruits = array('Apple', 'Orange', 'Grape');
?>
<ul>
<?php foreach ($fruits as $item): ?>
<li><?php echo $item; ?></li>
<?php endforeach; ?>
</ul>
