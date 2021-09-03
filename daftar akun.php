<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<!-- link css -->
<link rel="stylesheet" type="text/css" href="css/boostap.min.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

<body>
  <!-- header -->
  <div class="container">
   <div class="row">
     <div class="col-sm-4">
      <h3 class="ml-5">  Tambah Data</h3>
      <!-- table -->
      <form role="form" action="proses tambah.php" method="POST">
        
        <div class="form-group">
          <input type="text" name="Nama" id="nama" class="form-control"  placeholder="Nama Lengkap" required>
        </div>

        <div class="form-group"> 
          <input type="Email" name="Email" class="form-control" placeholder="Email" required>
        </div>

        <div class="form-group">
          <input type="text" name="Kata sandi" class="form-control"  placeholder ="Kata sandi"required>
        </div>

        <div class="form-group">
          <input type="number" name="No Hp" class="form-control" placeholder="No Hp" required>
        </div>

        <button type="submit" class="btn btn-sm bg-success" style="float: right; border-radius: 10px; padding:7px 20px">Daftar ></button> 
      </form>        
    </form>
  </body>
  </html>