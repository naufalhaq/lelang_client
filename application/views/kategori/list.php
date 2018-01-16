<?php $this->load->view('partial/header') ?>

<div class="container">

<?php $this->load->view('partial/nav') ?>


<font color="orange"> 
<?php echo $this->session->flashdata('hasil'); ?>
</font>

<table class="table">
<a class="btn btn-primary" href="<?= base_url().'kategori/create' ?>">+ Tambah data </a>
<br>
<br>
	<tr>
		<th>ID</th>
		<th>NAMA</th>
		<th>KETERANGAN</th>
		<th></th>
	</tr> 
	<?php 
	foreach ($dataKategori as $kategori){
		echo "<tr>
			<td>$kategori->id_kategori</td> 
			<td>$kategori->nama_kategori</td> 
			<td>$kategori->keterangan</td> 
			<td>".anchor('kategori/edit/'.$kategori->id_kategori, 'Edit')." 
			".anchor('kategori/delete/'.$kategori->id_kategori, 'Delete')."
			</td>
			</tr>";
	}
	?>
	</table> 

