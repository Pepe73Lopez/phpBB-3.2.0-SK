<?php
/**
*
* This file is part of the phpBB Forum Software package.
*
* @authors phpBB3.sk, PepeLopez, Fonzi
* @copyright (c) phpBB Limited <https://www.phpbb.com>
* @license GNU General Public License, version 2 (GPL-2.0)
*
* For full copyright and license information, please see
* the docs/CREDITS.txt file.
*
*/

if (!defined('IN_PHPBB'))
{
	exit;
}

/**
* DO NOT CHANGE
*/
if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

$lang = array_merge($lang, array(
	'CLI_CONFIG_CANNOT_CACHED'		=> 'Nastavte túto možnosť, pokiaľ se konfiguracia mení príliš často na to, aby sa oplatilo ju držať v medzipamäti.',
	'CLI_CONFIG_CURRENT'			=> 'Súčasná konfiguračná hodnota, použite 0 a 1 k určeniu bivalencie',
	'CLI_CONFIG_DELETE_SUCCESS'		=> 'Konfigurácia %s úspešne vymazaná.',
	'CLI_CONFIG_NEW'				=> 'Nová konfiguračná hodnota, použite 0 a 1 k určeniu bivalencie',
	'CLI_CONFIG_NOT_EXISTS'			=> 'Konfigurácia %s neexistuje',
	'CLI_CONFIG_OPTION_NAME'			=> 'Názov konfiguračnej možnosti',
	'CLI_CONFIG_PRINT_WITHOUT_NEWLINE'	=> 'Nastavte túto možnosť, ak má byť hodnota vytlačená bez nového riadka na konci.',
	'CLI_CONFIG_INCREMENT_BY'		=> 'Zvýšiť hodnotu o',
	'CLI_CONFIG_INCREMENT_SUCCESS'	=> 'Konfigurácia %s úspešne zvýšená',
	'CLI_CONFIG_SET_FAILURE'			=> 'Konfigurácia %s nemôže byť nastavená',
	'CLI_CONFIG_SET_SUCCESS'			=> 'Konfigurácia %s úspešne nastavená',

	'CLI_DESCRIPTION_CRON_LIST'			=> 'Zobrazí zoznam pripravených a nepripravených úloh pre cron.',
	'CLI_DESCRIPTION_CRON_RUN'			=> 'Spustí všetky pripravené úlohy pre cron.',
	'CLI_DESCRIPTION_CRON_RUN_ARGUMENT_1'	=> 'Názov cron úlohy, ktorá má byť spustená',
	'CLI_DESCRIPTION_DB_LIST'			=> 'Zobraziť všetky nainštalované a dostupné migrácie.',
	'CLI_DESCRIPTION_DB_MIGRATE'			=> 'Aktualizuje databázu aplikovaním migrácií.',
	'CLI_DESCRIPTION_DB_REVERT'			=> 'Obnoví migráciu',
	'CLI_DESCRIPTION_DELETE_CONFIG'		=> 'Zmaže konfiguračnú možnosť',
	'CLI_DESCRIPTION_DISABLE_EXTENSION'	=> 'Zakáže určené rozšírenie.',
	'CLI_DESCRIPTION_ENABLE_EXTENSION'		=> 'Povolí určené rozšírenie.',
	'CLI_DESCRIPTION_FIND_MIGRATIONS'		=> 'Nájde migrácie, na ktorých nie je závislá.',
	'CLI_DESCRIPTION_GET_CONFIG'			=> 'Získa hodnotu konfiguračnej možnosti',
	'CLI_DESCRIPTION_INCREMENT_CONFIG'		=> 'Zvýši hodnotu konfiguračnej možnosti',
	'CLI_DESCRIPTION_LIST_EXTENSIONS'		=> 'Zobrazí všetky rozšírenia v databáze a súborovom systéme.',

	'CLI_DESCRIPTION_OPTION_ENV'			=> 'Meno prostredia.',
	'CLI_DESCRIPTION_OPTION_SAFE_MODE'		=> 'Spustiť v bezpečnom režime (bez rozšírení).',
	'CLI_DESCRIPTION_OPTION_SHELL'		=> 'Spustiť shell.',

	'CLI_DESCRIPTION_PURGE_EXTENSION'				=> 'Prečistiť rozšírenie.',
	'CLI_DESCRIPTION_REPARSER_LIST'				=> 'Zobrazí typy textu, ktorý môžu byť analyzované.',
	'CLI_DESCRIPTION_REPARSER_REPARSE'				=> 'Analyzuje uložený text súčasnou službou formátovania textu.',
	'CLI_DESCRIPTION_REPARSER_REPARSE_ARG_1'		=> 'Typ textu na analýzu. Ponechajte prázdne, ak je potrebné analyzovať všetko.',
	'CLI_DESCRIPTION_REPARSER_REPARSE_OPT_DRY_RUN'	=> 'Neuložiť žiadne zmeny, len zobraziť výsledok',
	'CLI_DESCRIPTION_REPARSER_REPARSE_OPT_RANGE_MIN'	=> 'Spracovať ID najnižšieho záznamu',
	'CLI_DESCRIPTION_REPARSER_REPARSE_OPT_RANGE_MAX'	=> 'Spracovať ID najvyššieho záznamu',
	'CLI_DESCRIPTION_REPARSER_REPARSE_OPT_RANGE_SIZE'	=> 'Približný počet záznamov, ktoré sa spracovávajú',
	'CLI_DESCRIPTION_REPARSER_REPARSE_OPT_RESUME'	=> 'Spustiť analýzu od miesta posledného spracovávania',
	'CLI_DESCRIPTION_RECALCULATE_EMAIL_HASH'		=> 'Prepočítať stĺpec user_email_hash tabuľky užívateľov.',
	'CLI_DESCRIPTION_SET_ATOMIC_CONFIG'			=> 'Nastaví hodnotu konfiguračnej možnosti, len ak je zhodná so súčasnou hodnotou',
	'CLI_DESCRIPTION_SET_CONFIG'					=> 'Nastaví hodnotu konfiguračnej možnosti',

	'CLI_DESCRIPTION_THUMBNAIL_DELETE'		=> 'Zmazať všetky existujúce miniatúry.',
	'CLI_DESCRIPTION_THUMBNAIL_GENERATE'	=> 'Vygenerovať všetky chýbajúce miniatúry.',
	'CLI_DESCRIPTION_THUMBNAIL_RECREATE'	=> 'Obnoviť všetky miniatúry.',

	'CLI_DESCRIPTION_USER_ACTIVATE'			=> 'Aktivovať (alebo deaktivovať) účet užívateľa.',
	'CLI_DESCRIPTION_USER_ACTIVATE_USERNAME'	=> 'Užívateľské meno účtu, ktorý sa má aktivovať.',
	'CLI_DESCRIPTION_USER_ACTIVATE_DEACTIVATE'	=> 'Deaktivovať účet',
	'CLI_DESCRIPTION_USER_ACTIVATE_ACTIVE'		=> 'Účet už je aktívny.',
	'CLI_DESCRIPTION_USER_ACTIVATE_INACTIVE'	=> 'Účet už je deaktivovaný.',
	'CLI_DESCRIPTION_USER_ADD'				=> 'Pridať nového užívateľa.',
	'CLI_DESCRIPTION_USER_ADD_OPTION_USERNAME'	=> 'Užívateľské meno nového užívateľa',
	'CLI_DESCRIPTION_USER_ADD_OPTION_PASSWORD'	=> 'Heslo nového užívateľa',
	'CLI_DESCRIPTION_USER_ADD_OPTION_EMAIL'		=> 'E-mailová adresa nového užívateľa',
	'CLI_DESCRIPTION_USER_ADD_OPTION_NOTIFY'	=> 'Poslať užívateľovi aktivačný email (neodoslané v predvolenom nastavení)',
	'CLI_DESCRIPTION_USER_DELETE'				=> 'Vymazať účet.',
	'CLI_DESCRIPTION_USER_DELETE_USERNAME'		=> 'Užívateľské meno účtu, ktorý sa má vymazať',
	'CLI_DESCRIPTION_USER_DELETE_OPTION_POSTS'	=> 'Vymazať všetky príspevky užívateľa. Ak nebude táto možnosť zvolená, príspevky užívateľa zostanú zachované.',
	'CLI_DESCRIPTION_USER_RECLEAN'			=> 'Prečistiť užívateľov.',

	'CLI_EXTENSION_DISABLE_FAILURE'	=> 'Nebolo možné zakázať rozšírenie %s',
	'CLI_EXTENSION_DISABLE_SUCCESS'	=> 'Rozšírenie %s zakázané',
	'CLI_EXTENSION_ENABLE_FAILURE'	=> 'Nebolo možné povoliť rozšírenie %s',
	'CLI_EXTENSION_ENABLE_SUCCESS'	=> 'Rozšírenie %s povolené',
	'CLI_EXTENSION_NAME'			=> 'Názov rozšírenia',
	'CLI_EXTENSION_PURGE_FAILURE'		=> 'Nebolo možné prečistiť rozšírenie %s',
	'CLI_EXTENSION_PURGE_SUCCESS'		=> 'Rozšírenie %s úspešne prečistené',
	'CLI_EXTENSION_NOT_FOUND'		=> 'Žiadne rozšírenia neboli nájdené.',
	'CLI_EXTENSIONS_AVAILABLE'		=> 'Dostupné',
	'CLI_EXTENSIONS_DISABLED'		=> 'Zakázané',
	'CLI_EXTENSIONS_ENABLED'			=> 'Povolené',

	'CLI_FIXUP_RECALCULATE_EMAIL_HASH_SUCCESS'	=> 'Všetky hashe e-mailov úspešne prepočítané.',

	'CLI_MIGRATION_NAME'			=> 'Názov migrácie, vrátane názvu prostredia (použite priame lomítka namiesto spätných).',
	'CLI_MIGRATIONS_AVAILABLE'		=> 'Dostupné migrácie',
	'CLI_MIGRATIONS_INSTALLED'		=> 'Inštalované migrácie',
	'CLI_MIGRATIONS_ONLY_AVAILABLE'	=> 'Zobraziť len dostupné migrácie',
	'CLI_MIGRATIONS_EMPTY'			=> 'Žiadne migrácie.',

	'CLI_REPARSER_REPARSE_REPARSING'		=> 'Alanýza %1$s (rozsah %2$d..%3$d)',
	'CLI_REPARSER_REPARSE_REPARSING_START'	=> 'Analýza %s...',
	'CLI_REPARSER_REPARSE_SUCCESS'		=> 'Úspešne analyzované',

	// In all the case %1$s is the logical name of the file and %2$s the real name on the filesystem
	// eg: big_image.png (2_a51529ae7932008cf8454a95af84cacd) generated.
	'CLI_THUMBNAIL_DELETED'			=> '%1$s (%2$s) zmazané.',
	'CLI_THUMBNAIL_DELETING'			=> 'Mažem miniatúry',
	'CLI_THUMBNAIL_SKIPPED'			=> '%1$s (%2$s) vynechané.',
	'CLI_THUMBNAIL_GENERATED'		=> '%1$s (%2$s) vytvorené.',
	'CLI_THUMBNAIL_GENERATING'		=> 'Vytváram miniatúry',
	'CLI_THUMBNAIL_GENERATING_DONE'	=> 'Všetky miniatúry boli úspešne vytvorené.',
	'CLI_THUMBNAIL_DELETING_DONE'		=> 'Všetky miniatúry boli vymazané.',

	'CLI_THUMBNAIL_NOTHING_TO_GENERATE'	=> 'Nie je potrebné vytvoriť žiadne miniatúry.',
	'CLI_THUMBNAIL_NOTHING_TO_DELETE'		=> 'Nie je potrebné zmazať žiadne miniatúry.',

	'CLI_USER_ADD_SUCCESS'		=> 'Užívateľ %s úspešne pridaný.',
	'CLI_USER_DELETE_CONFIRM'	=> 'Ste si istý, že chcete vymazať ‘%s’? [y/n]',
	'CLI_USER_RECLEAN_START'		=> 'Prečisťujem užívateľské mená',
	'CLI_USER_RECLEAN_DONE'		=> [
		0	=> 'Žiadne užívateľské meá nie je potrebné prečistiť.',
		1	=> '%d užívateľské meno bolo prečistené.',
		2	=> '%d užívateľské mená boli prečistené.',
		3	=> '%d užívateľských mien bolo prečistených.',
	],
));

// Additional help for commands.
$lang = array_merge($lang, array(
	'CLI_HELP_CRON_RUN'			=> $lang['CLI_DESCRIPTION_CRON_RUN'] . ' Voliteľne môžete zadať názov cron úlohy, ktorá sa má spustiť.',
	'CLI_HELP_USER_ACTIVATE'		=> 'Aktivovať alebo deaktivovať účet pomocou príznaku <info>--deactivate</info>. Pre možnosť voliteľne odoslať užívateľovi informačný email o aktivácii účtu, použite príznak <info>--send-email</info>.',
	'CLI_HELP_USER_ADD'			=> '<info>%command.name%</info> príkaz pridá nového užívateľa: Ak bude tento príkaz odoslaný bez príznaku, budete vyzvaný k zadaniu príznaku. Pre možnosť voliteľne odoslať novému užívateľovi informačný email, použite príznak <info>--send-email</info>.',
	'CLI_HELP_USER_RECLEAN'		=> 'Prečistenie užívateľských mien skontroluje všetky uložené užívateľské mená a uistí sa, že tie správne sú uložené. Očistené užívateľské mená sú vo formáte bez rozlíšenia malých a veľkých znakov, NFC sú normalizované a transformované do ASCII.',
));
