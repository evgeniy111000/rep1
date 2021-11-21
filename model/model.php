<?php
	function model_main()
	{
		return 'Отработала функция: model_main';
	}
	function model_context()
	{
		return 'Отработала функция: model_context';
	}
	function model_about()
	{
		return 'Отработала функция: model_about';
	}
	
	function get_user_names()
	{
		$query = 'select * from users';
		$query_result = mysql_query($query); $result = '';
		
		while($row = mysql_fetch_array($query_result))
		{
			$result .= $row['Surname'].' '.$row['Name'];
			$result .= '<br>';
		}
		return $result;
	}
	
	function select_table_users()
	{
		$query = 'select * from users';
		$query_result = mysql_query($query); $result = '';
		$counts = 0;
		$result .= '<table border=1><tr>'.
			 '<td>ID</td><td>Name</td><td>Surname</td><td>Patronymic</td>'.
			 '<td>Age</td></tr>';
		
		while($row = mysql_fetch_array($query_result))
		{
			$result .= '<tr><td>'.$row['ID'].'</td><td>'.$row['Name'].'</td>'.
					   '<td>'.$row['Surname'].'</td><td>'.$row['Patronymic'].'</td>'.
					   '<td>'.$row['Age'].'</td></tr>';
			$counts++;
			
		}
		$result .= '</table>';
		$result .= '<br/>Кол-во записей: '.$counts;
		$result = '<h4>Отработал запрос SELECT</h4>'.$result;
		
		return $result;
	}
	
	function insert_table_users()
	{
		$age_rand = rand(0,1000);
		$query = 'INSERT INTO users SET Name=\'Михаил\', '
				 .'Surname=\'Захаров\', Patronymic=\''
				 .'Николаевич\', Age=\''.$age_rand.'\'';
		mysql_query($query);
		return  '<h4>Отработал запрос INSERT</h4>'
			    .'<h5>User с возрастом <u><i>'.$age_rand.'</i></u> добавлен.</h5>';
		
	}
	
	function update_record_user()
	{
		$names = array(
				'Олег', 'Григорий', 'Владимир', 
				'Александр', 'Евгений', 'Тимофей', 
				'Дмитрий', 'Юрий', 'Николай');
		
		$query = 'UPDATE users SET Name=\''.$names[mt_rand(0, count($names) - 1)]
		         .'\' WHERE Age=\'10\'';
		mysql_query($query);
		return '<h4>Отработал запрос UPDATE</h4>'
		       .'<h5>Обновлено имя user\'а с фамилией Петров</h5>';
	}
	
	function delete_record_user()
	{
		$query = 'DELETE FROM users WHERE Name=\'Михаил\''
				 .' AND Surname=\'Захаров\' AND Patronymic=\'Николаевич\'';
		mysql_query($query);
		
		return '<h4>Отработал запрос DELETE</h4>';
	}
?>