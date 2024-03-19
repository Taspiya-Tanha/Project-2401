<?php

session_start();

$id=$_REQUEST['id'];
$title=$_REQUEST['title'];
$detail=$_REQUEST['detail'];
$author=$_REQUEST['author']; 




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
   
    $_SESSION['errors']=$errors;
    header("Location: ../editPost.php?id=$id");
}
else{
    include "../database/env.php";
   $query= "UPDATE info SET title='$title',detail='$detail',author='$author' WHERE id=$id " ;
  $res= mysqli_query($conn , $query);
  if($res){ 
    header("Location: ../allPost.php");
  }
   
}
?>