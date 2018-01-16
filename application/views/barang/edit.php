<?php $this->load->view('partial/header') ?>

<div class="container">

<?php $this->load->view('partial/nav') ?>


<?php echo form_open('barang/edit');?> 
<?php echo form_hidden('id_barang',$dataBarang[0]->id_barang);?>

<!-- <table>
	<tr><td>ID</td><td><?php echo form_input('',$dataBarang[0]->id_barang,"disabled");?></td></tr> 
	<tr><td>NAMA BARANG</td><td><?php echo form_input('nama_barang',$dataBarang[0]->nama_barang);?></td></tr> 
	<tr><td>NAMA KATEGORI</td><td><?php echo form_input('nama_kategori',$dataBarang[0]->nama_kategori);?></td></tr>
	<tr><td>OPEN BID</td><td><?php echo form_input('open_bid',$dataBarang[0]->open_bid);?></td></tr> 
	<tr><td>DESKRIPSI</td><td><?php echo form_input('deskripsi',$dataBarang[0]->deskripsi);?></td></tr> 
	<tr><td colspan="2">
		<?php echo form_submit('submit','Simpan');?> 
		<?php echo anchor('kontak','Kembali');?></td></tr>
</table> -->

<div class="form-group">
			<label>Nama Barang</label>
			<input  name="nama_barang" type="text" class="form-control" value="<?= $dataBarang[0]->nama_barang ?>">
		</div>

		<div class="form-group">
			<label>Fk Kategori</label>
			<input  name="fk_kategori" type="number" class="form-control" value="<?= $dataBarang[0]->fk_kategori ?>">
		</div>

		<div class="form-group">
			<label>Open Bid</label>
			<input  name="open_bid" type="number" class="form-control" value="<?= $dataBarang[0]->open_bid?>">
		</div>

		<div class="form-group">
			<label>Deskripsi</label>
			<textarea name="deskripsi" id="" rows="7" class="form-control"><?= $dataBarang[0]->deskripsi ?></textarea>
		</div>

		<div class="form-group">
			<input type="submit" class="btn btn-primary" name="submit">
		</div>

<?php 
echo form_close(); 
?>
