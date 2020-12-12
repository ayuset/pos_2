<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view('header.php') ?>
</head>

				<!-- <div class="card mb-3">
					<div class="card-header">
						<a href="<?php echo site_url('category') ?>"><i class="fas fa-arrow-left"></i> Back</a>
					</div> -->
					<div id="layoutSidenav_content">
                <main>
                 <div class="container-fluid">
                        <h1 class="mt-4">Dashboard</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                   
				<div class="card mb-4">
                            <div class="card-header">
                            <a href="<?php echo site_url('barang') ?>"><i class="fas fa-arrow-left"></i> Back</a>
                               
                            </div>
					<div class="card-body">


						<form action="<?php echo site_url('barang/add') ?>" method="post" enctype="multipart/form-data" >
							<div class="form-group">
								<label for="kode_barang">Kode Barang*</label>
								<input class="form-control <?php echo form_error('kode_barang') ? 'is-invalid':'' ?>"
								 type="text" name="kode_barang" placeholder="Kode Barang" />
								<div class="invalid-feedback">
									<?php echo form_error('kode_barang') ?>
								</div>
							</div>
							<div class="form-group">
								<label for="nama_barang">Nama Barang*</label>
								<input class="form-control <?php echo form_error('nama_barang') ? 'is-invalid':'' ?>"
								 type="text" name="nama_barang" placeholder="Nama Barang" />
								<div class="invalid-feedback">
									<?php echo form_error('nama_barang') ?>
								</div>
							</div>
							<div class="form-group">
								<label for="harga">Harga Barang*</label>
								<input class="form-control <?php echo form_error('harga') ? 'is-invalid':'' ?>"
								 type="text" name="harga" placeholder="Harga Barang" />
								<div class="invalid-feedback">
									<?php echo form_error('harga') ?>
								</div>
							</div>
							<div class="form-group">
								<label for="stock">Stock Barang*</label>
								<input class="form-control <?php echo form_error('stock') ? 'is-invalid':'' ?>"
								 type="text" name="stock" placeholder="Stock Barang" />
								<div class="invalid-feedback">
									<?php echo form_error('stock') ?>
								</div>
							</div>

							<div class="form-group">
                  				<label class="col-sm-2 control-label">Category</label>
                  				<div class="col-sm-10">
                   				<select class="form-control" name="category" required="required">
                    			<option value="">Choose..</option>
	                    			<?php foreach ($category as $key): ?>
                        		<option value="<?php echo $key->category_id ?>"><?php echo $key->category_name ?></option>
                      				<?php endforeach ?>
	                			</select>
                  			</div>
                				</div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Unit</label>

                  <div class="col-sm-10">
                    <select class="form-control" name="satuan" required="required">
                    <option value="">Choose..</option>
	                    <?php foreach ($satuan as $key): ?>
                        <option value="<?php echo $key->satuan_id ?>"><?php echo $key->satuan_name ?></option>
                      <?php endforeach ?>
	                </select>
                  </div>
                </div>

                			
							<input class="btn btn-success" type="submit" name="btn" value="Save" />
						</form>

					</div>

					<div class="card-footer small text-muted">
						* required fields
					</div>


				</div>
				<!-- /.container-fluid -->

				<!-- Sticky Footer -->
				<?php $this->load->view('footer.php') ?>

</body>
