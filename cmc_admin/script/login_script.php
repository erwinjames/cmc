<?php
include "../../includes/connection.php";
session_start();

if (isset($_POST['login'])) {
    $user_name = mysqli_real_escape_string($conn, $_POST["username"]);
    $user_password = mysqli_real_escape_string($conn, $_POST["password"]);
    
    if ($user_name == '' || $user_password== '') {
        $msg = "please fill up form";
    } else {
        $stmt = "SELECT * FROM cmc_admin WHERE cmc_username=? and cmc_password=?";
        $stmt = $conn->prepare($stmt);
        $stmt->bind_param("ss", $user_name, $user_password);
        $stmt->execute();
        $stmt->store_result();
        $stmt->bind_result($user_name, $user_password);
        $user = $stmt->fetch();
        if ($user!==false) {
            // $_SESSION['id']=$user[0];
            $_SESSION['username'] = $user_name;
            if ($_SESSION['username']=='erwin') {
                # code...
                header('location:../pages/hr/home.php');
                exit;
            }elseif($_SESSION['username']=='mrdo'){
                header('location:../pages/mrdo/home.php');
                exit;
            }
            
        } else {
            echo "invalid something";
        }
    }
}
?>