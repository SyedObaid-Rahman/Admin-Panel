<?php 

include 'connect.php';

if(isset($_POST['submit'])) {
  $name=$_POST['name'];
  $email=$_POST['email'];
  $mobile=$_POST['mobile'];
  $password=$_POST['password'];

 $sql = "insert into crud(name,email,mobile,password)
    values('$name','$email','$mobile','$password')";
$result= mysqli_query($con,$sql);
if($result) {
  //echo "Data Inserted successfully";
  header('location:display.php');
}else{
  die(mysql_error($con));}

}
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>CRUD OPERATION!</title>
  </head>
  <body style="background-image: url('i4.jpg'); background-size:100% 150%;">
    <h1>Welcome to ADMIN PANEL</h1>
    <div class="container my-5">
      <form method="post">
        <div class="mb-3">
          <label>Name</label>
          <input type="text" class="form-control"
          placeholder="Enter your name" name="name"> 
        </div>
        <div class="mb-3">
          <label>Email</label>
          <input type="email" class="form-control"
          placeholder="Enter your Email" name="email"> 
        </div>
        <div class="mb-3">
          <label>Mobile</label>
          <input type="text" class="form-control"
          placeholder="Enter your mobile number" name="mobile"> 
        </div>
        <div class="mb-3">
          <label>Password</label>
          <input type="text" class="form-control"
          placeholder="Enter your password" name="password"> 
        </div>
    
        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
      </form>
    </div>
  </body>
</html>