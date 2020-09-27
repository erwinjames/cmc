<?php
include "../../includes/connection.php";

if (isset($_GET['id'])) {
  $id=$_GET['id'];
  $stmt_delete = $conn->prepare('DELETE FROM blog WHERE news_id =?');
  $stmt_delete->bind_param('s',$id);
  $stmt_delete->execute();
  
  header("Location: ../pages/mrdo/news_table.php");

}
?>