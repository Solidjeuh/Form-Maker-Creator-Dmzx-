<?php
/**
*
* @package phpBB Extension - Form Maker/Creator
* @copyright (c) 2017 dmzx - http://www.dmzx-web.net & michaelo - http://www.phpbbreland.com
* Nederlandse vertaling @ Solidjeuh <https://www.froddelpower.be>
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
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
//
// Some characters you may want to copy&paste:
// ’ » “ ” …
//

$lang = array_merge($lang, array(
	'CLOSE_FORM'				=> 'Annuleer',
	'OPEN_FORM'					=> 'Formulier Modus',
	'CLOSE_FORM_EXPLAIN'		=> 'Overschakelen naar Post Modus, Kopi&euml;ren van Formulier data naar de post',
	'CLOSE_FORM_EXPLAIN'		=> 'Schakel terug naar Post Modus (data zal niet gepost worden)',
	'FORM_HELP_1'				=> 'Bewerken door het gebruiken van <strong>Formulier Modus</strong> is nog niet geschreven...',
	'FORM_MOD_PREVIEW'		 	=> 'Overschakelen naar voorbeeld met behoud van de huidige formulier data...',
	'FORM_MOD_SUBMIT'			=> 'Voeg de formulier data toe aan bericht en post...',
	'OPEN_FORM_EXPLAIN'			=> 'Schakel over naar Formulier modus...',
	'REFRESHING_FORM'			=> 'Het huidige geselecteerde forum is',
	'REQUIRED'				 	=> 'U hebt niet alle vereiste elementen ingevoerd!',
	'SUBJECT_REQUIRED'		 	=> 'Gelieve een onderwerp op te geven',
	'CHECKBOX_MSG'				=> 'Selectie vakjes gemarkeerd als verplicht vereisen dat alle elementen geselecteerd zijn (HTML5 Formulier Validatie)',
	'MANDATORY'					=> 'Items gemarkeerd met een sterretje zijn verplicht.',
));
