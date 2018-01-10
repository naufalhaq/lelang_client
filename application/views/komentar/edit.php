<?php echo form_open('komentar/edit');?> 
<?php echo form_hidden('id_admin',$dataKomentar[0]->id);?>

<table>
	<tr><td>ID</td><td><?php echo form_input('',$dataKomentar[0]->id,"disabled");?></td></tr> 
	<tr><td>USERNAME</td><td><?php echo form_input('id_pelelang',$dataKomentar[0]->id_pelelang);?></td></tr> 
	<tr><td>PASSWORD</td><td><?php echo form_input('fkk_barang',$dataKomentar[0]->fkk_barang);?></td></tr>
	<tr><td>EMAIL</td><td><?php echo form_input('komentar',$dataKomentar[0]->komentar);?></td></tr> 
	<tr><td colspan="2">
		<?php echo form_submit('submit','Simpan');?> 
		<?php echo anchor('kontak','Kembali');?></td></tr>
</table>
<?php 
echo form_close(); 
 ?>
