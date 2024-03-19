<?php
session_start();

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
  <div class="col-lg-5 mx-auto mt-5"> 
    <div class="card">
  <div class="card-header">Add post</div>
  <div class="card-body">
    <form  method="POST" action="./controller/storePost.php">
      <input value="<?=$_SESSION['old'] ['title']??null ?>"name="title" type="text" placeholder="Post Title" class="form-control mt-3">
      <span class="text-danger"> 
      <?=$_SESSION['errors']['title_error']?? null?>
     </span>
      <textarea name="detail" placeholder="post Detail" class="form-control mt-3"><?=$_SESSION['old'] ['detail']??null ?></textarea>
      <span class="text-danger">  
      <?=$_SESSION['errors']['detail_error']?? null?>
     </span>
      <input value="<?=$_SESSION['old'] ['author']?? null ?>"  name="author" placeholder="Author Name" class="form-control mt-3">
      <span class="text-danger"> 
      <?=$_SESSION['errors']['author_error']?? null?>
     </span>
      <button class="btn btn-primary w-100 mt-3">Submit Post</button>
    </form>
  </div>
</div>
</div>

</main>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" ></script>
</html>
<?php
session_unset();