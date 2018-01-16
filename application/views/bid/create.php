<?php $this->load->view('partial/header') ?>

<div class="container">

<?php $this->load->view('partial/nav') ?>

<?php echo form_open_multipart('bid/create');?> 

		<div class="form-group">
			<label>Nama Barang</label>
			<input  name="nama_barang" type="text" class="form-control">
		</div>

		<div class="form-group">
			<label>Up Bid</label>
			<input  name="up_bid" type="number" class="form-control">
		</div>

		<div class="form-group">
			<label>Nama Lengkap</label>
			<input  name="fk_pengguna" type="number" class="form-control">
		</div>

		<div class="form-group">
			<label>Tanggal</label>
			<input  name="tanggal" type="date" class="form-control">
		</div>

		<div class="form-group">
			<label>Nama Lengkap</label>
			<input  name="fk_barang" type="number" class="form-control">
		</div>

		<div class="form-group">
			<input type="submit" class="btn btn-primary" name="submit">
		</div>

<?php 
echo form_close(); 
?>
