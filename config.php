<?php
// set your time zone:
date_default_timezone_set('Europe/Paris');

// set locale (see supported locales: https://github.com/fightbulc/moment.php#switch-locale)
// format Date and Time
$config['locale'] = 'en_US';



// User Changable Languages
$config['availablelanguages'] = array(
"English" => "en",
"Deutsch" => "de",
"Español" => "es",
"Nederlands" => "nl",
"Hrvatski" => "hr",
//"British English" => "en_GB",
//"American English" => "en_US",
//"&Ouml;sterreichisches Deutsch" => "de_AT",
//"Schweizerdeutsch" => "de_CH",
//"Deutsch (Deutschland)" => "de_DE",
//"Deutsch (Liechtenstein)" => "de_LI",
//"Deutsch (Luxembourg)" => "de_LU",
//"Español (europeo)" => "es_ES",
);

// enable or disable Ads
// (edit the Ads-Code in usercontent.php)
$config['adsActive'] = "1";

// Show (1) or Hide (0) a List of All avaible Domains
$config['DomainActive'] = "1";



// enable in production:
error_reporting(0);


// enable while testing:
//ini_set('display_errors', 1);
//ini_set('display_startup_errors', 1);
//error_reporting(E_ALL);


// Change IMAP settings (check SSL flags on http://php.net/manual/en/function.imap-open.php)
$config['imap']['url'] = 'imap.gmail.com';
$config['imap']['username'] = "easella123@gmail.com";
$config['imap']['password'] = "makoshark19";

// For gmail you can use '{imap.gmail.com:993/imap/ssl}INBOX'
// and follow the troubleshooting at:
// https://stackoverflow.com/a/25238515/79461

// email domains, usually different from imap hostname:
$config['domains'] = array('mydomain.com', 'example.com','herokuapp.com');

// When to delete old messages?
$config['delete_messages_older_than'] = '30 days ago';


// Mails to those usernames can not be accessed:
$config['blocked_usernames'] = array(
'root',
'admin', 
'administrator', 
'hostmaster', 
'postmaster', 
'webmaster', 
'abuse', 
'ftp', 
'mysql', 'mysql-root', 
'oracle',
'info', 'guest', 'test', 'example', 'demo', 'default', 'user', 'username',
'noreply', 'reject',
'john.doe', 'johndoe', 'john', 
'jane.doe', 'janedoe', 'jane', 
);

// Mails are usually show as Text and only if not available as HTML. You can turn this around to prefer HTML over text.
$config['prefer_plaintext'] = true;

