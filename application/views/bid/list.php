<font color="orange"> 
<?php echo $this->session->flashdata('hasil'); ?>
</font> 
<table border="1">
	<tr>
		<th>ID</th>
		<th>UP BID</th>
		<th>FK PENGGUNA</th>
		<th>TANGGAL</th>
		<th>BARANG</th>
		<th></th>
	</tr> 
	<?php 
	foreach ($dataBarang as $barang){
		echo "<tr>
			<td>$barang->id_barang</td> 
			<td>$barang->up_bid</td> 
			<td>$barang->fk_pengguna</td> 
			<td>$barang->tanggal</td>
			<td>$barang->barang</td>
			<td>".anchor('barang/edit/'.$barang->id_admin, 'Edit')." 
			".anchor('barang/delete/'.$barang->id_admin, 'Delete')."
			</td>
			</tr>";
	}
	?>
	</table> 
	<a href="http://localhost/lelangbang/lelang_client/index.php/barang/create">+ Tambah data </a>
