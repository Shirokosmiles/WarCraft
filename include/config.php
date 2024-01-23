<?
//The resource is the intellectual property of isdteam.ru
// Discord: powerpuff_io
// Telegram: powerpuff_io
//wotlk db
$lichdbip = "localhost";
$lichdbuser = "trinity";
$lichdbpass = "trinity";
$lichdbauth = "auth";
$lichdbchar = "characters";
$webdb = "warcraft";


$host = "localhost"; // Адрес хоста (обычно localhost )
$login = "trinity"; // Логин от БД
$pass = "trinity"; // Пароль от БД
$bd_char = "characters"; // Имя БД персонажей (обычно characters)
$bd_auth = "auth"; // Имя БД аккаунтов (обычно auth)
$bd_world = "world";
$bd_web = "warcraft";
$bd_forum = "forum";
$charset = "utf8mb4";
$port = "8085"; // Порт (обычно 8085)

include 'main.php';
$forum = "$row[forum]";
$settings = array(
  'forum' => "$forum",
  'developer' => 'ISD Team'
);


// ID merchant ENOT.IO
$merchant_id = 0000;
// Secret key 1 ( в лк енот как "Секретный пароль" )
$secret_key1 = '123';
// Secret key 2 ( в лк енот как "Дополнительный ключ" )
$secret_key2 = '123';
// Bonus valence 1 bonus = 
$colbonus = 10;
// for a store in your personal account (not used)
//$config = [
//	'dbhost' => '1123',
//	'dbuser' => 'nighthold.pro',
//	'dbpass' => '123',
//	'dbname' => 'auth',
//	'dbport' => 3306
?>