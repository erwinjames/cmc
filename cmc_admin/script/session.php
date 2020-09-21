<?php
	session_start();
	include('../../includes/connection.php.php');
	
	if (!isset($_SESSION['user_id']) ||(trim ($_SESSION['user_id']) == '')) {
	header('location:../index.php');
    exit();
	}
	$stmt="select * from `cmc_admin` where cmc_id='".$_SESSION['user_id']."'";
    $stmt = $conn->prepare($stmt);
    $user = $stmt->fetch();
    $id=$user['user_id'];
    $type=$user['admin_type'];

?>