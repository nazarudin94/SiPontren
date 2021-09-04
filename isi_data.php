<?php
// Check session state
session_start();
if (empty($_SESSION['username'])) {
header("location:login.php");
}
// die()
// print($_SESSION['username']);
?>
<!DOCTYPE html>
<html>
<head>
  <title>Selamat Datang Di Pendaftaran Pesantren</title>
</head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<body>
  <!-- header -->
  <div class="container">
    <div class="wrap">
      <img src="img/header.jpeg" width="1110px" height="180px"></div><br/>
      <!-- <div class="wrap" style="background-color:white;"> -->
       <div class="wrap " style="background-color: grey" align="center">Data Pribadi</div>
       <form>
        <div class="form-group row">
          <label for="inputEmail3" class="col-sm-2 col-form-label">Nama</label>
          <div class="col-sm-10">
            <input required="submit" style="    width: 354px;" type="email" class="form-control" id="nama" placeholder="Nama">
          </div>
        </div>
        <div class="form-group row">
          <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
          <div class="col-sm-10">
            <input required type="password" class="form-control" id="inputPassword3" placeholder="Password">
          </div>
        </div>
        <fieldset class="form-group">
          <div class="row">
            <legend class="col-form-label col-sm-2 pt-0">Radios</legend>
            <div class="col-sm-10">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
                <label class="form-check-label" for="gridRadios1">
                  First radio
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
                <label class="form-check-label" for="gridRadios2">
                  Second radio
                </label>
              </div>
              <div class="form-check disabled">
                <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3" value="option3" disabled>
                <label class="form-check-label" for="gridRadios3">
                  Third disabled radio
                </label>
              </div>
            </div>
          </div>
        </fieldset>
        <div class="form-group row">
          <div class="col-sm-2">Checkbox</div>
          <div class="col-sm-10">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="gridCheck1">
              <label class="form-check-label" for="gridCheck1">
                Example checkbox
              </label>
            </div>
          </div>
        </div>
        <div class="form-group row">
          <div class="col-sm-10">
            <button type="submit" class="btn btn-primary">Sign in</button>
          </div>
        </div>
      </form>
      <!-- table -->
      <table width="750">
    <!--     <tr>
          <td>No Pendaftaran</td>
          <td><input type="text"></td>
        </tr>
        <tr> -->
          <td>Nama</td>
          <td><input type="text" name=""></td>
        </tr>
        <tr>
          <td>Tempat Tanggal Lahir</td>
          <td><input type="text" name=""></td>
          <td><input type="Date" name=""></td>
        </tr>
        <tr>
          <td>Alamat</td>
          <td><textarea cols="22" rows="3" ></textarea></td>
        </tr>
  <!--       <tr>
          <td>Agama</td>
          <td>
            <select>
              <option></option>
              <option>Islam</option>
              <option>Kristen</option>
              <option>Kotolik</option>
            </select>
          </td>
        </tr> -->
        <tr>
          <td>Jenis Kelamin</td>
          <td><input type="radio" name='jenis_kelamin' value='pria'/>L
            <input type="radio" name='jenis_kelamin' value='perempuan'/>P</td>
          </tr>
          <tr>
            <td>Status</td>
            <td><select>
              <option></option>
              <option>Menikah</option>
              <option>Belum Menikah</option>
            </select>
          </tr>
          <tr>
            <td>Kewarganegaraan</td>
            <td>
             <select>
              <option></option>
              <option>WNI</option>
              <option>WNA</option>
            </select>
          </td>
          <tr>
            <td>Pekerjaan</td>
            <td><input type="text" name=""></td>
          </tr>
          <tr>
            <td>Kelurahan</td>
            <td><input type="text" name=""></td>
          </tr>
          <tr>
            <td>Kecamatan</td>
            <td><input type="text" name=""></td>
          </tr>
          <tr>
            <td>Kota/Kabupaten</td>
            <td><input type="text" name=""></td>
          </tr>
          <tr>
            <td>Provinsi</td>
            <td><select>
              <option>Pilih Provinsi</option>
              <option value=""></option>
              <option value="Jawa Barat"></option>
            </select>
          </td>
        </tr>
        <tr>
          <td>No Telpon</td>
          <td><input type="text" name=""></td>
        </tr>
      </table>
      <table width="650">
        <tr>
          <td>Nama Sekolah</td>
          <td><input type="text" name=""></td>
        </tr>
        <tr>
          <td>Asal Sekolah</td>
          <td><input type="text" name=""></td>
        </tr>
        <tr>
          <td>Jurusan</td>
          <td>
            <select>
              <option>Pilih Jurusan</option>
              <option value="Tarbiah"></option>
            </select>
          </td>
        </tr>
        <tr>
          <td>Tahun Lulus</td>
          <td><select>
            <option></option>
            <option>2021</option>
          </select></td>
        </tr>
      </table>
      <div class="wrap" style="background-color: grey" align="center">Data Orang Tua/Wali</div>
      <table>

      </table>
      <tr>
        <td><hr><center>
          <input type="submit" name="submit" value="Proses"> 
          <a class="btn btn-danger" href="logout.php">Batal</a>
        </center>
      </td>
    </tr>
  </body>
  </html> 