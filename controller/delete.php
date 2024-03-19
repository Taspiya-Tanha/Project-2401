<?php
$id=$_REQUEST['id']??null;
$query= "DELETE FROM info WHERE id=$id";
include "../database/env.php";
$res=mysqli_query($conn, $query);
if($res){ 
    header("Location: ../allPost.php");
  }
?>