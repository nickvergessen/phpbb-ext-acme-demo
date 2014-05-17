<?php
/**
*
* @package phpBB Extension - Acme Demo
* @copyright (c) 2013 phpBB Group
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

$lang = array_merge($lang, array(
	'DEMO_PAGE'			=> 'Demo',
	'DEMO_HELLO'		=> 'Hello %s!',
	'DEMO_GOODBYE'		=> 'Goodbye %s!',

	'ACP_DEMO_TITLE'			=> 'Demo Module',
	'ACP_DEMO'					=> 'Settings',
	'ACP_DEMO_GOODBYE'			=> 'Should say goodbye?',
	'ACP_DEMO_SETTING_SAVED'	=> 'Settings have been saved successfully!',

	'MCP_DEMO_TITLE'			=> 'ACME Demo',
	'MCP_DEMO'					=> 'Settings',
	'MCP_DEMO_SETTING'			=> 'Demo MCP setting',
	'MCP_DEMO_SETTING_SAVED'	=> 'Settings and things go here.',

	'UCP_DEMO_TITLE'			=> 'ACME Demo Module',
	'UCP_DEMO'					=> 'ACME Demo Settings',
	'UCP_DEMO_SETTING'			=> 'Demo UCP setting',
	'UCP_DEMO_SETTING_SAVED'	=> 'Settings have been saved successfully!',
));
