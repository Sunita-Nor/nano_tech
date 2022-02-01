<!-- Header start-->
<?php include"layouts/head.php"?>
<!-- Header end-->

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
                <table id="basic-datatables" class="display table table-striped table-hover">
                  <!-- <thead>
                    <tr>
                      <th>Name</th>
                      <th>Position</th>
                      <th>Office</th>
                      <th>Age</th>
                      <th>Start date</th>
                      <th>Salary</th>
                    </tr>
                  </thead>
                  <tfoot>
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
                      <td>1</td>
                      <td>Devon Lane</td>
                      <td>devon@example.com</td>
                      <td>฿ 199</td>
                      <td><span class="badge rounded-pill alert-warning">Pending</span></td>
                      <td>07.05.2020</td>
                      <td style="width: 5%">
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