<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view('header.php') ?>
</head>

<body>

				<!-- DataTables -->
					<div id="layoutSidenav_content">
                <main>
                 <div class="container-fluid">
                        <h1 class="mt-4">Dashboard</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
				<div class="card mb-3">
					<div class="card-header">
						<a href="<?php echo site_url('satuan/add') ?>"><i class="fas fa-plus"></i> Add New</a>
					</div>
					<div class="card-body">

						<div class="table-responsive">
							<table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
								<thead>
									<tr>
										<th>Category</th>
									</tr>
								</thead>
								<tbody>
									<?php foreach ($satuan as $satuan): ?>
									<tr>
										<td width="150">
											<?php echo $satuan->satuan_name ?>
										</td>
										
										<td>
											<a href="<?php echo site_url('satuan/edit/'.$satuan->satuan_id) ?>"
											 class="btn btn-small"><i class="fas fa-edit"></i> Edit</a>
											<a onclick="deleteConfirm('<?php echo site_url('satuan/delete/'.$satuan->satuan_id) ?>')"
											 href="#!" class="btn btn-small text-danger"><i class="fas fa-trash"></i> Hapus</a>
										</td>
									</tr>
									<?php endforeach; ?>
									<script>
function deleteConfirm(url){
	$('#btn-delete').attr('href', url);
	$('#deleteModal').modal();
}
</script>

								 </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
               
<?php $this->load->view("footer.php") ?>

	

</body>

</html>
	<!-- /#wrapper --
	

</body>

</html>