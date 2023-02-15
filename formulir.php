<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />

    <title>FORMULIR BOOKING</title>
  </head>
  <body class="bg-dark text-light">
    <div class="container">
      <div class="text-center pt-5 pb-5">
        <h1>BOOKING RUANGAN</h1>
      </div>
      <!--Formulir-->
      <form action="" method="POST" class="text-center">
        Nama Lengkap:<br />
        <input type="text" name="nama_lengkap" /><br />
        NIM:<br />
        <input type="text" name="nim" /><br />
        Tanggal Booking:<br />
        <input type="datetime-local" name="tanggal_booking" /><br />
        Sampai Tanggal:<br />
        <input type="datetime-local" name="sampai_tanggal" /><br />
        Ruangan:<br />
        <select name="ruangan">
          <option value="Lab Komputer 1">LAB KOMPUTER 1</option>
          <option value="Lab Komputer 2">LAB KOMPUTER 2</option>
          <option value="Lab Komputer 3">LAB KOMPUTER 3</option>
          <option value="AULA">AULA</option>
          <option value="Kelas 2.1">KELAS 2.1</option>
          <option value="Kelas 2.2">KELAS 2.2</option>
          <option value="Kelas 2.3">KELAS 2.3</option>
          <option value="Kelas 3.1">KELAS 3.1</option>
          <option value="Kelas 3.2">KELAS 3.2</option>
          <option value="Kelas 3.3">KELAS 3.3</option></select
        ><br />
        Keterangan:<br />
        <textarea name="keterangan" rows="5" cols="40"></textarea><br /><br />
        <input type="submit" name="simpan" value="Simpan" />
      </form>
    </div>
  </body>
</html>

<?php
require 'function.php';

if(isset($_POST['simpan'])) {
    booking_ruangan($conn, $_POST['nama_lengkap'], $_POST['nim'], $_POST['tanggal_booking'], $_POST['sampai_tanggal'],  $_POST['ruangan'], $_POST['keterangan']);
}

?>