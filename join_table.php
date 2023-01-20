<!DOCTYPE html> 
<html> 
<head> 
<title>Join Tabel</title> 
</head> 
<body> 
<h4><a href="tambah.php">Form Tambah</a></h4>
<table border="1"> 
  <tr> 
   <td>Id</td> 
   <td>Nama</td> 
   <td>Kelas</td> 
   <td>Jurusan</td> 
   <td>Tahun</td> 
   <td>Nominal</td>
   <td>AKSI</td> 
  </tr> 

  <?php

  include("koneksi.php");

  $query = mysqli_query($conn, "SELECT * FROM tb_siswa 
  INNER JOIN tb_jurusan ON tb_siswa. id_jurusan = tb_jurusan. id_jurusan
  INNER JOIN tb_spp ON tb_siswa. id_spp = tb_spp. id_spp");

  $no = 1;
  foreach ($query as $row) :
    ?>
    <tr>
        <td><?= $no++; ?></td>
        <td><?= $row['nama']; ?></td>
        <td><?= $row['kelas']; ?></td>
        <td><?= $row['nama_jurusan']; ?></td>
        <td><?= $row['tahun']; ?></td>
        <td><?= $row['nominal']; ?></td>
        <td>
          <a href="edit.php?id_siswa=<?php echo $row['id_siswa']; ?>">EDIT ||</a>
          <a href="hapus.php?id_siswa=<?php echo $row['id_siswa']; ?>">HAPUS ||</a>
  </td>
  </tr>

  <?php endforeach; ?>

  </table>
  </body>
  </html>