<?php
/**
*
* This file is part of the phpBB Forum Software package.
*
* @author PepeLopez <Pepe73Lopez@gmail.com>
* @copyright (c) phpBB Limited <https://www.phpbb.com>
* @license GNU General Public License, version 2 (GPL-2.0)
*
* For full copyright and license information, please see
* the docs/CREDITS.txt file.
*
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

$lang = array_merge($lang, array(
	'RECAPTCHA_LANG'				=> 'sk',
	'RECAPTCHA_NOT_AVAILABLE'		=> 'Ak chcete použiť reCaptcha, musíte si vytvoriť účet na <a href="https://www.google.com/recaptcha">www.google.com/recaptcha</a>.',
	'CAPTCHA_RECAPTCHA'				=> 'reCaptcha',
	'RECAPTCHA_INCORRECT'			=> 'Zadaný overovací kód je nesprávny',
	'RECAPTCHA_NOSCRIPT'			=> 'Aby bolo možné zobraziť rébus, musíte vo vašom prehliadači povoliť JavaScript.',

	'RECAPTCHA_PUBLIC'				=> 'Verejný reCaptcha kľúč',
	'RECAPTCHA_PUBLIC_EXPLAIN'		=> 'Váš verejný reCaptcha kľúč. Kľúče možno získať na <a href="https://www.google.com/recaptcha">www.google.com/recaptcha</a>.',
	'RECAPTCHA_PRIVATE'				=> 'Súkromný reCaptcha kľúč',
	'RECAPTCHA_PRIVATE_EXPLAIN'		=> 'Váš súkromný reCaptcha kľúč. Kľúče možno získať na <a href="https://www.google.com/recaptcha">www.google.com/recaptcha</a>.',

	'RECAPTCHA_EXPLAIN'				=> 'Snažíme sa zamedziť automatizovaným registráciám, preto je potrebné, aby ste vyriešili nasledovný rébus.',
	'RECAPTCHA_SOCKET_ERROR'			=> 'Problém s pripojením na službu RECAPTCHA: Nie je možné vytvoriť spojenie. Skúste to znovu.',
));
