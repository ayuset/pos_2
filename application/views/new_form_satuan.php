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
                            <a href="<?php echo site_url('satuan') ?>"><i class="fas fa-arrow-left"></i> Back</a>
                               
                            </div>
					<div class="card-body">


						<form action="<?php echo site_url('satuan/add') ?>" method="post" enctype="multipart/form-data" >
							<div class="form-group">
								<label for="satuan_name">Unit Name*</label>
								<input class="form-control <?php echo form_error('satuan_name') ? 'is-invalid':'' ?>"
								 type="text" name="satuan_name" placeholder="Product name" />
								<div class="invalid-feedback">
									<?php echo form_error('satuan_name') ?>
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
