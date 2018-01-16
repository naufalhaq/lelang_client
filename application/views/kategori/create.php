<?php $this->load->view('partial/header') ?>

<div class="container">

<?php $this->load->view('partial/nav') ?>


<?php echo form_open_multipart('kategori/create');?> 
<!-- <table>
	<tr><td>NAMA</td><td><?php echo form_input('nama_kategori');?></td></tr> 
	<tr><td>KETERANGAN</td><td><?php echo form_input('keterangan');?></td></tr> 
	<tr><td colspan="2">
		<?php echo form_submit('submit','Simpan');?> 
		<?php echo anchor('kontak','Kembali');?>
	</td></tr>
</table> -->

		<div class="form-group">
			<label>Nama Barang</label>
			<input name="nama_kategori" type="text" class="form-control">
		</div>

		<div class="form-group">
			<label>Keterangan</label>
			<input name="keterangan" type="text" class="form-control">
		</div>

		<div class="form-group">
			<input name="submit" type="submit" class="form-control">
		</div>

<?php 
echo form_close(); 
 ?>
