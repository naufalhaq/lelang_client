<?php echo form_open_multipart('bid/create');?> 
<table>
	<tr><td>ID</td><td><?php echo form_input('id_bid');?></td></tr> 
	<tr><td>UP BID</td><td><?php echo form_input('up_bid');?></td></tr> 
	<tr><td>FK PENGGUNA</td><td><?php echo form_input('fk_pengguna');?></td></tr> 
	<tr><td>TANGGAL</td><td><?php echo form_input('tanggal');?></td></tr> 
	<tr><td>BARANG</td><td><?php echo form_input('barang');?></td></tr>
	<tr><td colspan="2">
		<?php echo form_submit('submit','Simpan');?> 
		<?php echo anchor('admin','Kembali');?>
	</td></tr>
</table>

<?php 
echo form_close(); 
 ?>
