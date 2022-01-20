<!-- Header start-->
<?php include"layouts/head.php"?>
<!-- Header start-->

<script>

</script>

<div class="wrapper">
  <div class="main-header">
    <!-- Logo Header -->
    <?php include"layouts/logo-header.php"?>
    <!-- End Logo Header -->

    <!-- Navbar Header -->
    <?php include"layouts/navbar.php"?>
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
                    <span class="sub-item">Dashboard 1</span>
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
  <div class="main-panel">
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
            <li class="nav-item"><a href="#">Add Product</a></li>
          </ul>
        </div>

        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <div class="d-flex align-items-center">
                  <h4 class="card-title">Add Product</h4>
                </div>
              </div>
              <div class="modal-content ">
                <div class="modal-body">
                  <form action="" method="post" id="addForm" name="addForm">
                    <label for="color" id="color_error"></label>
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
                      <div class="col-sm-12">
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

                      <div class="col-md-6 pr-0">
                        <div class="form-group form-group-default">
                          <label>Price</label>
                          <input type="number" class="form-control" id="pm_price" name="pm_price"
                            placeholder="Fill Price">
                        </div>
                      </div>

                      <div class="col-md-6">
                        <div class="form-group form-group-default">
                          <label>Certification</label>
                          <input type="text" class="form-control" id="pm_certification" name="pm_certification"
                            placeholder="Fill Certification">
                        </div>
                      </div>

                      <div class="col-md-6 pr-0">
                        <div class="form-group form-group-default">
                          <label>Material</label>
                          <input type="text" class="form-control" id="" name="pm_material" placeholder="Fill Material">
                        </div>
                      </div>

                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="mx-1">Color</label>
                          <div class="row gutters-xs">

                            <div class="col-auto">
                              <label class="colorinput">
                                <input type="checkbox" value="white" class="form-control colorinput-input"
                                  name="pd_color[]">
                                <span class="colorinput-color1 bg-white"></span>
                              </label>
                            </div>

                            <div class="col-auto">
                              <label class="colorinput">
                                <input type="checkbox" value="gainsboro" class="form-control colorinput-input"
                                  name="pd_color[]">
                                <span class="colorinput-color1 bg-gainsboro"></span>
                              </label>
                            </div>

                            <div class="col-auto">
                              <label class="colorinput">
                                <input type="checkbox" value="dark" class="form-control colorinput-input"
                                  name="pd_color[]">
                                <span class="colorinput-color bg-dark"></span>
                              </label>
                            </div>

                            <div class="col-auto">
                              <label class="colorinput">
                                <input type="checkbox" value="danger" class="form-control colorinput-input"
                                  name="pd_color[]">
                                <span class="colorinput-color bg-danger"></span>
                              </label>
                            </div>

                            <div class="col-auto">
                              <label class="colorinput">
                                <input type="checkbox" value="orange" class="form-control colorinput-input"
                                  name="pd_color[]">
                                <span class="colorinput-color bg-orange"></span>
                              </label>
                            </div>

                            <div class="col-auto">
                              <label class="colorinput">
                                <input type="checkbox" value="paleGoldenrod" class="form-control colorinput-input"
                                  name="pd_color[]">
                                <span class="colorinput-color bg-paleGoldenrod"></span>
                              </label>
                            </div>

                            <div class="col-auto">
                              <label class="colorinput">
                                <input type="checkbox" value="green" class="form-control colorinput-input"
                                  name="pd_color[]">
                                <span class="colorinput-color bg-green"></span>
                              </label>
                            </div>

                            <div class="col-auto">
                              <label class="colorinput">
                                <input type="checkbox" value="deepSkyBlue" class="form-control colorinput-input"
                                  name="pd_color[]">
                                <span class="colorinput-color bg-deepSkyBlue"></span>
                              </label>
                            </div>

                            <div class="col-auto">
                              <label class="colorinput">
                                <input type="checkbox" value="blue" class="form-control colorinput-input"
                                  name="pd_color[]">
                                <span class="colorinput-color bg-blue"></span>
                              </label>
                            </div>

                            <div class="col-auto">
                              <label class="colorinput">
                                <input type="checkbox" value="lightPink" class="form-control colorinput-input"
                                  name="pd_color[]">
                                <span class="colorinput-color bg-lightPink"></span>
                              </label>
                            </div>

                            <div class="col-auto">
                              <label class="colorinput">
                                <input type="checkbox" value="hotPink" class="form-control colorinput-input"
                                  name="pd_color[]">
                                <span class="colorinput-color bg-hotPink"></span>
                              </label>
                            </div>
                            <div class="mx-2" id="error"></div>
                          </div>
                        </div>
                      </div>

                      <div class="col-sm-12">
                        <div class="form-group form-group-default">
                          <label>Detail</label>
                          <textarea class="form-control" rows="3" id="" name="pm_detail"
                            placeholder="Fill Detail"></textarea>
                        </div>
                      </div>

                      <div class="col-sm-12">
                        <div class="form-group form-group-default">
                          <label style="font-size: 20px;">Number of products</label>
                          <input type="text" class="form-control" id="" placeholder="Fill Number of products">
                        </div>
                      </div>

                      <div class="col-sm-12 ">
                        <div class="form-group form-group-default">
                          <label style="font-size: 20px;">Image Uploading</label>
                          <input class="file-upload" type="file" name="Image" id="image" multiple=""
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
  </div>
  <!-- include footer -->
  <?php include"layouts/footer.php"?>
  <!-- end include footer -->

  <!-- script upload Image -->
  <script src="js/uploadImage.js"></script>
  <script src="js/addProduct.js"></script>
  <!-- end script upload Image -->


</div>
<!-- จบ เนื้อหาข้างใน -->

</div>
<!-- include script -->
<?php include"layouts/script.php"?>
<!-- end include script -->