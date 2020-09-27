<?php
include "../../includes/connection.php";
session_start();

if (isset($_POST['login'])) {
    $user_name = mysqli_real_escape_string($conn, $_POST["username"]);
    $user_password = mysqli_real_escape_string($conn, $_POST["password"]);
    
    if ($user_name == '' || $user_password== '') {
        $msg = "please fill up form";
    } else {
if ($stmt = $conn->prepare('SELECT cmc_id, cmc_password, admin_type FROM cmc_admin WHERE cmc_username = ?')) {

	$stmt->bind_param('s', $_POST['username']);
	$stmt->execute();
	$stmt->store_result();
    if ($stmt->num_rows > 0) {
        $stmt->bind_result($id, $password,$admin_type);
        $stmt->fetch();
        if ($_POST['password'] === $password) { 
            session_regenerate_id();
            $_SESSION['loggedin'] = TRUE;
            $_SESSION['name'] = $_POST['username'];
            $_SESSION['id'] = $id;
            $_SESSION['type']=$admin_type;
        
            if ($_SESSION['type']=='Hr') {
                header("location:../pages/hr/home.php");
            }
            elseif($_SESSION['type']=='Mrdo'){
                header("location:../pages/mrdo/home.php");
            }
        } else {
            echo 'Incorrect username and/or password!';
        }
    } else {  
        echo 'Incorrect username and/or password!';
    }
	$stmt->close();
}

    }
}
?>