<?php
/// Koneksi ke database
    $conn = mysqli_connect("localhost","root","","siak_room");


// booking ruangan
function booking_ruangan($conn, $nama_lengkap, $nim, $tanggal_booking, $sampai_tanggal, $ruangan, $keterangan) {
    global $conn;
    $query = mysqli_query($conn, "INSERT INTO booking set
    nama_lengkap = '$nama_lengkap',
    nim = '$nim',
    tanggal_booking = '$tanggal_booking',
    sampai_tanggal = '$sampai_tanggal',
    ruangan = '$ruangan',
    keterangan = '$keterangan'");   
    if (!$query) {
        die(mysqli_error($conn));
    } else {
        echo "<script>
            alert('RUANGAN BERHASIL DI BOOKING');
            document.location.href = 'index.php';
        </script>";
    }
}

/// menampilkan data booking
function query($query){
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }

    return $rows;
}
?>