<font color="orange"> 
<?php echo $this->session->flashdata('hasil'); ?>
</font> 
<table border="1">
	<tr>
		<th>ID</th>
		<th>ID PELELANG</th>
		<th>FKK BARANG</th>
		<th>KOMENTAR</th>
		<th></th>
	</tr> 
	<?php 
	foreach ($dataAdmin as $komentar){
		echo "<tr>
			<td>$komentar->id_komentar</td> 
			<td>$komentar->id_pelelang</td> 
			<td>$komentar->fkk_barang</td> 
			<td>$komentar->komentar</td>
			<td>".anchor('komentar/edit/'.$komentar->id_admin, 'Edit')." 
			".anchor('komentar/delete/'.$komentar->id_admin, 'Delete')."
			</td>
			</tr>";
	}
	?>
	</table> 
	<a href="http://localhost/lelangbang/lelang_client/index.php/komentar/create">+ Tambah data </a>
