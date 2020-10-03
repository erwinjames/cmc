<?php 
require_once("config.php");
if(isset($_POST['submit'])){
		$firstName = $_POST['first_name'];
		$surName = $_POST['surname'];
		$email 	= $_POST['email'];
		$password = $_POST['password'];
		
		$options = array("cost"=>4);
		$hashPassword = password_hash($password,PASSWORD_BCRYPT,$options);
		
		$sql = "insert into users (first_name, last_name,email, password) value('".$firstName."', '".$surName."', '".$email."','".$hashPassword."')";
		$result = mysqli_query($conn, $sql);
		if($result)
		{
			echo "Registration successfully";
		}
	}
?>