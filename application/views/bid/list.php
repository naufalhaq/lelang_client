<?php $this->load->view('partial/header') ?>

<div class="container">

<?php $this->load->view('partial/nav') ?>

<font color="orange"> 
<?php echo $this->session->flashdata('hasil'); ?>
</font> 
<table class="table table-bordered">
<a  class="btn btn-info" href="<?= base_url('bid/create') ?>">+ Tambah data </a>
<br>
<br>
	<tr>
		<th>ID</th>
		<th>NAMA BARANG</th>
		<th>UP BID</th>
		<th>NAMA LENGKAP</th>
		<th>TANGGAL</th>
		<th>Opsi</th>
	</tr> 
	<?php 
	foreach ($dataBid as $bid){
		echo "<tr>
			<td>$bid->id_bid</td>
			<td>$bid->nama_barang</td>  
			<td>$bid->up_bid</td> 
			<td>$bid->nama_lengkap</td> 
			<td>$bid->tanggal</td>
			<td>".anchor('bid/edit/'.$bid->id_bid, 'Edit')." 
			".anchor('bid/delete/'.$bid->id_bid, 'Delete')."
			</td>
			</tr>";
	}
	?>
	</table> 
