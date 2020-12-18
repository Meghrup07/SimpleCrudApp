<?php

include 'conn.php';

if(count($_POST)!=0)
{
    extract($_POST);
    $query = "INSERT INTO USER (username, password ) VALUES ('$username', '$password')";
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
    <title>Crud App</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" >
</head>
<body>
<style>
.container{
    margin-top:50px;
}
</style>
   <div class="container">
   <div class="row">
    <div class="col-lg-6 m-auto">
    <form method="post">
    <div class="card">
     <div class="card-header bg-dark">
     <h1 class="text-center text-white">Crud App</h1>
     </div>
    </form>
    <h5><a href="create .php"><input type="button" class="btn btn-primary" value="Create User"></a></h5>
    </div>
   </div>
   </div> 
</body>
</html>