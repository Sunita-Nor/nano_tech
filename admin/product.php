<!-- Header start-->
<?php include"layouts/head.php"?>
<!-- Header start-->
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
            <a href="orderDetail.php">
              <i class="fas fa-shopping-cart"></i>
              <p>Order Detail</p>
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
                  <table id="add-row" class="display table table-striped table-hover">
                    <thead>
                      <tr>
                        <th style="width: 15%">Name</th>
                        <th style="width: 11%">Category</th>
                        <th style="width: 20%">image</th>
                        <th style="width: 5%">Price</th>
                        <th style="width: 20%">Detail</th>
                        <th style="width: 5%">Action</th>
                      </tr>
                    </thead>
                    <tfoot>
                      <tr>
                        <th>Name</th>
                        <th>Category</th>
                        <th>image</th>
                        <th>Price</th>
                        <th>Detail</th>
                        <th>Action</th>
                      </tr>
                    </tfoot>
                    <tbody>
                      <tr>
                        <td>Tiger Nixon</td>
                        <td>Tiger Nixon</td>
                        <td>Tiger Nixon</td>
                        <td>153</td>
                        <td>Tiger Nixon</td>

                        <td>
                          <div class="form-button-action">
                            <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg"
                              data-original-title="Edit Task">
                              <i class="fa fa-edit"></i>
                            </button>
                            <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-danger"
                              data-original-title="Remove">
                              <i class="fa fa-times"></i>
                            </button>
                          </div>
                        </td>
                      </tr>

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
    <?php include"layouts/footer.php"?>
    <!-- end include footer -->

  </div>
  <!-- จบ เนื้อหาข้างใน -->

</div>
<!-- include script -->
<?php include"layouts/script.php"?>
<!-- end include script -->
<script>
$(document).ready(function() {
  $('#basic-datatables').DataTable({});

  $('#multi-filter-select').DataTable({
    "pageLength": 5,
    initComplete: function() {
      this.api().columns().every(function() {
        var column = this;
        var select = $('<select class="form-control"><option value=""></option></select>')
          .appendTo($(column.footer()).empty())
          .on('change', function() {
            var val = $.fn.dataTable.util.escapeRegex(
              $(this).val()
            );

            column
              .search(val ? '^' + val + '$' : '', true, false)
              .draw();
          });

        column.data().unique().sort().each(function(d, j) {
          select.append('<option value="' + d + '">' + d + '</option>')
        });
      });
    }
  });

  // Add Row
  $('#add-row').DataTable({
    "pageLength": 5,
  });

  var action =
    '<td> <div class="form-button-action"> <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Task"> <i class="fa fa-edit"></i> </button> <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Remove"> <i class="fa fa-times"></i> </button> </div> </td>';

  $('#addRowButton').click(function() {
    $('#add-row').dataTable().fnAddData([
      $("#addName").val(),
      $("#addPosition").val(),
      $("#addOffice").val(),
      action
    ]);
    $('#addRowModal').modal('hide');

  });
});
</script>