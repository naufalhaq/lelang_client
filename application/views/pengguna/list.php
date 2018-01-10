<font color="orange"> 
<?php echo $this->session->flashdata('hasil'); ?>
</font> 
<table border="1">
	<tr>
		<th>ID</th>
		<th>NAMA LENGKAP</th>
		<th>USERNAME</th>
		<th>PASSWORD</th>
		<th>ALAMAT</th>
		<th></th>
	</tr> 
	<?php 
	foreach ($dataPengguna as $pengguna){
		echo "<tr>
			<td>$pengguna->id_pengguna</td> 
			<td>$pengguna->nama_lengkap</td> 
			<td>$pengguna->username</td> 
			<td>$pengguna->password</td>
			<td>$pengguna->alamat</td>
			<td>".anchor('admin/edit/'.$admin->id_admin, 'Edit')." 
			".anchor('admin/delete/'.$admin->id_admin, 'Delete')."
			</td>
			</tr>";
	}
	?>
	</table> 
	<a href="http://localhost/lelangbang/lelang_client/index.php/pengguna/create">+ Tambah data </a>
