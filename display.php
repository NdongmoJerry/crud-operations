<?php
include 'connect.php';
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
  <div >
    <button  class="btn btn-primary my-5"><a href="user.php" class="text-light">Add User</a></button>
    <table class="table table-striped table-bordered">
  <thead>
    <tr>
      <th>Si no</th>
      <th>Name</th>
      <th>Email</th>
      <th>Mobile</th>
      <th>Password</th>
      <th>Operations</th>
    </tr>
  </thead>
  <tbody>

    <?php
      $sql="Select * from `Crud`";
      $result=mysqli_query($con,$sql);
      if($result){
        while($row=mysqli_fetch_assoc($result)){
          $id=$row['id']; 
          $name=$row['name']; 
          $email=$row['email']; 
          $mobile=$row['mobile']; 
          $password=$row['password'];
          echo '<tr>
          <td>'.$id.'</td>
          <td>'.$name.'</td>
          <td>'.$email.'</td>
          <td>'.$mobile.'</td>
          <td>'.$password.'</td>
          <td>
    <button class="btn btn-primary"><a href="update.php? updateid='.$id.'" class="text-light">Update</a></button>
    <button class="btn btn-danger"><a href="delete.php? deleteid='.$id.'" class="text-light">Delete</a></button>
    </td>

          </tr>' ;
        }
      }
    ?>
  </tbody>
</table>
</div>
</body>

</html>