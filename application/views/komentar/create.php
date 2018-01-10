<?php echo form_open_multipart('komentar/create');?> 
<table>
	<tr><td>ID</td><td><?php echo form_input('id_komentar');?></td></tr> 
	<tr><td>USERNAME</td><td><?php echo form_input('id_pelelang');?></td></tr> 
	<tr><td>PASSWORD</td><td><?php echo form_input('fkk_barang');?></td></tr> 
	<tr><td>EMAIL</td><td><?php echo form_input('komentar');?></td></tr> 
	<tr><td colspan="2">
		<?php echo form_submit('submit','Simpan');?> 
		<?php echo anchor('admin','Kembali');?>
	</td></tr>
</table>

<?php 
echo form_close(); 
 ?>
