<!-- Header start-->
<?php include "layouts/head.php" ?>
<!-- Header start-->
<div class="wrapper">
	<div class="main-header">
		<!-- Logo Header -->
		<?php include "layouts/logo-header.php" ?>
		<!-- End Logo Header -->

		<!-- Navbar Header -->
		<?php include "layouts/navbar.php" ?>
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
							<p> Add Product</p>
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
						<li class="nav-home">
							<a href="indexAdmin.php">
								<i class="flaticon-home"></i>
							</a>
						</li>
						<li class="separator">
							<i class="flaticon-right-arrow"></i>
						</li>
						<li class="nav-item">
							<a href="#">Add Product</a>
						</li>
						<li class="separator">
							<i class="flaticon-right-arrow"></i>
						</li>
						<li class="nav-item">
							<a href="#">Product Listing</a>
						</li>
					</ul>
				</div>

				<div class="row">
					<div class="col-md-12">
						<div class="card">
							<div class="card-header">
								<div class="d-flex align-items-center">
									<h4 class="card-title">Product Listing</h4>
									<button class="btn btn-round ml-auto" onclick="document.location='addProduct.php'">
										<i style="font-size: 12px;" class="fa fa-plus"></i>
										Create product
									</button>
								</div>
							</div>
							<!-- Table -->
							<div class="card-body">
								<div class="table-responsive">
									<table id="product-list" class="display table table-striped table-hover">
										<thead>
											<tr>
												<th style="width: 15%">Name</th>
												<th style="width: 11%">Category</th>
												<!-- <th style="width: 20%">Color</th> -->
												<th style="width: 5%">Price</th>
												<th style="width: 20%">Detail</th>
												<th style="width: 5%">Action</th>
											</tr>
										</thead>
										<tbody>
											<?php
											require_once 'includes/database.php';
											$stmt = $pdo->prepare("SELECT * FROM productmaster pm 
															LEFT JOIN product_type pt ON pt.pt_id = pm.pt_id
															");
															$stmt->execute();
															$result = $stmt->fetchAll();
															foreach($result as $row) {
															?>
											<tr>
												<td><?= $row['pm_name'];?></td>
												<td><?= $row['pt_name'];?></td>
												<!-- <td>
													<div class="form-group col-md-6">
														<div class="form-group form-group-default" style="background-color: <?=$row['pd_color']?>">
														</div>
													</div>
												</td> -->
												<td><?= $row['pm_price'];?></td>
												<td><?= $row['pm_detail'];?></td>
												<?php
													echo '<td>
																	<div class="form-button-action">
																		<a href="editProduct.php?pm_id='.$row["pm_id"].'" class="btn btn-link btn-primary btn-lg edit">
																			<i class="fa fa-edit"></i>
																		</a>
																		<a href="deleteProduct.php?pm_id='.$row["pm_id"].'" class="btn btn-link btn-danger delete">
																			<i class="fa fa-times"></i>
																		</a>
																	</div>
																</td>'; 
													?>
											</tr>
											<?php } ?>
										</tbody>
									</table>
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

	</div>
	<!-- จบ เนื้อหาข้างใน -->

</div>
<!-- include script -->
<?php include "layouts/script.php"?>
<!-- end include script -->
<script src="js/product.js"></script>