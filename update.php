<?php

include 'connect.php';
$id=$_GET['updateid'];
$sql="Select * from `crud` where id=$id";
$res=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($res);
$name=$row['name'];
$email=$row['email'];
$mobile=$row['mobile'];
$password=$row['password'];

if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $password=$_POST['password'];

    $sql="update `crud` set id=$id, name='$name', email='$email', mobile='$mobile', password='$password' where id=$id";
    $res=mysqli_query($conn,$sql);
    if($res){
        
        header("location:display.php");
    }else {
        die(mysqli_error($res));
    }
}

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" 
     rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM"
     crossorigin="anonymous">


    <title>Crud Operation</title>
  </head>
  <body>

   
    
    <div class="container my-5">

    <form method="post">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Name</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" 
    placeholder="Enter your name" name="name" autocomplete="off" value=<?php echo $name; ?> >
    
  </div>


  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" 
    placeholder="Enter your email" name="email" autocomplete="off" value=<?php echo $email; ?>>
    
  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Mobile</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" 
    placeholder="Enter your mobile" name="mobile" autocomplete="off" value=<?php echo $mobile; ?>>
    
  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" 
    placeholder="Enter your password" name="password" autocomplete="off" value=<?php echo $password; ?>>
    
  </div>





 
  <button type="submit" class="btn btn-primary" name="submit" >Update</button>
</form>




    </div>
  </body>
</html>