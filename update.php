<?php

include 'conn.php';

if(count($_POST)!=0)
{
    extract($_POST);
    extract($_GET);
    $query= "UPDATE USER SET username= '$username', password='$password' WHERE id= '$id'";
    $result = mysqli_query($conn, $query);

    if($result == true)
    {
       

    }

    else 
    {
        
    }

}



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" >
</head>
<body>
   <div class="container">
   <div class="row">
    <div class="col-lg-6 m-auto">
    <form method="post">
    <div class="card">
     <div class="card-header bg-dark">
     <h1 class="text-center text-white">Update User</h1>
     </div>
     <div class="form-group">
     <label for="username">UserName</labe></br>
     <input type="text" class="from-control" name="username">
     </div>
     <div class="form-group">
     <label for="password">Password</labe></br>
     <input type="text" class="from-control" name="password">
     </div>
    <button type="submit" class="btn btn-success">Submit</button>
    </div>
    </form>
    <h5><a href="display.php"><input type="button" class="btn btn-primary" value="View User"></a></h5>
    </div>
   </div>
   </div> 
</body>
</html>