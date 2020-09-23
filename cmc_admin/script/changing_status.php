<?php
include "../../includes/connection.php";

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $status = $_GET['status'];

    $stmt = $conn->prepare('UPDATE career SET stats=0 WHERE career_id=?');
    $stmt->bind_param("s",$id);
    $stmt->execute();
if ($stmt == true) {
    header("location:../pages/career_table.php");
}
}

?>