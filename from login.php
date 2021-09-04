<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<!-- link css -->
<link rel="stylesheet" type="text/css" href="fontawose/css/all.min.css">
<link rel="stylesheet" type="text/css" href="css/from registrasi.css">
<!-- <link rel="stylesheet" type="text/css" href="css/boostrap.min.css"> -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<body class="bg-body">

	<div class="container">
		
	<div class="row d-flex justify-content-center" style="    margin-top: 58px;" >
    <div class="card w-50">
    
  <div class="card-body">
    <h5 class="card-title"><center>Registrasi</center></h5>
    
		<form action="login.php" action="POST">
  <div class="form-group">
    <label for="exampleInputEmail1">Nama</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukin Nama" required>
    <small id="emailHelp" class="form-text text-muted"></small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Alamat Email</label>
    <input type="Email" class="form-control" id="exampleInputPassword1" placeholder="Masukin Email" required>
  </div>
   <div class="form-group">
    <label for="exampleInputPassword1">Username</label>
    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Masukin Username" required>
  </div>
   <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" required >
  </div>
   <div class="form-group">
    <label for="exampleInputPassword1">Re-Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Re-Password" required>
  </div>
  <button type="submit" class="btn btn-primary">Register</button>
<a class="btn btn-primary" href="login.php">Cancel</a>
</form>
  </div>
</div>
</div>
	</div>
	</div>
</body>
</html>
