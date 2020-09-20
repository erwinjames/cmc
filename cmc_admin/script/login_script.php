<?php
include "../../includes/connection.php";
session_start();
// Checking if login button is clicked or not
if(isset($_POST['login'])){
    
        // Assigning values to variables fetched from URL
        $user_name = mysqli_real_escape_string($conn,$_POST["username"]);
        $user_password = mysqli_real_escape_string($conn,$_POST["password"]);
        // Prepare the query
        $stmt = "SELECT cmc_username,cmc_password FROM cmc_admin WHERE cmc_username=? and cmc_password= ?";
        $stmt = $conn->prepare($stmt);
        // Bind parameters s - string, b - boolean, i - int, etc
        $stmt->bind_param("ss",$user_name,$user_password);
        // Execute SQL
        $stmt->execute();
        // Store result
        $stmt->store_result();
        // Bind the result
        $stmt->bind_result($user_name, $user_password);

        $user = $stmt->fetch();

        if ($user==true) {

            echo $user["cmc_id"] ?? 'default value';
            echo $user["admin_type"] ?? 'default value';
        //     header('location:../pages/home.php');
            exit;

        }else{
                echo "wrong";
        }  
}
?>