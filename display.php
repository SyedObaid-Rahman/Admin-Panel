<?php 

include 'connect.php';
?>

<!DOCTYPE html>
<html>
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>CRUD OPERATION!</title>
  </head>
<body style="background-image: url('i5.jpg'); background-size:100% 150%;">
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Admin Panel</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contacts</a>
        </li>
 
      </ul>
    </div>
  </div>
</nav>
	<div class="container my-5">
		<button type="submit" class="btn btn-primary" name="Add User">
			<a href="user.php" class="text-light">Add User</a>
		</button>
		<table class="table">
  <thead>
    <tr>
      <th scope="col">SL no</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Mobile</th>
      <th scope="col">Password</th>
      <th scope="col">Operations</th>
    </tr>
  </thead>
  <tbody>


<?php  

$sql = "select * from crud";
$result = mysqli_query($con,$sql);
if ($result) {
	while ($row = mysqli_fetch_assoc($result)) {
		$id = $row['id'];
		$name = $row['name'];
		$email = $row['email'];
		$mobile = $row['mobile'];
		$password = $row['password'];
	echo '<tr>
      <th scope="row">'.$id.'</th>
      <td>'.$name.'</td>
      <td>'.$email.'</td>
      <td>'.$mobile.'</td>
      <td>'.$password.'</td>
      <td>
		<button class="btn btn-primary"><a href="update.php? updateid='.$id.'" class="text-light">Update</a></button>
		<button class="btn btn-danger"><a href="delete.php? deleteid='.$id.'" class="text-light">Delete</a></button>
     </td>
    </tr>';
		
	}	
}

?>


  </tbody>
</table>
	</div>

</body>
</html>