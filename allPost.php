<?php
session_start();
include "./database/env.php";
$query= "SELECT * FROM info ";
$res=mysqli_query($conn,$query);
$info= mysqli_fetch_all($res,1);
?>

<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New project</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
   
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="" aria-controls="" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="">
      <ul class="navbar-nav m-auto mb-2 mb-lg-0">
        
        <li class="nav-item">
          <a class="nav-link " aria-current="page" href="./index.php">Add post</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " aria-current="page" href="./allPost.php">All post</a>
        </li>
      </ul> 

    </div>
  </div>
</nav>
<main>
  <div class="col-lg-8 mx-auto mt-8"> 
    <table class="table">
        <tr>
         <th>#</th>
         <th>author</th>
         <th>title</th>
         <th>detail</th>
         <th>action</th>

        </tr>
<?php
if(count($info)>0){
foreach($info as $key=> $information){

    ?>
    <tr>
    <td><?=++$key?></td>
    <td> <img style="width: 80px; height: 80px; border-radius:50%;" src="https://api.dicebear.com/8.x/initials/svg?seed=<?=$information['author']?>" alt=""> </td>
    <td><?=$information['title']?></td>
    <td><?=$information['detail']?></td>
    <td>
      <div class="btn group">
          <a href="./editPost.php?id=<?=$information['id']?>" class="btn btn-primary btn-sm">Edit</a><a href="./controller/delete.php?id=<?=$information['id']?> " class="btn btn-danger btn-sm">Delete</a>
      </div>
    </td>
      </tr>
      
    <?php
}
}else{
  ?> 
  <tr>
      <td class="text-center" colspan="5">No Post Yet</td>
    </tr>
    
    <?php

}
?>
        
    </table>
    
  
</div>


</main>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" ></script>
</html>