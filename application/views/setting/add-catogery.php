<style>
.switch {
  position: relative;
  display: inline-block;
  width: 60px;
  height: 34px;
}

.switch input { 
  opacity: 0;
  width: 0;
  height: 0;
}

.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #ccc;
  -webkit-transition: .4s;
  transition: .4s;
}

.slider:before {
  position: absolute;
  content: "";
  height: 26px;
  width: 26px;
  left: 4px;
  bottom: 4px;
  background-color: white;
  -webkit-transition: .4s;
  transition: .4s;
}

input:checked + .slider {
  background-color: #2196F3;
}

input:focus + .slider {
  box-shadow: 0 0 1px #2196F3;
}

input:checked + .slider:before {
  -webkit-transform: translateX(26px);
  -ms-transform: translateX(26px);
  transform: translateX(26px);
}

/* Rounded sliders */
.slider.round {
  border-radius: 34px;
}

.slider.round:before {
  border-radius: 50%;
}

</style>



<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1>Add Catogery</h1>
				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="<?php echo base_url(); ?>Dashboard">Home</a></li>
						<li class="breadcrumb-item active">Add Catogery</li>
					</ol>
				</div>
			</div>
		</div><!-- /.container-fluid -->
	</section>

	<!-- Main content -->
	<section class="content">
		<div class="container-fluid">
			<div class="row">

                <div class="col-md-3"></div>

				<!-- left column -->
				<div class="col-md-6">
					<!-- general form elements -->
					<div class="card card-primary">
						<div class="card-header">
							<h3 class="card-title">Add Catogery</h3>
						</div>
						<!-- /.card-header -->
						<!-- form start -->
						<?php echo form_open_multipart('Setting/Insert_Catogery');?>
						<form method="" action="">
							<div class="card-body">
								<div id="successMessage"><?php echo $this->session->flashdata('success'); ?></div>
									<div class="form-group">
										<label>Catogery Name</label>
										<input type="text" class="form-control" placeholder="Catogery" name="cat"
											value="<?php echo set_value('cat'); ?>">
										<span class="text-danger"
											style="font-size:14px;"><?php echo form_error('cat'); ?></span>
									</div>
									<div class="form-group">
										<label>Catogery Order</label>
										<input type="number" class="form-control" placeholder="Category order" name="cat_order"
											value="<?php echo set_value('cat_order'); ?>">
										<span class="text-danger"
											style="font-size:14px;"><?php echo form_error('cat_order'); ?></span>
									</div>
									<div class="form-group">
										<label class="switch">
											<input type="checkbox" checked>
											<span class="slider round"></span>
										</label>
									</div>
							</div>
							<!-- /.card-body -->
							<div class="card-footer">
								<button type="submit" class="btn btn-primary">Submit</button>
							</div>
						</form>
					</div>
					<!-- /.card -->
				</div>

                <div class="col-md-3"></div>
			</div>
			
			<div style="margin-top:20px; padding:20px;">
				<table class="table table-hover">
					<thead class="thead-dark text-center">
						<th>#</th>
						<th>Catogery</th>
						<th>Catogery Order</th>
						<th>Action</th>
					</thead>

					<?php
					$i = 1;
						foreach ($catogery as $cat) {
							?>
							<tr class="text-center" id="row<?php echo $cat->id; ?>">
								<td><?php echo $i; ?></td>
								<td><?php echo $cat->catogery; ?></td>
								<td><?php echo $cat->cat_order; ?></td>
								<td>
									<button id="<?php echo $cat->id; ?>" class="btn btn-flat btn-sm btn-danger delete_catogery"><i class="fas fa-trash-alt"></i></button>
								</td>
							</tr>
							<?php
							$i++;
						}
					?>
				</table>
			</div>
		</div>
	</section>
	<!-- /.content -->
</div>
<!-- /.content-wrapper -->

