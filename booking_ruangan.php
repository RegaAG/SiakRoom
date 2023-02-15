<?php
    require 'function.php';
    $booking = query("SELECT * FROM booking");
?>

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

    <title>Hello, world!</title>
  </head>
  <body class="bg-dark text-light">
    <div class="container">
      <div class="text-center pt-5 pb-5">
        <h1>BOOKING RUANGAN</h1>
      </div>
      <div class="table-responsive">
        <table class="table table-dark">
          <tr>
            <th>NO</th>
            <th>Nama Lengkap</th>
            <th>NIM</th>
            <th>Ruangan</th>
            <th>Tanggal Booking</th>
            <th>Sampai Tanggal</th>
            <th>Keterangan</th>
          </tr>
          <?php $i = 1; ?>
          <?php foreach($booking as $bkg) : ?>
          <tr>
              <td><?= $i; ?></td>
              <td><?= $bkg["nama_lengkap"] ;?></td>
              <td><?= $bkg["nim"] ;?></td>
              <td><?= $bkg["ruangan"] ;?></td>
              <td><?= $bkg["tanggal_booking"] ;?></td>
              <td><?= $bkg["sampai_tanggal"] ;?></td>
              <td><?= $bkg["keterangan"] ;?></td>
          </tr>
          <?php $i++; ?>
          <?php endforeach; ?>
        </table>
      </div>
    </div>
  </body>
</html>