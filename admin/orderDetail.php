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
          <li class="nav-item submenu">
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
                <li>
                  <a href="product.php">
                    <span class="sub-item">Products Listing</span>
                  </a>
                </li>
              </ul>
            </div>
          </li>
          <li class="nav-item active submenu">
            <a data-toggle="collapse" href="oderDetail.php">
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
          <h4 class="page-title">Order Detail</h4>
          <ul class="breadcrumbs">
            <li class="nav-home"><a href="indexAdmin.php"><i class="flaticon-home"></i></a></li>
            <li class="separator"><i class="flaticon-right-arrow"></i></li>
            <li class="nav-item"><a href="#">Order Detail</a></li>
          </ul>
        </div>

        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <div class="d-flex align-items-center">
                  <h5 class="card-title"><i class="fas fa-calendar-alt"></i> Wed, Aug 13, 2020, 4:34PM</h5>
                </div>
                <small class="text-muted">Order ID: 1</small>
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
                          <small class="text-muted">Pay method: SCB</small><br>
                          <small class="text-muted">Status: <span style="color: red;">new</span></small>
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
                          <th scope="col" style="width: 55%">Product</th>
                          <th scope="col" style="width: 15%">Unit Price</th>
                          <th scope="col" style="width: 5%">Quantity</th>
                          <th scope="col" style="width: 10%">Total</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>
                            <a href="#" class="itemside">
                              <div class="left"><img src="./img/2.jpg" alt="" width="40" height="40"></div>
                              <div class="info">GT-112 Portable wireless speaker, HIFI sound</div>
                            </a>
                          </td>
                          <td class="text-center">฿ 199</td>
                          <td class="text-center">1</td>
                          <td class="text-center">฿ 199</td>
                        </tr>
                        <tr>
                          <td colspan="4">
                            <article class="float-end">
                              <dl class="dlist mt-2">
                                <dt>Subtotal:</dt>
                                <dd>฿ 199</dd>
                              </dl>
                              <dl class="dlist">
                                <dt>Shipping cost:</dt>
                                <dd class="font-weight-bold">฿ 35</dd>
                              </dl>
                              <dl class="dlist">
                                <dt>Grand total:</dt>
                                <dd class="font-weight-bold">฿ 234</dd>
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
                      <img src="./img/pay.jpg" alt="" width="200px" height="200%" class="payment mx-5">
                    </div>
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