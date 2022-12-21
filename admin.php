<?php
include "koneksi.php";
$query="SELECT * FROM tb_tamu";
$hasil=mysqli_query($koneksi_db,$query);
?>
<table align="center" class="table-hover">
	<thead class="">
	<tr>
		<th>#</th>
		<th>Nama</th>
		<th>Asal Sekolah</th>
		<th>Pesan-Kesan</th>
		<th>Action</th>
	</tr>
</thead>
<?php
$no=1;
while ($row=mysqli_fetch_array($hasil)){
?>
<tr>
<td><?php echo $no++; ?></td>
<td><?php echo $row['Nama']; ?></td>
<td><?php echo $row['Sekolah']; ?></td>
<td style="
word-wrap: break-word;"><?php echo $row['Pesan']; ?></td>
<td><a class="paper-btn btn-danger-outline" href="delete.php?ID=<?php echo $row['ID'];?>" onclick="return confirm('Apakah anda yakin akan menghapus data?')">Delete</a></td>
</tr>
<?php
}
?>
