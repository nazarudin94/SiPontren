
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<!-- link css -->
<link rel="stylesheet" type="text/css" href="fontawose/css/all.min.css">
<link rel="stylesheet" type="text/css" href="css/login.css">
<link rel="stylesheet" href="css/bootstrap.min.css">

<body class="bg-body">
	<div class="container">
		<div class="row d-flex justify-content-center " style="margin-top: 80px;">
			<div class ="col-md-6 d-flex justify-content-center" style="margin-top: inherit;">
				<img src="/img/logo.png" width="300px" height="300px">
						</div>
			<div class="col-md-6 d-flex justify-content-center">

				
				<div class="card kotak" style="width: 18rem;">
					<div class="d-flex justify-content-center">
						<h1>LOGIN</h1>
						<!-- <img   src="img/logo.png" style="width: 126px;"> -->
					</div>
						<hr>
					<div class="card-body " >

						<form method="POST" action="masuk.php"> 
							<label for="Password">User Name</label>
							<div class="input-group mb-3">

								<div class="input-group-prepend">
									<span class="input-group-text" id="basic-addon1"><i class="fa fa-id-card" aria-hidden="true"></i></span>
								</div>
								<input type="text" name="username" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" required>
							</div>
							<div class="form-group">
								<label for="Password">Password</label>
								<div class="input-group mb-3">

									<div class="input-group-prepend">
										<span class="input-group-text" id="basic-addon1"><i class="fa fa-key" aria-hidden="true"></i></span>
									</div>
									<input name="password" type="Password" class="form-control" placeholder="Password" aria-label="Username" aria-describedby="basic-addon1" required>
								</div>
							</div>
							<p>*Silahkan Klik Daftar Jika Anda Belum Punya Akun</p>
							<div class=" d-inline p-2" >

								<button type="submit" class="btn btn-success">Login</button>
							</div>
							<div class="d-inline p-2">

								<a class="btn btn-warning" href="daftar akun.php">Daftar</a>
							</div>

						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
