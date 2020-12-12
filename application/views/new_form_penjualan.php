<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view('header.php') ?>
</head>

<div id="layoutSidenav_content">
                <main>
                 <div class="container-fluid">
                        <h1 class="mt-4">Dashboard</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                   
				<div class="card mb-4">
                            <div class="card-header">
                            <a href="<?php echo site_url('category') ?>"><i class="fas fa-arrow-left"></i> Back</a>
                               
                            </div>
				<hr>
				<div class="row">
					<div class="col">
						<div class="card shadow">
							<div class="card-header"><strong>Isi Form Dibawah Ini!</strong></div>
							<div class="card-body">
								<form action="<?= base_url('penjualan/proses_tambah') ?>" id="form-tambah" method="POST">
									<h5>Data Kasir</h5>
									<hr>
									<div class="form-row">
										<div class="form-group col-2">
											<label>No. Penjualan</label>
											<input type="text" name="no_penjualan" value="PJ<?= time() ?>" readonly class="form-control">
										</div>
										<div class="form-group col-3">
											<label>Kode Kasir</label>
											<input type="text" name="kode_kasir" value="<?= $this->session->login['kode'] ?>" readonly class="form-control">
										</div>
										<div class="form-group col-3">
											<label>Nama Kasir</label>
											<input type="text" name="nama_kasir" value="<?= $this->session->login['nama'] ?>" readonly class="form-control">
										</div>
										<div class="form-group col-2">
											<label>Tanggal Penjualan</label>
											<input type="text" name="tgl_penjualan" value="<?= date('d/m/Y') ?>" readonly class="form-control">
										</div>
										<div class="form-group col-2">
											<label>Jam</label>
											<input type="text" name="jam_penjualan" value="<?= date('H:i:s') ?>" readonly class="form-control">
										</div>
									</div>
									<h5>Data Barang</h5>
									<hr>
									<div class="form-row">
										<div class="form-group col-3">
											<label for="nama_barang">Nama Barang</label>
											<select name="nama_barang" id="nama_barang" class="form-control selectkodebarang">

												<option value="">Pilih Barang</option>
												<?php foreach ($all_barang as $barang): ?>
													<option value="<?= $barang->nama_barang ?>"><?= $barang->nama_barang ?></option>
												<?php endforeach ?>
											</select>
										</div>
										<div class="form-group col-2">
											<label>Kode Barang</label>
											<input type="text" name="kode_barang" value="" readonly class="form-control kode_barang">
										</div>
										<div class="form-group col-2">
											<label>Harga Barang</label>
											<input type="text" name="harga_barang" value="" readonly class="form-control">
										</div>
										<div class="form-group col-2">
											<label>Jumlah</label>
											<input type="number" name="jumlah" value="" class="form-control" readonly min='1'>
										</div>
										<div class="form-group col-2">
											<label>Sub Total</label>
											<input type="number" name="sub_total" value="" class="form-control" readonly>
										</div>
										<div class="form-group col-1">
											<label for="">&nbsp;</label>
											<button disabled type="button" class="btn btn-primary btn-block" id="tambah"><i class="fa fa-plus"></i></button>
										</div>
										<input type="hidden" name="satuan" value="">
									</div>
									<script>
										$(function(){
				$('.selectkodebarang').change(function(){
    alert($(this).data('nama_barang'));
});

			});


									</script>