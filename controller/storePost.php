<?php

session_start();
$title=$_REQUEST['title'];
$detail=$_REQUEST['detail'];
$author=$_REQUEST['author']; 

$_SESSION['title_error']=$title;
$_SESSION['detail_error']=$detail;
$_SESSION['author_error']=$author;



$errors=[];
 
if(empty($title)){
    $errors['title_error']="Please enter your Title";
}


if(empty($detail)){
    $errors['detail_error']="Please enter your Details";
}elseif(strlen($detail)>20){
    $errors['detail_error']=" details must be less then 20 words ";
}

 
if(empty($author)){
    $errors['author_error']="Please enter author name";
}

if(count($errors)>0)
{
    $_SESSION['old']=$_REQUEST;
    $_SESSION['errors']=$errors;
    header("Location: ../index.php");
}
else{
    include "../database/env.php";
   $query= "INSERT INTO info(title, detail, author) VALUES ('$title','$detail','$author') " ;
  $res= mysqli_query($conn , $query);
  if($res){ 
    header("Location: ../index.php");
  }
   
}
?>