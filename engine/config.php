<?
//****База и настройки*****//
date_default_timezone_set ('Europe/Moscow'); // часовой пояс
define("DB_HOST","5.188.231.86"); // хост базы данных
define("DB_USER","sql_19_free"); // пользователь базы данных
define("DB_PASS","123456"); // пароль от базы данных
define("DB_BASE","sql_19_free"); // имя базы данных
@mysql_connect(DB_HOST,DB_USER,DB_PASS)
or die("NO CONNECT FOR DATABASE");
@mysql_select_db(DB_BASE)
or die("ERROR mysql_select_db()");
$maxnews = 10;//Максимально новостей

$account = array (
	'table' => 'accounts',//Таблица с аккаунтами
	'pass' => 'password',//Переменная пароля
	'name' => 'name',//Переменная имени
	'level' => 'level',//Переменная уровня
	'exp' => 'exp',//Переменная Exp
	'cash' => 'cash',//Переменная денег на руках
	'bank' => 'bank',//Переменная денег в банке
	'id' => 'id',//id аккаунта
	'admin' => 'admin',//админка
	'drugs' => 'drugs',//Наркотики
	'sex' => 'sex',//пол
	'skin' => 'model',//скин
	'mail' => 'mail',//Переменная почты
	'datavhod' => 'datavhod',//Переменная даты последнего входа
	'numberphone' => 'phonenumber',//телефон игрока
	'pcash' => 'phonebalance',//денег на телефоне
	'wanted' => 'wanted',//розыск
	'ipreg' => 'regip',//Ip регистрации
	'datareg' => 'datareg',//дата регистрации
	'ipvhod' => 'ipvhod',//Ip последнего входа
	'subnetreg' => 'subnetreg',//Подсеть
	//admin
	'dataadmin' => 'dataadmin',//дата назначение
	'getadmin' => 'getadmin',//Кто поставил
	//скиллы
	'deagle' => 'deserteagle',//скилл дигла
	'shotgun' => 'shotgun',//скилл дробовика
	'mp5' => 'mp5',//скилл mp5
	'ak47' => 'ak47',//скилл ak
	'm4' => 'm4',//скилл m4
	'sdpistol' => 'sdpistol',//скилл sdpistol
	//лицензии
	'vodprava' => 'licenses',//права
	'vertlic' => 'licenses',//полеты
	'vodalic' => 'licenses',//водянка
	'gunlic' => 'licenses',//оружие
	'bizlic' => 'licenses',//биз
	//
	'job' => 'job',//подработка
	'leader' => 'leader',//лидерка
	'member' => 'member',//фракция
	'rank' => 'Rang',//ранг
	'car' => 'veh_number',//тачка
	'house' => 'house',//дом
	'biz' => 'biz',//бизнес
	'online' => 'online',
	'donate' => 'credits',//бизнес
	'warn' => 'warn'//бизнес
	);

$site = array(
	'nameproject' => 'Follow',
	'keywords' => 'начать играть в гта са, гта по сети, андреас, GTA, Grand Theft Auto, самп, samp, sa-mp, гта са, swatch, свотч, s-rp, с-рп, роле плей, RolePlay, сервер, са мп, multiplayer',
	'description' => 'Выбери сам, кем ты хочешь стать в нашей игре'
);
//-------------------------//
?>