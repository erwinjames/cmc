<?php
include "../../includes/connection.php";
session_start();

if(isset($_POST['login'])){
    
      
        $user_name = mysqli_real_escape_string($conn,$_POST["username"]);
        $user_password = mysqli_real_escape_string($conn,$_POST["password"]);
    
        $stmt = "SELECT * FROM cmc_admin WHERE cmc_username=? and cmc_password= ?";
        $stmt = $conn->prepare($stmt);
        $stmt->bind_param("ss",$user_name,$user_password);
        $stmt->execute();
        $stmt->store_result();
        $stmt->bind_result($user_name, $user_password);
        $user = $stmt->fetch();
        if ($user==true) {
         
             $_SESSION["cmc_id"]= $user["cmc_id"];
             $_SESSION["cmc_name"] = $user_name;
            header('location:../pages/home.php');
            exit;
        }else{
                echo "wrong";
        }  
}
?>