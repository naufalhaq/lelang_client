<?php $this->load->view('partial/header') ?>

<div class="container">

<?php $this->load->view('partial/nav') ?>


<?php echo form_open('kategori/edit');?> 
<?php echo form_hidden('id_kategori',$dataKategori[0]->id_kategori);?>

<!-- <table>
	<tr><td>ID</td><td><?php echo form_input('',$dataKategori[0]->id,"disabled");?></td></tr> 
	<tr><td>NAMA</td><td><?php echo form_input('nama_kategori',$dataKategori[0]->nama_kategori);?></td></tr> 
	<tr><td>KETERANGAN</td><td><?php echo form_input('keterangan',$dataKategori[0]->deskripsi);?></td></tr> 
	<tr><td colspan="2">
		<?php echo form_submit('submit','Simpan');?> 
		<?php echo anchor('kontak','Kembali');?></td></tr>
</table> -->

		<div class="form-group">
			<label>Nama Kategori</label>
			<input name="nama_kategori" type="text" class="form-control" value="<?= $dataKategori[0]->nama_kategori ?>">
		</div>

		<div class="form-group">
			<label>Keterangan</label>
			<input name="keterangan" type="text" class="form-control" value="<?= $dataKategori[0]->keterangan ?>">
		</div>

		<div class="form-group">
			<input name="submit" type="submit" class="form-control">
		</div>

<?php 
echo form_close(); 
 ?>
