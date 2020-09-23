<?php
include "../../includes/connection.php";
session_start();

if(isset($_POST['postCareer'])){
    
    $career_title = $_POST['careerTitle'];
    $career_description=$_POST['careerDescription'];
    $career_qualification=$_POST['careerQualification'];

    $stmt = $conn->prepare('INSERT INTO career (career_title, career_description, career_qualification, career_date, stats) VALUES(?, ?, ?, now(), 1)');
    $stmt->bind_param("sss", $career_title, $career_description, $career_qualification);
    $stmt->execute();
    if ($stmt==true) {
       header("location:../pages/home.php");
    }
    else{
        echo "<script>
                    alert('not inserted');
             </script>";
    }
  
}

?>