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
          <div class="faq__section-body">
            <div class="row my-0">
              <div class="faq__section-column col-12">
                <div class="typography">
                  <h4><i class="fas fa-map-marker-alt"></i> Delivery Address</h4>
                  <p>
                    <h7 style="font-family:verdana; color:#A9A9A9;">Name : </h7>
                    <label for="checkout-postcode">Sunita Norkrueakam</label>

                    <h7 style="font-family:verdana; color:#A9A9A9;">(+66) </h7>
                    <label for="checkout-postcode"> 98330 2622</label>

                    &emsp;
                    <h7 style="font-family:verdana; color:#A9A9A9;">Address : </h7>
                    <label for="checkout-street-address"> 100/18 หมู่.12 ต.ป่าแดด อ.เมือง จ.เชียงใหม่ 50100 </label>

                    &emsp;&emsp;
                    <a href="addAddress.php" style="color: #87CEFA;">Change</a>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="faq__section my-3">
          <div class="faq__section-body my-1">
            <div class="row my-0">
              <div class="faq__section-column col-12">
                <div class="typography my-0">
                  <h4 class="card-title">Billing details</h4>
                  <table class="checkout__totals">
                    <thead class="checkout__totals-header">
                      <tr>
                        <th>Product</th>
                        <th class="text-center">จำนวน</th>
                        <th>Total</th>
                      </tr>
                    </thead>
                    <tbody class="checkout__totals-products">
                      <tr>
                        <td>Electric Planer Brandix KL370090G 300 Watts</td>
                        <td class="text-center">1</td>
                        <td>฿1,398.00</td>
                      </tr>
                      <tr>
                        <td>Undefined Tool IRadix DPS3000SY 2700 watts</td>
                        <td class="text-center">1</td>
                        <td>฿849.00</td>
                      </tr>
                    </tbody>
                  </table>

                  <div class="row">
                    <div class='col-sm-12 col-lg-6 text-center'>
                      <input type="radio" name="imgbackground" id="img1" class="d-none imgbgchk" value="">
                      <label for="img1">
                        <img class="img-fluid" src="images/logos/flash.png" alt="Image 1">
                        <div class="tick_container">
                          <div class="tick"><i class="fa fa-check"></i></div>
                        </div>
                      </label>
                    </div>

                    <div class='col-sm-12 col-lg-6 text-center'>
                      <input type="radio" name="imgbackground" id="img2" class="d-none imgbgchk" value="">
                      <label for="img2">
                        <img src="images/logos/kerry.png" alt="Image 2">
                        <div class="tick_container">
                          <div class="tick"><i class="fa fa-check"></i></div>
                        </div>
                      </label>
                    </div>

                    <div class='col-sm-12 col-lg-6 text-center'>
                      <input type="radio" name="imgbackground" id="img3" class="d-none imgbgchk" value="">
                      <label for="img3">
                        <img src="images/logos/J&T.png" alt="Image 3">
                        <div class="tick_container">
                          <div class="tick"><i class="fa fa-check"></i></div>
                        </div>
                      </label>
                    </div>

                    <div class='col-sm-12 col-lg-6 text-center'>
                      <input type="radio" name="imgbackground" id="img4" class="d-none imgbgchk" value="">
                      <label for="img4">
                        <img src="images/logos/thai.png" alt="Image 4">
                        <div class="tick_container">
                          <div class="tick"><i class="fa fa-check"></i></div>
                        </div>
                      </label>
                    </div>
                  </div>

                  <table class="checkout__totals">
                    <tbody class="checkout__totals-subtotals">
                      <tr>
                        <th>Subtotal</th>
                        <td>฿2,247.00</td>
                      </tr>
                      <tr>
                        <th>Shipping</th>
                        <td>฿25.00</td>
                      </tr>
                    </tbody>
                    <tfoot class="checkout__totals-footer">
                      <tr>
                        <th>Total</th>
                        <td>฿2,272.00</td>
                      </tr>
                    </tfoot>
                  </table>
                  <button type="submit" class="btn btn-primary btn-xl col-lg-4 my-2" style="float: right;">
                    Place Order
                  </button>
                  <a href="waitingOrder.php">go</a>
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