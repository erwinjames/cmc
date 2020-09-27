<?php
 error_reporting( ~E_NOTICE ); 
 include "../../includes/connection.php";
 session_start();
 if(isset($_POST['postNews']))
 {
  $newsTitle = $_POST['newsTitle'];
  $news_short_description = $_POST['shortDescription'];
  $news_full_content = $_POST['fullDescription'];
  $author = $_SESSION['name'];
  
  $imgFile = $_FILES['user_image']['name'];
  $tmp_dir = $_FILES['user_image']['tmp_name'];
  $imgSize = $_FILES['user_image']['size'];
  
  if(empty($newsTitle)){
   $errMSG = "Please Enter Title.";
  }
  else if(empty($news_short_description)){
   $errMSG = "Please Enter Your Description.";
  }
  else if(empty($news_full_content)){
    $errMSG = "Please Enter Your Full Content.";
   }
  else if(empty($imgFile)){
   $errMSG = "Please Select Image File.";
  }
  else
  {
   $upload_dir = '../../images/post_news/'; 
 
   $imgExt = strtolower(pathinfo($imgFile,PATHINFO_EXTENSION)); 

   $valid_extensions = array('jpeg', 'jpg', 'png', 'gif');
  
   $userpic = rand(1000,1000000).".".$imgExt;
    
   if(in_array($imgExt, $valid_extensions)){   

    if($imgSize < 5000000)    {
     move_uploaded_file($tmp_dir,$upload_dir.$userpic);
    }
    else{
     $errMSG = "Sorry, your file is too large.";
    }
   }
   else{
    $errMSG = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";  
   }
  }
  
  if(!isset($errMSG))
  {
   $stmt = $conn->prepare('INSERT INTO blog(news_title,news_short_description,news_full_content,news_author,news_published_on,news_image) VALUES(?, ?, ?, ?, now(), ?)');
   $stmt->bind_Param('sssss',$newsTitle,$news_short_description,$news_full_content,$author,$userpic);
   
   if($stmt->execute())
   {
    $successMSG = "new record succesfully inserted ...";
    header("location:../pages/mrdo/home.php");
   }
   else
   {
    $errMSG = "error while inserting....";
   }
  }
 }
?>