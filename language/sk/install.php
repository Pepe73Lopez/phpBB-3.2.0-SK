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

// Common installer pages
$lang = array_merge($lang, array(
	'INSTALL_PANEL'	=> 'Inštalačný panel',
	'SELECT_LANG'		=> 'Vyberte jazyk',

	'STAGE_INSTALL'	=> 'Inštalácia phpBB',

	// Introduction page
	'INTRODUCTION_TITLE'	=> 'Úvod',
	'INTRODUCTION_BODY'		=> 'Vitajte v phpBB3!<br /><br />phpBB® je najrozšírenejšie softvérové riešenie pre diskusné fóra s otvoreným zdrojovým kódom na svete. phpBB3 je najnovšou verziou od roku 2000. Rovnako, ako jeho predchodcovia, phpBB3 je bohatý na funkcie, užívateľsky prívetivý a plne podporovaný tímom vývojárov. phpBB3 výrazne zlepšuje to, čo bolo na phpBB2 populárne a pridáva bežne požadované funkcie, ktoré neboli súčasťou predchádzajúcich verzií. Dúfame, že prekoná vaše očakávania.<br /><br />Tento inštalačný sprievodca vás prevedie inštaláciou phpBB3, aktualizáciou na najnovšiu verziu phpBB3 z minulých verzií, rovnako ako aj prechodom do phpBB3 z iného riešenia diskusného fóra (vrátane phpBB2). Ak chcete získať viac informácií odporúčame prečítať <a href="../docs/INSTALL.html">inštalačnú príručku</a>.<br /><br />Ak si chcete prečítať licenčné podmienky phpBB3 alebo sa dozvedieť viac o získaní podpory a našom postoj k nej, vyberte si z príslušnej ponuky. Ak chcete pokračovať v inštalácii, vyberte príslušnú kartu v záhlaví.',

	// Support page
	'SUPPORT_TITLE'		=> 'Podpora',
	'SUPPORT_BODY'			=> 'Zo strany vývojárov je poskytovaná plná podpora bez poplatkov. Podpora zahŕňa:</p><ul><li>inštaláciu</li><li>konfiguráciu</li><li>otázky technického typu</li><li>akékoľvek problémy spojené s potenciálnym výskytom chýb</li><li>prechod z RC (Release Candidate) verzií na stabilné verzie</li><li>konverzia z phpBB 2.0.x na phpBB3</li><li>konverzia z iných platforiem, softvérových riešení diskusných fór na platformu phpBB3 (ak chcete získať viac informácií prosím navštívte nasledovné <a href="https://www.phpbb.com/community/viewforum.php?f=486">Fórum</a>)</li></ul><p>Používateľom beta verzií phpBB3 odporúčame, aby túto inštaláciu nahradili čistou inštaláciou poslednej verzie phpBB.</p><h2>Rozšírenia / Štýly</h2><p>Pre otázky spojené s rozšíreniami, použite prosím sekcie <a href="https://www.phpbb.com/community/viewforum.php?f=451">fóra riešiace otázky rozšírení</a>.<br />Pre otázky spojené so štýlmi, použite prosím sekcie <a href="https://www.phpbb.com/community/viewforum.php?f=471">fóra riešiace otázky štýlov</a>.<br /><br />Ak sa vaša otázka týka konkrétneho balíčka, vyhľadajte vo fóre tému venujúcu sa  priamo vášmu balíčku.</p><h2>Ďalšie informácie o phpBB</h2><p><br /><a href="https://www.phpbb.com/community/viewtopic.php?f=14&amp;t=571070">Úvod do phpBB</a><br /><a href="https://www.phpbb.com/support/">Sekcia podpory</a><br /><a href="https://www.phpbb.com/support/docs/en/3.1/ug/quickstart/">Rýchla príručka</a><br /><br />Prípadne, aby ste sa uistili, že používate poslednú verziu a máte prístup k najnovším informáciám <a href="https://www.phpbb.com/support/">prihláste sa k odberu noviniek</a>.<br /><br />',

	// License
	'LICENSE_TITLE'		=> 'Všeobecná verejná licencia (GPL)',

	// Install page
	'INSTALL_INTRO'		=> 'Sprievodca inštaláciou',
	'INSTALL_INTRO_BODY'	=> 'V nasledujúcich krokoch nainštalujete phpBB3 na váš server.</p><p>Pred začatím inštalácie sa uistite, že máte niektoré informácie o databáze a jej nastaveniach. Ak ich neviete, kontaktujte prosím vášho poskytovateľa serverových služieb a vyžiadajte si ich. Bez týchto informácií nebude možné pokračovať.<br /><br /> Budete potrebovať:</p>

	<ul>
		<li>Typ databázy - typ databázového riešenia, ktoré poskytuje váš server.</li>
		<li>Adresu databázového servera - hostname, DSN súbor alebo IP adresu databázového servera.</li>
		<li>Port databázového servera - port adresy databázového servera (vo väčšine prípadov nie je potrebný).</li>
		<li>Meno databázy - Meno vytvorenej databázy, ku ktorej máte úplný prístup.</li>
		<li>Prihlasovacie meno a heslo k databáze - vyžaduje sa na prihlásenie k získaniu prístupu k databáze.</li>
	</ul>

	<p><strong>Poznámka:</strong> ak použijete SQLite, mali by ste v poli "DSN" uviesť úplnú cestu k súboru DSN a ponechať polia "Prihlasovacie meno" a "Heslo" k databáze prázdne (v závislosti na obsahu súboru DSN). Z dôvodu bezpečnosti vašich dát by ste sa mali uistiť, že súbor DSN s prístupovými informáciami nebude uložený na verejne prístupnom mieste.</p>

	<p>phpBB3 podporuje nasledovné typy databáz:</p>
	<ul>
		<li>MySQL 3.23 alebo vyššie (vrátane MySQLi)</li>
		<li>PostgreSQL 8.3+</li>
		<li>SQLite 2.8.2+</li>
		<li>SQLite 3.6.15+</li>
		<li>MS SQL Server 2000 alebo vyššie (priamo alebo prostredníctvom ODBC)</li>
		<li>MS SQL Server 2005 alebo vyššie (natívne)</li>
		<li>Oracle</li>
	</ul>

	<p>Rozpoznané budú len podporované databázy, ak sa nachádzajú na vašom serveri.',

	'ACP_LINK'	=> 'Prepnúť na <a href="%1$s">Administrátorský panel</a>',

	'INSTALL_PHPBB_INSTALLED'		=> 'phpBB už je nainštalované.',
	'INSTALL_PHPBB_NOT_INSTALLED'		=> 'phpBB zatiaľ nie je nainštalované.'
));

// Requirements translation
$lang = array_merge($lang, array(
	// Filesystem requirements
	'FILE_NOT_EXISTS'						=> 'Súbor neexistuje',
	'FILE_NOT_EXISTS_EXPLAIN'				=> 'K inštalácii phpBB je potrebný súbor %1$s.',
	'FILE_NOT_EXISTS_EXPLAIN_OPTIONAL'			=> 'Odporúčame, aby existoval súbor %1$s.',
	'FILE_NOT_WRITABLE'						=> 'Súbor je chránený proti zápisu',
	'FILE_NOT_WRITABLE_EXPLAIN'				=> 'K inštalácii phpBB je potrebné, aby bola odstránená ochrana súboru %1$s proti zápisu.',
	'FILE_NOT_WRITABLE_EXPLAIN_OPTIONAL'		=> 'Odporúčame, aby bola odstránená ochrana súboru %1$s proti zápisu.',

	'DIRECTORY_NOT_EXISTS'					=> 'Adresár nie je vytvorený',
	'DIRECTORY_NOT_EXISTS_EXPLAIN'			=> 'K inštalácii phpBB je potrebné, aby bol vytvorený adresár %1$s.',
	'DIRECTORY_NOT_EXISTS_EXPLAIN_OPTIONAL'		=> 'Odporúčame, aby bol vytvorený adresár %1$s.',
	'DIRECTORY_NOT_WRITABLE'					=> 'Adresár je chránený proti zápisu',
	'DIRECTORY_NOT_WRITABLE_EXPLAIN'			=> 'K inštalácii phpBB je potrebné, aby bola odstránená ochrana adresára %1$s proti zápisu.',
	'DIRECTORY_NOT_WRITABLE_EXPLAIN_OPTIONAL'	=> 'Odporúčame, aby bola odstránená ochrana adresára %1$s proti zápisu.',

	// Server requirements
	'PHP_VERSION_REQD'					=> 'Verzia PHP',
	'PHP_VERSION_REQD_EXPLAIN'			=> 'phpBB vyžaduje PHP verzie 5.4.0 alebo vyššej.',
	'PHP_GETIMAGESIZE_SUPPORT'			=> 'Je potrebná funkcia PHP getimagesize()',
	'PHP_GETIMAGESIZE_SUPPORT_EXPLAIN'		=> 'Aby phpBB pracovalo správne je potrebné, aby bola povolená funkcia getimagesize.',
	'PCRE_UTF_SUPPORT'					=> 'Podpora PCRE UTF-8',
	'PCRE_UTF_SUPPORT_EXPLAIN'			=> 'phpBB nebude pracovať, ak vaša PHP inštalácia nebude skompilovaná s podporou UTF-8 v rozšírení PCRE.',
	'PHP_JSON_SUPPORT'					=> 'Podpora PHP JSON',
	'PHP_JSON_SUPPORT_EXPLAIN'			=> 'Aby phpBB pracovalo správne je potrebné, aby váš server podporoval rozšírenie PHP JSON.',
	'PHP_SUPPORTED_DB'					=> 'Podporované databázy',
	'PHP_SUPPORTED_DB_EXPLAIN'			=> 'Váš hosting musí podporovať aspoň jeden typ kompatibilného databázového riešenia. Ak v priebehu inštalácie nie je v ponuke zobrazený žiaden databázový modul, kontaktujte prosím vášho poskytovateľa hostingových služieb alebo si preštudujte dokumentáciu vášho hostingu.',

	'RETEST_REQUIREMENTS'	=> 'Znovu otestovať požiadavky',

	'STAGE_REQUIREMENTS'	=> 'Test požiadaviek'
));

// General error messages
$lang = array_merge($lang, array(
	'INST_ERR_MISSING_DATA'		=> 'V tejto časti musíte vyplniť všetky polia.',

	'TIMEOUT_DETECTED_TITLE'		=> 'Inštalátor zistil, že vypršal časový limit nečinnosti.',
	'TIMEOUT_DETECTED_MESSAGE'	=> 'Inštalátor zistil, že vypršal časový limit nečinnosti, môžete sa pokúsiť obnoviť (znovu načítať stránku), čo môže viesť k poškodeniu dát alebo k vzniku neočakávanej chyby. Odporúčame zmeniť nastavenie časového limitu nečinnosti alebo požiť CLI.',
));

// Data obtaining translations
$lang = array_merge($lang, array(
	'STAGE_OBTAIN_DATA'		=> 'Základné nastavenia',

	//
	// Admin data
	//
	'STAGE_ADMINISTRATOR'	=> 'Informácie o administrátorovi',

	// Form labels
	'ADMIN_CONFIG'				=> 'Prihlasovacie údaje k účtu administrátora',
	'ADMIN_PASSWORD'			=> 'Heslo administrátora',
	'ADMIN_PASSWORD_CONFIRM'		=> 'Potvrdenie zadaného hesla',
	'ADMIN_PASSWORD_EXPLAIN'		=> 'Zadajte heslo v rozsahu 6 až 30 znakov.',
	'ADMIN_USERNAME'			=> 'Prihlasovacie meno administrátora',
	'ADMIN_USERNAME_EXPLAIN'		=> 'Zadajte prihlasovacie meno v rozsahu 3 až 20 znakov.',

	// Errors
	'INST_ERR_EMAIL_INVALID'		=> 'Zdali ste neplatnú emailovú adresu.',
	'INST_ERR_PASSWORD_MISMATCH'	=> 'Heslá sa nezhodujú.',
	'INST_ERR_PASSWORD_TOO_LONG'	=> 'Heslo je príliš dlhé. Maximálna dĺžka je 30 znakov.',
	'INST_ERR_PASSWORD_TOO_SHORT'	=> 'Heslo je príliš krátke. Minimálna dĺžka je 6 znakov.',
	'INST_ERR_USER_TOO_LONG'		=> 'Prihlasovacie meno je príliš dlhé. Maximálna dĺžka je 20 znakov.',
	'INST_ERR_USER_TOO_SHORT'	=> 'Prihlasovacie meno je príliš krátke. Minimálna dĺžka je 3 znaky.',

	//
	// Board data
	//
	// Form labels
	'BOARD_CONFIG'		=> 'Základné nastavenia fóra',
	'DEFAULT_LANGUAGE'	=> 'Východzí jazyk',
	'BOARD_NAME'		=> 'Názov vášho fóra',
	'BOARD_DESCRIPTION'	=> 'Krátky a výstižný popis vášho fóra',

	//
	// Database data
	//
	'STAGE_DATABASE'	=> 'Databázové nastavenia',

	// Form labels
	'DB_CONFIG'			=> 'Konfigurácia databázy',
	'DBMS'				=> 'Typ databázy',
	'DB_HOST'				=> 'Databázový server alebo cesta k súboru DSN',
	'DB_HOST_EXPLAIN'		=> 'Súbor DSN (Data Source Name) je vyžadovaný len pre ODBC riešenia. Pre PostgreSQL, použite "localhost" k pripojeniu na lokálny server prostredníctvom platformy UNIX a "127.0.0.1" k pripojeniu prostredníctvom TCP. Pre SQLite, uveďte úplnú cestu k súboru DSN.',
	'DB_PORT'				=> 'Port',
	'DB_PORT_EXPLAIN'		=> 'Ponechajte prázdne. Vyplňte, len ak viete, že databázový server používa neštandartné číslo portu.',
	'DB_PASSWORD'			=> 'Heslo pre prístup k vytvorenej databáze',
	'DB_NAME'				=> 'Názov vytvorenej databázy',
	'DB_USERNAME'			=> 'Prihlasovacie meno pre prístup k vytvorenej databáze',
	'TABLE_PREFIX'			=> 'Prefix tabuliek phpBB v databáze',
	'TABLE_PREFIX_EXPLAIN'	=> 'Prefix musí začínať písmenom a celý môže obsahovať len písmená, čísla, prípadne podtržník.',

	// Database options
	'DB_OPTION_MSSQL'		=> 'MSSQL Server 2000+',
	'DB_OPTION_MSSQL_ODBC'	=> 'MSSQL Server 2000+ prostredníctvom ODBC',
	'DB_OPTION_MSSQLNATIVE'	=> 'MSSQL Server 2005+ [ natívne ]',
	'DB_OPTION_MYSQL'		=> 'MySQL',
	'DB_OPTION_MYSQLI'		=> 'MySQL s rozšírením MySQLi',
	'DB_OPTION_ORACLE'		=> 'Oracle',
	'DB_OPTION_POSTGRES'	=> 'PostgreSQL',
	'DB_OPTION_SQLITE'		=> 'SQLite 2',
	'DB_OPTION_SQLITE3'		=> 'SQLite 3',

	// Errors
	'INST_ERR_NO_DB'			=> 'Pre zvolený typ databázy nie je možné nájsť zodpovedajúci PHP modul.',
	'INST_ERR_DB_INVALID_PREFIX'	=> 'Zadaný tvar prefixu tabuliek je neplatný. Prefix musí začínať písmenom a môže obsahovať len písmená, čísla a podtržníky.',
	'INST_ERR_PREFIX_TOO_LONG'	=> 'Zadaný prefix je príloš dlhý. Maximálna povolená dĺžka je %d znakov.',
	'INST_ERR_DB_NO_NAME'		=> 'Nebola špecifikovaná žiadna databáza.',
	'INST_ERR_DB_FORUM_PATH'		=> 'Súbor je umiesnený v štruktúre adresárov vášho fóra, mali by ste ho umiestniť na verejne nedostupné miesto.',
	'INST_ERR_DB_CONNECT'		=> 'Nebolo možné sa pripojiť k databáze.',
	'INST_ERR_DB_NO_ERROR'		=> 'Nepodarilo sa získať hlásenie o chybe.',
	'INST_ERR_PREFIX'			=> 'Tabuľky so zadaným prefixom už existujú, vyberte inú alternatívu.',
	'INST_ERR_DB_NO_MYSQLI'		=> 'Verzia MySQL, ktorú máte nainštalovanú nie je kompatibilná s vami zvolenou “MySQL with MySQLi Extension”. Použite prosím možnosť “MySQL”.',
	'INST_ERR_DB_NO_SQLITE'		=> 'Verzia rozšírenia SQLite, ktoré máte nainštalované je príliš staré, vyžaduje sa najmenej verzia 2.8.2.',
	'INST_ERR_DB_NO_SQLITE3'		=> 'Verzia rozšírenia SQLite, ktoré máte nainštalované je príliš staré, vyžaduje sa najmenej verzia 3.6.15.',
	'INST_ERR_DB_NO_ORACLE'		=> 'Verzia Oracle, ktorú máte nainštalovanú vyžaduje, aby ste nastavili parameter <var>NLS_CHARACTERSET</var> na hodnotu <var>UTF8</var>. Alebo je zmenu parametra možné vyriešiť updatovaním na verziu 9.2+.',
	'INST_ERR_DB_NO_POSTGRES'		=> 'Databáza, ktorú ste zadali nemá kódovanie <var>UNICODE</var> alebo <var>UTF8</var>. Vytvorte najprv databázu s požadovaným kódovaním <var>UNICODE</var> alebo <var>UTF8</var>.',
	'INST_SCHEMA_FILE_NOT_WRITABLE'	=> 'Schéma súborov má ochranu proti zápisu.',

	//
	// Email data
	//
	'EMAIL_CONFIG'	=> 'Nastavenie emailu',

	//
	// Server data
	//
	// Form labels
	'SERVER_CONFIG'			=> 'Konfigurácia serveru',
	'SCRIPT_PATH'				=> 'Cesta k skriptom',
	'SCRIPT_PATH_EXPLAIN'		=> 'Cesta k súborom phpBB vyjadrená relatívne k doméne, napr. <samp>/phpBB3</samp>.',
));

// Default database schema entries...
$lang = array_merge($lang, array(
	'CONFIG_BOARD_EMAIL_SIG'		=> 'Ďakujeme, Vývojári phpBB',
	'CONFIG_SITE_DESC'			=> 'Krátky a výstižný popis vášho fóra',
	'CONFIG_SITENAME'			=> 'vasa_domena.sk',

	'DEFAULT_INSTALL_POST'			=> 'Toto je automaticky vytvorený príklad znenia obsahu vášho príspevku a vyzerá to, že inštalácia bola úspešná a všetko funguje. Môžete tento príspevok odstrániť a pokračovať v nastavení vášho diskusného fóra. Počas inštalácie boli nastavené základné oprávnenia automaticky vytváranému prvému fóru a kategórii pre jednotlivé preddefinované skupiny užívateľov - administratorom, botom, globálnym moderátorom, hosťom, registrovaným užívateľom a registrovaným mladistvým užívateľom. Ak odstránite automaticky vytvorenú kategóriu a fórum, nezabudnite v budúcnosti novo vytvoreným kategóriám a fóram priradiť zodpovedajúce oprávnenia pre jednotlivé skupiny užívateľov. Odporúčame však premenovať automaticky vytvorenú kategóriu a fórum a pre novo vytvárané kategórie a fóra jednoducho okopírovať oprávnenia . Veľa šťastia pri používaní phpBB3!',

	'FORUMS_FIRST_CATEGORY'		=> 'Automaticky vytvorená kategória',
	'FORUMS_TEST_FORUM_DESC'		=> 'Popis vášho automaticky vytvoreného fóra.',
	'FORUMS_TEST_FORUM_TITLE'	=> 'Automaticky vytvorené fórum',

	'RANKS_SITE_ADMIN_TITLE'		=> 'Administrátor fóra',
	'REPORT_WAREZ'				=> 'Príspevok obsahuje odkazy na nelegálny alebo pirátsky softvér.',
	'REPORT_SPAM'				=> 'Nahlásený príspevok má za účel propagovať inú webovú stránku alebo produkt.',
	'REPORT_OFF_TOPIC'			=> 'Nahlásený príspevok nesúvisí s témou.',
	'REPORT_OTHER'				=> 'Nahlásený príspevok nezapadá do žiadnej z kategórii, prosím vyplňte pole pre ďalšie informácie.',

	'SMILIES_ARROW'				=> 'Šípka',
	'SMILIES_CONFUSED'				=> 'Zmätený',
	'SMILIES_COOL'					=> 'Cool',
	'SMILIES_CRYING'				=> 'Plač',
	'SMILIES_EMARRASSED'			=> 'Hanblivý',
	'SMILIES_EVIL'					=> 'Zlý',
	'SMILIES_EXCLAMATION'			=> 'Výkričník',
	'SMILIES_GEEK'					=> 'Týpek',
	'SMILIES_IDEA'					=> 'Nápad',
	'SMILIES_LAUGHING'				=> 'Smiech',
	'SMILIES_MAD'					=> 'Nahnevaný',
	'SMILIES_MR_GREEN'				=> 'Mr. Green',
	'SMILIES_NEUTRAL'				=> 'Neutrálny',
	'SMILIES_QUESTION'				=> 'Otáznik',
	'SMILIES_RAZZ'					=> 'Vyplazený jazyk',
	'SMILIES_ROLLING_EYES'			=> 'Gúľajúce oči',
	'SMILIES_SAD'					=> 'Smutný',
	'SMILIES_SHOCKED'				=> 'Šokovaný',
	'SMILIES_SMILE'				=> 'Usmiaty',
	'SMILIES_SURPRISED'				=> 'Prekvapený',
	'SMILIES_TWISTED_EVIL'			=> 'Zvrátený',
	'SMILIES_UBER_GEEK'				=> 'Bradatý týpek',
	'SMILIES_VERY_HAPPY'			=> 'Šťastný',
	'SMILIES_WINK'					=> 'Žmurk',

	'TOPICS_TOPIC_TITLE'			=> 'Vitajte v phpBB3',
));

// Common navigation items' translation
$lang = array_merge($lang, array(
	'MENU_OVERVIEW'	=> 'Prehľad',
	'MENU_INTRO'		=> 'Úvod',
	'MENU_LICENSE'		=> 'Licencia',
	'MENU_SUPPORT'		=> 'Podpora',
));

// Task names
$lang = array_merge($lang, array(
	// Install filesystem
	'TASK_CREATE_CONFIG_FILE'	=> 'Vytvorenie konfiguračného súboru',

	// Install database
	'TASK_ADD_CONFIG_SETTINGS'			=> 'Pridanie konfiguračných nastavení',
	'TASK_ADD_DEFAULT_DATA'				=> 'Pridanie východiskových nastavení pre databázu',
	'TASK_CREATE_DATABASE_SCHEMA_FILE'		=> 'Vytvorenie súboru so schémou databázy',
	'TASK_SETUP_DATABASE'				=> 'Nastavenie databázy',
	'TASK_CREATE_TABLES'				=> 'Vytvorenie tabuliek',

	// Install data
	'TASK_ADD_BOTS'		=> 'Registrácia robotov',
	'TASK_ADD_LANGUAGES'	=> 'Inštalácia dostupných jazykov',
	'TASK_ADD_MODULES'		=> 'Inštalácia modulov',

	// Install finish tasks
	'TASK_NOTIFY_USER'			=> 'Odoslanie notifikačného emailu',
	'TASK_POPULATE_MIGRATIONS'	=> 'Uskutočnenie presunov',

	// Installer general progress messages
	'INSTALLER_FINISHED'	=> 'Inštalácia úspešne ukončená',
));

// Installer's general messages
$lang = array_merge($lang, array(
	'MODULE_NOT_FOUND'				=> 'Modul nenájdený',
	'MODULE_NOT_FOUND_DESCRIPTION'	=> 'Modul nebol nájdený pretože služba, %s, nie je definovaná.',

	'TASK_NOT_FOUND'				=> 'Úloha nenájdená',
	'TASK_NOT_FOUND_DESCRIPTION'		=> 'Úloha nebola nájdená pretože služba, %s, nie je definovaná.',

	'SKIP_MODULE'		=> 'Vynechať “%s” modul',
	'SKIP_TASK'		=> 'Vynechať “%s” úlohu',

	'TASK_SERVICE_INSTALLER_MISSING'	=> 'Všetky služby inštalátora musia začínať textom “installer”',
	'TASK_CLASS_NOT_FOUND'			=> 'Definícia služieb inštalátora je nesprávna. Bol odovzdaný názov služby “%1$s” , očakávaný názov je “%2$s”. Ak sa chcete dozvedieť viac informácií, preštudujte si prosím dokumentáciu k task_interface.',

	'INSTALLER_CONFIG_NOT_WRITABLE'	=> 'Konfiguračný súbor inštalátora je chránený proti zápisu.',
));

// CLI messages
$lang = array_merge($lang, array(
	'CLI_INSTALL_BOARD'				=> 'Inštalácia phpBB',
	'CLI_UPDATE_BOARD'				=> 'Aktualizácia phpBB',
	'CLI_INSTALL_SHOW_CONFIG'		=> 'Ukázať konfiguráciu, ktorá bude použitá',
	'CLI_INSTALL_VALIDATE_CONFIG'		=> 'Overiť konfiguračný súbor',
	'CLI_CONFIG_FILE'				=> 'Použiť konfiguračný súbor',
	'MISSING_FILE'					=> 'Nie je možné získať prístup k súboru %1$s',
	'MISSING_DATA'					=> 'Konfiguračný súbor obsahuje neplatné nastavenia konfigurácie alebo v ňom chýbajú potrebné údaje.',
	'INVALID_YAML_FILE'				=> 'Nebolo možné rozpoznať obsah súboru YAML %1$s',
	'CONFIGURATION_VALID'			=> 'Konfiguračný súbor je v poriadku',
));

// Common updater messages
$lang = array_merge($lang, array(
	'UPDATE_INSTALLATION'			=> 'Prechod zo súčasnej na vyššiu verziu phpBB',
	'UPDATE_INSTALLATION_EXPLAIN'		=> 'Pomocou tohto sprievodcu je možné prejsť z aktuálnej verzie, ktorú používate na vyššiu verziu phpBB.<br />Počas procesu aktualizácie bude skontrolovaná integrita všetkých súborov. Pred samotnou aktualizáciou môžete vidieť výpis všetkých nájdených rozdielov.<br /><br />Aktualizácia súboru môže byť vykonaná dvomi spôsobmi.</p><h2>Ručná aktualizácia</h2><p>Pomocou tohto typu aktualizácie With this update you only download your personal set of changed files to make sure you do not lose your file modifications you may have done. After you downloaded this package you need to manually upload the files to their correct position under your phpBB root directory. Once done, you are able to do the file check stage again to see if you moved the files to their correct location.</p><h2>Automatic Update with FTP</h2><p>This method is similar to the first one but without the need to download the changed files and uploading them on your own. This will be done for you. In order to use this method you need to know your FTP login details since you will be asked for them. Once finished you will be redirected to the file check again to make sure everything got updated correctly.<br /><br />',
	'UPDATE_INSTRUCTIONS'			=> '

		<h1>Release announcement</h1>

		<p>Please read the release announcement for the latest version before you continue your update process, it may contain useful information. It also contains full download links as well as the change log.</p>

		<br />

		<h1>How to update your installation with the Automatic Update Package</h1>

		<p>The recommended way of updating your installation listed here is only valid for the automatic update package. You are also able to update your installation using the methods listed within the INSTALL.html document. The steps for updating phpBB3 automatically are:</p>

		<ul style="margin-left: 20px; font-size: 1.1em;">
			<li>Go to the <a href="https://www.phpbb.com/downloads/" title="https://www.phpbb.com/downloads/">phpBB.com downloads page</a> and download the "Automatic Update Package" archive.<br /><br /></li>
			<li>Unpack the archive.<br /><br /></li>
			<li>Upload the complete uncompressed "install" and "vendor" folders to your phpBB root directory (where your config.php file is).<br /><br /></li>
		</ul>

		<p>Once uploaded your board will be offline for normal users due to the install directory you uploaded now present.<br /><br />
		<strong><a href="%1$s" title="%1$s">Now start the update process by pointing your browser to the install folder</a>.</strong><br />
		<br />
		You will then be guided through the update process. You will be notified once the update is complete.
		</p>
	',
));

// Updater forms
$lang = array_merge($lang, array(
	// Updater types
	'UPDATE_TYPE'			=> 'Typ aktualizácie',

	'UPDATE_TYPE_ALL'		=> 'Aktualizovať súbory a databázu',
	'UPDATE_TYPE_DB_ONLY'	=> 'Aktualizovať len databázu',

	// File updater methods
	'UPDATE_FILE_METHOD_TITLE'		=> 'File updater methods',

	'UPDATE_FILE_METHOD'			=> 'File updater method',
	'UPDATE_FILE_METHOD_DOWNLOAD'		=> 'Download modified files in an archive',
	'UPDATE_FILE_METHOD_FTP'			=> 'Update files via FTP (Automatic)',
	'UPDATE_FILE_METHOD_FILESYSTEM'	=> 'Update files via direct file access (Automatic)',

	// File updater archives
	'SELECT_DOWNLOAD_FORMAT'	=> 'Select download archive format',

	// FTP settings
	'FTP_SETTINGS'			=> 'FTP settings',
));

// Requirements messages
$lang = array_merge($lang, array(
	'UPDATE_FILES_NOT_FOUND'	=> 'No valid update directory was found, please make sure you uploaded the relevant files.',

	'NO_UPDATE_FILES_UP_TO_DATE'		=> 'Your version is up to date. There is no need to run the update tool. If you want to make an integrity check on your files make sure you uploaded the correct update files.',
	'OLD_UPDATE_FILES'				=> 'Update files are out of date. The update files found are for updating from phpBB %1$s to phpBB %2$s but the latest version of phpBB is %3$s.',
	'INCOMPATIBLE_UPDATE_FILES'		=> 'The update files found are incompatible with your installed version. Your installed version is %1$s and the update file is for updating phpBB %2$s to %3$s.',
));

// Update files
$lang = array_merge($lang, array(
	'STAGE_UPDATE_FILES'	=> 'Update files',

	// Check files
	'UPDATE_CHECK_FILES'	=> 'Check files to update',

	// Update file differ
	'FILE_DIFFER_ERROR_FILE_CANNOT_BE_READ'	=> 'The file differ failed to open %s.',

	'UPDATE_FILE_DIFF'		=> 'Diffing changed files',
	'ALL_FILES_DIFFED'		=> 'All modified files has been diffed.',

	// File status
	'UPDATE_CONTINUE_FILE_UPDATE'	=> 'Update files',

	'DOWNLOAD'					=> 'Download',
	'DOWNLOAD_CONFLICTS'			=> 'Download merge conflicts archive',
	'DOWNLOAD_CONFLICTS_EXPLAIN'		=> 'Search for &lt;&lt;&lt; to spot conflicts',
	'DOWNLOAD_UPDATE_METHOD'			=> 'Download modified files archive',
	'DOWNLOAD_UPDATE_METHOD_EXPLAIN'	=> 'Once downloaded you should unpack the archive. You will find the modified files you need to upload to your phpBB root directory within it. Please upload the files to their respective locations then. After you have uploaded all files, you may continue with the update process.',

	'FILE_ALREADY_UP_TO_DATE'		=> 'File is already up to date.',
	'FILE_DIFF_NOT_ALLOWED'			=> 'File not allowed to be diffed.',
	'FILE_USED'					=> 'Information used from',			// Single file
	'FILES_CONFLICT'				=> 'Conflict files',
	'FILES_CONFLICT_EXPLAIN'			=> 'The following files are modified and do not represent the original files from the old version. phpBB determined that these files create conflicts if they are tried to be merged. Please investigate the conflicts and try to manually resolve them or continue the update choosing the preferred merging method. If you resolve the conflicts manually check the files again after you modified them. You are also able to choose between the preferred merge method for every file. The first one will result in a file where the conflicting lines from your old file will be lost, the other one will result in losing the changes from the newer file.',
	'FILES_DELETED'				=> 'Deleted files',
	'FILES_DELETED_EXPLAIN'			=> 'The following files do not exist in the new version. These files have to be deleted from your installation.',
	'FILES_MODIFIED'				=> 'Modified files',
	'FILES_MODIFIED_EXPLAIN'			=> 'The following files are modified and do not represent the original files from the old version. The updated file will be a merge between your modifications and the new file.',
	'FILES_NEW'					=> 'New files',
	'FILES_NEW_EXPLAIN'				=> 'The following files currently do not exist within your installation. These files will be added to your installation.',
	'FILES_NEW_CONFLICT'			=> 'New conflicting files',
	'FILES_NEW_CONFLICT_EXPLAIN'		=> 'The following files are new within the latest version but it has been determined that there is already a file with the same name within the same position. This file will be overwritten by the new file.',
	'FILES_NOT_MODIFIED'			=> 'Not modified files',
	'FILES_NOT_MODIFIED_EXPLAIN'		=> 'The following files are not modified and represent the original phpBB files from the version you want to update from.',
	'FILES_UP_TO_DATE'				=> 'Already updated files',
	'FILES_UP_TO_DATE_EXPLAIN'		=> 'The following files are already up to date and do not need to be updated.',
	'TOGGLE_DISPLAY'				=> 'View/Hide file list',

	// File updater
	'UPDATE_UPDATING_FILES'	=> 'Updating files',

	'UPDATE_FILE_UPDATER_HAS_FAILED'	=> 'File updater “%1$s“ has failed. The installer will try to fallback to “%2$s“.',
	'UPDATE_FILE_UPDATERS_HAVE_FAILED'	=> 'The file updater failed. No further fallback methods are available.',

	'UPDATE_CONTINUE_UPDATE_PROCESS'	=> 'Continue update process',
	'UPDATE_RECHECK_UPDATE_FILES'		=> 'Check files again',
));

// Update database
$lang = array_merge($lang, array(
	'STAGE_UPDATE_DATABASE'		=> 'Update database',

	'INLINE_UPDATE_SUCCESSFUL'	=> 'The database update was successful.',
));

// Converter
$lang = array_merge($lang, array(
	// Common converter messages
	'CONVERT_NOT_EXIST'			=> 'The specified convertor does not exist.',
	'DEV_NO_TEST_FILE'			=> 'No value has been specified for the test_file variable in the convertor. If you are a user of this convertor, you should not be seeing this error, please report this message to the convertor author. If you are a convertor author, you must specify the name of a file which exists in the source board to allow the path to it to be verified.',
	'COULD_NOT_FIND_PATH'		=> 'Could not find path to your former board. Please check your settings and try again.<br />» %s was specified as the source path.',
	'CONFIG_PHPBB_EMPTY'		=> 'The phpBB3 config variable for “%s” is empty.',

	'MAKE_FOLDER_WRITABLE'		=> 'Please make sure that this folder exists and is writable by the webserver then try again:<br />»<strong>%s</strong>.',
	'MAKE_FOLDERS_WRITABLE'		=> 'Please make sure that these folders exist and are writable by the webserver then try again:<br />»<strong>%s</strong>.',

	'INSTALL_TEST'				=> 'Test again',

	'NO_TABLES_FOUND'			=> 'No tables found.',
	'TABLES_MISSING'			=> 'Could not find these tables<br />» <strong>%s</strong>.',
	'CHECK_TABLE_PREFIX'		=> 'Please check your table prefix and try again.',

	// Conversion in progress
	'CONTINUE_CONVERT'			=> 'Continue conversion',
	'CONTINUE_CONVERT_BODY'		=> 'A previous conversion attempt has been determined. You are now able to choose between starting a new conversion or continuing the conversion.',
	'CONVERT_NEW_CONVERSION'		=> 'New conversion',
	'CONTINUE_OLD_CONVERSION'	=> 'Continue previously started conversion',

	// Start conversion
	'SUB_INTRO'				=> 'Introduction',
	'CONVERT_INTRO'			=> 'Welcome to the phpBB Unified Convertor Framework',
	'CONVERT_INTRO_BODY'		=> 'From here, you are able to import data from other (installed) board systems. The list below shows all the conversion modules currently available. If there is no convertor shown in this list for the board software you wish to convert from, please check our website where further conversion modules may be available for download.',
	'AVAILABLE_CONVERTORS'		=> 'Available convertors',
	'NO_CONVERTORS'			=> 'No convertors are available for use.',
	'CONVERT_OPTIONS'			=> 'Options',
	'SOFTWARE'				=> 'Board software',
	'VERSION'					=> 'Version',
	'CONVERT'					=> 'Convert',

	// Settings
	'STAGE_SETTINGS'			=> 'Settings',
	'TABLE_PREFIX_SAME'			=> 'The table prefix needs to be the one used by the software you are converting from.<br />» Specified table prefix was %s.',
	'DEFAULT_PREFIX_IS'			=> 'The convertor was not able to find tables with the specified prefix. Please make sure you have entered the correct details for the board you are converting from. The default table prefix for %1$s is <strong>%2$s</strong>.',
	'SPECIFY_OPTIONS'			=> 'Specify conversion options',
	'FORUM_PATH'				=> 'Board path',
	'FORUM_PATH_EXPLAIN'		=> 'This is the <strong>relative</strong> path on disk to your former board from the <strong>root of this phpBB3 installation</strong>.',
	'REFRESH_PAGE'				=> 'Refresh page to continue conversion',
	'REFRESH_PAGE_EXPLAIN'		=> 'If set to yes, the convertor will refresh the page to continue the conversion after having finished a step. If this is your first conversion for testing purposes and to determine any errors in advance, we suggest to set this to No.',

	// Conversion
	'STAGE_IN_PROGRESS'			=> 'Conversion in progress',

	'AUTHOR_NOTES'				=> 'Author notes<br />» %s',
	'STARTING_CONVERT'			=> 'Starting conversion process',
	'CONFIG_CONVERT'			=> 'Converting the configuration',
	'DONE'					=> 'Done',
	'PREPROCESS_STEP'			=> 'Executing pre-processing functions/queries',
	'FILLING_TABLE'			=> 'Filling table <strong>%s</strong>',
	'FILLING_TABLES'			=> 'Filling tables',
	'DB_ERR_INSERT'			=> 'Error while processing <code>INSERT</code> query.',
	'DB_ERR_LAST'				=> 'Error while processing <var>query_last</var>.',
	'DB_ERR_QUERY_FIRST'		=> 'Error while executing <var>query_first</var>.',
	'DB_ERR_QUERY_FIRST_TABLE'	=> 'Error while executing <var>query_first</var>, %s (“%s”).',
	'DB_ERR_SELECT'			=> 'Error while running <code>SELECT</code> query.',
	'STEP_PERCENT_COMPLETED'		=> 'Step <strong>%d</strong> of <strong>%d</strong>',
	'FINAL_STEP'				=> 'Process final step',
	'SYNC_FORUMS'				=> 'Starting to synchronise forums',
	'SYNC_POST_COUNT'			=> 'Synchronising post_counts',
	'SYNC_POST_COUNT_ID'		=> 'Synchronising post_counts from <var>entry</var> %1$s to %2$s.',
	'SYNC_TOPICS'				=> 'Starting to synchronise topics',
	'SYNC_TOPIC_ID'			=> 'Synchronising topics from <var>topic_id</var> %1$s to %2$s.',
	'PROCESS_LAST'				=> 'Processing last statements',
	'UPDATE_TOPICS_POSTED'		=> 'Generating topics posted information',
	'UPDATE_TOPICS_POSTED_ERR'	=> 'An error occurred while generating topics posted information. You can retry this step in the ACP after the conversion process is completed.',
	'CONTINUE_LAST'			=> 'Continue last statements',
	'CLEAN_VERIFY'				=> 'Cleaning up and verifying the final structure',
	'NOT_UNDERSTAND'			=> 'Could not understand %s #%d, table %s (“%s”)',
	'NAMING_CONFLICT'			=> 'Naming conflict: %s and %s are both aliases<br /><br />%s',

	// Finish conversion
	'CONVERT_COMPLETE'			=> 'Conversion completed',
	'CONVERT_COMPLETE_EXPLAIN'	=> 'You have now successfully converted your board to phpBB 3.2. You can now login and <a href="../">access your board</a>. Please ensure that the settings were transferred correctly before enabling your board by deleting the install directory. Remember that help on using phpBB is available online via the <a href="https://www.phpbb.com/support/docs/en/3.3/ug/">Documentation</a> and the <a href="https://www.phpbb.com/community/viewforum.php?f=466">support forums</a>.',

	'CONV_ERROR_ATTACH_FTP_DIR'			=> 'FTP upload for attachments is enabled at the old board. Please disable the FTP upload option and make sure a valid upload directory is specified, then copy all attachment files to this new web accessible directory. Once you have done this, restart the convertor.',
	'CONV_ERROR_CONFIG_EMPTY'			=> 'There is no configuration information available for the conversion.',
	'CONV_ERROR_FORUM_ACCESS'			=> 'Unable to get forum access information.',
	'CONV_ERROR_GET_CATEGORIES'			=> 'Unable to get categories.',
	'CONV_ERROR_GET_CONFIG'				=> 'Could not retrieve your board configuration.',
	'CONV_ERROR_COULD_NOT_READ'			=> 'Unable to access/read “%s”.',
	'CONV_ERROR_GROUP_ACCESS'			=> 'Unable to get group authentication information.',
	'CONV_ERROR_INCONSISTENT_GROUPS'		=> 'Inconsistency in groups table detected in add_bots() - you need to add all special groups if you do it manually.',
	'CONV_ERROR_INSERT_BOT'				=> 'Unable to insert bot into users table.',
	'CONV_ERROR_INSERT_BOTGROUP'			=> 'Unable to insert bot into bots table.',
	'CONV_ERROR_INSERT_USER_GROUP'		=> 'Unable to insert user into user_group table.',
	'CONV_ERROR_MESSAGE_PARSER'			=> 'Message parser error',
	'CONV_ERROR_NO_AVATAR_PATH'			=> 'Note to developer: you must specify $convertor[\'avatar_path\'] to use %s.',
	'CONV_ERROR_NO_FORUM_PATH'			=> 'The relative path to the source board has not been specified.',
	'CONV_ERROR_NO_GALLERY_PATH'			=> 'Note to developer: you must specify $convertor[\'avatar_gallery_path\'] to use %s.',
	'CONV_ERROR_NO_GROUP'				=> 'Group “%1$s” could not be found in %2$s.',
	'CONV_ERROR_NO_RANKS_PATH'			=> 'Note to developer: you must specify $convertor[\'ranks_path\'] to use %s.',
	'CONV_ERROR_NO_SMILIES_PATH'			=> 'Note to developer: you must specify $convertor[\'smilies_path\'] to use %s.',
	'CONV_ERROR_NO_UPLOAD_DIR'			=> 'Note to developer: you must specify $convertor[\'upload_path\'] to use %s.',
	'CONV_ERROR_PERM_SETTING'			=> 'Unable to insert/update permission setting.',
	'CONV_ERROR_PM_COUNT'				=> 'Unable to select folder pm count.',
	'CONV_ERROR_REPLACE_CATEGORY'			=> 'Unable to insert new forum replacing old category.',
	'CONV_ERROR_REPLACE_FORUM'			=> 'Unable to insert new forum replacing old forum.',
	'CONV_ERROR_USER_ACCESS'				=> 'Unable to get user authentication information.',
	'CONV_ERROR_WRONG_GROUP'				=> 'Wrong group “%1$s” defined in %2$s.',
	'CONV_OPTIONS_BODY'					=> 'This page collects the data required to access the source board. Enter the database details of your former board; the converter will not change anything in the database given below. The source board should be disabled to allow a consistent conversion.',
	'CONV_SAVED_MESSAGES'				=> 'Saved messages',

	'PRE_CONVERT_COMPLETE'			=> 'All pre-conversion steps have successfully been completed. You may now begin the actual conversion process. Please note that you may have to manually do and adjust several things. After conversion, especially check the permissions assigned, rebuild your search index which is not converted and also make sure files got copied correctly, for example avatars and smilies.',
));
