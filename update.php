<?php
include 'connect.php';
$id=$_GET['updateid'];
$sql="select * from`Crud` where id=$id";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
$name=$row['name'];
$email=$row['email'];
$mobile=$row['mobile'];
$password=$row['password'];




if(isset($_POST['submit'])){
  $name=$_POST['name'];
    $email=$_POST['email'];
      $mobile=$_POST['mobile'];
        $password=$_POST['password']; 
      $sql="update `Crud` set id=$id,name='$name',email='$email',mobile='$mobile',password='$password' where id=$id";
        $result=mysqli_query($con,$sql);
        if($result){
          //echo "updated successfully";
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
        <input type="text" placeholder="Enter your name" name="name" autocomplete="off" value=<?php
        echo $name;?>>
      </div>
      <div class="form-group">
        <label>Email</label>
        <input type="email" placeholder="Enter your email" name="email" autocomplete="off" value=<?php
        echo $email;?>>
      </div>
      <div class="form-group">
        <label>Mobile</label>
        <input type="text" placeholder="Enter your mobile" name="mobile" autocomplete="off" value=<?php
        echo $mobile;?>>
      </div>
      <div class="form-group">
        <label>Password</label>
        <input type="text" placeholder="Enter your password" name="password" autocomplete="off" value=<?php
        echo $password;?>>
      </div>
      <button type="submit"  class="btn btn-primary" name="submit">Submit</button>

    </form>

  </div>

</body>

</html>