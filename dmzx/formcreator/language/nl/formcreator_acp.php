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
	'MODE'						=> 'Modus',
	'ELEMENTS'					=> 'Elementen',
	'FORM_NAME'					=> 'Forum Naam',
	'FORUM_ID'					=> 'Forum ID',
	'ACP_FORM_CURRENT'		 	=> 'Huidig forum',
	'ACP_FORM_MAKER'			=> 'Formulier Maker',
	'ACP_FORM_MAKER_EXPLAIN'	=> 'Met deze tool kan je formulieren maken en beheren voor je forum.',
	'ACP_FORM_CURRENT'		 	=> 'Huidig formulier',
	'ACP_FORM_MOD_MORE_INFO'	=> 'Klik op mij voor meer info',
	'ACP_FORM_MOD_NOTE'			=> '<br /><strong>Let op:</strong> Alle acties worden uitgevoerd op het huidig geselecteerde/getoonde formulier, bevestiging is niet ge&iuml;mplementeerd...',

	'ACP_FORM_MAKER_EXPLAIN_2' => 'Hoe wijzig ik het formulier?<br /> &nbsp; &bull; Selecteer een nieuw formulier van de <strong><i>Huidige formulier</i></strong> dropdown box...<br /><br />
	Hoe voeg ik een nieuw formulier element toe?<br /> &nbsp; &bull; Gebruik <strong><i>Voeg een nieuw formulier element toe</i></strong>.<br /><br />
	Hoe verwijder ik een formulier?<br /> &nbsp; &bull; Verwijder gewoon alle formulier elementen...<br /><br />
	<strong>&#8730;</strong> Het selectie karakter toont aan dat een item verplicht is en niet leeg kan zijn.<br />',

	'CURRENT_FORM'			 	=> 'Huidig formulier',
	'FORM_ADD_ITEM'				=> 'Voeg een nieuw formulier element toe',
	'FORM_CHECKBOX'				=> 'Check Box',
	'FORM_DETAILS'			 	=> 'Alle formulieren maken gebruik van een generiek template bestand: styles/prosilver/template/forms/form_maker.html',
	'FORM_ELEMENT'			 	=> 'Input Type',
	'FORM_ELEMENT_TYPE'			=> 'Element type',
	'FORM_ELEMENT_HINT'			=> 'Hint',
	'FORM_ELEMENT_NAME'			=> 'Opgave naam',
	'FORM_ELEMENT_OPTIONS'		=> 'Opties',
	'FORM_EMAILBOX'				=> 'E-mail',
	'FORM_INPUTBOX'				=> 'Tekst',
	'FORM_MAKER_ACP_DELETED'	=> 'Opgave verwijderd',
	'FORM_MAKER_ACP_ERROR'	 	=> 'Fout tijdens updaten van Formulier Maker database',
	'FORM_MAKER_ACP_MOVED'	 	=> 'Verplaatsen compleet...',
	'FORM_MAKER_ACP_RETURN'		=> 'Terug naar Formulieren beheren',
	'FORM_MANAGE'				=> 'Beheer dit formulier',
	'FORM_MANAGE_EXPLAIN'		=> 'Hier kan je alle huidige formulier elementen bewerken, bewerk simpelweg de velden en klik op de <strong>Update</strong> knop...',
	'FORUM_NAME'				=> 'Forum Naam',

	'FORM_NEW_ITEM_EXPLAIN_2'	=> '<pre style="font-size:11px; line-height: 100%;"><strong><u>Formulier elementen ondersteund door de formulier extensie</u></strong><br />
	<strong>Inputbox:</strong>		Tot 255 karakters)<br />
	<strong>Tekst box:</strong>	 	Meerdere tekstregels ingericht als 3 rijen met 76 kolommen.<br />
	<strong>Checkbox:</strong>		Een of meerdere opties kunnen geselecteerd worden, indien ingesteld op verplicht moet elke optie in de selectie box groep geselecteerd  worden..<br />
	<strong>Radio knop:</strong> 		Er kan maar 1 optie geselecteerd worden.<br />
	<strong>Select box:</strong>		1 optie van een dropdown lijst.<br />
	<strong>E-mail:</strong>			Geldig e-mail adres.<br />
	<strong>Wachtwoord:</strong>		Enkel om te testen...<br />
	<strong>URL:</strong>			Een geldige url moet opgegeven worden.<br />
	<strong>Bijlage:</strong>		Voeg een afbeelding toe.<br /><br /></pre>',

	'FORM_NO_FORM'			 	=> 'Er zijn geen formulieren toegewezen aan: <strong>%s</strong>...<br />Om een nieuw formulier toe te voegen aan dit forum, voeg dan simpelweg onderaan  een formulier element toe...',
	'FORM_RADIOBOX'				=> 'Radio Knoppen',
	'FORM_PASSWORDBOX'			=> 'Wachtwoord',
	'FORM_SELECTBOX'			=> 'Selecteer Box',
	'FORM_SELECT_DB'			=> 'Beschikbare formulieren',
	'FORM_STATUS'				=> 'Status',
	'FORM_TXTBOX'				=> 'Tekst Box',
	'FORM_URLBOX'				=> 'URL',
	'FORM_ATTACH'				=> 'Bijlage',
	'HIDE_FORM_INFO'			=> 'Verberg info',
	'HIDE_PREVIEW'			 	=> 'Verberg voorbeeld',
	'HOW_TO'					=> '<strong>extra hulp...</strong>',
	'HOW_TO_MORE'				=> 'Meer info...',
	'HOW_TO_HIDE'				=> '<strong>Verberg</strong>',
	'FORM_IMAGE_HERE'			=> ' (Vervang deze tekst met een inline afbeelding) ',
	'MOREINFO_MSG'			 	=> 'Om een bijlage toe te voegen, klik dan simpelweg op de Zoek knop(pen) en selecteer een afbeelding.',
	'NDX'						=> 'NDX',
	'NDX_ORDER'					=> 'Index richting (de richting waarin items vertoont worden op het formulier)',
	'NO_FOURM'				 	=> 'Geen forum geassocieerd met dit formulier',
	'FORMS_MOD_SAMPLE'		 	=> 'Weergave van het huidige formulier ter ondersteuning van enkel visualisatie... geen werkend formulier.',
	'SELECT_FORM_TO_MANAGE'		=> 'Selecteer aub een forum om te associ&euml;ren met dit formulier',
	'SHOW_FORM_INFO'			=> 'Meer info over element types',
	'SHOW_PREVIEW'			 	=> 'Voorbeeld van formulier',

	'CHECKBOX_NOTE'				=> '<strong>Let op:</strong>???',
	'CHECKBOXE_NOTES'			=> 'Selectie vakjes!',
	'CHKNOTE'					=> 'Selectie vakjes met meerdere items zijn zelden ingesteld als verplicht. Daarmee vereisen we de gebruiker om ieder item te controleren.',
));
