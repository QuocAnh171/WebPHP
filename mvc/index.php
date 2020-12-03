<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="style.css">
	<title>Quản lý sản phẩm</title>
</head>
<body>
</body>
</html>
<?php
	include "Model/DBconfig.php";
	$db = new Database;
	$db->connect();

	if(isset($_GET['controller']))
	{
		$controller = $_GET['controller'];
		require_once('Controller/index.php');
	}
	else{
		$tblTable = "myguests";
		$data = $db->getAllData($tblTable);
		require_once('View/list_customer.php');
	}

	
	
?>