<?php
include 'connect.php';
if(isset($_POST['submit'])){
  $name=$_POST['name'];
    $email=$_POST['email'];
      $mobile=$_POST['mobile'];
        $password=$_POST['password'];

      $sql="insert into `Crud` (name,email,mobile,password) 
        values('$name','$email','$mobile','$password')";
        $result=mysqli_query($con,$sql);
        if($result){
          //echo "Data inserted successfully";
          header('location:display.php');
        }else{
          die(mysqli_error($con));
        }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <title>Crud Operations</title>
</head>

<body>
  <div class="container">
    <form method="post" class="container-form">

      <h1>Registration</h1>
      <div class="form-group">
        <label>Name</label>
        <input type="text" placeholder="Enter your name" name="name" autocomplete="off">
      </div>
      <div class="form-group">
        <label>Email</label>
        <input type="email" placeholder="Enter your email" name="email" autocomplete="off">
      </div>
      <div class="form-group">
        <label>Mobile</label>
        <input type="text" placeholder="Enter your mobile" name="mobile" autocomplete="off">
      </div>
      <div class="form-group">
        <label>Password</label>
        <input type="password" placeholder="Enter your password" name="password" autocomplete="off">
      </div>
      <button type="submit"  class="btn btn-primary" name="submit">Submit</button>

    </form>

  </div>

</body>

</html>