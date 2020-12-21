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
.btn-primary{
    margin:10px 130px;
    width:50%;
}
.btn-secondary{
    margin:10px 130px;
    width:50%;
    background-color:#007bff;
    border-color: #007bff;
}
.btn-secondary:hover{
    background-color:#0572e8;
    border-color: #0572e8;
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
    <h5><a href="create.php"><input type="button" class="btn btn-primary" value="Create User"></a></h5>
    <h5><a href="display.php"><input type="button" class="btn btn-secondary" value="View User"></a></h5>
    </div>
   </div>
   </div> 
</body>
</html>
