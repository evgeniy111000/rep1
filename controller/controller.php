<?php
	require_once 'model/connectdb.php';
	require_once 'model/model.php';
	
	(empty($_GET['view'])) ? $view = 'main': $view = $_GET['view'];
	
	switch($view)
	{
		case 'main':
			echo model_main().'<br><br/>';
			
			$select_res1 = select_table_users();
			
			$insert_res  = insert_table_users();
			$select_res2 = select_table_users();
			
			$delete_res  = delete_record_user();
			$select_res3 = select_table_users();
			
			$update_res = update_record_user();
			$select_res4 = select_table_users();
			break;
		
		case 'about':
			echo model_about();
			break;
		
		case 'context':
			echo model_context();
			break;
		break;
	}
	
	require_once 'view/'.$view.'_view.html';
?>