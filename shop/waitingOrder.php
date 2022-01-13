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
                </svg></li>
              <li class="breadcrumb-item"><a href="#">Shop</a> <svg class="breadcrumb-arrow" width="6px" height="9px">
                  <use xlink:href="images/sprite.svg#arrow-rounded-right-6x9"></use>
                </svg></li>
              <li class="breadcrumb-item active" aria-current="page">Checkout</li>
            </ol>
          </nav>
        </div>
        <div class="page-header__title">
          <h1>Checkout</h1>
        </div>
      </div>
    </div>

    <div class="block faq">
      <div class="container">
        <div class="faq__section">
          <div class="alert alert-warning" role="alert">
            <h4 class="alert-heading">Track Order : 56897</h4>
            <p>You have successfully completed your purchase, would you like to proceed with the payment ?
              <a href="payment.php">Yes</a>
              or
              <a href="homeMember.php">Close</a>
            </p>
          </div>
        </div>

      </div>
    </div>
    <!-- site__body / end -->
    <!-- site__footer -->
    <?php include"layouts/footer.php"?>
    <!-- site__footer / end -->