<?php
/**
*
* @package phpBB Extension - tas2580 privacyprotection
* @copyright (c) 2018 tas2580 (https://tas2580.net)
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
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
//
// Some characters you may want to copy&paste:
// ’ » “ ” …
//
$lang = array_merge($lang, array(
	'DOWNLOAD_MY_DATA'				=> 'Download my personal data',
	'DOWNLOAD_MY_DATA_EXPLAIN'		=> 'This will download a CSV file containing your personal data plus your posts.',
	'DOWNLOAD_MY_DATA_BTN'			=> 'Download my profile data',
	'DOWNLOAD_MY_POSTS_BTN'			=> 'Download my posts',
	'NEED_ACCEPT_PRIVACY'			=> 'You must first read and accept the Privacy Policy statement.',
	'PRIVACY_ACCEPTED'				=> 'Privacy Policy read and accepted',
	'PRIVACY_ACCEPTED_EXPLAIN'		=> 'By marking this field I confirm that I have read and accepted the <a href="%s" target="_blank">Privacy Policy statement</a>.',
));
