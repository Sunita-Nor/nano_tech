<?php include"layouts/head.php"?>

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
                <div class="profile-pic-wrapper">
                  <div class="pic-holder">
                    <!-- uploaded pic shown here -->
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
                </div>

                <div class="my-4">
                  <h6><i class="fas fa-user" style="color: DeepSkyBlue"></i> &nbsp; My Account</h6>
                  <ul class="my-2">
                    <a href="account.php">Personal Details</a>
                    <a href="#" style="color: #87CEFA;">Address Details</a>
                    <a href="changePassword.php">Change Password</a>
                  </ul>
                </div>
                <div class="my-4">
                  <h6><i class="fas fa-clipboard-list" style="color: DeepSkyBlue"></i> &nbsp; Orders</h6>
                  <ul class="my-2">
                    <a href="yourOrder.php">Your Order</a>
                  </ul>
                </div>
              </div>
            </div>
          </div>

          <div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
            <div class="card h-100">
              <div class="card-body">
                <div class="d-flex align-items-center">
                  <h5>Address Details</h5>
                  <button class="btn btn-primary ml-auto" data-toggle="modal" data-target="#exampleModalCenter">
                    <i class="fas fa-plus" style="font-size: 10px;"></i>
                    New Address
                  </button>
                </div>
                <!-- Modal -->
                <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
                  aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title my-1" id="exampleModalCenterTitle">New Address</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <form>
                          <div class="form-group">
                            <label for="recipient-name" class="col-form-label">House No.</label>
                            <input type="text" class="form-control" id="recipient-name">
                          </div>
                          <div class="form-row">
                            <div class="form-group col-md-6">
                              <label for="">Sub-district</label>
                              <input type="text" class="form-control" id="">
                            </div>
                            <div class="form-group col-md-6">
                              <label for="">District</label>
                              <input type="text" class="form-control" id="">
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="">Province</label>
                            <input type="text" class="form-control" id="">
                          </div>
                          <div class="form-group">
                            <label for="">Postal Code</label>
                            <input type="text" class="form-control col-md-3" id="">
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Modal End-->
                <div class="spec my-3">
                  <div class="spec__section">
                    <div class="spec__row">
                      <div class="spec__name">
                        <ul class="my-3"> Full Name</ul>
                        <ul> Phone</ul>
                        <ul> Address</ul>
                      </div>
                      <div class="spec__value">
                        <ul class="my-3">Sunita Norkrueakam</ul>
                        <ul>+66 23365988</ul>
                        <ul> 100/18 หมู่.12 ต.ป่าแดด อ.เมือง จ.เชียงใหม่ 50100 </ul>
                        <ul>
                          <div class="form-button-action">
                            <button class="btn btn-info btn-sm" data-toggle="modal" data-target="#exampleModalCenter"><i
                                class="fa fa-edit"></i> Edit</button>
                            <button class="btn btn-danger btn-sm mx-2"><i class="fa fa-times"></i> Remove</button>
                          </div>
                        </ul>
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
</div>

<!-- site__body / end -->
<!-- site__footer -->
<?php include"layouts/footer.php"?>
<!-- site__footer / end -->