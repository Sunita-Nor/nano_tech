<?php include"layouts/head.php"?>

<style>
.bg-info {
  background-color: #48ABF7 !important;
}

.hg-success {
  background-color: #31CE36 !important;
}

.stamp-md {
  min-width: 2.5rem;
  height: 2.5rem;
  line-height: 2.5rem;
  border-radius: 100px !important;
}

.stamp {
  color: #fff;
  background: #87CEFA;
  display: inline-block;
  min-width: 2rem;
  height: 2rem;
  padding: 0 0.25rem;
  line-height: 2rem;
  text-align: center;
  border-radius: 3px;
  font-weight: 600;
}

.mr-3 {
  margin-right: 1rem !important;
}
</style>
<!-- mobilemenu -->
<?php include"layouts/mobileMenu.php"?>
<!-- mobilemenu / end -->

<!-- site -->
<div class="site">
  <!-- mobile site__header -->
  <?php include"layouts/mobileNavbar.php"?>
  <!-- mobile site__header / end -->

  <!-- desktop site__header -->
  <?php include"layouts/navbar.php"?>
  <!-- desktop site__header / end -->

  <!-- site__body -->
  <div class="site__body">
    <div class="page-header">
      <div class="page-header__container container">
        <div class="page-header__breadcrumb">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.html">Home</a> <svg class="breadcrumb-arrow" width="6px"
                  height="9px">
                  <use xlink:href="images/sprite.svg#arrow-rounded-right-6x9"></use>
                </svg>
              </li>
              <li class="breadcrumb-item active" aria-current="page">Account</li>
            </ol>
          </nav>
        </div>
        <div class="page-header__title">
          <h1>Account</h1>
        </div>
      </div>
    </div>
    <div class="block">
      <div class="container">
        <div class="row gutters">
          <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
            <div class="card h-100">
              <div class="card-body">
                <!-- <div class="profile-pic-wrapper">
                  <div class="pic-holder">
                    <div class="user-avatar">
                      <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Maxwell Admin" id="profilePic"
                        class="pic">
                    </div>
                    <label for="newProfilePhoto" class="upload-file-block">
                      <div class="text-center">
                        <div class="mb-2">
                          <i class="fa fa-camera fa-2x"></i>
                        </div>
                        <div class="text-uppercase">
                          Update <br /> Profile Photo
                        </div>
                      </div>
                    </label>

                    <input class="uploadProfileInput" type="file" name="profile_pic" id="newProfilePhoto"
                      accept="image/*" style="display: none;" />

                  </div>
                  <h5 class="user-name">Sunita</h5>
                </div> -->

                <div class="my-4">
                  <h6><i class="fas fa-user" style="color: DeepSkyBlue"></i> &nbsp; My Account</h6>
                  <ul class="my-2">
                    <a href="#">Personal Details</a>
                    <a href="addressAccunt.php">Manage Address</a>
                  </ul>
                </div>
                <div class="my-4">
                  <h6><i class="fas fa-clipboard-list" style="color: DeepSkyBlue"></i> &nbsp; Orders</h6>
                  <ul class="my-2">
                    <a href="yourOrder.php" style="color: #87CEFA;">Your Order</a>
                  </ul>
                </div>
              </div>
            </div>
          </div>

          <div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
            <div class="card h-100">
              <div class="card-body">
                <h5 class="mb-3">Your Order</h5>
                <hr>
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
                  <!-- <div class="col-sm-6 col-lg-4">
                    <div class="d-flex align-items-center">
                      <span class="stamp stamp-md bg-success mr-3">
                        <i class="fas fa-truck"></i>
                      </span>
                      <div>
                        <h5 class="mb-1"><b><a href="#">Order info</a></b></h5>
                        <small class="text-muted">Shipping: Fargo express</small><br>
                        <small class="text-muted">Pay method: SCB</small><br>
                        <small class="text-muted" style="font-size: 15px;"><span
                            class="badge rounded-pill alert-warning">Pending</span></small>
                      </div>
                    </div>
                  </div> -->
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

                <div class="row">
                  <div class="col-md-8">
                    <div class="card-body">
                      <table class="table table-hover">
                        <thead>
                          <tr>
                            <th class="text-center" scope="col" style="width: 20%">Product</th>
                            <th class="text-center" scope="col" style="width: 50%">Unit Price</th>
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
                      <!-- <div class="box shadow-sm bg-light">
                        <h5>Payment info</h5>
                        <img src="./img/pay.jpg" alt="" width="150px" height="150%" class="payment mx-2">
                      </div> -->
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
</div>

<!-- site__body / end -->
<!-- site__footer -->
<?php include"layouts/footer.php"?>
<!-- site__footer / end -->