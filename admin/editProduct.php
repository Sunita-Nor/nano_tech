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
						<a data-toggle="collapse" href="#dashboard" class="collapsed" aria-expanded="false">
							<i class="fas fa-home"></i>
							<p>Dashboard</p>
							<span class="caret"></span>
						</a>
						<div class="collapse" id="dashboard">
							<ul class="nav nav-collapse">
								<li>
									<a href="indexAdmin.php">
										<span class="sub-item">Dashboard</span>
									</a>
								</li>
							</ul>
						</div>
					</li>
					<li class="nav-section">
						<span class="sidebar-mini-icon">
							<i class="fa fa-ellipsis-h"></i>
						</span>
						<h4 class="text-section">Components</h4>
					</li>
					<li class="nav-item active submenu">
						<a data-toggle="collapse" href="#base">
							<i class="fas fa-layer-group"></i>
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
					<!-- <li class="nav-item">
            <a data-toggle="collapse" href="#sidebarLayouts">
              <i class="fas fa-th-list"></i>
              <p>Sidebar Layouts</p>
              <span class="caret"></span>
            </a>
            <div class="collapse" id="sidebarLayouts">
              <ul class="nav nav-collapse">
                <li>
                  <a href="../sidebar-style-1.html">
                    <span class="sub-item">Sidebar Style 1</span>
                  </a>
                </li>
                <li>
                  <a href="../overlay-sidebar.html">
                    <span class="sub-item">Overlay Sidebar</span>
                  </a>
                </li>
              </ul>
            </div>
          </li> -->
				</ul>
			</div>
		</div>
	</div>
	<!-- End Sidebar -->

	<!-- เนื้อหาข้างใน -->
	<div class="main-panel" id="editProduct">
		<div class="content">
			<div class="page-inner">
				<div class="page-header">
					<h4 class="page-title">Product</h4>
					<ul class="breadcrumbs">
						<li class="nav-home"><a href="admin.php"><i class="flaticon-home"></i></a></li>
						<li class="separator"><i class="flaticon-right-arrow"></i></li>
						<li class="nav-item"><a href="#">Product</a></li>
						<li class="separator"><i class="flaticon-right-arrow"></i></li>
						<li class="nav-item"><a href="#">Product Listing</a></li>
						<li class="separator"><i class="flaticon-right-arrow"></i></li>
						<li class="nav-item"><a href="#">Edit Product</a></li>
					</ul>
				</div>

				<div class="row">
					<div class="col-md-12">
						<div class="card">
							<div class="card-header">
								<div class="d-flex align-items-center">
									<div class="card-title">Edit Product</div>
								</div>
							</div>
							<div class="modal-content my-2">
								<div class="modal-body">
									<form>
										<div class="row">
											<div class="col-sm-12">
												<div class="form-group form-group-default">
													<label style="font-size: 20px;">Name</label>
													<label class="error">{{ errors.first('pm_name') }}</label>
													<input v-validate="'required'" type="text" name="pm_name" class="form-control" id="pm_name" placeholder="fill name"
														v-model="productForm.pm_name">
												</div>
											</div>

											<div class="col-md-6">
												<div class="form-group form-group-default">
													<label>Category</label>
													<select class="form-control" id="pt_id" name="pt_id" v-model="productForm.pt_id">
														<option value="">-- Select Product Category --</option>
														<option v-for="category in productType" :value="category.pt_id">{{ category.pt_name }}
														</option>
													</select>
												</div>
											</div>

											<div class="col-md-6">
												<div class="form-group form-group-default">
													<label>Price</label>
													<input type="number" class="form-control" id="pm_price" name="pm_price"
														placeholder="Fill Price" v-model="productForm.pm_price">
												</div>
											</div>

											<div class="col-sm-12">
												<div class="form-group form-group-default">
													<label>Certification</label>
													<input type="text" class="form-control" id="pm_certification" name="pm_certification"
														placeholder="Fill Certification" v-model="productForm.pm_certification">
												</div>
											</div>

											<div class="col-sm-12">
												<div class="form-group form-group-default">
													<label>Material</label>
													<input type="text" class="form-control" id="pm_material" name="pm_material"
														placeholder="Fill Material" v-model="productForm.pm_material">
												</div>
											</div>

											<div class="col-sm-12">
												<div class="form-group form-group-default">
													<label>Detail</label>
													<textarea class="form-control" rows="3" id="pm_detail" name="pm_detail"
														placeholder="Fill Detail"
														v-model="productForm.pm_detail">{{ productForm.pm_detail }}</textarea>
												</div>
											</div>

											<div class="modal-content">
												<div class="modal-body">
													<div class="form_field_outer">
														<div class="row form_field_outer_row" v-for="color, index in productForm.productColors">
															<div class="form-group col-md-6">
																<div class="form-group form-group-default">
																	<label style="font-size: 20px;">Color</label>
																	<input type="color" class="form-control" name="pd_color[]" id="color_no_1"
																		v-model="color.pd_color">
																</div>
															</div>

															<div class="form-group col-md-4">
																<div class="form-group form-group-default">
																	<label style="font-size: 20px;">Number of products</label>
																	<input type="number" class="form-control" name="pd_number[]" id="number_no_1"
																		placeholder="Fill Number of products" v-model="color.pd_number" />
																</div>
															</div>

															<div class="form-group col-md-2 add_del_btn_outer">
																<button type="button" class="btn_round1 add_new_frm_field_btn" title="Add Item"
																	@click="addColor">
																	<i class="fas fa-plus add_icon"></i>
																</button>

																<button type="button" class="btn_round1 add_node_btn_frm_field"
																	title="Copy or clone this row" @click="copyColor(color.pd_color, color.pd_number)">
																	<i class="fas fa-copy"></i>
																</button>

																<button type="button" class="btn_round remove_node_btn_frm_field"
																	:disabled="index === 0" @click="delColor(index)">
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
														@change="imageSelect">

													<div class="drag-text my-3">
														<i class="fas fa-file-upload"></i>
														<h5 class="my-1"><b>Choose Your Image to Upload</b></h5>
													</div>

													<!-- <button class="btn btn-sm btn-primary my-2" type="button"
                            onclick="document.getElementById('image').click()">Choose Images</button> -->
													<div class="card-body d-flex flex-wrap justify-content-start" id="container"></div>
												</div>
											</div>


											<div class="image_container d-flex justify-content-center position-relative"
												v-for="img, index in images">
												<img v-if="img.url" :src="img.url">
												<img v-else :src="`http://localhost/nano_tech/admin/${img.img_name}`" :alt="img.img_name">
												<span class="position-absolute">
													<i class="fas fa-minus-circle" style="font-size: 20px;" @click="removeImg(index)"></i>
												</span>
											</div>
										</div>

										<div class="modal-footer no-bd">
											<button :disabled="errors.items.length > 0" @click="editSubmit" type="button" id="addRowButton" class="btn btn-primary">Save
												changes</button>
											<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
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
		<!-- <script src="js/uploadImage.js"></script> -->
		<!-- end script upload Image -->
	</div>
	<!-- จบ เนื้อหาข้างใน -->
</div>
<script src="js/editProduct.js"></script>
<!-- include script -->
<?php include "layouts/script.php"?>
<!-- end include script -->