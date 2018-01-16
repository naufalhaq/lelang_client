<?php $this->load->view('partial/header'); ?>
<!-- <font color="orange"> 
<?php echo $this->session->flashdata('hasil'); ?>
</font>  -->

<div class="container">

	<?php $this->load->view('partial/nav') ?>

      <main role="main">
        <div class="row marketing">
		  <div class="col-lg-12">
		  <a href="<?= base_url() ?>barang/create" class="btn btn-outline-primary" role="button">Tambah Barang</a>
		  <br>
		  <br>	
		  <?php foreach($dataBarang as $barang): ?>
			<div class="card">
			<div class="card-body">
				<h5 class="card-title"><?= $barang->nama_barang ?></h5>
				<h6 class="card-subtitle mb-2 text-muted">Categori : <?= $barang->nama_kategori ?></h6>
				<span class="badge badge-success">Open Bid <?= $barang->open_bid ?></span>
				<p class="card-text"><?= $barang->deskripsi ?></p>
				<a href="<?= base_url()."barang/edit/".$barang->id_barang ?>" class="card-link">Edit</a>
				<a href="<?= base_url()."barang/delete/".$barang->id_barang ?>" class="card-link">Delete</a>
			</div>
			</div>
			<br>
			<?php endforeach; ?>	
		  </div>
      </main>
