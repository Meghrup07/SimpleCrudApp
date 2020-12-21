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
    <div class="col-lg-12">
    
                <table class="table">
            <thead class="thead-dark">
                <tr>
                <th scope="col">ID</th>
                <th scope="col">UserName</th>
                <th scope="col">Password</th>
                <th scope="col">Delete</th>
                <th scope="col">Update</th>
                </tr>
            </thead>
          
            <?php
            include 'conn.php';
            $query = "SELECT * FROM USER";
            $result = mysqli_query($conn, $query);
            while($res = mysqli_fetch_array($result))
            {
            ?>
            
            <tbody>
                <tr>
               
                <td><?php echo $res['id']?></td>
                <td><?php echo $res['username']?></td>
                <td><?php echo $res['password']?></td>
                <td><a href="delete.php?id=<?php echo $res['id']?>"><input type="button" class="btn btn-primary" value = "Delete"></a></td>
                <td><a href="update.php?id=<?php echo $res['id']?>"><input type="button" class="btn btn-primary" value = "Update"></a></td>
                </tr>  
            </tbody>
            <?php 
            }
            ?>
            </table>
         <a href="create.php"><input type="button" class="btn btn-primary" value = "Create User" style="margin:50px 10px; float: right;"></a>
    </div>
    </div>
    </div>
</body>
</html>