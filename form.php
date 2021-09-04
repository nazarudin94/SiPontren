<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<link rel="stylesheet" type="text/css" href="css/boostap.min.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/from data.css">

<style>
div{
  margin: 0px;
  padding: 0px;
  top:50px;
  left: 300px; 

}

</style>
<body>
 <div class="container">
   <div class="row">
     <div class="col-sm-4">
      <h3 class="ml-5">From Data</h3>
      <form role="form" action="proses tambah.php" method="POST">
        <div class="form-group">
          <input type="text" name="Nama" id="nama" class="form-control"  placeholder="Nama Depan" required>
        </div>

        <div class="form-group">
          <input type="text" name="Nama" id="nama" class="form-control"  placeholder="Nama Belakang" required>
        </div>
        <div class="form-group"> 
          <input type="text" name="Email" class="form-control" placeholder="Jenis Kelamin" required>
        </div>
        <div class="form-group">
          <input type="text" name="Alamat" class="form-control"  placeholder ="Almat"required>
        </div>

        <div class="form-group">

          <input type="text" name="Asal Sekola" class="form-control" placeholder="Asal Sekolah" required>
        </div>
        <div class="form-group">

          <input type="text" name="Tempat/Tanggal Lahir" class="form-control" placeholder="Tempat/Tanggal Lahir" required>
        </div>

        <div class="form-group">

          <input type="text" name="Nisn/Nomor" class="form-control" placeholder="Nisn/Nomor induk" required>
        </div>


        <button type="submit" class="btn btn-sm bg-success" style="float: right; border-radius: 10px; padding:7px 20px">Daftar</button> 
      </form>        
    </form>
  </div>


</body>
</html>