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
                  <a href="admin.php">
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
                <li class="active">
                  <a href="productType.php">
                    <span class="sub-item">Product Category</span>
                  </a>
                </li>
                <li>
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
            <li class="nav-home">
              <a href="admin.php">
                <i class="flaticon-home"></i>
              </a>
            </li>
            <li class="separator">
              <i class="flaticon-right-arrow"></i>
            </li>
            <li class="nav-item">
              <a href="#">Product</a>
            </li>
            <li class="separator">
              <i class="flaticon-right-arrow"></i>
            </li>
            <li class="nav-item">
              <a href="#">Product Category</a>
            </li>
          </ul>
        </div>

        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <div class="d-flex align-items-center">
                  <h4 class="card-title">Product Category</h4>
                  <button class="btn btn-round ml-auto" data-toggle="modal" data-target="#addRowModal" id="addType">
                    <i style="font-size: 12px;" class="fa fa-plus"></i>
                    Add Category
                  </button>
                </div>
              </div>
              <div class="card-body">
                <!-- Modal -->
                <div class="modal fade" id="addRowModal" tabindex="-1" role="dialog" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header no-bd">
                        <h5 class="modal-title">
                          <span class="fw-mediumbold">Add</span>
                          <span class="fw-light">Category</span>
                        </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <p class="small">Create a new row using this form, make sure you fill them all</p>
                        <form method="POST" enctype="multipart/form-data" id="myForm" name="myForm">
                          <div class="row">
                            <div class="col-sm-12">
                              <div class="form-group form-group-default">
                                <label>Name</label>
                                <input type="text" id="pt_name" name="pt_name" class="form-control"
                                  placeholder="fill name">
                              </div>
                            </div>
                          </div>

                          <div class="modal-footer no-bd">
                            <input type="hidden" name="pt_id" id="pt_id">
                            <input type="hidden" name="operation" id="operation">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-info" id="action" name="action">Add</button>
                          </div>

                        </form>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- End Modal -->

                <!-- Table -->
                <div class="table-responsive">
                  <table id="add-row" class="display table table-striped table-hover">
                    <thead>
                      <tr>
                        <th>Name</th>
                        <th scope="col" width="5%">Action</th>
                      </tr>
                    </thead>
                    <tfoot>
                      <tr>
                        <th>Name</th>
                        <th scope="col" width="5%">Action</th>
                      </tr>
                    </tfoot>
                    <tbody>
                      <!-- <tr>
                        <td>Tiger Nixon</td>
                        <td>
                          <div class="form-button-action">
                            <button type="button" data-toggle="tooltip" class="btn btn-link btn-primary btn-lg"
                              data-original-title="Edit Task">
                              <i class="fa fa-edit"></i>
                            </button>
                            <button type="button" data-toggle="tooltip" class="btn btn-link btn-danger"
                              data-original-title="Remove">
                              <i class="fa fa-times"></i>
                            </button>
                          </div>
                        </td>
                      </tr> -->
                    </tbody>
                  </table>
                </div>
                <!--End Table -->
              </div>
            </div>
          </div>
        </div>


      </div>
    </div>
  </div>

  <script src="js/contact.js"></script>

  <!-- include footer -->
  <?php include"layouts/footer.php"?>
  <!-- end include footer -->

</div>
<!-- จบ เนื้อหาข้างใน -->
</div>
<!-- include script -->
<?php include"layouts/script.php"?>
<!-- end include script -->