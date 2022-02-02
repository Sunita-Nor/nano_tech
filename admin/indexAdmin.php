<!-- Header start-->
<?php include"layouts/head.php"?>
<!-- Header end-->

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
  background: #898989;
  border: 1px solid #898989;
}
</style>
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
  <?php include"layouts/sidebar.php"?>
  <!-- End Sidebar -->

  <!-- เนื้อหาข้างใน -->
  <div class="main-panel">
    <div class="content">
      <div class="page-inner">
        <div class="page-header">
          <h4 class="page-title">Dashboard</h4>
        </div>

        <div class="col-md-12">
          <div class="row">
            <div class="col-sm-6 col-lg-4">
              <div class="card p-3">
                <div class="d-flex align-items-center">
                  <span class="stamp stamp-md bg-info mr-3">
                    <i class="fas fa-donate"></i>
                  </span>
                  <div>
                    <h5 class="mb-1"><b><a href="#">Total Sales</a></b></h5>
                    <small class="text-muted">฿ 0</small>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-lg-4">
              <div class="card p-3">
                <div class="d-flex align-items-center">
                  <span class="stamp stamp-md bg-success mr-3">
                    <i class="fas fa-truck"></i>
                  </span>
                  <div>
                    <h5 class="mb-1"><b><a href="#">Total Orders</a></b></h5>
                    <small class="text-muted">0</small>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-lg-4">
              <div class="card p-3">
                <div class="d-flex align-items-center">
                  <span class="stamp stamp-md bg-warning mr-3">
                    <i class="fas fa-dolly"></i>
                  </span>
                  <div>
                    <h5 class="mb-1"><b><a href="#">Total Products</a></b></h5>
                    <small class="text-muted">0</small>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header">
              <div class="card-title">Multiple Line Chart</div>
            </div>
            <div class="card-body">
              <div class="chart-container">
                <canvas id="multipleLineChart"></canvas>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <h4 class="card-title">Latest orders</h4>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table id="basic-datatables" class="display table">
                  <thead>
                    <tr>
                      <th style="width: 5%">ID</th>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Total</th>
                      <th>Status</th>
                      <th>Date</th>
                      <th>Order Detail</th>
                    </tr>
                  </thead>
                  <!-- <tfoot>
                    <tr>
                      <th>Name</th>
                      <th>Position</th>
                      <th>Office</th>
                      <th>Age</th>
                      <th>Start date</th>
                      <th>Salary</th>
                    </tr>
                  </tfoot> -->
                  <tbody>
                    <tr>
                      <td class="text-center" style="width: 5%">1</td>
                      <td>Devon Lane</td>
                      <td>devon@example.com</td>
                      <td style="width: 10%">฿ 199</td>
                      <td style="width: 5%"><span class="badge rounded-pill alert-warning">Pending</span></td>
                      <td style="width: 5%">07.05.2020</td>
                      <td style="width: 15%">
                        <button class="btn_round" data-toggle="modal" data-target=".bd-example-modal-lg"
                          title="Order Detail">
                          <i class="fa fa-archive"></i>
                        </button>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>

        <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
          aria-hidden="true">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title"><i class="fas fa-calendar-alt"></i> Wed, Aug 13, 2020, 4:34PM</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>

              <div class="modal-content ">
                <div class="modal-body">
                  <div class="row">
                    <div class="col-sm-6 col-lg-4">
                      <div class="d-flex align-items-center">
                        <span class="stamp stamp-md bg-info mr-3">
                          <i class="fas fa-user"></i>
                        </span>
                        <div>
                          <h5 class="mb-1"><b><a href="#">Customer</a></b></h5>
                          <small class="text-muted">John Alexander</small><br>
                          <small class="text-muted">alex@example.com </small><br>
                          <small class="text-muted">+998 99 22123456</small>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                      <div class="d-flex align-items-center">
                        <span class="stamp stamp-md bg-success mr-3">
                          <i class="fas fa-truck"></i>
                        </span>
                        <div>
                          <h5 class="mb-1"><b><a href="#">Order info</a></b></h5>
                          <small class="text-muted">Shipping: Fargo express</small><br>
                          <small class="text-muted">Pay method: SCB</small>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                      <div class="d-flex align-items-center">
                        <span class="stamp stamp-md bg-warning mr-3">
                          <i class="fas fa-map-marker-alt"></i>
                        </span>
                        <div>
                          <h5 class="mb-1"><b><a href="#">Deliver to</a></b></h5>
                          <small class="text-muted">
                            City: Tashkent, Uzbekistan
                            Block A, House 123, Floor 2
                            Po Box 10000
                          </small>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-8">
                  <div class="card-body">
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th class="text-center" scope="col" style="width: 20%">Product</th>
                          <th class="text-center" scope="col" style="width: 30%">Unit Price</th>
                          <th class="text-center" scope="col" style="width: 20%">Quantity</th>
                          <th class="text-center" scope="col" style="width: 30%">Total</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>
                            <a href="#" class="itemside">
                              <div class="left"><img src="./img/2.jpg" alt="" width="40" height="40"></div>
                              <div class="info">GT-112 Portable wireless speaker</div>
                            </a>
                          </td>
                          <td class="text-center">฿ 199</td>
                          <td class="text-center">1</td>
                          <td class="text-center" style="width: 30%">฿ 199</td>
                        </tr>
                        <tr>
                          <td colspan="4">
                            <article class="float-end">
                              <dl class="dlist mt-2">
                                <dt>Subtotal:</dt>
                                <dd>฿ 199</dd>
                              </dl>
                              <dl class="dlist">
                                <dt>Grand total:</dt>
                                <dd class="font-weight-bold">฿ 199</dd>
                              </dl>
                              <dl class="dlist">
                                <dt>Status:</dt>
                                <dd class="font-weight-bold">
                                  <span class="badge rounded-pill alert-success">Payment done</span>
                                </dd>
                              </dl>
                            </article>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>

                <div class="col-md-4">
                  <div class="card-body">
                    <div class="box shadow-sm bg-light">
                      <h5>Payment info</h5>
                      <img src="./img/pay.jpg" alt="" width="150px" height="150%" class="payment mx-2">
                    </div>
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
});
</script>


<script>
var multipleLineChart = document.getElementById('multipleLineChart').getContext('2d')
var myMultipleLineChart = new Chart(multipleLineChart, {
  type: 'line',
  data: {
    labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
    datasets: [{
      label: "what",
      borderColor: "#59d05d",
      pointBorderColor: "#FFF",
      pointBackgroundColor: "#59d05d",
      pointBorderWidth: 2,
      pointHoverRadius: 4,
      pointHoverBorderWidth: 1,
      pointRadius: 4,
      backgroundColor: 'transparent',
      fill: true,
      borderWidth: 2,
      data: [10, 20, 55, 75, 80, 48, 59, 55, 23, 107, 60, 87]
    }, {
      label: "Sales",
      borderColor: "#f3545d",
      pointBorderColor: "#FFF",
      pointBackgroundColor: "#f3545d",
      pointBorderWidth: 2,
      pointHoverRadius: 4,
      pointHoverBorderWidth: 1,
      pointRadius: 4,
      backgroundColor: 'transparent',
      fill: true,
      borderWidth: 2,
      data: [10, 30, 58, 79, 90, 105, 117, 160, 185, 210, 185, 194]
    }]
  },
  options: {
    responsive: true,
    maintainAspectRatio: false,
    legend: {
      position: 'top',
    },
    tooltips: {
      bodySpacing: 4,
      mode: "nearest",
      intersect: 0,
      position: "nearest",
      xPadding: 10,
      yPadding: 10,
      caretPadding: 10
    },
    layout: {
      padding: {
        left: 15,
        right: 15,
        top: 15,
        bottom: 15
      }
    }
  }
});
</script>