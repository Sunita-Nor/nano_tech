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
                    <a href="#" style="color: #87CEFA;">Personal Details</a>
                    <a href="addressAccunt.php">Manage Address</a>
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
                  <h5>Personal Details</h5>
                  <!-- <button class="btn btn2 ml-auto"><i class="far fa-trash-alt"></i> &nbsp;Remove</button> |
                  <button class="btn btn1"><i class="far fa-edit"></i> &nbsp;Edit</button> -->
                </div>
                <hr>
                <div>
                  <div class="d-flex align-items-center">
                    <dl class="row">
                      <dt class="col-sm-3 font-weight-light">Username :</dt>
                      <dd class="col-sm-9">A

                      </dd>

                      <dt class="col-sm-3 font-weight-light">Full Name:</dt>
                      <dd class="col-sm-9">A B</dd>

                      <dt class="col-sm-3 font-weight-light">Email:</dt>
                      <dd class="col-sm-9">
                        <p>asd@aasas.com</p>
                      </dd>
                    </dl>
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