<?
//The resource is the intellectual property of isdteam.ru
// Discord: powerpuff_io
// Telegram: powerpuff_io
//wotlk db

// mysql можешь взять с Extazy-wow для постояной проверки онлайна
$lichdbip = "185.63.191.245";
$lichdbuser = "maga";
$lichdbpass = "uT2qT0aT8vuQ";
$lichdbauth = "x50_auth";
$lichdbchar = "x50_characters";
$port       = "3306";

// cюда тоже самое что и выше в конфиге
$host = "185.63.191.245"; // Адрес хоста (обычно localhost )
$login = "maga"; // Логин от БД
$pass = "uT2qT0aT8vuQ"; // Пароль от БД
$bd_char = "x50_characters"; // Имя БД персонажей (обычно characters)
$bd_auth = "x50_auth"; // Имя БД аккаунтов (обычно auth)
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