<?php echo form_open('bid/edit');?> 
<?php echo form_hidden('id_bid',$dataBid[0]->id);?>

<table>
	<tr><td>ID</td><td><?php echo form_input('',$dataBid[0]->id,"disabled");?></td></tr> 
	<tr><td>UP BID</td><td><?php echo form_input('up_bid',$dataBid[0]->up_bid);?></td></tr> 
	<tr><td>FK PENGGUNA</td><td><?php echo form_input('fk_pengguna',$dataBid[0]->fk_pengguna);?></td></tr>
	<tr><td>TANGGAL</td><td><?php echo form_input('tanggal',$dataBid[0]->tanggal);?></td></tr> 
	<tr><td>BARANG</td><td><?php echo form_input('barang',$dataBid[0]->barang);?></td></tr> 
	<tr><td colspan="2">
		<?php echo form_submit('submit','Simpan');?> 
		<?php echo anchor('kontak','Kembali');?></td></tr>
</table>
<?php 
echo form_close(); 
 ?>
