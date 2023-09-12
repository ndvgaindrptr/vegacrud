<?php include('config.php');?>
<html>
<head><title>Data Karyawan</title>
</head>
<body>
    <center>
<header><h3 class="judul">Daftar Karyawan</h3></header>
<nav><a href="v_form.php"><button class="up"> Tambah Baru</button></a></nav>
       
<br>
<table class="table" border="1" cellpadding= "10">
<thead>
<tr class="isi">
<th>ID</th>
<th>NIS</th>
<th>Nama</th>
<th>Jenis Kelamin</th>
<th>No Telepon</th>
<th>Alamat</th>
<th>Berat Badan</th>
<th>Tinggi Badan</th>
<th>Tindakan</th>
</tr>
</thead>
</center>
<tbody>
  
<?php
$sql = "SELECT * FROM t_siswa";
$query = mysqli_query($db, $sql);
while($siswa = mysqli_fetch_array($query)){
echo "<tr>";
echo "<td>".$siswa['id']."</td>";
echo "<td>".$siswa['nis']."</td>";
echo "<td>".$siswa['nama']."</td>";
echo "<td>".$siswa['jenis_kelamin']."</td>";
echo "<td>".$siswa['no_telp']."</td>"; 
echo "<td>".$siswa['alamat']."</td>";
echo "<td>".$siswa['berat_badan']."</td>";
echo "<td>".$siswa['tinggi_badan']."</td>";
echo "<td>";
echo "<a href= 'form_edit.php?id=".$siswa['id']."'>Edit</a> |";
echo "<a href= 'hapus.php?id=".$siswa['id']."'>Hapus</a>";
echo "</td>";
echo "</tr>";
}
?>
</tbody>
</table>
<p>Total:
<?php echo mysqli_num_rows($query) ?>
</p>
</body>
</html>