<?php $this->load->view('partial/header') ?>

<div class="container">

<?php $this->load->view('partial/nav') ?>

<?php echo form_open_multipart('barang/create');?> 

		<div class="form-group">
			<label>Nama Barang</label>
			<input  name="nama_barang" type="text" class="form-control">
		</div>

		<div class="form-group">
			<label>Fk Kategori</label>
			<input  name="fk_kategori" type="number" class="form-control">
		</div>

		<div class="form-group">
			<label>Open Bid</label>
			<input  name="open_bid" type="number" class="form-control">
		</div>

		<div class="form-group">
			<label>Deskripsi</label>
			<textarea name="deskripsi" id="" rows="7" class="form-control"></textarea>
		</div>

		<div class="form-group">
			<input type="submit" class="btn btn-primary" name="submit">
		</div>

<?php echo form_close(); ?>
</div>
