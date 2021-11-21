<?php

/**	В браузере должна быть выставлена кодировка: UTF-8
* Имеется БД: dbnew
* В БД есть таблица: users
* В таблице users есть поля: ID, Name, Surname, Patronymic, Age
*/
	$host = 'localhost';
	$user = 'root';
	$pass = '';
	$dbname = 'dbnew';
	
	$connect = @mysql_connect($host, $user, $pass);
	
	if (!mysql_select_db($dbname, $connect))  
		die('Ошибка соединения с БД: '.$dbname);
	
	@mysql_set_charset('utf8');
?>