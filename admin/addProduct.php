<!-- Header start-->
<?php include "layouts/head.php"?>
<!-- Header start-->

<style>
	.btn_round {
		width: 35px;
		height: 35px;
		display: inline-block;
		border-radius: 50%;
		text-align: center;
		line-height: 30px;
		margin-left: 10px;
		border: 1px solid #ccc;
		cursor: pointer;
	}

	.btn_round:hover {
		color: #fff;
		background: #EA4d56;
		border: 1px solid #EA4d56;
	}

	.btn_round1 {
		width: 35px;
		height: 35px;
		display: inline-block;
		border-radius: 50%;
		text-align: center;
		line-height: 30px;
		margin-left: 10px;
		border: 1px solid #ccc;
		cursor: pointer;
	}

	.btn_round1:hover {
		color: #fff;
		background: #00BFFF;
		border: 1px solid #00BFFF;
	}

	.btn_content_outer {
		display: inline-block;
		width: 85%;
	}

	.close_c_btn {
		width: 30px;
		height: 30px;
		position: absolute;
		right: 10px;
		top: 0px;
		line-height: 30px;
		border-radius: 50%;
		background: #ededed;
		border: 1px solid #ccc;
		color: #ff5c5c;
		text-align: center;
		cursor: pointer;
	}

	.add_group_btn {
		display: flex;
	}

	.add_group_btn i {
		font-size: 32px;
		display: inline-block;
		margin-right: 10px;
	}

	.add_group_btn span {
		margin-top: 8px;
	}

	.add_group_btn,
	.clone_sub_task {
		cursor: pointer;
	}

	.sub_task_append_area .custom_square {
		cursor: move;
	}

	.del_btn_d {
		display: inline-block;
		position: absolute;
		right: 20px;
		border: 2px solid #ccc;
		border-radius: 50%;
		width: 40px;
		height: 40px;
		line-height: 40px;
		text-align: center;
		font-size: 18px;
	}
</style>

<div class="wrapper">
	<div class="main-header">
		<!-- Logo Header -->
		<?php include "layouts/logo-header.php"?>
		<!-- End Logo Header -->

		<!-- Navbar Header -->
		<?php include "layouts/navbar.php"?>
		<!-- End Navbar -->
	</div>

	<!-- Sidebar -->
	<div class="sidebar sidebar-style-2">
		<div class="sidebar-wrapper scrollbar scrollbar-inner">
			<div class="sidebar-content">
				<ul class="nav nav-primary">
					<li class="nav-item">
						<a href="indexAdmin.php">
							<i class="fas fa-home"></i>
							<p>Dashboard</p>
						</a>
					</li>
					<li class="nav-section">
						<span class="sidebar-mini-icon">
							<i class="fa fa-ellipsis-h"></i>
						</span>
						<h4 class="text-section">Components</h4>
					</li>
					<li class="nav-item active submenu">
						<a data-toggle="collapse" href="#base">
							<i class="fas fa-plus-square"></i>
							<p>Product</p>
							<span class="caret"></span>
						</a>
						<div class="collapse show" id="base">
							<ul class="nav nav-collapse">
								<li>
									<a href="productType.php">
										<span class="sub-item">Product Category</span>
									</a>
								</li>
								<li class="active">
									<a href="product.php">
										<span class="sub-item">Products Listing</span>
									</a>
								</li>
							</ul>
						</div>
					</li>
					<li class="nav-item">
						<a href="order.php">
							<i class="fas fa-shopping-cart"></i>
							<p>Orders</p>
						</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<!-- End Sidebar -->

	<!-- เนื้อหาข้างใน -->
	<div class="main-panel">
		<div class="content">
			<div class="page-inner">
				<div class="page-header">
					<h4 class="page-title">Add Product</h4>
					<ul class="breadcrumbs">
						<li class="nav-home"><a href="indexAdmin.php"><i class="flaticon-home"></i></a></li>
						<li class="separator"><i class="flaticon-right-arrow"></i></li>
						<li class="nav-item"><a href="#">Add Product</a></li>
						<li class="separator"><i class="flaticon-right-arrow"></i></li>
						<li class="nav-item"><a href="#">Product List</a></li>
						<li class="separator"><i class="flaticon-right-arrow"></i></li>
						<li class="nav-item"><a href="#">Create Product</a></li>
					</ul>
				</div>

				<div class="row">
					<div class="col-md-12">
						<div class="card">
							<div class="card-header">
								<div class="d-flex align-items-center">
									<h4 class="card-title">Create product</h4>
								</div>
							</div>
							<div class="modal-content ">
								<div class="modal-body">
									<form action="" method="post" id="addForm" name="addForm">
										<p class="small">Create a new row using this form, make sure you fill them all.</p>
										<div class="row">
											<div class="col-sm-12">
												<div class="form-group form-group-default">
													<label style="font-size: 20px;">Name</label>
													<input type="text" class="form-control" id="pm_name" name="pm_name" placeholder="Fill Name">
												</div>
											</div>

											<?php 
                      require_once 'includes/database.php';
                      $select_type = $pdo->prepare("SELECT * FROM product_type");
                      $select_type->execute();
                      ?>
											<div class="col-md-6">
												<div class="form-group form-group-default">
													<label>Category</label>
													<select class="form-control" id="pt_id" name="pt_id">
														<option value="">-- Select Product Category --</option>
														<?php 
                            while($row = $select_type->fetch(PDO::FETCH_ASSOC)){
                              ?>
														<option value="<?php echo $row['pt_id']?>"><?php echo $row['pt_name']?>
														</option>
														<?php }?>
													</select>
												</div>
											</div>

											<div class="col-md-6">
												<div class="form-group form-group-default">
													<label>Price</label>
													<input type="number" class="form-control" id="pm_price" name="pm_price"
														placeholder="Fill Price">
												</div>
											</div>

											<div class="col-sm-12">
												<div class="form-group form-group-default">
													<label>Certification</label>
													<input type="text" class="form-control" id="pm_certification" name="pm_certification"
														placeholder="Fill Certification">
												</div>
											</div>

											<div class="col-sm-12">
												<div class="form-group form-group-default">
													<label>Material</label>
													<input type="text" class="form-control" id="pm_material" name="pm_material"
														placeholder="Fill Material">
												</div>
											</div>

											<div class="col-sm-12">
												<div class="form-group form-group-default">
													<label>Detail</label>
													<textarea class="form-control" rows="3" id="" name="pm_detail"
														placeholder="Fill Detail"></textarea>
												</div>
											</div>

											<div class="modal-content">
												<div class="modal-body">
													<div class="form_field_outer">
														<div class="row form_field_outer_row">

															<div class="form-group col-md-6">
																<div class="form-group form-group-default">
																	<label style="font-size: 20px;">Color</label>
																	<input type="color" class="form-control" name="pd_color[]" id="color_no_1"
																		value="#00BFFF">
																</div>
															</div>

															<div class="form-group col-md-4">
																<div class="form-group form-group-default">
																	<label style="font-size: 20px;">Number of products</label>
																	<input type="number" class="form-control" name="pd_number[]" id="number_no_1"
																		placeholder="Fill Number of products">
																</div>
															</div>

															<div class="form-group col-md-2 add_del_btn_outer">
																<button class="btn_round1 add_new_frm_field_btn" title="Add Item">
																	<i class="fas fa-plus add_icon"></i>
																</button>

																<button class="btn_round1 add_node_btn_frm_field" title="Copy or clone this row">
																	<i class="fas fa-copy"></i>
																</button>

																<button class="btn_round remove_node_btn_frm_field" disabled>
																	<i class="fas fa-trash-alt"></i>
																</button>
															</div>
														</div>
													</div>
												</div>
											</div>

											<div class="col-sm-12">
												<div class="form-group form-group-default">
													<label style="font-size: 20px;">Image Uploading</label>
													<input class="file-upload" type="file" name="image[]" id="image" multiple
														onchange="image_select()">

													<div class="drag-text my-3">
														<i class="fas fa-file-upload"></i>
														<h5 class="my-1"><b>Choose Your Image to Upload</b></h5>
													</div>

													<!-- <button class="btn btn-sm btn-primary my-2" type="button"
                            onclick="document.getElementById('image').click()">Choose Images</button> -->
													<div class="card-body d-flex flex-wrap justify-content-start" id="container"></div>
												</div>
											</div>
										</div>

										<div class="modal-footer no-bd">
											<button type="button" class="btn btn-danger">Close</button>
											<button type="submit" id="submit" class="btn btn-info">Add</button>
										</div>

									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- include footer -->
		<?php include "layouts/footer.php"?>
		<!-- end include footer -->

		<!-- script upload Image -->
		<script src="js/uploadImage.js"></script>
		<script src="js/addProduct.js"></script>
		<!-- end script upload Image -->

	</div>
	<!-- จบ เนื้อหาข้างใน -->

</div>
<!-- include script -->
<?php include "layouts/script.php"?>
<!-- end include script -->